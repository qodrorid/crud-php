<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_student', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('course_id')->unsigned();
            $table->integer('student_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('course_student', function (Blueprint $table) {
            $table->foreign('course_id')
                ->references('id')
                ->on('courses')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        Schema::table('course_student', function (Blueprint $table) {
            $table->foreign('student_id')
                ->references('id')
                ->on('students')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_student');
    }
}
