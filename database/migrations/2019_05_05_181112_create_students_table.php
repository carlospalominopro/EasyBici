<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            
            $table->bigInteger('cod_st')->primary('cod_st');
            $table->string('name_st');
            $table->string('surname_st');
            $table->string('email');
            $table->string('photo_st');
            $table->integer('status_id')->usigned();
            $table->foreign('status_id')->references('status_id')->on('statuses');
            $table->timestamps();
            $table->softDeletes();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student');
    }
}
