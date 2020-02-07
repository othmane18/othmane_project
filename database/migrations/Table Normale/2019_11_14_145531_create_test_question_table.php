<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_question', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id'); 
            $table->BigInteger('id_test_fk')->unsigned()->nullable(); 
            $table->foreign('id_test_fk')->references('id')->on('test')->onDelete('cascade')->onUpdate("cascade");
            $table->BigInteger('id_questions_fk')->unsigned()->nullable(); 
            $table->foreign('id_questions_fk')->references('id')->on('questions')->onDelete('cascade')->onUpdate("cascade");
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
        Schema::dropIfExists('test_question');
    }
}
