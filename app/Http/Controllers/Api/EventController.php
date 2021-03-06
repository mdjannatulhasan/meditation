<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CourseStub;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(Request $request)
    {
        $search_term = $request->input('q');

        // NOTE: this is a Backpack helper that parses your form input into an usable array.
        // you still have the original request as `request('form')`
        $form = backpack_form_input();
        $existence = CourseStub::query();
        $options = Event::query();

        // if no category has been selected, show no options
        if (! $form['category_id']) {
            return [];
        }
        if ($form['type']) {
            $existence = $existence->where('type', $form['type']);
        }

        // if a category has been selected, only show articles in that category
        if ($form['category_id']) {
            $options = $options->where('category_id', $form['category_id']);
            $existence = $existence->where('category_id', $form['category_id']);
        }
        $existence = $existence->pluck('event_id');
        if ($existence){
            $options = $options->whereNotIn('category_id', $existence);
        }
        if ($search_term) {
            $results = $options->where('title', 'LIKE', '%'.$search_term.'%')->paginate(10);
        } else {
            $results = $options->paginate(10);
        }

        return $results;
    }
}
