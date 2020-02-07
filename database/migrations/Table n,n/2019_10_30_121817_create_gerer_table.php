<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGererTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gerer', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id'); 
            $table->BigInteger('id_enseignant_fk')->unsigned()->nullable(); 
            $table->foreign('id_enseignant_fk')->references('id')->on('enseignant')->onDelete('cascade')->onUpdate("cascade");
            $table->BigInteger('id_admin_fk')->unsigned()->nullable(); 
            $table->foreign('id_admin_fk')->references('id')->on('admin')->onDelete('cascade')->onUpdate("cascade");
            $table->BigInteger('id_etudient_fk')->unsigned()->nullable(); 
            $table->foreign('id_etudient_fk')->references('id')->on('etudient')->onDelete('cascade')->onUpdate("cascade");
            $table->BigInteger('id_cours_fk')->unsigned()->nullable(); 
            $table->foreign('id_cours_fk')->references('id')->on('cours')->onDelete('cascade')->onUpdate("cascade");
            $table->BigInteger('id_etablissement_fk')->unsigned()->nullable(); 
            $table->foreign('id_etablissement_fk')->references('id')->on('etablissement')->onDelete('cascade')->onUpdate("cascade");
            $table->BigInteger('id_correction_fk')->unsigned()->nullable(); 
            $table->foreign('id_correction_fk')->references('id')->on('correction')->onDelete('cascade')->onUpdate("cascade"); 
            $table->BigInteger('id_dirprovinciale_fk')->unsigned()->nullable(); 
            $table->foreign('id_dirprovinciale_fk')->references('id')->on('directeur_provinciale')->onDelete('cascade')->onUpdate("cascade");
            $table->BigInteger('id_parent_fk')->unsigned()->nullable(); 
            $table->foreign('id_parent_fk')->references('id')->on('parent')->onDelete('cascade')->onUpdate("cascade"); 
            $table->BigInteger('id_salle_fk')->unsigned()->nullable(); 
            $table->foreign('id_salle_fk')->references('id')->on('salle')->onDelete('cascade')->onUpdate("cascade");  
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
        Schema::dropIfExists('gerer');
    }
}
