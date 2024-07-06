<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // ソフトデリートをインポート

class Quiz extends Model
{
    use HasFactory, SoftDeletes; // ソフトデリートを使用


    protected $table = 'quizzes';

    protected $fillable = [
        'name',
    ];

    // 質問とのリレーションを定義している
    // 一対多モデルにおいて多（question）と紐付けしたいから関数名を複数形にしている
    public function questions(){
        return $this->hasMany(Question::class);
    }
}
