<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class products extends Controller
{
    function save(Request $req) {
        
        $query = DB::table('products')->insert([
            'name'=>$req->input('productname'),
            'price'=>$req->input('price'),
            'productlink'=>$req->input('link'),
            'imagelink'=>$req->input('imgurl'),
            'category'=>$req->input('cat'),
            'updated_at'=>toDateTimeString(),
            'created_at'=>toDateTimeString(),




        ]);

        if ($query){

            return back()->with('sucess','تم إضافة المنتج بنجاح');
        }else {

            return back()->with('error','لأسف حدث خطأ فادح');

        }

    }
}
