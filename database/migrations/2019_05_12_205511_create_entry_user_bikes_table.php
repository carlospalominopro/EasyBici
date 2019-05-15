<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntryUserBikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entry_user_bike', function (Blueprint $table) {
            
            $table->dateTime('date_entry')->primary('date_entry');
            $table->integer('cod_bu')->index('fk_cod_bu_en');
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
        Schema::dropIfExists('entry_user_bikes');
    }
}
