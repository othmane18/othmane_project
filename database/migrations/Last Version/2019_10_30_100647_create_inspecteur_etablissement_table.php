<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInspecteurEtablissementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspecteur_etablissement', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->BigInteger('id_inspecteur_fk')->unsigned()->nullable(); ;
            $table->foreign('id_inspecteur_fk')->references('id')->on('inspecteur_regionale')->onDelete('cascade')->onUpdate("cascade");
            $table->BigInteger('id_etablissement_fk')->unsigned()->nullable(); ;
            $table->foreign('id_etablissement_fk')->references('id')->on('etablissement')->onDelete('cascade')->onUpdate("cascade"); 
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
        Schema::dropIfExists('inspecteur_etablissement');
    }
}
