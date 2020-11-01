<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Company;

class EmployeeController extends Controller
{

    public function createEmployee(Request $request)
    {
        $company = Company::find($request->id);
        $employee = new Employee($request->all());
    	$company->employees()->save($employee);

    	return $employee;
    }

    public function editEmployee(Request $request)
    {
        $company = Company::find($request->id);
        $company->employees()->find($request->idEmployee)->update($request->all());
        $employee = Employee::find($request->idEmployee);

    	return $employee;
    }

    public function deleteEmployee(Request $request)
    {
        $company = Company::find($request->id);
        $company->employees()->find($request->idEmployee)->delete();
        return "Deletion completed succesfully";
    }
}
