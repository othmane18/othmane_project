<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToCorrectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('correction', function (Blueprint $table) {
            $table->foreign('id_enseignant_fk')->references('id')->on('enseignant')->onDelete('cascade')->onUpdate("cascade");
            $table->foreign('id_activiter_fk')->references('id')->on('activiter')->onDelete('cascade')->onUpdate("cascade");
            $table->foreign('id_test_fk')->references('id')->on('test')->onDelete('cascade')->onUpdate("cascade"); 
            $table->foreign('id_dirregion_fk')->references('id')->on('directeur_regional')->onDelete('cascade')->onUpdate("cascade");
            $table->foreign('id_dirprovinciale_fk')->references('id')->on('directeur_provinciale')->onDelete('cascade')->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('correction', function (Blueprint $table) {
            $table->dropForeign('correction_id_enseignant_fk_foreign');
            $table->dropForeign('correction_id_activiter_fk_foreign');
            $table->dropForeign('correction_id_test_fk_foreign');
            $table->dropForeign('correction_id_dirregion_fk_foreign');
            $table->dropForeign('correction_id_dirprovinciale_fk_foreign');

        });
    }
}
