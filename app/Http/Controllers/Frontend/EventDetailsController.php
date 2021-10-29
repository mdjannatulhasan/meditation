<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventDetailsController extends Controller
{
    public function index($id){
        $data = Event::where('id', $id)->first();
        return view('frontend.pages.event-details.event-details', compact('data'));
    }
}
