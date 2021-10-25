<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\CourseStub;
use App\Models\Event;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $upcoming_events = Event::whereDate('starting_date', ">=", date('Y-m-d'))
            ->where('category_id', 1)
            ->orderBy('id', 'DESC')
            ->limit(3)
            ->get();
        $testimonials = Testimonial::get();
        $courses = Event::whereDate('ending_date', ">=", date('Y-m-d'))
            ->where('category_id', 3)
            ->orderBy('id', 'DESC')
            ->limit(20)
            ->get();
        $indevidual_sessions= CourseStub::with('event')->where('type','indivisual_session')->limit(20)->get();
        
        $featured_events= CourseStub::with('event')->where('type','featured_events')->limit(20)->get();
        // dd($featured_events);
        return view('frontend.pages.home.home', compact('upcoming_events', 'testimonials', 'courses', 'indevidual_sessions', 'featured_events'));
    }
}
