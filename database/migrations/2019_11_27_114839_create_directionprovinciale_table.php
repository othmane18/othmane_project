<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDirectionprovincialeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directionprovinciale', function (Blueprint $table) {
             $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->string('nomdirectionprovinciale');
            $table->BigInteger('id_academies_fk')->unsigned()->nullable(); 
            $table->foreign('id_academies_fk')->references('id')->on('academiesregionale')->onDelete('cascade')->onUpdate("cascade");
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
        Schema::dropIfExists('directionprovinciale');
    }
}
