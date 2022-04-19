<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    use HasFactory;
    protected $table = "pertanyaans";
    protected $fillable = ['bagian','bab_id', 'sub_bab_id', 'question'];

    public function subBab(){
        return $this->hasOne(SubBab::class, 'id', 'sub_bab_id');
    }
}
