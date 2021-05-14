import { Injectable } from '@angular/core';
import {HttpClient} from "@angular/common/http";
import {Observable} from "rxjs";
import {ITimeRegistration} from "../interface/i-time-registration";
import {environment} from "../../environments/environment";

@Injectable({
  providedIn: 'root'
})
export class TimeRegistrationService {

  constructor(private httpClient: HttpClient) { }

  getTimeRegistrationList(employeeId: number): Observable<ITimeRegistration[]>{
    return this.httpClient.get<ITimeRegistration[]>(environment.api_url + '/employee/' + employeeId + '/timeregistration');
  }
}
