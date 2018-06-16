<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKaswendesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('CREATE VIEW kaswende AS
                SELECT register6s.tarehe_ya_hudhurio, register_maternals.namba_ya_usajili, DATEDIFF(register_maternals.lnmp,register_maternals.tarehe_ya_kuzaliwa) as umri, 
                register6s.matokeo_stds_mume, register6s.mume_ametibiwa, register6s.matokeo_stds_mke, register6s.mke_ametibiwa, register6s.kaswende_mume, register6s.mume_ametibiwa_kaswende,
                register6s.kaswende_mke, register6s.mke_ametibiwa_kaswende FROM register_maternals 
                INNER JOIN register6s WHERE register_maternals.namba_ya_usajili = register6s.namba_ya_usajili;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::dropIfExists('kaswende');
    }
}
