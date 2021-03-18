<?php




namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\product;

class homeProdcutsControllers extends Controller
{
    //

    public function show($name)
    {
        
        if ($name == '/')
        {
            $products = product::all();
        } else {

            $products = DB::select("SELECT * FROM products where category = ?",[$name]);
            

        
        
        $products = $products -> shuffle();
        return view('welcome',['affP'=>$products]);
    }
}
