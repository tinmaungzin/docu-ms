<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateRelatedDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('related_documents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('document_id');
            $table->unsignedInteger('related_document_id');
            $table->foreign('document_id')->references('id')->on('documents')->onDelete('cascade')
                ->onUpdate('cascade');
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
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Schema::dropIfExists('related_documents');
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
