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
            $table->foreignId('maternal_id', 10)->constrained('register_maternals')->onDelete('cascade');
            $table->string('matokeo_stds_mume', 8);
            $table->string('mume_ametibiwa', 6);
            $table->string('matokeo_stds_mke', 8);
            $table->string('mke_ametibiwa', 6);
            $table->float('damu_HB');
            $table->string('BP', 7);
            $table->string('sukari_kwenye_mkojo', 6);
            $table->string('kaswende_mume', 8);
            $table->string('mume_ametibiwa_kaswende', 6);
            $table->string('kaswende_mke', 8);
            $table->string('mke_ametibiwa_kaswende', 6);
            $table->string('mume_tayari_ana_VVU', 6);
            $table->date('mume_tarehe_ya_unasihi', 6);
            $table->string('mume_amepima_VVU', 6);
            $table->date('mume_tarehe_ya_kipimo')->nullable();
            $table->string('mume_kipimo1_VVU', 8)->nullable();
            $table->string('mume_unasihi_baada_ya_kipimo_1', 6)->nullable();
            $table->string('mke_tayari_ana_VVU', 6);
            $table->date('mke_tarehe_ya_unasihi');
            $table->string('mke_amepima_VVU', 6);
            $table->date('mke_tarehe_ya_kipimo')->nullable();
            $table->string('mke_kipimo1_VVU', 8)->nullable();
            $table->string('mke_unasihi_baada_ya_kipimo_1', 6)->nullable();
            $table->string('hana_matatizo', 6)->default('hapana');
            $table->string('Anaemia', 6)->default('hapana');
            $table->string('Protenuria', 6)->default('hapana');
            $table->string('high_BP', 6)->default('hapana');
            $table->string('kutoongezeka_uzito', 6)->default('hapana');
            $table->string('damu_ukeni', 6)->default('hapana');
            $table->string('mlalo_mbaya_wa_mtoto', 6)->default('hapana');
            $table->string('hudhurio', 18);
            $table->unsignedSmallInteger('uzito');
            $table->date('tarehe_ya_hudhurio');
            $table->date('tarehe_ya_marudio');
            $table->string('albendazole_mebendazole', 6);
            $table->string('vidonge_vya_I_FA', 15);
            $table->string('mrdt_o_bs', 8);
            $table->string('llin', 6);
            $table->string('ipt', 6);
            $table->string('mke_kipimo_aina', 8);
            $table->string('mume_kipimo_aina', 8);
            $table->date('tarehe_ya_ipt');
            $table->string('maoni');
            $table->date('tarehe_rufaa');
            $table->string('rufaa_alikopelekwa', 25);
            $table->string('sababu_ya_rufaa');
            $table->string('TT');
            $table->string('tarehe_ya_TT');
            $table->timestamps();
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
