<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seance', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->BigIncrements('id');
            $table->dateTime('duree_seance'); 
            $table->BigInteger('id_dirregion_fk')->unsigned()->nullable(); 
            $table->BigInteger('id_enseignant_fk')->unsigned()->nullable(); 
            $table->BigInteger('id_cours_fk')->unsigned()->nullable(); 
            $table->BigInteger('id_gestionsalle_fk')->unsigned()->nullable(); 
            $table->BigInteger('id_dirprovinciale_fk')->unsigned()->nullable(); 
            $table->BigInteger('id_niveauscolaire_fk')->unsigned()->nullable();  
            $table->BigInteger('id_admin_fk')->unsigned()->nullable(); 
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
        Schema::dropIfExists('seance');
    }
}
