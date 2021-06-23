<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
             $table->string('title');
             $table->string('image');
             $table->string('price');
             $table->string('size');
             $table->string('dispay');
             $table->string('gps_cellular')->nullable();
             $table->string('blood_oxigen_measurer')->nullable();
             $table->string('ecg_measurer')->nullable();
             $table->string('heart_rate_measurer')->nullable();
             $table->string('family_setup')->nullable();
             $table->string('water_resistance')->nullable();
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
        Schema::dropIfExists('products');
    }
}
