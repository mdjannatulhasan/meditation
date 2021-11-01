<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Gallary;
use App\Models\Video;
use Illuminate\Http\Request;

class GallaryController extends Controller
{
    public function index(){
        $gallaries = Gallary::all();
        $videos = Video::all();

        return view('frontend.pages.gallary.gallary', compact('gallaries', 'videos'));
    }
}
