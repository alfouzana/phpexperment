<?php




namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\product;

class homeProdcutsControllers extends Controller
{
    //

    public function show()
    {

        $products = product::all();
        $products = $products -> shuffle();
        return view('welcome',['affP'=>$products]);
    }
}
