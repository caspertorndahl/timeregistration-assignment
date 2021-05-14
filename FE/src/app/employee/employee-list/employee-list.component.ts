import { Component, OnInit } from '@angular/core';
import {IEmployee} from "../../interface/i-employee";
import {EmployeeService} from "../../service/employee.service";
import {Router} from "@angular/router";

@Component({
  selector: 'app-employee-list',
  templateUrl: './employee-list.component.html',
  styleUrls: ['./employee-list.component.scss']
})
export class EmployeeListComponent implements OnInit {
  employeeList: IEmployee[] = [];

  constructor(private employeeService: EmployeeService,
              private router: Router) { }

  ngOnInit(): void {
    this.employeeService.getEmployeeList()
      .subscribe(employeeList => {
        this.employeeList = employeeList;
      });
  }

  navigateToTimeRegistrationList(employeeId: number){
    this.router.navigateByUrl('employee/' + employeeId + '/timeregistration');
  }
}
