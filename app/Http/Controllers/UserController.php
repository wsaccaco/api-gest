<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
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
        return User::find($id);
    }

    public function login(Request $request){
        $input = $request->only(['name', 'password']);
        return $input;
        $user = User::where("name", $input["name"])->first();
//        return app('hash')->check($input["password"], $user->password)? "waldo":"saccaco";

        if(app('hash')->check($input["password"], $user->password)){
            $user->api_token = app('hash')->make(rand(99999, 999999));
            $user->save();
            return $user;
        }else{
            return null;
        }

    }

    public function logout(){

    }
}
