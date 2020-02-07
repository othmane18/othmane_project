<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVerifierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('verifier', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->BigInteger('id_niveauscolaire_fk')->unsigned()->nullable(); 
            $table->foreign('id_niveauscolaire_fk')->references('id')->on('niveau_scolaire')->onDelete('cascade')->onUpdate("cascade"); 
            $table->BigInteger('id_test_fk')->unsigned()->nullable(); 
            $table->foreign('id_test_fk')->references('id')->on('test')->onDelete('cascade')->onUpdate("cascade");
            $table->BigInteger('id_activiter_fk')->unsigned()->nullable(); 
            $table->foreign('id_activiter_fk')->references('id')->on('activiter')->onDelete('cascade')->onUpdate("cascade");

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
        Schema::dropIfExists('verifier');
    }
}
