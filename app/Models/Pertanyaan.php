<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    use HasFactory;
    // protected $table = "question";
    protected $fillable = ['bab_id', 'sub_bab_id', 'nomor', 'question'];

    // public function SubBab(){
    //     return $this->hasOne(SubBab::class, 'id','sub_bab_id');
    // }
}
