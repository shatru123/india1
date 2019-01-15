<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollegesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colleges', function (Blueprint $table) {
            $table->increments('id');
            $table->string('institute_name')->nullable();
            $table->string('program')->nullable();
            $table->string('shift')->nullable();
            $table->string('timing')->nullable();
            $table->string('level_of_course')->nullable();
            $table->string('courses')->nullable();
            $table->string('university_id')->nullable();
            $table->string('state_id')->nullable();
            $table->string('city_id')->nullable();
            $table->string('nacc_grade')->nullable();
            $table->string('nba_grade')->nullable();
            $table->string('website')->nullable();
            $table->string('photo')->nullable();
            $table->string('established_year')->nullable();
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
        Schema::dropIfExists('colleges');
    }
}
