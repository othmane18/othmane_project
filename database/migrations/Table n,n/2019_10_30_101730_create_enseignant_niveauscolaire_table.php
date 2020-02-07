<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnseignantNiveauscolaireTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enseignant_niveauscolaire', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->BigInteger('id_enseignant_fk')->unsigned()->nullable();  
            $table->foreign('id_enseignant_fk')->references('id')->on('enseignant')->onDelete('cascade')->onUpdate("cascade");
            $table->BigInteger('id_niveauscolaire_fk')->unsigned()->nullable(); 
            $table->foreign('id_niveauscolaire_fk')->references('id')->on('niveau_scolaire')->onDelete('cascade')->onUpdate("cascade"); 
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
        Schema::dropIfExists('enseignant_niveauscolaire');
    }
}
