<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisaEnrollmentsTable extends Migration
{
  public function up()
  {
    Schema::create('visa_enrollments', function (Blueprint $table) {
      $table->id();
      $table->string('name');
      $table->string('email');
      $table->string('phone');
      $table->string('country');
      $table->string('course');
      $table->date('course_date');
      $table->string('batch');
      $table->boolean('is_show')->default(false);
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('visa_enrollments');
  }
}
