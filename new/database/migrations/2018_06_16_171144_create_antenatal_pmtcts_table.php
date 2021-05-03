<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAntenatalPmtctsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('CREATE OR REPLACE VIEW antenatal_pmtct AS
        SELECT register6s.tarehe_ya_hudhurio, register_maternals.namba_ya_usajili, DATEDIFF(register_maternals.lnmp,register_maternals.tarehe_ya_kuzaliwa) as umri, register6s.hudhurio,
        register6s.mume_tayari_ana_VVU, register6s.mume_tarehe_ya_unasihi, register6s.mume_amepima_VVU, register6s.mume_kipimo_aina, register6s.mume_tarehe_ya_kipimo, register6s.mume_kipimo1_VVU,
         register6s.mume_unasihi_baada_ya_kipimo_1, register6s.mke_tayari_ana_VVU, register6s.mke_tarehe_ya_unasihi, register6s.mke_amepima_VVU, register6s.mke_kipimo_aina, register6s.mke_tarehe_ya_kipimo, register6s.mke_kipimo1_VVU,
         register6s.mke_unasihi_baada_ya_kipimo_1 FROM register_maternals
        INNER JOIN register6s WHERE register_maternals.namba_ya_usajili = register6s.namba_ya_usajili;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP VIEW IF EXISTS antenatal_pmtct');
    }
}
