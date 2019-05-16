<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BikeInformationUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('bike_information_user', function (Blueprint $table) {

            $table->integer('id_bike')->primary('id_bike');
            $table->integer('cod_bu')->index('cod_bu');
            $table->string('description_bike')->nullable(false);
            $table->string('color_bike')->nullable(false);
            $table->string('photo_bike')->nullable(false);          
            $table->string('brand_bike')->nullable(false);
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
        //
    }
}
