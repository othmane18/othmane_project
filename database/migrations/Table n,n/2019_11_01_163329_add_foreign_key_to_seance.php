<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToSeance extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('seance', function (Blueprint $table) {
             $table->foreign('id_dirregion_fk')->references('id')->on('directeur_regional')->onDelete('cascade')->onUpdate("cascade");
            $table->foreign('id_enseignant_fk')->references('id')->on('enseignant')->onDelete('cascade')->onUpdate("cascade");
            $table->foreign('id_cours_fk')->references('id')->on('cours')->onDelete('cascade')->onUpdate("cascade");
            $table->foreign('id_gestionsalle_fk')->references('id')->on('gestion_salle')->onDelete('cascade')->onUpdate("cascade");
            $table->foreign('id_dirprovinciale_fk')->references('id')->on('directeur_provinciale')->onDelete('cascade')->onUpdate("cascade");
            $table->foreign('id_niveauscolaire_fk')->references('id')->on('niveau_scolaire')->onDelete('cascade')->onUpdate("cascade");
            $table->foreign('id_admin_fk')->references('id')->on('admin')->onDelete('cascade')->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('seance', function (Blueprint $table) {
             //$table->dropForeign('seance_id_dirregion_fk_foreign');
            //$table->dropForeign('seance_id_enseignant_fk_foreign');
            //$table->dropForeign('seance_id_cours_fk_foreign');
            //$table->dropForeign('seance_id_gestionsalle_fk_foreign');
            //$table->dropForeign('seance_id_dirprovinciale_fk_foreign');
            $table->dropForeign('seance_id_niveauscolaire_fk_foreign');
            $table->dropForeign('seance_id_admin_fk_foreign');

        });
    }
}
