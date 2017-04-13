<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 12/04/2017
 * Time: 12:04 PM
 */

namespace App\Http\Controllers;


use App\Store;
use Illuminate\Http\Request;

class ShopController extends Controller
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


    public function find($id){
        return Store::find($id);
    }

    public function all(){
        return Store::all();
    }

}