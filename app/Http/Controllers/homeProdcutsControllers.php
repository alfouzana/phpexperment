<?php




namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\product;

class homeProdcutsControllers extends Controller
{
    //

    function show()
    {

        $products = product::all();
        return view('welcome',compact($products));
    }
}
