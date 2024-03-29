<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        //creat table
        Schema::create('classes', function (Blueprint $table) {
            $table->bigIncrements('id');//1
            $table->string('name')->nullable();// Nguyen van a
            $table->string('teacher_name')->nullable();//Nguyen thi B
            $table->string('major')->nullable();// cntt
            $table->Integer('max_student')->default(40);
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
        Schema::dropIfExists('classes');
    }
}
