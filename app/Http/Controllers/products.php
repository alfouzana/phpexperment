<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class products extends Controller
{
    function save(Request $req) {

print-r($req->input());

    }
}
