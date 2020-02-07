<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInspecteurRegionaleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspecteur_regionale', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->string('role');
            $table->string('nom_inspecteur');
            $table->string('prenom_inspecteur');
            $table->string('email_inspecteur'); 
            $table->string('telephone');
            $table->string('adresse_inspecteur'); 
            $table->string('featured');
            $table->BigInteger('id_matiere_fk')->unsigned()->nullable(); 
            $table->BigInteger('id_agenda_fk')->unsigned()->nullable(); 
            $table->BigInteger('id_dirregion_fk')->unsigned()->nullable(); 
            $table->BigInteger('id_conference_fk')->unsigned()->nullable(); 
            $table->BigInteger('id_academies_fk')->unsigned()->nullable(); 
            $table->BigInteger('id_directions_fk')->unsigned()->nullable(); 
            $table->string('password'); 
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
        Schema::dropIfExists('inspecteur_regionale');
    }
}
