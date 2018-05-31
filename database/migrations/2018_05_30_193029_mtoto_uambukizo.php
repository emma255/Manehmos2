<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MtotoUambukizo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
DB::statement('CREATE VIEW mtoto_uambukizo AS 
        select infants.tarehe, register_children.namba_ya_mtoto, infants.maambukizi_kitovu, infants.uambukizo_mkali, infants.maambukizi_ngozini,
        register_children.jinsia, postnatals.mahali_alipojifungulia as mahali_alipozaliwa, postnatals.hali_ya_mtoto from register_children INNER JOIN infants ON register_children.namba_ya_mtoto=infants.namba_ya_usajili INNER JOIN
        postnatals ON postnatals.jina_la_mama = register_children.jina_la_mama;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mtoto_uambukizo');
    }
}
