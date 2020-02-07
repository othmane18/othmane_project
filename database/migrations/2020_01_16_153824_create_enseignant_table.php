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
            $table->string('role')->nullable();  
            $table->string('nom_enseignant');
            $table->string('prenom_enseignant');
            $table->string('tele_enseignant');
            $table->string('email')->unique(); 
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
            $table->BigInteger('id_filiere_fk')->unsigned()->nullable();
            $table->foreign('id_dirregional_fk')->references('id')->on('directeur_regional')->onDelete('cascade')->onUpdate("cascade");
            $table->foreign('id_agenda_fk')->references('id')->on('agenda')->onDelete('cascade')->onUpdate("cascade");
            $table->foreign('id_matiere_fk')->references('id')->on('matiere')->onDelete('cascade')->onUpdate("cascade");
            $table->foreign('id_conference_fk')->references('id')->on('conference')->onDelete('cascade')->onUpdate("cascade"); 
            $table->foreign('id_academies_fk')->references('id')->on('academiesregionale')->onDelete('cascade')->onUpdate("cascade");
            $table->foreign('id_directions_fk')->references('id')->on('directionprovinciale')->onDelete('cascade')->onUpdate("cascade");
            $table->foreign('id_niveauscolaire_fk')->references('id')->on('niveau_scolaire')->onDelete('cascade')->onUpdate("cascade");
            $table->foreign('id_filiere_fk')->references('id')->on('filiere')->onDelete('cascade')->onUpdate("cascade");
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
