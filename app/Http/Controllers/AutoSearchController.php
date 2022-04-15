<?php

namespace App\Http\Controllers;

use App\Models\Nashriyot;
use Illuminate\Http\Request;
use DB;

class AutoSearchController extends Controller
{
    public function nashriyot(Request $request){
        if ($request->get('query')){
            $query=$request->get('query');
            $data=DB::table('nashriyots')
                ->where('nashriyot', 'LIKE', '%' . $query . '%')
                ->get();

            $output='<ul class="list-group" style=" position:relative;z-index: 1">';
            foreach ($data as $index=>$row){
                if ($index==5){break;}
                $output.='<li id="li_nashriyot" class="dropdown-item list-group-item">'.$row->nashriyot.'</li>';

            }
            $output.='</ul>';
            echo $output;

        }

    }
    public function muallif(Request $request){
        if ($request->get('query')){
            $query=$request->get('query');
            $data=DB::table('muallifs')
                ->where('muallif', 'LIKE', '%' . $query . '%')
                ->get();

            $output='<ul class="list-group" style=" position:relative;z-index: 1">';
            foreach ($data as $index=>$row){
                if ($index==5){break;}
                $output.='<li id="li_muallif" class="dropdown-item list-group-item">'.$row->muallif.'</li>';

            }
            $output.='</ul>';
            echo $output;

        }

    }
    public function kitob_turi(Request $request){
        if ($request->get('query')){
            $query=$request->get('query');
            $data=DB::table('kitob_turis')
                ->where('kitob_turi', 'LIKE', '%' . $query . '%')
                ->get();

            $output='<ul class="list-group" style=" position:relative;z-index: 1">';
            foreach ($data as $index=>$row){
                if ($index==5){break;}
                $output.='<li id="li_kitob_turi" class="dropdown-item list-group-item">'.$row->kitob_turi.'</li>';

            }
            $output.='</ul>';
            echo $output;

        }

    }
    public function javon(Request $request){
        if ($request->get('query')){
            $query=$request->get('query');
            $data=DB::table('javons')
                ->where('javon', 'LIKE', '%' . $query . '%')
                ->get();

            $output='<ul class="list-group" style=" position:relative;z-index: 1">';
            foreach ($data as $index=>$row){
                if ($index==5){break;}
                $output.='<li id="li_javon" class="dropdown-item list-group-item">'.$row->javon.'</li>';

            }
            $output.='</ul>';
            echo $output;

        }

    }


}
