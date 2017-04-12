<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','name', 'last_name', 'doc_type', 'doc_number', 'type'
    ];
    public $incrementing = false;
    public $timestamps = false;
}
