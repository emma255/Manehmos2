<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisterMaternalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register_maternals', function (Blueprint $table) {
            $table->id();
            $table->string('namba_ya_usajili', '10')->unique();
            $table->date('tarehe_ya_kuandikishwa');
            $table->string('jina_la_mama', '30');
            $table->date('tarehe_ya_kuzaliwa');
            $table->string('BP', '6');
            $table->date('lnmp');
            $table->integer('urefu');
            $table->string('jina_la_mume', '30');
            $table->string('mtaa', '30');
            $table->string('jina_la_mwenyekiti', '30');
            $table->integer('mimba_ngapi');
            $table->integer('amezaa_mara_ngapi');
            $table->integer('watoto_walio_hai');
            $table->integer('mimba_zilizoharibika');
            $table->string('kifo_cha_mtoto_wiki_1', '6');
            $table->integer('umri_mtoto_wa_mwisho');
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
        Schema::dropIfExists('register_maternals');
    }
}
