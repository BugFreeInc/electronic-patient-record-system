<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SellHistorys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SellHistorys', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nid');
            $table->string('PhID');
            $table->string('PhName');
            $table->string('MedicineInfo');
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
        Schema::dropIfExists('SellHistorys');
    }
}
