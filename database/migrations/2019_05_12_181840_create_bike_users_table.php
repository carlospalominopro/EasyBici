<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBikeUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bike_users', function (Blueprint $table) {
            $table->integer('cod_bu')->primary('cod_bu');
            $table->string('name_bu')->nullable(false);
            $table->string('surname_bu')->nullable(false);
            $table->string('email')->nullable(false);
            $table->string('photo_bu')->nullable(false);
            $table->integer('id_type')->nullable(false);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bici_users');
    }
}
