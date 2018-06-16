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
            $table->string('namba_ya_usajili');
            // $table->foreign('jina_la_mama')->references('jina_la_mama')->on('register_maternals');
            // $table->foreign('namba_ya_usajili')->references('namba_ya_usajili')->on('register_maternals');
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
            $table->string('mume_tarehe_ya_kipimo')->nullable();
            $table->string('mume_kipimo1_VVU')->nullable();
            $table->string('mume_unasihi_baada_ya_kipimo_1')->nullable();
            $table->string('mke_tayari_ana_VVU');
            $table->string('mke_tarehe_ya_unasihi');
            $table->string('mke_amepima_VVU');
            $table->string('mke_tarehe_ya_kipimo')->nullable();
            $table->string('mke_kipimo1_VVU')->nullable();
            $table->string('mke_unasihi_baada_ya_kipimo_1')->nullable();
            $table->string('hana_matatizo')->default('hapana');
            $table->string('Anaemia')->default('hapana');
            $table->string('Protenuria')->default('hapana');
            $table->string('high_BP')->default('hapana');
            $table->string('kutoongezeka_uzito')->default('hapana');
            $table->string('damu_ukeni')->default('hapana');
            $table->string('mlalo_mbaya_wa_mtoto')->default('hapana');
            $table->string('hudhurio');
            $table->date('tarehe_ya_hudhurio');
            $table->date('tarehe_ya_marudio');
            $table->string('albendazole_mebendazole');
            $table->integer('vidonge_vya_I_FA');
            $table->string('mrdt_o_bs');
            $table->string('llin');
            $table->string('ipt');
            $table->string('mke_kipimo_aina');
            $table->string('mume_kipimo_aina');
            $table->date('tarehe_ya_ipt');
            $table->string('maoni');
            $table->date('tarehe_rufaa');
            $table->string('rufaa_alikopelekwa');
            $table->string('sababu_ya_rufaa');
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
