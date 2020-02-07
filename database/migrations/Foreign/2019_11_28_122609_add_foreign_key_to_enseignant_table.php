<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyToEnseignantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('enseignant', function (Blueprint $table) {  
             $table->foreign('id_dirregional_fk')->references('id')->on('directeur_regional')->onDelete('cascade')->onUpdate("cascade");
             $table->foreign('id_agenda_fk')->references('id')->on('agenda')->onDelete('cascade')->onUpdate("cascade");
            $table->foreign('id_matiere_fk')->references('id')->on('matiere')->onDelete('cascade')->onUpdate("cascade");
            $table->foreign('id_conference_fk')->references('id')->on('conference')->onDelete('cascade')->onUpdate("cascade"); 
            $table->foreign('id_academies_fk')->references('id')->on('academiesregionale')->onDelete('cascade')->onUpdate("cascade");
            $table->foreign('id_directions_fk')->references('id')->on('directionprovinciale')->onDelete('cascade')->onUpdate("cascade");
            $table->foreign('id_niveauscolaire_fk')->references('id')->on('niveau_scolaire')->onDelete('cascade')->onUpdate("cascade");
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('enseignant', function (Blueprint $table) {
            //
            
            $table->dropForeign('enseignant_id_dirregional_fk_foreign');
             $table->dropForeign('enseignant_id_agenda_fk_foreign');
            $table->dropForeign('enseignant_id_matiere_fk_foreign');
            $table->dropForeign('enseignant_id_conference_fk_foreign');
            $table->dropForeign('enseignant_id_academies_fk_foreign');
            $table->dropForeign('enseignant_id_directions_fk_foreign');
            $table->dropForeign('enseignant_id_niveauscolaire_fk_foreign');
        });
    }
}
