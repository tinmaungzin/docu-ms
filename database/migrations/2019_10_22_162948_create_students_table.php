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
            $table->increments('id');
            $table->char('name', 120);
            $table->char('school_mail',120)->unique();
            $table->char('password',120);
            $table->char('student_id',120);
            $table->unsignedInteger('major_id');
            $table->foreign('major_id')->references('id')->on('majors')
                ->onDelete('cascade');
            $table->char('roll_no',120);
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
