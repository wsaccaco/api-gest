<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'type',
        'date',
        'latlng',
        'employees_id'
    ];

    public $timestamps = false;
}
