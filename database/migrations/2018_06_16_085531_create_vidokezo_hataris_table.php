<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVidokezoHatarisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('CREATE VIEW vidokezo_hatari AS
        SELECT register6s.tarehe_ya_hudhurio, register_maternals.namba_ya_usajili, DATEDIFF(register_maternals.lnmp,register_maternals.tarehe_ya_kuzaliwa) as umri, 
        DATEDIFF(register_maternals.tarehe_ya_kuandikishwa,register_maternals.lnmp) as umri_mimba, register6s.hudhurio, register_maternals.mimba_ngapi, register6s.damu_HB, register6s.TT, register6s.BP, register6s.sukari_kwenye_mkojo, register6s.Protenuria FROM register_maternals 
        INNER JOIN register6s WHERE register_maternals.namba_ya_usajili = register6s.namba_ya_usajili;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::dropIfExists('vidokezo_hatari');
    }
}
