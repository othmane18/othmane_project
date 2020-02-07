<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salle', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->string('capacite_salle');
            $table->string('num_salle');  
            $table->BigInteger('id_dirregion_fk')->unsigned()->nullable(); 
            $table->BigInteger('id_dirprovinciale_fk')->unsigned()->nullable(); 
            $table->BigInteger('id_seance_fk')->unsigned()->nullable(); 
            $table->BigInteger('id_etablissement_fk')->unsigned()->nullable();  
            $table->BigInteger('id_gestionsalle_fk')->unsigned()->nullable();  
            $table->BigInteger('id_agenda_fk')->unsigned()->nullable();   
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
        Schema::dropIfExists('salle');
    }
}
