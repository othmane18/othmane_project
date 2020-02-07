<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInspecteurTest extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspecteur_test', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->BigInteger('id_inspecteur_fk')->unsigned()->nullable();  
            $table->foreign('id_inspecteur_fk')->references('id')->on('inspecteur_regionale')->onDelete('cascade')->onUpdate("cascade");
            $table->BigInteger('id_test_fk')->unsigned()->nullable(); 
            $table->foreign('id_test_fk')->references('id')->on('test')->onDelete('cascade')->onUpdate("cascade"); 
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
        Schema::dropIfExists('inspecteur_test');
    }
}
