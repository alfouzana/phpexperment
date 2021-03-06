<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Models\blog;

class blogController extends Controller
{
    //
    function main () {

        $blogs = blog::all();
        return view('blog',['blogs'=>$blogs]);
        

    }
    public function show($name)
    {
        $blogs = DB::select("SELECT * FROM blogs where blogtitle = ?",[$name]);
        return view('article',['blogs'=>$blogs]);
    }
    function save(Request $req) {

        $query = DB::table('blogs')->insert([
            'blogtitle'=>$req->input('blogtitle'),
            'imgurl'=>$req->input('imgurl'),
            'caption'=>$req->input('caption'),
            'blogpost'=>$req->input('blogpost'),
            'updated_at'=>\Carbon\Carbon::now()->toDateTimeString(),
            'created_at'=>\Carbon\Carbon::now()->toDateTimeString(),
            ]);

        

            if ($query){
    
                return back()->with('sucess','تم إضافة المدونة بنجاح');
            }else {
    
                return back()->with('error','لأسف حدث خطأ فادح');
    
            }
    }
    function add () {

        return view('addblog');

    }
}
