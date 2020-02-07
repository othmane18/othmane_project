<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToChatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('chat', function (Blueprint $table) {
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
        Schema::table('chat', function (Blueprint $table) {
            $table->dropForeign('chat_id_seance_fk_foreign');
            $table->dropForeign('chat_id_gestionsalle_fk_foreign');
            $table->dropForeign('chat_id_dirprovinciale_fk_foreign'); 
            $table->dropForeign('chat_id_dirregion_fk_foreign'); 
            $table->dropForeign('chat_id_etudient_fk_foreign');  
            $table->dropForeign('chat_id_enseignant_fk_foreign');
            $table->dropForeign('chat_id_inspecteur_fk_foreign');
            $table->dropForeign('chat_id_parent_fk_foreign');
            $table->dropForeign('chat_id_admin_fk_foreign'); 
        });
    }
}
