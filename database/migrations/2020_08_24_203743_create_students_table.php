<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
          $table->id();
          $table->string('image')->nullable();
          $table->string('name');
          $table->string('student_id')->unique();
          $table->string('semester');
          $table->string('batch');
          $table->string('department');
          $table->string('email');
          $table->integer('mobile');
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
