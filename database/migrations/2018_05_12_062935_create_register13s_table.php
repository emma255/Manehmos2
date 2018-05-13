<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegister13sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register13s', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->foreign('Namba_ya_kadi')->references('namba_ya_kadi_RCH4')->on('postnatals');
            $table->foreign('Jina_la_mama')->references('jina_la_mama')->on('postnatals');
            $table->string('hudhurio');
            $table->date('tarehe_ya_hudhurio');
            $table->string('mama_BP');
            $table->float('mama_HB');
            $table->string('matiti');
            $table->string('tumbo_la_uzazi');
            $table->string('lochia');
            $table->string('hali_ya_msamba');
            $table->string('fistula');
            $table->string('akili_timamu');
            $table->string('aina_ya_dawa_nyongeza');
            $table->integer('idadi_ya_dawa_nyongeza');
            $table->integer('idadi_ya_dawa_vitaminA');
            $table->string('chanjo_ya_TT');
            $table->string('family_plan_usahuri_umetolewa');
            $table->string('family_plan_amepatiwa_kielelezo');
            $table->string('amepatiwa_family_plan_wakati_wa_ppc');
            $table->string('rufaa_kupata_family_plan');
            $table->string('rufaa_alikopelekwa');
            $table->string('rufaa_alikotoka');
            $table->string('rufaa_sababu_o_maoni');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('register13s');
    }
}
