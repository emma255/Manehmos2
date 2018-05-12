<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostnatalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postnatals', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->date('tarehe_ya_kuandikishwa');
            $table->string('namba_ya_kadi_RCH4');
            $table->string('jina_la_mama');
            $table->string('mtaa');
            $table->date('tarehe_ya_kuzaliwa');
            $table->integer('Amejifungua_mara_ngapi');
            $table->date('tarehe_ya_kujifugua');
            $table->string('kada_ya_aliyemzalisha');
            $table->string('mahali_alipojifungulia');
            $table->string('hali_ya_mama');
            $table->string('hali_ya_mtoto');
            $table->string('unyonyeshaji_ndani_ya_saa_1');
            $table->string('Hali_ya_VVU_kwenye_kadi');
            $table->string('kipimo_vvu_wakati_wa_postnatal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('postnatals');
    }
}
