<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    public function guruh(){
        return $this->belongsTo(Guruh::class,'guruh_id','id');
    }public function viloyat(){
        return $this->belongsTo(Viloyat::class,'viloyat_id','id');
    }public function tuman(){
        return $this->belongsTo(Tuman::class,'tuman_id','id');
    }
}
