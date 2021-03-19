<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userAuthController extends Controller
{
    function login () {

        return view('auth.login');
    }
    function signup () {

        return view('auth.signup');
    }
    function create (Request $req) {

        $req->validate([
                'name'=> 'required',
                'email'=> 'required|email|unique:users',
                'password'=> 'required|min:5|max:12'

        ]);
    }
}
