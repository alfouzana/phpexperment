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
        dd($name);
        if ($name == '/')
        {
            $products = product::all();
        } else {

            $products = product::all()->where('category','=','$name');
        }

        
        
        $products = $products -> shuffle();
        return view('welcome',['affP'=>$products]);
    }
}
