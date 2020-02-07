<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFiliereTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filiere', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id'); 
            $table->string('libelle_filiere'); 
            $table->BigInteger('id_niveau_fk')->unsigned()->nullable(); 
            $table->foreign('id_niveau_fk')->references('id')->on('niveau_scolaire')->onDelete('cascade')->onUpdate("cascade");   
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
        Schema::dropIfExists('filiere');
    }
}
