<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateFamilyPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        DB::statement('CREATE view family_plan as
        select register13s.Namba_ya_kadi, DATEDIFF(postnatals.tarehe_ya_kujifugua,postnatals.tarehe_ya_kuzaliwa) as umri,
        register13s.family_plan_usahuri_umetolewa, register13s.family_plan_amepatiwa_kielelezo,
        register13s.amepatiwa_family_plan_wakati_wa_ppc, register13s.rufaa_kupata_family_plan
        from postnatals INNER JOIN register13s ON register13s.Namba_ya_kadi=postnatals.namba_ya_kadi_RCH4;');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('family_plans');
    }
}
