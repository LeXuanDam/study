<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login extends Controller
{
    public function bcd(Request $request){
        $username = $request->username;
        $password = $request->password;
    }
}
