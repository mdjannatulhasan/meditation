<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\MeditationVideoRequest;
use App\Models\MeditationVideo;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class MeditationVideoCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class MeditationVideoCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\MeditationVideo::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/meditation-video');
        CRUD::setEntityNameStrings('meditation video', 'meditation videos');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('meditation_type_id');
        CRUD::column('video');

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(MeditationVideoRequest::class);

        // CRUD::field('meditation_type_id');
        $this->crud->addField([    // SELECT2
            'name' => 'meditation_type_id',
            'type' => 'select2',
            'entity' => 'meditation_type',
        ]);

        CRUD::field('video');


        // $this->crud->addField([ // select2_from_ajax: 1-n relationship
        //     'type' => 'select2_from_ajax_multiple',
        //     'name' => 'video_id',
        //     'entity' => 'video',
        //     'attribute' => 'title',
        //     'data_source' => url('api/video'),
        //     'placeholder' => 'Select an article',
        //     'include_all_form_fields' => true,
        //     'minimum_input_length' => 0,
        //     'dependencies' => ['meditation_type'],
        // ]);

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

//     public function store(MeditationVideoRequest $request)
//     {
// //        dd($request->event_id);
//         if ($request->video_id) {
//             foreach ($request->video_id as $video_id) {
//                 $existence = MeditationVideo::where(['type' => $request->type, 'video_id' => $video_id])->first();
//                 if(!$existence){
//                     $response = MeditationVideo::create(['type' => $request->type, 'meditation_type_id' => $request->meditation_type_id, 'video_id' => $video_id]);
//                 }
//             }

//             return redirect('/admin/meditation-video');
//         }else{
//             return redirect()->back();
//         }
//     }
}
