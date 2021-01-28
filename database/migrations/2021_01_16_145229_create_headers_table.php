<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('headers', function (Blueprint $table) {
            $table->id();
            $table->text('logo');
            $table->text('header_img')->nullable();
            $table->text('address');
            $table->text('address2')->nullable();
            $table->text('phone');
            $table->text('phone2')->nullable();
            $table->text('email');
            $table->text('email2')->nullable();
            $table->text('facebook');
            $table->text('twitter');
            $table->text('instagram');
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
        Schema::dropIfExists('headers');
    }
}
