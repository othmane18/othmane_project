<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGestionSalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gestion_salle', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->string('role');
            $table->string('nom_gestionsalle');
            $table->string('prenom_gestionsalle');
            $table->string('email');
            $table->string('adresse_gestionsalle');
            $table->string('password');
            $table->BigInteger('id_dirregion_fk')->unsigned()->nullable();   
            $table->BigInteger('id_dirprovinciale_fk')->unsigned()->nullable(); 
            $table->BigInteger('id_seance_fk')->unsigned()->nullable(); 
            $table->BigInteger('id_salle_fk')->unsigned()->nullable();  
            $table->string('featured');    
            $table->BigInteger('id_conference_fk')->unsigned()->nullable(); 
            $table->BigInteger('id_academies_fk')->unsigned()->nullable(); 
            $table->BigInteger('id_directions_fk')->unsigned()->nullable(); 
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
        Schema::dropIfExists('gestion_salle');
    }
}
