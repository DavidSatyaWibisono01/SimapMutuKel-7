<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubBab extends Model
{
    use HasFactory;
    protected $table = "sub_bab";
    protected $fillable = ['bab_id', 'nama_bab'];

    public function pertanyaan(){
    	return $this->belongsTo(pertanyaan::class);
    }
}
