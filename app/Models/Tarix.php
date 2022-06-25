<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarix extends Model
{
    use HasFactory;
    public function st(){
        return $this->belongsTo(Student::class,'student_id','id');

    }
    public function ktb(){
        return $this->belongsTo(Kitob::class,'kitob_id','id');
    }
}
