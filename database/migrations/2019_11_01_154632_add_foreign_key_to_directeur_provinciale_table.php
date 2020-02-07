<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToDirecteurProvincialeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('directeur_provinciale', function (Blueprint $table) {
            $table->foreign('id_affectation_fk')->references('affectation')->on('directeur_regional')->onDelete('cascade')->onUpdate("cascade"); 
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
        Schema::table('directeur_provinciale', function (Blueprint $table) {
            $table->dropForeign('directeur_provinciale_id_affectation_fk_foreign');
            $table->dropForeign('directeur_provinciale_id_conference_fk_foreign');
            $table->dropForeign('directeur_provinciale_id_academies_fk_foreign');
            $table->dropForeign('directeur_provinciale_id_directions_fk_foreign');
        });
    }
}
