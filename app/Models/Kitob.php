<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kitob extends Model
{
    use HasFactory;
    public function nashriyot(){
        return $this->belongsTo(Nashriyot::class,'nashriyot_id','id');
    }
    public function javon(){
        return $this->belongsTo(Javon::class,'javon_id','id');
    }
    public function turi(){
        return $this->belongsTo(KitobTuri::class,'kitob_turi_id','id');
    }
    public function sarlavha(){
        return $this->belongsTo(Sarlavha::class,'sarlavha_id','id');
    }
    public function muallif(){
        return $this->belongsTo(Muallif::class,'muallif_id','id');
    }
}
