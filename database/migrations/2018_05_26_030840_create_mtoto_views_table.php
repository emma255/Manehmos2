<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMtotoViewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        // DB::statement('CREATE OR REPLACE VIEW mtoto as
        //         select infants.tarehe, register_children.jina_la_mtoto, register_children.namba_ya_mtoto, register_children.jinsia, infants.aina, infants.hudhurio
        //         from register_children INNER JOIN infants ON register_children.namba_ya_mtoto=infants.namba_ya_usajili;
        // ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mtoto_views');
    }
}
