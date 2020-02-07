<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToReponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reponses', function (Blueprint $table) {
            
            $table->foreign('id_questions_fk')->references('id')->on('questions')->onDelete('cascade')->onUpdate("cascade");
            $table->foreign('id_correction_fk')->references('id')->on('correction')->onDelete('cascade')->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reponses', function (Blueprint $table) {
            $table->dropForeign('reponses_id_questions_fk_foreign');
            $table->dropForeign('reponses_id_correction_fk_foreign');
        });
    }
}
