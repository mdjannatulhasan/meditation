<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SessionDetailController extends Controller
{
    public function index(){
        return view('frontend.pages.sessions-details.sessions-details');
    }
}
