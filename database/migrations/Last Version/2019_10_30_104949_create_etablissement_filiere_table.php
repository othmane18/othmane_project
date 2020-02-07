<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtablissementFiliereTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etablissement_filiere', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->BigInteger('id_etablissement_fk')->unsigned()->nullable(); 
            $table->foreign('id_etablissement_fk')->references('id')->on('etablissement')->onDelete('cascade')->onUpdate("cascade");
            $table->BigInteger('id_filiere_fk')->unsigned()->nullable(); 
            $table->foreign('id_filiere_fk')->references('id')->on('filiere')->onDelete('cascade')->onUpdate("cascade");
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
        Schema::dropIfExists('etablissement_filiere');
    }
}
