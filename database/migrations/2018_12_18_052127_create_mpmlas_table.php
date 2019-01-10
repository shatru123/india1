<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMpmlasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mpmlas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('party');
            $table->string('type');
            $table->string('gender');
            $table->string('city_id');
            $table->string('state_id');
            $table->string('history')->nullable();
            $table->string('works')->nullable();
            $table->string('bio')->nullable();
            $table->string('photo')->nullable();
            $table->string('avg_rating')->nullable();
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
        Schema::dropIfExists('mpmlas');
    }


}
