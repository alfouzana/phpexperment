<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userAuthController extends Controller
{
    function main () {

        return view('login');
    }
}
