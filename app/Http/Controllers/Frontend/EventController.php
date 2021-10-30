<?php

namespace App\Http\Controllers\Frontend;

use App\Models\CourseStub;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Event;

class EventController extends Controller
{
    public function index(){
        $all_events = CourseStub::with('event')->where('type','featured_events')->limit(20)->get();
        // dd($all_events);
        $live_events = Event::whereDate('starting_date', "<", date("Y-m-d"))
        ->whereDate('ending_date', ">", date("Y-m-d"))
        ->where('category_id', 1)
        ->orderBy('id', 'DESC')
        ->limit(20)->get();
        $today_events = Event::whereDate('starting_date', "=", date("Y-m-d"))
        ->where('category_id', 1)
        ->orderBy('id', 'DESC')
        ->limit(20)->get();
        $upcoming_events = Event::whereDate('ending_date', "<", date("Y-m-d"))
        ->where('category_id', 1)
        ->orderBy('id', 'DESC')
        ->limit(20)->get();
        
        return view('frontend.pages.events.events', compact('all_events', 'live_events', 'today_events', 'upcoming_events'));
    }
}
