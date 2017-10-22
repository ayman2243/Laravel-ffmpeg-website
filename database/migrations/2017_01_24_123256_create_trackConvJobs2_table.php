<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrackConvJobs2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trackConvJobs2', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('uid');
            $table->string('vpath');
            $table->string('uniqe_name');
            $table->string('is_done')->default('false');
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
        Schema::drop('trackConvJobs2');
    }
}
