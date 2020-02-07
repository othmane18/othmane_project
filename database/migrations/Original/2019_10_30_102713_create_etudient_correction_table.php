<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudientCorrectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudient_correction', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id'); 
            $table->BigInteger('id_etudient_fk')->unsigned()->nullable(); 
            $table->foreign('id_etudient_fk')->references('id')->on('etudient')->onDelete('cascade')->onUpdate("cascade");
            $table->BigInteger('id_correction_fk')->unsigned()->nullable(); 
            $table->foreign('id_correction_fk')->references('id')->on('correction')->onDelete('cascade')->onUpdate("cascade");
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
        Schema::dropIfExists('etudient_correction');
    }
}
