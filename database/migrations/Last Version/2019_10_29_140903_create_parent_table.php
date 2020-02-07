<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parent', function (Blueprint $table) {
            $table->engine="InnoDB"; 
            $table->bigIncrements('id');
            $table->string('role');
            $table->string('nom_parent');
            $table->string('prenom_parent');
            $table->string('telephone');
            $table->string('adresse_parent');
            $table->string('photo_parent');
            $table->string('password');
            $table->string('email')->unique();  
            $table->BigInteger('id_dirregion_fk')->unsigned()->nullable(); 
            $table->BigInteger('id_dirprovinciale_fk')->unsigned()->nullable(); 
            $table->BigInteger('id_conference_fk')->unsigned()->nullable(); 
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
        Schema::dropIfExists('parent');
    }
}
