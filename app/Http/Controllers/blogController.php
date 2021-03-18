<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blogController extends Controller
{
    //
    function main () {

        return view('blog');

    }
    function add () {

        return view('addblog');

    }
}
