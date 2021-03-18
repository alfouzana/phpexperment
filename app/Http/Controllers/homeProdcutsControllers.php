<?php

namespace App\Http\Controllers;
namespace App\Http\Models;

use Illuminate\Http\Request;
use DB;
use product;
class homeProdcutsControllers extends Controller
{
    //

    function show()
    {

        $products = product::all();
        dd($products);
        return view('welcome');
    }
}
