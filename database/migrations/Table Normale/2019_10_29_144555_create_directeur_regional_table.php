<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDirecteurRegionalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directeur_regional', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->string('role');
            $table->string('nom_directeurregional');
            $table->string('prenom_directeurregional');
            $table->string('email');
            $table->string('telephone');
            $table->string('featured'); 
            $table->string('affectation');
            $table->string('adresse_directeurregional');
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
        Schema::dropIfExists('directeur_regional');
    }
}
