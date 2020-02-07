<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyToParentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('parent', function (Blueprint $table) {
            $table->foreign('id_dirregion_fk')->references('id')->on('directeur_regional')->onDelete('cascade')->onUpdate("cascade");
            $table->foreign('id_directions_fk')->references('id')->on('directionprovinciale')->onDelete('cascade')->onUpdate("cascade");
            $table->foreign('id_academies_fk')->references('id')->on('academiesregionale')->onDelete('cascade')->onUpdate("cascade"); 
            $table->foreign('id_conference_fk')->references('id')->on('conference')->onDelete('cascade')->onUpdate("cascade"); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('parent', function (Blueprint $table) {
            $table->dropForeign('parent_id_dirregion_fk_foreign');
            $table->dropForeign('parent_id_directions_fk_foreign');
            $table->dropForeign('parent_id_academies_fk_foreign');
            $table->dropForeign('parent_id_conference_fk_foreign');
        });
    }
}
