<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->text('title')->nullable();
            $table->text('image')->nullable();
            $table->text('activity1')->nullable();
            $table->text('value1')->nullable();
            $table->text('activity2')->nullable();
            $table->text('value2')->nullable();
            $table->text('activity3')->nullable();
            $table->text('value3')->nullable();
            $table->text('activity4')->nullable();
            $table->text('value4')->nullable();
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
        Schema::dropIfExists('activities');
    }
}
