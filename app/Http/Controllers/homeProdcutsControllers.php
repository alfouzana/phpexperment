<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\product;
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
