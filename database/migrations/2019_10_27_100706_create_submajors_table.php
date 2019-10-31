<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubmajorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submajors', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('major_id');
            $table->foreign('major_id')->references('id')->on('majors')
                ->onDelete('cascade');
            $table->char('name', 50);
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
        Schema::dropIfExists('submajors');
    }
}
