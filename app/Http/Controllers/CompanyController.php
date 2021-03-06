<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Employee;

class CompanyController extends Controller
{
	
    public function listCompanies(Request $request)
    {
    	return Company::get();
    }

    public function getCompany(Request $request)
    {
        $company = Company::findOrFail($request->id);
        $company->employees;
    	return $company;
    }

    public function createCompany(Request $request)
    {
    	$company = new Company($request->all());
    	$company->save();

    	return $company;
    }

    public function editCompany(Request $request)
    {
    	$company = Company::findOrFail($request->id);
    	$company->update($request->all());

    	return $company;
    }

    public function deleteCompany(Request $request)
    {
        Company::findOrFail($request->id)->delete();
    }

}
