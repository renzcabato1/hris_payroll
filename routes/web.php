<?php


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
Route::group(['middleware' => 'auth'], function () {
    //Users
    Route::get('account-setting', 'UserController@accountSetting');
    Route::post('upload-avatar', 'UserController@uploadAvatar');
    Route::post('upload-signature', 'UserController@uploadSignature');
    Route::get('get-salary', 'UserController@get_salary');
    Route::post('updateInfo/{id}', 'UserController@updateInfo');
    Route::post('updateEmpInfo/{id}', 'UserController@updateEmpInfo');

    //employees
    Route::get('/dashboard', 'HomeController@index')->name('home');
    Route::get('/', 'HomeController@index');
    Route::get('/home', 'HomeController@index')->name('home');
    //approvers
    Route::get('/dashboard-manager', 'HomeController@managerDashboard');
    //admin

    Route::get('attendances', 'AttendanceController@index');


    Route::get('get-attendance-bio', 'AttendanceController@get_attendances');

    //Leaves
    Route::get('leave', 'EmployeeLeaveController@leaveBalances');
    Route::post('new-leave','EmployeeLeaveController@new');
    Route::post('edit-leave/{id}', 'EmployeeLeaveController@edit_leave');
    Route::get('disable-leave/{id}', 'EmployeeLeaveController@disable_leave');

    //Overtime
    Route::get('overtime','EmployeeOvertimeController@overtime');
    Route::post('new-overtime','EmployeeOvertimeController@new');
    Route::post('edit-overtime/{id}', 'EmployeeOvertimeController@edit_overtime');
    Route::get('disable-overtime/{id}', 'EmployeeOvertimeController@disable_overtime');    

    //Work-from-home
    Route::get('work-from-home', 'EmployeeWfhController@wfh');
    Route::post('new-wfh','EmployeeWfhController@new');

    //official-business
    Route::get('official-business', 'EmployeeObController@ob');
    Route::post('new-ob','EmployeeObController@new');
    Route::post('edit-ob/{id}', 'EmployeeObController@edit_ob');
    Route::get('disable-ob/{id}', 'EmployeeObController@disable_ob');       

    //DTR Correction
    Route::get('dtr-correction', 'EmployeeDtrController@dtr');
    Route::post('new-dtr','EmployeeDtrController@new');
    Route::post('edit-dtr/{id}', 'EmployeeDtrController@edit_dtr');
    Route::get('disable-dtr/{id}', 'EmployeeDtrController@disable_dtr');     

    //FOR APPROVAL
    Route::get('for-approval', 'FormApprovalController@form_approval');

    //employees
    Route::get('employees', 'EmployeeController@view');
    Route::post('new-employee', 'EmployeeController@new');

    //Payslips
    Route::get('payslips', 'PayslipController@view');

    //handbooks
    Route::get('handbooks', 'HandbookController@view');
    Route::post('new-handbook', 'HandbookController@newhandbook');

    //Holidays
    Route::get('holidays', 'HolidayController@view');
    Route::post('new-holiday', 'HolidayController@new');
    Route::get('delete-holiday/{id}', 'HolidayController@delete_holiday');
    Route::post('edit-holiday/{id}', 'HolidayController@edit_holiday');

    //formsLeave
    Route::get('leavee-settings', 'LeaveController@leaveDetails');

    //Schedules
    Route::get('schedules', 'ScheduleController@schedules');
    Route::post('new-schedule', 'ScheduleController@newSchedule');


    //Announcement
    Route::get('announcements', 'AnnouncementController@view');
    Route::post('new-announcement', 'AnnouncementController@new');
    Route::get('delete-announcement/{id}', 'AnnouncementController@delete');

    //Logos
    Route::get('logos', 'SettingController@view');
    Route::post('upload-icon', 'SettingController@uploadIcon');
    Route::post('upload-logo', 'SettingController@uploadLogo');

    //Manager
    Route::get('subordinates', 'AttendanceController@subordinates');

    //Allowances
    Route::get('allowances', 'AllowanceController@viewAllowances');
    Route::post('new-allowance', 'AllowanceController@new');
    Route::get('disable-allowance/{id}', 'AllowanceController@disable_allowance');
    Route::get('activate-allowance/{id}', 'AllowanceController@activate_allowance');
    Route::post('edit-allowance/{id}', 'AllowanceController@edit_allowance');

    // Incentives
    Route::get('incentives', 'IncentiveController@index');
    Route::post('new-incentive', 'IncentiveController@store');
    Route::get('disable-incentive/{id}', 'IncentiveController@disable_incentive');
    Route::get('activate-incentive/{id}', 'IncentiveController@activate_incentive');
    Route::post('edit-incentive/{id}', 'IncentiveController@update');

    //Biometrics
    Route::get('get-biometrics', 'EmployeeController@employees_biotime');
    Route::post('new-biocode', 'EmployeeController@newBio');
    Route::post('update-biocode', 'EmployeeController@updatebiocode');
    Route::get('biologs-employee', 'EmployeeController@employee_attendance');
    Route::get('bio-per-location', 'EmployeeController@biologs_per_location');
    Route::get('pmi-local', 'EmployeeController@localbio');
    Route::get('biometrics-per-company', 'EmployeeController@perCompany');

    //Payroll
    Route::get('pay-reg', 'PayslipController@payroll_datas');
    Route::get('timekeeping', 'PayslipController@attendances');
    Route::post('pay-reg', 'PayslipController@import');
    Route::post('upload-attendance', 'PayslipController@upload_attendance');

    // Company
    Route::get('company', 'CompanyController@company_index');
    Route::post('newCompany', 'CompanyController@store_company');

    // Department
    Route::post('newDepartment', 'DepartmentController@store_department');
    Route::get('department', 'DepartmentController@department_index');
    Route::get('enable-department/{id}', 'DepartmentController@enable_department');
    Route::get('disable-department/{id}', 'DepartmentController@disable_department');

    // Loan Type
    Route::get('loan-type', 'LoanTypeController@loanTypes_index');
    Route::post('newLoanType', 'LoanTypeController@store_loanType');
    Route::get('enable-loanType/{id}', 'LoanTypeController@enable_loanType');
    Route::get('disable-loanType/{id}', 'LoanTypeController@disable_loanType');

    // Employee Allowance
    Route::get('employee-allowance', 'EmployeeAllowanceController@index');
    Route::post('new-employee-allowance', 'EmployeeAllowanceController@store');
    Route::get('disableEmp-allowance/{id}', 'EmployeeAllowanceController@disable');

    // Employee Incentive
    Route::get('employee-incentive', 'EmployeeIncentiveController@index');
    Route::post('new-employee-incentive', 'EmployeeIncentiveController@store');
    Route::get('disableEmp-incentive/{id}', 'EmployeeIncentiveController@disable');

    // Employee Groups
    Route::get('employee-companies', 'EmployeeCompanyController@index');
    Route::post('new-employee-group', 'EmployeeCompanyController@store');
    Route::get('disableEmp-incentive/{id}', 'EmployeeCompanyController@disable');

    // Adjustments
    Route::get('salary-management', 'AdjustmentController@index');
    Route::post('new-adjustment', 'AdjustmentController@store');
    Route::get('disable-adjustment/{id}', 'AdjustmentController@disable');

    // Loans
    Route::get('loans', 'LoanController@index');
    Route::get('loan-reg', 'LoanController@loan_reg');
    Route::post('new-loan', 'LoanController@store_loanReg');

    // Reports
    Route::get('employee-report', 'EmployeeController@employee_report');
    Route::get('leave-report', 'LeaveController@leave_report');
    Route::get('totalExpense-report', 'PayrollController@totalExpense_report');
    Route::get('loan-report', 'LoanController@loan_report');
    Route::get('incentive-report', 'IncentiveController@incentive_report');
    Route::get('payroll-report', 'PayrollController@payroll_report');

    //13th month
    Route::get('month-benefit', 'PayslipController@monthly_benefit');

    // Employee Leave Credits
    Route::get('employee-leave-credits', 'LeaveCreditsController@index');

    
});
Route::post('new-employee', 'EmployeeController@new');