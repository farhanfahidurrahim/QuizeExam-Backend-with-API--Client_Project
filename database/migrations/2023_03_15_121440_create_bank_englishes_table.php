<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_englishes', function (Blueprint $table) {
            $table->id();
            $table->string('subject_name');
            $table->unsignedBigInteger('topic_name');
            $table->string('title');
            $table->string('pdf_file_path');
            $table->timestamps();
            $table->foreign('topic_name')->references('id')->on('category_bank_englishes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bank_englishes');
    }
};
