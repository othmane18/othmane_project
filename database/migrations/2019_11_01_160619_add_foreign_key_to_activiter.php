<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToActiviter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('activiter', function (Blueprint $table) {
            $table->foreign('id_enseignant_fk')->references('id')->on('enseignant')->onDelete('cascade')->onUpdate("cascade");
            $table->foreign('id_cours_fk')->references('id')->on('cours')->onDelete('cascade')->onUpdate("cascade");
            $table->foreign('id_note_fk')->references('id')->on('note')->onDelete('cascade')->onUpdate("cascade");
            $table->foreign('id_correction_fk')->references('id')->on('correction')->onDelete('cascade')->onUpdate("cascade");
            $table->foreign('id_section_fk')->references('id')->on('section')->onDelete('cascade')->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('activiter', function (Blueprint $table) {
            $table->dropForeign('activiter_id_enseignant_fk_foreign');
            $table->dropForeign('activiter_id_cours_fk_foreign');
            $table->dropForeign('activiter_id_note_fk_foreign');
            $table->dropForeign('activiter_id_correction_fk_foreign');
            $table->dropForeign('activiter_id_section_fk_foreign');
            //
        });
    }
}
