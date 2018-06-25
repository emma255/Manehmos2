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
            $table->string('Namba_ya_kadi',10);
            $table->string('Jina_la_mama',30);
            // $table->foreign('Namba_ya_kadi')->references('namba_ya_kadi_RCH4')->on('postnatals');
            // $table->foreign('Jina_la_mama')->references('jina_la_mama')->on('postnatals');
            $table->string('hudhurio',10);
            $table->date('tarehe_ya_hudhurio');
            $table->string('mama_BP',7);
            $table->float('mama_HB',2);
            $table->string('matiti',19);
            $table->string('tumbo_la_uzazi',17);
            $table->string('lochia',25);
            $table->string('hali_ya_msamba',16);
            $table->string('fistula',6);
            $table->string('akili_timamu',6);
            $table->string('aina_ya_dawa_nyongeza',10);
            $table->string('idadi_ya_dawa_nyongeza',15);
            $table->unsignedTinyInteger('idadi_ya_dawa_vitaminA');
            $table->string('chanjo_ya_TT',10)->nullable();
            $table->string('family_plan_usahuri_umetolewa',6)->default('hapana');
            $table->string('family_plan_amepatiwa_kielelezo',6)->default('hapana');
            $table->string('amepatiwa_family_plan_wakati_wa_ppc',6)->default('hapana');
            $table->string('rufaa_kupata_family_plan',6)->default('hapana');
            $table->string('rufaa_alikopelekwa',25);
            $table->string('rufaa_alikotoka',25);
            $table->string('rufaa_sababu_o_maoni',25);
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
