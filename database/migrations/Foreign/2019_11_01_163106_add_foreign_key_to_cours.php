<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToCours extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cours', function (Blueprint $table) {
            $table->foreign('id_matiere_fk')->references('id')->on('matiere')->onDelete('cascade')->onUpdate("cascade");
            $table->foreign('id_dirregion_fk')->references('id')->on('directeur_regional')->onDelete('cascade')->onUpdate("cascade"); 
            $table->foreign('id_enseignant_fk')->references('id')->on('enseignant')->onDelete('cascade')->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cours', function (Blueprint $table) {
            $table->dropForeign('cours_id_matiere_fk_foreign');
            $table->dropForeign('cours_id_dirregion_fk_foreign');
            $table->dropForeign('cours_id_enseignant_fk_foreign');
        });
    }
}
