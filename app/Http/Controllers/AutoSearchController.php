<?php

namespace App\Http\Controllers;

use App\Models\Nashriyot;
use Illuminate\Http\Request;
use DB;

class AutoSearchController extends Controller
{
    public function tuman(Request $request){
        if ($request->get('query')){
            $query=$request->get('query');
            $data=DB::table('tumen')
                ->where('viloyat_id',$query)
                ->get();

            $output='<option value="0" disabled selected >Tumanni tanlang</option>';
            foreach ($data as $row){
                $output.='<option value="'.$row->id.'" >'.$row->tuman.'</option>';

            }

            echo $output;

    }}
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
    public function mahalliyid(Request $request){
        if ($request->get('query')){
            $query=$request->get('query');
            $data=DB::table('kitobs')
                ->where('local_id', 'LIKE', '%' . $query . '%')
                ->get();

            $output='<ul class="list-group" style=" position:relative;z-index: 1">';
            foreach ($data as $index=>$row){
                if ($index==5){break;}
                $output.='<li id="li_mahalliyid" class="dropdown-item list-group-item">'.'Mahalliy_id oldin ishlatilgan'.'</li>';

            }
            $output.='</ul>';
            echo $output;

        }

    }

    public function sarlavha(Request $request){
        if ($request->get('query')){
            $query=$request->get('query');
            $data=DB::table('sarlavhas')
                ->where('sarlavha', 'LIKE', '%' . $query . '%')
                ->get();

            $output='<ul class="list-group" style=" position:relative;z-index: 1">';
            foreach ($data as $index=>$row){
                if ($index==5){break;}
                $output.='<li id="li_sarlavha" class="dropdown-item list-group-item">'.$row->sarlavha.'</li>';

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
