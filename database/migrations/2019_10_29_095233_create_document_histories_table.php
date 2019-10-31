<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('document_histories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('document_id');
            $table->foreign('document_id')->references('id')->on('documents');
            $table->char('title',200);
            $table->text('abstract');
            $table->char('filename',120);
            $table->char('author_name',120);
            $table->unsignedInteger('owner_id');
            $table->foreign('owner_id')->references('id')->on('students')
                ->onDelete('cascade');
            $table->unsignedInteger('major_id');
            $table->foreign('major_id')->references('id')->on('majors')
                ->onDelete('cascade');
            $table->unsignedInteger('submajor_id');
            $table->foreign('submajor_id')->references('id')->on('submajors')
                ->onDelete('cascade');
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
        Schema::dropIfExists('document_history');
    }
}
