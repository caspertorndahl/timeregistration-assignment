import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import {EmployeeListComponent} from "./employee/employee-list/employee-list.component";
import {TimeRegistrationListComponent} from "./time-registration/time-registration-list/time-registration-list.component";

const routes: Routes = [
  {path: 'employee/:employeeId/timeregistration', component: TimeRegistrationListComponent, pathMatch: 'full'},
  {path: 'employee', component: EmployeeListComponent, pathMatch: 'full'},
  {path: '', redirectTo: 'employee', pathMatch: 'full'},
  {path: '**', redirectTo: 'employee', pathMatch: 'full'},
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
