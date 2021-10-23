<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class YogaController extends Controller
{
    public function index(){
        return view('frontend.pages.body-yoga.body-yoga');
    }
}
