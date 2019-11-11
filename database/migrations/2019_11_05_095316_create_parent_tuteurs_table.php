<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParentTuteursTable extends Migration
{
    /**
     * Run the migrations. 
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parent_tuteurs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom_parent');
            $table->string('email_parent')->unique();
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('is_parent')->default(false);
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
        Schema::dropIfExists('parent_tuteurs');
    }
}
