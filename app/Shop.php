<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'latlng',
        'address',
        'district',
        'status'
    ];

    public $timestamps = false;
}
