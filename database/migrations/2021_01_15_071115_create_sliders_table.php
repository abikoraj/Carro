<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->text('image');
            $table->text('title');
            $table->text('subtitle');
            $table->text('description')->nullable();
            $table->text('btn_text1')->nullable();
            $table->text('btn_text2')->nullable();
            $table->text('btn_link1')->nullable();
            $table->text('btn_link2')->nullable();
            $table->boolean('has_video')->nullable();
            $table->text('video_link')->nullable();
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
        Schema::dropIfExists('sliders');
    }
}
