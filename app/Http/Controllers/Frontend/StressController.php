<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\MeditationType;
use Illuminate\Http\Request;

class StressController extends Controller
{
    public function index($id){
        $data = MeditationType::where('id', $id)->first();
        $title = 'Stress';
        return view('frontend.pages.focuse.focuse', compact('data', 'title'));
    }
}
