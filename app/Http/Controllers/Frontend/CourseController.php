<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\CourseStub;
use App\Models\Event;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){
        $all_courses = CourseStub::with('event')->where('type','course')->limit(20)->get();
        $popular_courses = CourseStub::with('event')->where('type','popular_course')->limit(20)->get();
        $new_courses = Event::whereDate('starting_date', ">=", date('Y-m-d'))
        ->where('category_id', 3)
        ->orderBy('id', 'DESC')
        ->limit(20)
        ->get();
        // dd($popular_courses);
        return view('frontend.pages.courses.courses', compact('all_courses' ,'popular_courses', 'new_courses'));
    }
}
