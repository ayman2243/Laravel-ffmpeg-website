<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTsvideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tsvideos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('title');
            $table->string('tags');
            $table->string('description');
            $table->string('privacy');
            $table->string('thumnail');
            $table->string('allow_comments');
            $table->string('allow_rate');
            $table->string('allow_embed');
            $table->string('is_18_age');
            $table->string('location');
            $table->string('language');
            $table->string('is_subtitled');
            $table->string('time');
            $table->string('best_resoultion');
            $table->string('upload_date');
            $table->string('is_anoutated');
            $table->string('is_special_ad');
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
        Schema::drop('tsvideos');
    }
}
