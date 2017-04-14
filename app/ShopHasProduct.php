<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShopHasProduct extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'stock',
        'minimum',
        'description',
        'model',
        'status'
    ];

    public $timestamps = false;
}
