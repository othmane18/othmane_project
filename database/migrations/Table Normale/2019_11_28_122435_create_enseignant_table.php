<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnseignantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enseignant', function (Blueprint $table) {
            $table->engine="InnoDB"; 
            $table->bigIncrements('id'); 
            $table->string('role');  
            $table->string('nom_enseignant');
            $table->string('prenom_enseignant');
            $table->string('tele_enseignant');
            $table->string('email_enseignant'); 
	        $table->string('adresse_enseignant'); 
            $table->string('featured'); 
            $table->string('password');
            $table->BigInteger('id_matiere_fk')->unsigned()->nullable(); 
            $table->BigInteger('id_agenda_fk')->unsigned()->nullable(); 
            $table->BigInteger('id_dirregional_fk')->unsigned()->nullable(); 
            $table->BigInteger('id_conference_fk')->unsigned()->nullable();  
            $table->BigInteger('id_academies_fk')->unsigned()->nullable(); 
            $table->BigInteger('id_directions_fk')->unsigned()->nullable();  
            $table->BigInteger('id_niveauscolaire_fk')->unsigned()->nullable();  
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
        Schema::dropIfExists('enseignant');
    }
}
