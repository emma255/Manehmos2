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
            $table->increments('id');
            $table->timestamps();
            $table->date('Tarehe_ya_kuandikishwa');
            $table->string('namba_ya_usajili');
            $table->string('jina_la_mama');
            $table->date('tarehe_ya_kuzaliwa');
            $table->string('BP');
            $table->string('kujifungua_kwa_cs');
            $table->integer('urefu');
            $table->string('jina_la_mume');
            $table->string('mtaa');
            $table->string('jina_la_mwenyekiti');
            $table->integer('mimba_ngapi');
            $table->integer('amezaa_mara_ngapi');
            $table->integer('watoto_walio_hai');
            $table->integer('mimba_zilizoharibika');
            $table->string('kifo_cha_mtoto_wiki_1');
            $table->integer('umri_mtoto_wa mwisho');
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
