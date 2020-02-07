<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToGestionSalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('gestion_salle', function (Blueprint $table) {
            $table->foreign('id_dirregion_fk')->references('id')->on('directeur_regional')->onDelete('cascade')->onUpdate("cascade");
            $table->foreign('id_dirprovinciale_fk')->references('id')->on('directeur_provinciale')->onDelete('cascade')->onUpdate("cascade");
            $table->foreign('id_seance_fk')->references('id')->on('seance')->onDelete('cascade')->onUpdate("cascade");
            $table->foreign('id_salle_fk')->references('id')->on('salle')->onDelete('cascade')->onUpdate("cascade"); 
            $table->foreign('id_conference_fk')->references('id')->on('conference')->onDelete('cascade')->onUpdate("cascade");
            $table->foreign('id_academies_fk')->references('id')->on('academiesregionale')->onDelete('cascade')->onUpdate("cascade");
            $table->foreign('id_directions_fk')->references('id')->on('directionprovinciale')->onDelete('cascade')->onUpdate("cascade");  
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('gestion_salle', function (Blueprint $table) {
            $table->dropForeign('gestion_salle_id_dirregion_fk_foreign'); 
            $table->dropForeign('gestion_salle_id_dirprovinciale_fk_foreign');
            $table->dropForeign('gestion_salle_id_seance_fk_foreign');
            $table->dropForeign('gestion_salle_id_salle_fk_foreign');
            $table->dropForeign('gestion_salle_id_conference_fk_foreign'); 
            $table->dropForeign('etudient_id_academies_fk_foreign');
            $table->dropForeign('etudient_id_directions_fk_foreign');
        });
    }
}
