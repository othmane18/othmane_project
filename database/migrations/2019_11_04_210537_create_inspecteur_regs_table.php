<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInspecteurRegsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspecteur_regs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom_inspect');
            $table->string('email_inspect')->unique();
            $table->string('password');
            $table->boolean('is_inspect')->default(false);
            $table->rememberToken();
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
        Schema::dropIfExists('inspecteur_regs');
    }
}
