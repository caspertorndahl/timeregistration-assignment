import {ITimeRegistration} from "./i-time-registration";

export interface IWorkWeek {
  week_number: number,
  hours: number,
  minutes: number,
  difference_hours: number,
  difference_minutes: number,
  time_registration_list: ITimeRegistration[]
}
