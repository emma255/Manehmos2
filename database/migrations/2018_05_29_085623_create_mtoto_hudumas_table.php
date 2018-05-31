<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMtotoHudumasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
          DB::statement('CREATE VIEW mtoto_huduma
 as 
        select infants.tarehe, register_children.namba_ya_mtoto, infants.tarehe_BCG, infants.tarehe_OPVO, infants.uzito, 
        postnatals.mahali_alipojifungulia as mahali_alipozaliwa, register_children.jinsia, infants.hb, infants.kmc
        from register_children INNER JOIN infants ON register_children.namba_ya_mtoto=infants.namba_ya_usajili INNER JOIN
        postnatals ON postnatals.jina_la_mama = register_children.jina_la_mama;');
      }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mtoto_hudumas');
    }
}
