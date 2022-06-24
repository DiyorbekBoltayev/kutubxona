<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showsearch(Request $request){
        $s=$request->search;
        return view('search',[
            'key'=>$s
        ]);
    }
    public function berish(){
        return view('berish');
    }
    public function berilganlar(){
        return view('berilganlar');

    }
    public function kurish(){
        return view('kurish');
    }
}
