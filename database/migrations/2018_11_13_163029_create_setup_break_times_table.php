<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSetupBreakTimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setup_break_times', function (Blueprint $table) {
            $table->increments('no');
            $table->unsignedInteger('id');
            $table->time('start');
            $table->time('end');
            $table->string('remark');
            $table->string('rest_group');
            $table->string('class_type');
            $table->string('type');
            $table->string('time_type');
            $table->string('note');
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
        Schema::dropIfExists('setup_break_times');
    }
}
