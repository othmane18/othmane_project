<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->string('nom_admin');
            $table->string('prenom_admin');
            $table->string('email')->unique();
            $table->string('telephone');
            $table->string('adresse');
            $table->string('password');
            $table->string('featured');  
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
        Schema::dropIfExists('admin');
    }
}
