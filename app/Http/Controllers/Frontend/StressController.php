<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\MeditationType;
use Illuminate\Http\Request;

class StressController extends Controller
{
    public function index($title, $id){
        $data = MeditationType::with('videos')->where('id', $id)->first();
        $title = $data->title;
        return view('frontend.pages.focuse.focuse', compact('data', 'title'));
    }
}
