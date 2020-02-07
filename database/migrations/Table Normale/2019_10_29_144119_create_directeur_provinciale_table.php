<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDirecteurProvincialeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directeur_provinciale', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->string('role');
            $table->string('nom_directeurprovinciale');
            $table->string('prenom_directeurprovinciale');
            $table->string('email');
            $table->string('telephone');
            $table->string('featured'); 
            $table->BigInteger('id_dirregion_fk')->unsigned()->nullable(); 
            $table->string('adresse_directeurprovinciale');
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
        Schema::dropIfExists('directeur_provinciale');
    }
}
