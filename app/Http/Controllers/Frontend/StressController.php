<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\MeditationType;
use App\Models\Satori;
use Illuminate\Http\Request;

class StressController extends Controller
{
    public function index($title, $id){
        $data = Satori::with('videos')->where('id', $id)->first();
        // dd($data);
        $title = $data->title;
        return view('frontend.pages.focuse.focuse', compact('data', 'title'));
    }
}
