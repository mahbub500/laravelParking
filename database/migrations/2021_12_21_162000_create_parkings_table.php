<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParkingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parkings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('parking_code');
            $table->integer('category_id');
            $table->integer('rate_id');
            $table->integer('slot_id'); 
            $table->string('in_time'); 
            $table->string('out_time'); 
            $table->string('total_time'); 
            $table->string('earned_amount'); 
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
        Schema::dropIfExists('parkings');
    }
}
