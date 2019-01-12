<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('f_name');
            $table->string('m_name')->nullable();
            $table->string('l_name')->nullable();
            $table->string('dob')->nullable();
            $table->string('email')->nullable();
            $table->string('mobile')->nullable();
            $table->string('gender')->nullable();
            $table->string('mother_tounge')->nullable();
            $table->string('address')->nullable();
            $table->string('state_id')->nullable();
            $table->string('city')->nullable();
            $table->string('district')->nullable();
            $table->string('pin')->nullable();
            $table->string('pan')->nullable();
            $table->string('adhar')->nullable();
            $table->string('def')->nullable();
            $table->string('ph')->nullable();
            $table->string('is_agry')->nullable();
            $table->string('education')->nullable();
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
        Schema::dropIfExists('jobs');
    }
}
