<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToSection extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('section', function (Blueprint $table) {
            $table->foreign('id_cours_fk')->references('id')->on('cours')->onDelete('cascade')->onUpdate("cascade");
            $table->foreign('id_test_fk')->references('id')->on('test')->onDelete('cascade')->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('section', function (Blueprint $table) {
            //
            $table->dropForeign('section_id_cours_fk_foreign');
            $table->dropForeign('section_id_test_fk_foreign');
        });
    }
}
