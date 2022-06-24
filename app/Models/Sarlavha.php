<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sarlavha extends Model
{
    use HasFactory;
    public function kitob(){
        return $this->hasOne(Kitob::class);
    }
}
