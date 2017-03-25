<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('fb');
            $table->string('school');
            $table->string('gender');
            $table->string('birth');
            $table->string('identity');
            $table->string('blood');
            $table->string('email');
            $table->string('cellphone');
            $table->string('phone');
            $table->string('address');
            $table->string('parentname');
            $table->string('parentphone');
            $table->string('relation');
            $table->string('size');
            $table->string('group');
            $table->string('groupname');
            $table->string('food');
            $table->string('illness');
            $table->string('selfintro');
            $table->string('motivation');
            $table->string('getnewsfrom');
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
        Schema::dropIfExists('students');
    }
}
