<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInteragirTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interagir', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->string('nature_interagir'); 
            $table->BigInteger('id_cours_fk')->unsigned()->nullable(); 
            $table->foreign('id_cours_fk')->references('id')->on('cours')->onDelete('cascade')->onUpdate("cascade");
            $table->BigInteger('id_correction_fk')->unsigned()->nullable(); 
            $table->foreign('id_correction_fk')->references('id')->on('correction')->onDelete('cascade')->onUpdate("cascade");
            $table->BigInteger('id_inspecteur_fk')->unsigned()->nullable(); 
            $table->foreign('id_inspecteur_fk')->references('id')->on('inspecteur_regionale')->onDelete('cascade')->onUpdate("cascade");
            $table->BigInteger('id_seance_fk')->unsigned()->nullable(); 
            $table->foreign('id_seance_fk')->references('id')->on('seance')->onDelete('cascade')->onUpdate("cascade");
            $table->BigInteger('id_gestionsalle_fk')->unsigned()->nullable(); 
            $table->foreign('id_gestionsalle_fk')->references('id')->on('gestion_salle')->onDelete('cascade')->onUpdate("cascade"); 
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
        Schema::dropIfExists('interagir');
    }
}
