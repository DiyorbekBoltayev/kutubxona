<?php

namespace App\Http\Controllers;

use App\Models\Guruh;
use App\Models\Javon;
use App\Models\Kitob;
use App\Models\KitobTuri;
use App\Models\Muallif;
use App\Models\Nashriyot;
use App\Models\Sarlavha;
use App\Models\Student;
use App\Models\Tarix;
use App\Models\User;
use App\Models\Viloyat;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function kitob_izlash(Request $request){
        $sarlavha=$request->sarlavha;
        $muallif=$request->muallif;

        if($sarlavha!="" ){

            $s=Sarlavha::where('sarlavha','like','%'.$sarlavha.'%')->get();
        } else{
            $s=[];
        }
        if($muallif != ""){

            $m=Muallif::where('muallif','like','%'.$muallif.'%')->get();
        }else{
            $m=[];
        }

        if(count($s)>0 && count($m)>0){
            $data=[];
          foreach ($s as $sarlavha){
              foreach ($m as $muallif){
                  $data[]=Kitob::where('muallif_id',$muallif->id)->orWhere('sarlavha_id',$sarlavha->id)->get();
              }
          }
        }
        elseif (count($s)>0){
            $data=[];
            foreach ($s as $sarlavha) {
                $data[] = Kitob::where('sarlavha_id',$sarlavha->id)->get();}
        }elseif (count($m)>0){
$data=[];
            foreach ($m as $muallif) {

                $data[]=Kitob::where('sarlavha_id',$muallif->id)->get();}
        }
        else{
            $data=null;
        }

        return view('borrow',['data'=>$data]);

    }
    public function login_2(){
        return view('login');
    }
    public function login_1(Request $request){
        if($request->login=="kutubxonachi" && $request->parol=="parol12345"){
            return redirect()->route('booklist');
        }
        else{
            return redirect()->back()->withErrors('Xato');
        }

    }
    public function delete_gr($id){
        $gr=Guruh::find($id);
        $gr->delete();
        return redirect('/list_gr')->with('message', 'Guruh muvaffaqqiyatli o\'chirildi !');
    }
    public function add_gr(){
        return view('guruhadd');
    }
    public function edit_gr($id){
        $gr=Guruh::find($id);
        return view('edit_gr',[
            'gr'=>$gr
        ]);
    }
    public function saqla_gr(Request $request){
        $gr=$request->guruh;
        $all=Guruh::all()->where('guruh',$gr);
        if(count($all)>0){
            return redirect()->back()->with('message', 'Bunday guruh mavjud !');
        }
        $t=new Guruh;
        $t->guruh=$gr;
        $t->save();
        return redirect()->route('list_gr')->with('message', 'Yaratildi !');
    }
    public function update_gr(Request $request){
        $id=$request->id;
        $t=Guruh::find($id);
        $gr=$request->guruh;
        $all=Guruh::all()->where('guruh',$gr);
        if(count($all)>0 && ($t->guruh != $gr)){
            return redirect()->back()->with('message', 'Bunday guruh mavjud !');
        }

        $t->guruh=$gr;
        $t->save();
        return redirect()->route('list_gr')->with('message', 'Yangilandi !');
    }
    public function list_gr(){
        $gr=Guruh::all();
        return view('list_gr',[
            'guruh'=>$gr
        ]);
    }
    public function deletebook($id){
        $book=Kitob::find($id);
        $book->delete();
        return redirect('/booklist')->with('message', 'Kitob muvaffaqqiyatli o\'chirildi !');


    }
    public function save_edit(Request $request){

        $kitob=Kitob::find($request->id);
        $kitob->local_id=$request->mahalliy_id;
        echo "mahalliy id yozildi <br>";

        echo "sarlavha yozildi <br>";
//sarlavha malumotlari tekshiriladi va yoziladi
        $search=$request->sarlavha;
        $sarlavhas=Sarlavha::where('sarlavha',"$search")->get();
        if (count($sarlavhas)==1){
            $kitob->sarlavha_id=$sarlavhas[0]['id'];
//o'chirishim garak
//
            echo "yozilgan muallif id:".$sarlavhas[0]['id']."<br>";
        }else{
            $addsarlavha=new Sarlavha();
            $addsarlavha->sarlavha=$request->sarlavha;
            $addsarlavha->save();
            $kitob->sarlavha_id=$addsarlavha['id'];
            echo "yangi sarlavha yozildi <br>";
        }
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

        return redirect('/booklist')->with('message', 'Kitob muvaffaqqiyatli tahrirlandi !');
    }
    public function editbook($id){
        $book=Kitob::find($id);
        return view('editbook',[
            'book'=>$book
        ]);
    }
    public function singlebook($id){
        $book=Kitob::find($id);
        return view('singlebook',[
            'book'=>$book
        ]);

    }
    public function list(){
        $books=Kitob::all();
        return view('kitoblist',[
            'books'=>$books
        ]);
    }
    public function home(){
        return view('home');
    }
    public function sarala(Request $request){
        $sana=$request->sana;
        $tarix=Tarix::where('sana',$sana)->get();
        return view('statistika',[
            'sana'=>$sana,
            'data'=>$tarix
        ]);
    }
    public function qaytdi($id){
        $book=Kitob::find($id);
        $t=new Tarix();
        $t->kitob_id=$id;
        $t->student_id=$book->holati;
        $t->holat=1;
        $t->sana=Carbon::now();
        $t->save();
        $book->holati=0;
        $book->save();
        return redirect('/booklist')->with('message', 'Kitob muvaffaqqiyatli qaytarildi !');
    }
    public function foydalanuvchilar(){
        return view('foydalanuvchilar');
    }
    public function useradd(){
        $vil=Viloyat::all();
        $guruh=Guruh::all();
        return view('useradd',['viloyat'=>$vil,'guruh'=>$guruh]);
    }
    public function register(Request$request){
        $s=new Student();
        $s->ism=$request->ism;
        $s->familya=$request->familya;
        $s->otasining_ismi=$request->otasining_ismi;
        $s->telefon=$request->telefon;
        $s->guruh_id=$request->guruh;
        $s->viloyat_id=1;
        $s->tuman_id=1;
        $s->save();
        return redirect('/');
    }
    public function add(){
        return view('add');
    }
    public function borrow(){
        $data=null;
        return view('borrow',['data'=>$data]);
    }
    public function confirmborrow($id){
        $book=Kitob::find($id);
        $guruh=Guruh::all();
        $student=Student::all();
        return view('confirmborrow',['book'=>$book,
            'guruh'=>$guruh,
            'student'=>$student]);
    }
    public function zzz(Request $request){
        $book=Kitob::find($request->id);
        $book->holati=$request->student_id;
        $book->olgan=$request->olgan;
        $book->berish=$request->berish;
        $book->save();
        $t=new Tarix();
        $t->kitob_id=$book->id;
        $t->student_id=$book->holati;
        $t->holat=0;
        $t->sana=Carbon::now();
        $t->save();

        return redirect('/booklist')->with('message', 'Kitob muvaffaqqiyatli berildi !');
    }
    public function showborrower($id){
        $data=Kitob::find($id);


        return view('showborrower',[
            'data'=>$data
        ]);
    }
    public function muddat(){
        $sana=Carbon::now();
        $kitoblar=Kitob::where('berish','<',$sana)->where('holati','>',0)->get();

        return view('muddat',['kitoblar'=>$kitoblar,]);
    }
    public function statistika(){
        $data=Tarix::all();

        return view('statistika',
        [
            'data'=>$data
        ]);
    }
    public function add_books(Request $request){
        $kitob=new Kitob();
        $kitob->local_id=$request->mahalliy_id;
        echo "mahalliy id yozildi <br>";

        echo "sarlavha yozildi <br>";
//sarlavha malumotlari tekshiriladi va yoziladi
        $search=$request->sarlavha;
        $sarlavhas=Sarlavha::where('sarlavha',"$search")->get();
        if (count($sarlavhas)==1){
            $kitob->sarlavha_id=$sarlavhas[0]['id'];
//o'chirishim garak
//
            echo "yozilgan muallif id:".$sarlavhas[0]['id']."<br>";
        }else{
            $addsarlavha=new Sarlavha();
            $addsarlavha->sarlavha=$request->sarlavha;
            $addsarlavha->save();
            $kitob->sarlavha_id=$addsarlavha['id'];
            echo "yangi sarlavha yozildi <br>";
        }
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

        return redirect('/add')->with('message', 'Kitob muvaffaqqiyatli qo`shildi !');
    }

}
