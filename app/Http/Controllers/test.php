<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\taras;

class test extends Controller
{
    public function azaza(){
        $taras = new taras();
        $taras->hello();
    }
}