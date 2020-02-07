<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToSalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('salle', function (Blueprint $table) {
            $table->foreign('id_dirregion_fk')->references('id')->on('directeur_regional')->onDelete('cascade')->onUpdate("cascade");
            $table->foreign('id_dirprovinciale_fk')->references('id')->on('directeur_provinciale')->onDelete('cascade')->onUpdate("cascade");
            $table->foreign('id_seance_fk')->references('id')->on('seance')->onDelete('cascade')->onUpdate("cascade");
            $table->foreign('id_etablissement_fk')->references('id')->on('etablissement')->onDelete('cascade')->onUpdate("cascade");
            $table->foreign('id_gestionsalle_fk')->references('id')->on('gestion_salle')->onDelete('cascade')->onUpdate("cascade");
            $table->foreign('id_agenda_fk')->references('id')->on('agenda')->onDelete('cascade')->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('salle', function (Blueprint $table) {
            $table->dropForeign('salle_id_dirregion_fk_foreign');
            $table->dropForeign('salle_id_dirprovinciale_fk_foreign');
            $table->dropForeign('salle_id_seance_fk_foreign');
            $table->dropForeign('salle_id_etablissement_fk_foreign');
            $table->dropForeign('salle_id_gestionsalle_fk_foreign');
            $table->dropForeign('salle_id_agenda_fk_foreign');
        
        });
    }
}
