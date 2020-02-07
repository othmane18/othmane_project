<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActiviterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activiter', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->string('libelle_activiter'); 
            $table->dateTime('duree_activiter');
            $table->BigInteger('id_enseignant_fk')->unsigned()->nullable(); 
            $table->BigInteger('id_cours_fk')->unsigned()->nullable(); 
            $table->BigInteger('id_note_fk')->unsigned()->nullable(); 
            $table->BigInteger('id_correction_fk')->unsigned()->nullable(); 
            $table->BigInteger('id_section_fk')->unsigned()->nullable();  
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
        Schema::dropIfExists('activiter');
    }
}
