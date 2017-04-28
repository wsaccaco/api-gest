<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 12/04/2017
 * Time: 12:04 PM
 */

namespace App\Http\Controllers;


use App\Attendance;
use Illuminate\Http\Request;

class AttendanceController extends Controller
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
        $employee = Attendance::create($request->input());
        return $employee;
    }

    public function find($id){
        return Attendance::find($id);
    }

    public function forEmployee($id){
        return $id;
        return Attendance::where('employee_id', $id)->get();
    }

}