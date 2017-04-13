<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->get('users/{id}', 'UserController@find');

/*
 * Employees
 */
$app->get('employees', 'EmployeesController@all');
$app->post('employees', 'EmployeesController@store');
$app->get('employees/{id}', 'EmployeesController@find');

/*
 * Attendance
 */
$app->post('attendances', 'AttendanceController@store');
$app->get('employees/{id}/attendances', 'AttendanceController@forEmployee');

/*
 * Stores
 */
$app->post('stores', 'EmployeesController@store');
$app->get('stores/{id}', 'EmployeesController@find');