<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateMaelezoViewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {
            DB::statement('CREATE OR REPLACE VIEW maelezo as
        select register13s.tarehe_ya_hudhurio, postnatals.Jina_la_mama, register13s.Namba_ya_kadi,register13s.aina, register13s.hudhurio, postnatals.tarehe_ya_kuzaliwa, DATEDIFF(postnatals.tarehe_ya_kujifungua,postnatals.tarehe_ya_kuzaliwa)
        as umri, register13s.mama_HB, register13s.hali_ya_msamba, register13s.fistula, register13s.akili_timamu, register13s.idadi_ya_dawa_vitaminA
        from postnatals
        INNER JOIN register13s
        ON register13s.Namba_ya_kadi=postnatals.namba_ya_kadi_RCH4;');
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP VIEW IF EXISTS maelezo;');
    }
}
