import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { TimeRegistrationListComponent } from './time-registration-list/time-registration-list.component';
import {RouterModule} from "@angular/router";



@NgModule({
  declarations: [
    TimeRegistrationListComponent
  ],
  imports: [
    CommonModule,
    RouterModule
  ]
})
export class TimeRegistrationModule { }
