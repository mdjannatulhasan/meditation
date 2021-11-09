<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Tryout;
use App\Models\Video;
use Illuminate\Http\Request;

class TryoutsController extends Controller
{
    public function index(){
        $tryouts = Tryout::get();
        $videos = Video::all();
        return view('frontend.pages.tryouts.tryouts', compact('tryouts', 'videos'));
    }
}
