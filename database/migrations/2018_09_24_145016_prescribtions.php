<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Prescribtions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Prescribtions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nid');
            $table->string('Diseaseinfo');
            $table->string('Medicine');
            $table->string('DrID');
            $table->string('DrName');
            $table->string('Date');
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
        Schema::dropIfExists('Prescribtions');
    }
}
