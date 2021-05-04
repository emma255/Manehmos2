<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePmtctViewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('CREATE OR REPLACE VIEW pmtct as
        select register13s.tarehe_ya_hudhurio, register13s.Namba_ya_kadi, DATEDIFF(postnatals.tarehe_ya_kujifungua,postnatals.tarehe_ya_kuzaliwa) as umri,
        postnatals.Hali_ya_VVU_kwenye_kadi, postnatals.kipimo_vvu_wakati_wa_postnatal, postnatals.amepima_postnatal, postnatals.lishe_ya_mtoto
        from postnatals INNER JOIN register13s ON register13s.Namba_ya_kadi=postnatals.namba_ya_kadi_RCH4;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('drop view if exists pmtct;');
    }
}
