<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChoicesController extends Controller
{
    public function create()
    {
        return view('choices');
    }
}
