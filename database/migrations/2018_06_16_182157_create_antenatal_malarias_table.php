<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAntenatalMalariasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('CREATE OR REPLACE VIEW antenatal_malaria AS
        SELECT register6s.tarehe_ya_hudhurio, register_maternals.namba_ya_usajili, DATEDIFF(register_maternals.lnmp,register_maternals.tarehe_ya_kuzaliwa) as umri,
        register6s.llin, register6s.mrdt_o_bs, register6s.ipt, register6s.albendazole_mebendazole, register6s.vidonge_vya_I_FA, register6s.rufaa_alikopelekwa, register6s.sababu_ya_rufaa FROM register_maternals
        INNER JOIN register6s WHERE register_maternals.namba_ya_usajili = register6s.namba_ya_usajili;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('antenatal_malaria');
    }
}
