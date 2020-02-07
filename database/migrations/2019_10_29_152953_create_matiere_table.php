<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatiereTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matiere', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->string('liblle_matiere');
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
        Schema::dropIfExists('matiere');
    }
}
