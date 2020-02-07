<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cours', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->string('libelle_cours');
            $table->dateTime('date_creation'); 
            $table->BigInteger('id_matiere_fk')->unsigned()->nullable(); 
            $table->BigInteger('id_dirregion_fk')->unsigned()->nullable(); 
            $table->BigInteger('id_enseignant_fk')->unsigned()->nullable();   
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
        Schema::dropIfExists('cours');
    }
}
