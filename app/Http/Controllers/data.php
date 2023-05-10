<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class data extends Controller
{
    public function Signup()
    {
        return view ('Signup');
    }
    public function login()
    {
        return view('Login');
    }
}
