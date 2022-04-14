<?php

namespace App\Http\Controllers;

use App\Models\Javon;
use App\Models\Kitob;
use App\Models\KitobTuri;
use App\Models\Muallif;
use App\Models\Nashriyot;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function add(){
        return view('add');

    }
    public function add_books(Request $request){
        $kitob=new Kitob();
        $kitob->local_id=$request->mahalliy_id;
        echo "mahalliy id yozildi <br>";
        $kitob->sarlavha=$request->sarlavha;
        echo "sarlavha yozildi <br>";
//muallif ma'lumotlari tekshiriladi va yozildi

        $search=$request->muallif;
        $muallifs=Muallif::where('muallif',"$search")->get();
        if (count($muallifs)==1){
            $kitob->muallif_id=$muallifs[0]['id'];
//o'chirishim garak
//
            echo "yozilgan muallif id:".$muallifs[0]['id']."<br>";
        }else{
            $addmuallif=new Muallif();
            $addmuallif->muallif=$request->muallif;
            $addmuallif->save();
            $kitob->muallif_id=$addmuallif['id'];
            echo "yabgi muallif yozildi <br>";
        }
//kitob turini tekshiriladi va yoziladi

        $search=$request->kitob_turi;
        $kitob_turi_top=KitobTuri::where('kitob_turi',"$search")->get();
        if (count($kitob_turi_top)==1){
            $kitob->kitob_turi_id=$kitob_turi_top[0]['id'];
//o'chirishim garak
//
            echo "yozilgan kitob turi id:".$kitob_turi_top[0]['id']."<br>";
        }else{
            $add_kitob_turi=new KitobTuri();
            $add_kitob_turi->kitob_turi=$request->kitob_turi;
            $add_kitob_turi->save();
            $kitob->kitob_turi_id=$add_kitob_turi['id'];
            echo "yangi kitob turi yozildi <br>";
        }
 //kitob yili yoziladi
        $kitob->yili=$request->nashr_yili;
        echo "nashr yili yozildi<br>";
//nashriyot tekshirildi va yozildi
//
        $search=$request->nashriyot;
        $nashriyot_top=Nashriyot::where('nashriyot',"$search")->get();
        if (count($nashriyot_top)==1){
            $kitob->nashriyot_id=$nashriyot_top[0]['id'];
//o'chirishim garak
//
            echo "yozilgan nashriyot id:".$nashriyot_top[0]['id']."<br>";
        }else{
            $add_nashriyot=new Nashriyot();
            $add_nashriyot->nashriyot=$request->nashriyot;
            $add_nashriyot->save();
            $kitob->nashriyot_id=$add_nashriyot['id'];
            echo "yangi nashriyot yozildi <br>";
        }
        //javon tekshirildi va yozildi

        $search=$request->javon;
        $javon_top=Javon::where('javon',"$search")->get();
        if (count($javon_top)==1){
            $kitob->javon_id=$javon_top[0]['id'];
//o'chirishim garak
//
            echo "yozilgan javon id:".$javon_top[0]['id']."<br>";
        }else{
            $add_javon=new Javon();
            $add_javon->javon=$request->javon;
            $add_javon->save();
            $kitob->javon_id=$add_javon['id'];
            echo "yangi javon yozildi <br>";
        }
        $kitob->save();
        echo $kitob;
    }

}
