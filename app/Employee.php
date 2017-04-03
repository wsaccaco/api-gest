<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{

    public $primaryKey = "employee_id";
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'employee_name', 'employee_lastname',
    ];
}
