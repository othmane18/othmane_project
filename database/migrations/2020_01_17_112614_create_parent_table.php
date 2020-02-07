<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parent', function (Blueprint $table) {
            $table->engine="InnoDB"; 
            $table->bigIncrements('id');
            $table->string('role');
            $table->string('nom_parent');
            $table->string('prenom_parent');
            $table->string('telephone');
            $table->string('adresse_parent');
            $table->string('featured');
            $table->string('password');
            $table->string('email')->unique();  
            $table->BigInteger('id_academies_fk')->unsigned()->nullable(); 
            $table->BigInteger('id_dirregion_fk')->unsigned()->nullable(); 
            $table->BigInteger('id_directions_fk')->unsigned()->nullable(); 
            $table->BigInteger('id_conference_fk')->unsigned()->nullable(); 
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
        Schema::dropIfExists('parent');
    }
}
