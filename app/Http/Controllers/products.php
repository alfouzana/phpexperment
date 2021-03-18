<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class products extends Controller
{
    function save(Request $req) {
        
        $query = DB::table('product')->insert([
            'name'=>$req->input('productname'),
            'price'=>$req->input('price'),
            'productlink'=>$req->input('link'),
            'imagelink'=>$req->input('imgurl'),
            'category'=>$req->input('cat'),


        ]);

        if ($query){

            return bacl()->with('sucess','data inserted');
        }else {

            return bacl()->with('error','data not inserted');

        }

    }
}
