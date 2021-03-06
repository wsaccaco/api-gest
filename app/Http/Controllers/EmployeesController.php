<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 12/04/2017
 * Time: 12:04 PM
 */

namespace App\Http\Controllers;


use App\Employee;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function store(Request $request){
        $employee = Employee::create($request->input());
        return $employee;

    }

    public function find($id){
        return Employee::find($id);
    }

    public function all(){
        return Employee::all();
    }

}