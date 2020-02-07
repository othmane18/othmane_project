<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDirecteurRegionalProvincialeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directeur_regional_provinciale', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->BigInteger('id_dirregional_fk')->unsigned()->nullable(); 
            $table->foreign('id_dirregional_fk')->references('id')->on('directeur_regional')->onDelete('cascade')->onUpdate("cascade");
            $table->BigInteger('id_dirprovinciale_fk')->unsigned()->nullable(); 
            $table->foreign('id_dirprovinciale_fk')->references('id')->on('directeur_provinciale')->onDelete('cascade')->onUpdate("cascade");
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
        Schema::dropIfExists('directeur_regional_provinciale');
    }
}
