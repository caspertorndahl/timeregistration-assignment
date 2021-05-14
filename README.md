## Project

This is a simple solution to the assignment posed by the project [application-assignment](https://github.com/caspertorndahl/application-assignment).

It is more or less a view-only solution without full CRUD implementation.

## Laravel / BE changes
- (+) API/database/migrations/2021_05_14_100232_employee.php
- (+) API/database/migrations/2021_05_14_101517_time_registration.php
- (+) API/app/Models/EmployeeModel.php
- (+) API/app/Models/TimeRegistrationModel.php
- (+) API/database/seeders/EmployeeSeeder.php
- (+) API/database/seeders/TimeRegistrationSeeder.php
- (U) API/database/seeders/DatabaseSeeder.php
- (+) API/app/Http/Controllers/EmployeeController.php
- (+) API/app/Http/Controllers/TimeRegistrationController.php
- (U) API/routes/api.php
- (U) API/app/Providers/RouteServiceProvider.php
- (+) API/app/Http/Requests/EmployeeIndexRequest.php
- (+) API/app/Http/Requests/TimeRegistrationIndexRequest.php

## Angular / FE changes
- (U) FE/src/styles.scss
- (U) FE/src/index.html
- (U) FE/src/environments/environments.ts
- (U) FE/src/app/app.component.html
- (U) FE/src/app/app.module.ts  
- (U) FE/src/app/app-routing.module.ts  
- (+) FE/src/app/employee/employee.module.ts  
- (+) FE/src/app/employee/employee/employee-list/employee-list.component.html  
- (+) FE/src/app/employee/employee/employee-list/employee-list.component.scss  
- (+) FE/src/app/employee/employee/employee-list/employee-list.component.ts  
- (+) FE/src/app/interface/i-employee.ts  
- (+) FE/src/app/interface/i-time-registration.ts  
- (+) FE/src/app/navigation-bar/navigation-bar.component.html
- (+) FE/src/app/navigation-bar/navigation-bar.component.scss
- (+) FE/src/app/navigation-bar/navigation-bar.component.ts
- (+) FE/src/app/service/employee.service.ts
- (+) FE/src/app/service/time-registration.service.ts
- (+) FE/src/app/time-registration/time-registration.module.ts
- (+) FE/src/app/time-registration/time-registration/time-registration-list/time-registration-list.component.html
- (+) FE/src/app/time-registration/time-registration/time-registration-list/time-registration-list.component.scss
- (+) FE/src/app/time-registration/time-registration/time-registration-list/time-registration-list.component.ts

## Remarks
- Code does not calculate difference between worked hours and planed work hours, even though it was meant to. 
- Bootstrap and Font Awesome have been added to the solution. 
- Global routing has been used instead of local routing.
- Error validation has been skipped over all.
- No unit or integration tests.
