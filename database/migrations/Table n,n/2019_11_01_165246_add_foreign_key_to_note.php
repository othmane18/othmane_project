<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToNote extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('note', function (Blueprint $table) {
            $table->foreign('id_enseignant_fk')->references('id')->on('enseignant')->onDelete('cascade')->onUpdate  ("cascade");
            $table->foreign('id_test_fk')->references('id')->on('test')->onDelete('cascade')->onUpdate("cascade");
            $table->foreign('id_activiter_fk')->references('id')->on('activiter')->onDelete('cascade')->onUpdate("cascade");
            $table->foreign('id_etudient_fk')->references('id')->on('etudient')->onDelete('cascade')->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('note', function (Blueprint $table) {
            $table->dropForeign('note_id_enseignant_fk_foreign');
            $table->dropForeign('note_id_test_fk_foreign');
            $table->dropForeign('note_id_activiter_fk_foreign');
            $table->dropForeign('note_id_etudient_fk_foreign');
        });
    }
}
