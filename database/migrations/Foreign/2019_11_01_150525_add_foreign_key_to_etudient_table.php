<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToEtudientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('etudient', function (Blueprint $table) {
            $table->foreign('id_niveauscolaire_fk')->references('id')->on('niveau_scolaire')->onDelete('cascade')->onUpdate("cascade");
            $table->foreign('id_agenda_fk')->references('id')->on('agenda')->onDelete('cascade')->onUpdate("cascade");
            $table->foreign('id_conference_fk')->references('id')->on('conference')->onDelete('cascade')->onUpdate("cascade"); 
            $table->foreign('id_parent_fk')->references('id')->on('parent')->onDelete('cascade')->onUpdate("cascade");
            $table->foreign('id_dirregion_fk')->references('id')->on('directeur_regional')->onDelete('cascade')->onUpdate("cascade");
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
        Schema::table('etudient', function (Blueprint $table) {
            $table->dropForeign('etudient_id_nievauscolaire_fk_foreign');
            $table->dropForeign('etudient_id_agenda_fk_foreign');
            $table->dropForeign('etudient_id_conference_fk_foreign');
            $table->dropForeign('etudient_id_parent_fk_foreign');
            $table->dropForeign('etudient_id_dirregion_fk_foreign');
            $table->dropForeign('etudient_id_academies_fk_foreign');
            $table->dropForeign('etudient_id_directions_fk_foreign');

        });
    }
}
