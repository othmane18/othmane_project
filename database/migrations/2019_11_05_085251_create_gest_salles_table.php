<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGestSallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gest_salles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom_gestionnaire');
            $table->string('email_gestionnaire')->unique();
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('is_super')->default(false);
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
        Schema::dropIfExists('gest_salles');
    }
}
