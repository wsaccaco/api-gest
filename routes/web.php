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

$app->get('/', function (\Illuminate\Http\Request $request) use ($app) {
    $has = app('hash')->make("tetitas123");
    return $has;
    return app('hash')->check("waldo", $has) ? "waldo": "puto";
    return \Illuminate\Support\Facades\Auth::user();
    $faker =  Faker\Factory::create();
    return $faker->randomElement($array = ["a", "b", "c"], $count = 1);
});


$app->group(['middleware' => 'auth', 'prefix' => 'api'], function () use ($app) {
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
     * Shops
     */
    $app->get('shops', 'ShopController@all');
    $app->get('shops/{id}', 'ShopController@find');

    /*
     * Products
     */

    $app->get("products", "ProductController@all");
    $app->get("shops/{shops}/products", "ProductController@forShops");
    $app->put("shops/{shops}/products/{product}", "ProductController@update");
});


$app->post('auth/login', 'UserController@login');
$app->get('auth/logout', 'UserController@logout');