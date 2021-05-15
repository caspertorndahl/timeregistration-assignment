import { Component, OnInit } from '@angular/core';
import {ActivatedRoute} from "@angular/router";
import {TimeRegistrationService} from "../../service/time-registration.service";
import {ITimeRegistration} from "../../interface/i-time-registration";
import {IWorkWeek} from "../../interface/i-work-week";
import {IEmployee} from "../../interface/i-employee";
import {EmployeeService} from "../../service/employee.service";

@Component({
  selector: 'app-time-registration-list',
  templateUrl: './time-registration-list.component.html',
  styleUrls: ['./time-registration-list.component.scss']
})
export class TimeRegistrationListComponent implements OnInit {
  employeeId: number = -1;
  // @ts-ignore
  employee: IEmployee;
  timeRegistrationList: ITimeRegistration[] = [];
  workWeekList: IWorkWeek[] = [];
  hoursCalculated: boolean = false;

  constructor(private route: ActivatedRoute,
              private employeeService: EmployeeService,
              private timeRegistrationService: TimeRegistrationService) { }

  ngOnInit(): void {
    this.employeeId = this.route.snapshot.params['employeeId'];

    this.employeeService.getEmployee(this.employeeId).subscribe(employee => {
      this.employee = employee;

      // Cannot calculate work hours difference without an employee
      this.loadTimeRegistrationList();
    });
  }

  /**
   * Loop through time registrations and group these into weeks. For each week
   * calculate hours worked and the difference to the expected working hours
   */
  loadTimeRegistrationList(){
    this.timeRegistrationService.getTimeRegistrationList(this.employeeId)
      .subscribe(timeRegistrationList => {
        // Store original registrations, just in case
        this.timeRegistrationList = timeRegistrationList;
        this.hoursCalculated = false;

        // Calculate hours
        this.workWeekList = []; // Reset list
        timeRegistrationList.forEach(timeRegistration => {
          let from = new Date(timeRegistration.start);
          let to = new Date(timeRegistration.end);
          let weekNumber = this.getWeek(from);

          // Find work week to update with working hours
          let workWeek = this.workWeekList.find(element => element.week_number == weekNumber);
          if(!workWeek){
            // As no work week exists, create one
            workWeek = new class implements IWorkWeek {
              time_registration_list: ITimeRegistration[] = [];
              week_number: number = weekNumber;
              hours: number = 0;
              minutes: number = 0;
              difference_hours: number = 0;
              difference_minutes: number = 0;
            }
            this.workWeekList.push(workWeek);
          }

          // Calculate work hours
          let time = new Date(to.getTime() - from.getTime());
          workWeek.hours += time.getHours() - 1;
          workWeek.minutes += time.getMinutes();
          if(workWeek.minutes >= 60){
            workWeek.hours++;
            workWeek.minutes -= 60;
          }

          // Calculate diff
          workWeek.difference_hours = workWeek.hours - this.employee.work_hours_per_week;
          workWeek.difference_minutes = (60 - workWeek.minutes) % 60;
          if(workWeek.minutes > 0 && workWeek.difference_hours < 0){
            workWeek.difference_hours++;
            workWeek.difference_minutes = (60 - workWeek.minutes) % 60;
          }

          // Store registration together with the week
          workWeek.time_registration_list.push(timeRegistration);
          if(workWeek.week_number == 2){
            console.log('work hour', workWeek.hours);
            console.log('work min', workWeek.minutes);
            console.log('diff hour', workWeek.difference_hours);
            console.log('diff min', workWeek.difference_minutes);
          }
        });
        // Sort according to weeks
        this.workWeekList.sort((w1, w2) => w1.week_number - w2.week_number);

        this.hoursCalculated = true;
      });
  }

  getWeek(date: Date){
    // This script is released to the public domain and may be used, modified and
    // distributed without restrictions. Attribution not necessary but appreciated.
    // Source: https://weeknumber.com/how-to/javascript

      var tempDate = new Date(date.getTime());
      tempDate.setHours(0, 0, 0, 0);

      // Thursday in current week decides the year.
      tempDate.setDate(tempDate.getDate() + 3 - (tempDate.getDay() + 6) % 7);

      // January 4 is always in week 1.
      var week1 = new Date(tempDate.getFullYear(), 0, 4);

      // Adjust to Thursday in week 1 and count number of weeks from date to week1.
      return 1 + Math.round(((tempDate.getTime() - week1.getTime()) / 86400000
        - 3 + (week1.getDay() + 6) % 7) / 7);
  }
}
