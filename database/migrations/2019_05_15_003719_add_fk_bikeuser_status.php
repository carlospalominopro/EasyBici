<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkBikeuserStatus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('statuses', function (Blueprint $table) {
            
            $table->foreign('cod_bu')->references('cod_bu')->on('bike_users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('id_bike')->references('id_bike')->on('bike_information_user')->onUpdate('RESTRICT')->onDelete('RESTRICT');  
            
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
