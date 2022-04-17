<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jawaban extends Model
{
    use HasFactory;
    protected $table = "answer";
    protected $fillable = ['user_id', 'question_id', 'answer', 'kendala'];

    public function User(){
        return $this->hasone(User::class, 'id', 'user_id');
    }
}
