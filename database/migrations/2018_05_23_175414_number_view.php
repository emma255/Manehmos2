<?php

use Illuminate\Database\Migrations\Migration;

class NumberView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('CREATE VIEW numbers AS SELECT
        postnatals.Jina_la_mama, postnatals.tarehe_ya_kuzaliwa, postnatals.namba_ya_kadi_RCH4 FROM postnatals;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
