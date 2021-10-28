<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\CourseStub;
use App\Models\Event;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index(){
        $all_data = CourseStub::with('event')->where('type','sessions')->limit(20)->get();
        $popular_data = CourseStub::with('event')->where('type','popular_session')->limit(20)->get();
        $new_data= Event::whereDate('starting_date', ">=", date('Y-m-d'))
        ->where('category_id', 2)
        ->orderBy('id', 'DESC')
        ->limit(20)
        ->get();
        $title = "Session";
        // dd($popular_data);
        return view('frontend.pages.courses.courses', compact('all_data', 'popular_data', 'new_data', 'title'));
    }
}
