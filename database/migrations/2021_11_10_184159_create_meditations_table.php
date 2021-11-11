<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeditationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meditations', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->bigInteger('meditation_type_id')->unsigned();
            $table->foreign('meditation_type_id')->references('id')->on('meditation_types');
            $table->text('description');
            $table->double('contribution_fee');
            $table->timestamp('starting_date')->nullable();
            $table->timestamp('ending_date')->nullable();
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meditations');
    }
}
