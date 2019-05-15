<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkBikeuserExit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('exit_user_bike', function (Blueprint $table) {
            
            $table->foreign('cod_bu')->references('cod_bu')->on('bike_users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
                    
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
