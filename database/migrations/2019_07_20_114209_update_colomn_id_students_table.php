<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateColomnIdStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // thay đổi dữ liệu trong db
        Schema::table('students', function(Blueprint $table){
            $table->integer('class_id');
        });
    }

    /**Schemacl
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //sử sdụng dữ liệu trong db gược với up
        Schema::table('students', function(Blueprint $table){
            $table->dropColumn('class_id');
        });
    }
}
