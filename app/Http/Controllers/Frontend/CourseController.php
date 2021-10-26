<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\CourseStub;
use App\Models\Event;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){
        $all_data = CourseStub::with('event')->where('type','course')->limit(20)->get();
        $popular_data = CourseStub::with('event')->where('type','popular_course')->limit(20)->get();
        $new_data = Event::whereDate('starting_date', ">=", date('Y-m-d'))
        ->where('category_id', 3)
        ->orderBy('id', 'DESC')
        ->limit(20)
        ->get();
        $title = "Course";
        // dd($popular_courses);
        return view('frontend.pages.courses.courses', compact('all_data' ,'popular_data', 'new_data', 'title'));
    }
}
