<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkBikeInfoUserBikeUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bike_information_user', function (Blueprint $table) {
            
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
