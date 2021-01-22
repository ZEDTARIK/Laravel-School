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
            // $table->tinyIncrements('student_id');
            $table->unsignedInteger('student_number');
            $table->string('firstname', 100);
            $table->string('lastname', 100);
            $table->tinyInteger('age');
            $table->integer('class_id');
            $table->string('parents', 100);
            $table->string('tel', 20);
            $table->tinyInteger('student_typeid', 0)->default(0);
            $table->unsignedDecimal('registration_fee', 8, 2);
            $table->string('img', 255);
            $table->tinyInteger('status_id')->default(0);
            $table->year('school_years_id');
            $table->date('validate_date')->nullable();
            $table->date('registration_date')->nullable();
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
