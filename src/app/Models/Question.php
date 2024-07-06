<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'text',
        'supplement',
        'quiz_id',
    ];
    // クイズとのリレーションを定義する
    // 一対多モデルにおいて相手が一（quiz）なので単数系にしている
    public function quiz(){
        return $this->belongsTo(Quiz::class);
    }

    // 選択肢とのリレーションシップを定義
    public function choices()
    {
        return $this->hasMany(Choice::class);
    }
}
