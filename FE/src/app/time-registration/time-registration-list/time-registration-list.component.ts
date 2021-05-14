import { Component, OnInit } from '@angular/core';
import {ActivatedRoute, Router} from "@angular/router";
import {TimeRegistrationService} from "../../service/time-registration.service";
import {ITimeRegistration} from "../../interface/i-time-registration";

@Component({
  selector: 'app-time-registration-list',
  templateUrl: './time-registration-list.component.html',
  styleUrls: ['./time-registration-list.component.scss']
})
export class TimeRegistrationListComponent implements OnInit {
  employeeId: number = -1;
  timeRegistrationList: ITimeRegistration[] = [];

  constructor(private route: ActivatedRoute,
              private timeRegistrationService: TimeRegistrationService) { }

  ngOnInit(): void {
    this.employeeId = this.route.snapshot.params['employeeId'];

    this.loadTimeRegistrationList();
  }

  loadTimeRegistrationList(){
    this.timeRegistrationService.getTimeRegistrationList(this.employeeId)
      .subscribe(timeRegistrationList => {
        timeRegistrationList.forEach(timeRegistration => {
          timeRegistration.workHours = this.calculateWorkhours(new Date(timeRegistration.start), new Date(timeRegistration.end));
        });
        this.timeRegistrationList = timeRegistrationList;
      });
  }

  calculateWorkhours(from: Date, to: Date){
    let time = new Date(to.getTime() - from.getTime());

    let hours = time.getHours() - 1;
    let minutes = time.getMinutes();

    return hours + 'h ' + minutes + 'm';
  }
}
