<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToConferenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('conference', function (Blueprint $table) {
            //$table->BigInteger('id_seance_fk')->unsigned()->nullable();
           
  $table->foreign('id_seance_fk')->references('id')->on('seance')->onDelete('cascade')->onUpdate("cascade");
  $table->foreign('id_gestionsalle_fk')->references('id')->on('gestion_salle')->onDelete('cascade')->onUpdate("cascade");
  $table->foreign('id_dirprovinciale_fk')->references('id')->on('directeur_provinciale')->onDelete('cascade')->onUpdate("cascade");
  $table->foreign('id_dirregional_fk')->references('id')->on('directeur_regional')->onDelete('cascade')->onUpdate("cascade");
  $table->foreign('id_etudient_fk')->references('id')->on('etudient')->onDelete('cascade')->onUpdate("cascade");
  $table->foreign('id_enseignant_fk')->references('id')->on('enseignant')->onDelete('cascade')->onUpdate("cascade");  
  $table->foreign('id_inspecteur_fk')->references('id')->on('inspecteur_regionale')->onDelete('cascade')->onUpdate("cascade");
  $table->foreign('id_parent_fk')->references('id')->on('parent')->onDelete('cascade')->onUpdate("cascade");  
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
        Schema::table('conference', function (Blueprint $table) {
            //$table->dropColumn('id_seance_fk');
            $table->dropForeign('conference_id_seance_fk_foreign');
            $table->dropForeign('conference_id_gestionsalle_fk_foreign');
            $table->dropForeign('conference_id_dirprovinciale_fk_foreign'); 
            $table->dropForeign('conference_id_dirregion_fk_foreign'); 
            $table->dropForeign('conference_id_etudient_fk_foreign');  
            $table->dropForeign('conference_id_enseignant_fk_foreign');
            $table->dropForeign('conference_id_inspecteur_fk_foreign');
            $table->dropForeign('conference_id_parent_fk_foreign');
            $table->dropForeign('conference_id_admin_fk_foreign');
        });
    }
}
