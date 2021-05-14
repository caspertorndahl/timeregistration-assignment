import { Injectable } from '@angular/core';
import {Observable} from "rxjs";
import {IEmployee} from "../interface/i-employee";
import {HttpClient} from "@angular/common/http";
import {environment} from "../../environments/environment";

@Injectable({
  providedIn: 'root'
})
export class EmployeeService {

  constructor(private httpClient: HttpClient) { }

  getEmployeeList(): Observable<IEmployee[]>{
    return this.httpClient.get<IEmployee[]>(environment.api_url + '/employee');
  }
}
