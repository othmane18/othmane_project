<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendaSeanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agenda_seance', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->BigInteger('id_agenda_fk')->unsigned()->nullable(); 
            $table->foreign('id_agenda_fk')->references('id')->on('agenda')->onDelete('cascade')->onUpdate("cascade");
            $table->BigInteger('id_seance_fk')->unsigned()->nullable(); 
            $table->foreign('id_seance_fk')->references('id')->on('seance')->onDelete('cascade')->onUpdate("cascade"); 
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
        Schema::dropIfExists('agenda_seance');
    }
}
