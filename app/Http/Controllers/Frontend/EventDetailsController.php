<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventDetailsController extends Controller
{
    public function index(){
        return view('frontend.pages.event-details.event-details');
    }
}
