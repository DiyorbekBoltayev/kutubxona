<?php

namespace App\Http\Controllers;

use App\Models\Nashriyot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function index()
    {
        return view('searchDemo');
    }
    public function fetch(Request $request){

        if ($request->get('query')){
            $query=$request->get('query');
            $data=DB::table('nashriyots')
                ->where('nomi', 'LIKE', '%' . $query . '%')
                ->get();

            $output='<ul class="list-group" style=" position:relative;z-index: 1">';
            foreach ($data as $row){
                $output.='<li id="li1" class="dropdown-item list-group-item">'.$row->nomi.'</li>';

            }
            $output.='</ul>';
            echo $output;

        }

    }
    public function fetch_kitob(Request $request){

        if ($request->get('query')){
            $query=$request->get('query');
            $data=DB::table('kitoblar')
                ->where('nomi', 'LIKE', '%' . $query . '%')
                ->get();

            $output='<ul class="list-group" style=" position:relative;z-index: 1">';
            foreach ($data as $row){
                $output.='<li id="l1" class="dropdown-item list-group-item">'.$row->nomi.'</li>';

            }
            $output.='</ul>';
            echo $output;

        }

    }

}
