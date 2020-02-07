<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudient', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->string('role'); 
            $table->string('nom_etudient');
            $table->string('prenom_etudient');
            $table->string('sexe');
            $table->string('ville_residence'); 
	        $table->date('date_naissance'); 
            $table->string('ville_origine');
            $table->string('code_massar');
            $table->string('adresse_etudient');
            $table->string('email')->unique();
            $table->string('telephone');
            $table->string('password');
            $table->BigInteger('id_niveauscolaire_fk')->unsigned()->nullable(); 
            $table->BigInteger('id_agenda_fk')->unsigned()->nullable();
            $table->BigInteger('id_parent_fk')->unsigned()->nullable();
            $table->BigInteger('id_dirregion_fk')->unsigned()->nullable();
            $table->BigInteger('id_conference_fk')->unsigned()->nullable();
            $table->BigInteger('id_academies_fk')->unsigned()->nullable();
            $table->BigInteger('id_directions_fk')->unsigned()->nullable(); 
            $table->string('photo_etudient');
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
        Schema::dropIfExists('etudient');
    }
}
