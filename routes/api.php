<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix' => 'company/'], function ($router) {

	$router->get('/','CompanyController@listCompanies');
	$router->post('/','CompanyController@createCompany');
	$router->get('/{id}','CompanyController@getCompany');
	$router->post('/{id}','CompanyController@editCompany');
	$router->post('/{id}/employees/','EmployeeController@createEmployee');
	$router->post('/{id}/employees/{idEmployee}','EmployeeController@editEmployee');
	$router->delete('/{id}','CompanyController@deleteCompany');
	$router->delete('/{id}/employees/{idEmployee}','EmployeeController@deleteEmployee');

});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
