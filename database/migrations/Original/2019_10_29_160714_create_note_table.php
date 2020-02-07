<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('note', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->dateTime('date_note');
            $table->float('valeur_note'); 
            $table->BigInteger('id_enseignant_fk')->unsigned()->nullable();   
            $table->BigInteger('id_test_fk')->unsigned()->nullable(); 
            $table->BigInteger('id_activiter_fk')->unsigned()->nullable(); 
            $table->BigInteger('id_etudient_fk')->unsigned()->nullable();  
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
        Schema::dropIfExists('note');
    }
}
