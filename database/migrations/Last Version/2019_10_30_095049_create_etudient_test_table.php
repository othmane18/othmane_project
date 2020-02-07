<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudientTestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudient_test', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->BigInteger('id_etudient_fk')->unsigned()->nullable(); ;
            $table->foreign('id_etudient_fk')->references('id')->on('etudient')->onDelete('cascade')->onUpdate("cascade");
            $table->BigInteger('id_test_fk')->unsigned()->nullable(); ;
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
        Schema::dropIfExists('etudient_test');
    }
}
