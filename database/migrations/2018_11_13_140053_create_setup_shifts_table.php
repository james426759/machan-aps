<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSetupShiftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setup_shifts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('type');
            $table->time('work_on');
            $table->time('work_off');
            $table->string('rest_group');
            $table->string('remark');
            $table->time('afternoon_work_on')->nullable();
            $table->time('afternoon_work_off')->nullable();
            $table->unsignedInteger('total_rest_time');
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
        Schema::dropIfExists('setup_shifts');
    }
}
