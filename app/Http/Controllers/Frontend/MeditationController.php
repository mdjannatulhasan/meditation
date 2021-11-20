<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\MeditationType;
use Illuminate\Http\Request;

class MeditationController extends Controller
{
    public function index(){
        $data = MeditationType::with('meditations')->get();
        // dd($data);
        return view('frontend.pages.meditation.meditation', compact('data'));
    }
}
