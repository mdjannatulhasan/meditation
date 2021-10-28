<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\CourseStub;
use App\Models\Event;
use Illuminate\Http\Request;

class SessionDetailController extends Controller
{
    public function index($id){
        $session_details = Event::where('id', $id)->first();
        dd($session_details);
        return view('frontend.pages.sessions-details.sessions-details', compact('session_details'));
    }
}
