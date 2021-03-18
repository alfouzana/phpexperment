<?php




namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\product;

class homeProdcutsControllers extends Controller
{
    //

    public function show(Request $req)
    {
        if ($req->path() == '/')
        {
            $products = product::all();
        } else {

            $products = product::all()->where('$req->path()');
        }

        
        
        $products = $products -> shuffle();
        return view('welcome',['affP'=>$products]);
    }
}
