<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\CourseStub;
use App\Models\Event;
use Illuminate\Http\Request;

class SessionDetailController extends Controller
{
    public function index($id){
        $data = Event::where('id', $id)->first();
        $related_data = Event::where('category_id',$data->category_id)
            ->orderby('id',"Desc")
            ->limit('3')
            ->get();
        return view('frontend.pages.sessions-details.sessions-details', compact('data','related_data'));
    }
}
