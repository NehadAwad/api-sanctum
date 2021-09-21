<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //Register Api
    public function register(Request $request){
        //validation
        $request->validate([
            "name" => "required",
            "email" => "required|email|unique:students",
            "password" => "required|confirmed"
        ]);
    }

    public function login(Request $request){

    }

    public function profile(){

    }

    public function logout(){

    }
}
