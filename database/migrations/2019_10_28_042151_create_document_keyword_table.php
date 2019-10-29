<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentKeywordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('document_keyword', function (Blueprint $table) {
            $table->unsignedInteger('document_id');
            $table->unsignedInteger('keyword_id');
            $table->foreign('document_id')->references('id')->on('documents')
                ->onDelete('cascade');
            $table->foreign('keyword_id')->references('id')->on('keywords')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('document_keyword');
    }
}
