<?php




namespace App\Http\Controllers;
use App\product;

use Illuminate\Http\Request;
use DB;

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
