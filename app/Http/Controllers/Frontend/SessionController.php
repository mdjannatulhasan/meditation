<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\CourseStub;
use App\Models\Event;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index(){
        $all_sessions = CourseStub::with('event')->where('type','sessions')->limit(20)->get();
        $popular_sessions = CourseStub::with('event')->where('type','popular_session')->limit(20)->get();
        $new_sessions= Event::whereDate('starting_date', ">=", date('Y-m-d'))
        ->where('category_id', 2)
        ->orderBy('id', 'DESC')
        ->limit(20)
        ->get();
        // dd($all_sessions);
        return view('frontend.pages.sessions.sessions', compact('all_sessions', 'popular_sessions', 'new_sessions'));
    }
}
