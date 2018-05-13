<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegister6sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register6s', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->foreign('jina_la_mama')->references('jina_la_mama')->on('register_maternals');
            $table->foreign('namba_ya_usajili')->references('namba_ya_usajili')->on('register_maternals');
            $table->string('matokeo_stds_mume');
            $table->string('mume_ametibiwa');
            $table->string('matokeo_stds_mke');
            $table->string('mke_ametibiwa');
            $table->integer('damu_HB');
            $table->string('BP');
            $table->string('sukari_kwenye_mkojo');
            $table->string('kaswende_mume');
            $table->string('mume_ametibiwa_kaswende');
            $table->string('kaswende_mke');
            $table->string('mke_ametibiwa_kaswende');
            $table->string('mume_tayari_ana_VVU');
            $table->string('mume_tarehe_ya_unasihi');
            $table->string('mume_amepima_VVU');
            $table->string('mume_amepima_VVU');
            $table->string('mume_tarehe_ya_kipimo');
            $table->string('mume_unasihi_baada_ya_kipimo_1');
            $table->string('mume_kipimo_2_VVU');
            $table->string('mke_tayari_ana_VVU');
            $table->string('mke_tarehe_ya_unasihi');
            $table->string('mke_amepima_VVU');
            $table->string('mke_amepima_VVU');
            $table->string('mke_tarehe_ya_kipimo');
            $table->string('mke_unasihi_baada_ya_kipimo_1');
            $table->string('mke_kipimo_2_VVU');
            $table->string('hana_matatizo');
            $table->string('kuharibika_mimba_mfululizo');
            $table->string('Anaemia');
            $table->string('Protenuria');
            $table->string('high_BP');
            $table->string('kutoongezeka_uzito');
            $table->string('damu_ukeni');
            $table->string('mlalo_mbaya_wa_mtoto');
            $table->string('mimba_ya_nne+');
            $table->string('kuzaa_kwa_operesheni');
            $table->string('vacuum_extraction');
            $table->string('albendazole_mebendazole');
            $table->integer('vidonge_vya_I_FA');
            $table->string('mrdt_o_bs');
            $table->string('llin');
            $table->string('ipt');
            $table->date('tarehe_ya_ipt');
            $table->date('tarehe_ya_ipt');
            $table->string('maoni');
            $table->date('tarehe_rufaa');
            $table->string('rufaa_alipotoka');
            $table->string('rufaa_alikopelekwa');
            $table->string('sababu_ya_rufaa');
            $table->string('ana_kadi');
            $table->string('TT');
            $table->string('tarehe_ya_TT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('register6s');
    }
}
