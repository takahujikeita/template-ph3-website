<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizzesController extends Controller
{
    public function create()
    {
        return view('quizzes');
    }
}
