<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToAgenda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('agenda', function (Blueprint $table) {
            $table->foreign('id_parent_fk')->references('id')->on('parent')->onDelete('cascade')->onUpdate("cascade");
            $table->foreign('id_salle_fk')->references('id')->on('salle')->onDelete('cascade')->onUpdate("cascade"); 
            $table->foreign('id_enseignant_fk')->references('id')->on('enseignant')->onDelete('cascade')->onUpdate("cascade");
            $table->foreign('id_inspecteur_fk')->references('id')->on('inspecteur_regionale')->onDelete('cascade')->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('agenda', function (Blueprint $table) {
            $table->dropForeign('agenda_id_parent_fk_foreign');
            $table->dropForeign('agenda_id_salle_fk_foreign');
            $table->dropForeign('agenda_id_enseignant_fk_foreign');
            $table->dropForeign('agenda_id_inspecteur_fk_foreign'); 
        });
    }
}
