<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateAlipojifunguaViewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {

            DB::statement('CREATE OR REPLACE VIEW alipojifungua as
        select register13s.tarehe_ya_hudhurio, register13s.Namba_ya_kadi, DATEDIFF(postnatals.tarehe_ya_kujifungua,postnatals.tarehe_ya_kuzaliwa) as umri,
         postnatals.mahali_alipojifungulia, postnatals.kada_ya_aliyemzalisha
        from postnatals INNER JOIN register13s ON register13s.Namba_ya_kadi=postnatals.namba_ya_kadi_RCH4;');
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
        Schema::dropIfExists('alipojifungua_views');
    }
}
