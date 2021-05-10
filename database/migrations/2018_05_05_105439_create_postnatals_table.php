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
            $table->date('tarehe_ya_kuandikishwa');
            $table->foreignId('maternal_id')->constrained('register_maternals')->onDelete('cascade');
            $table->string('mtaa', 30);
            $table->string('lishe_ya_mtoto', 3);
            $table->date('tarehe_ya_kuzaliwa');
            $table->tinyInteger('para');
            $table->date('tarehe_ya_kujifungua');
            $table->string('kada_ya_aliyemzalisha', 20);
            $table->string('mahali_alipojifungulia', 9);
            $table->string('hali_ya_mama', 9);
            $table->string('hali_ya_mtoto', 9);
            $table->string('unyonyeshaji_ndani_ya_saa_1', 6);
            $table->string('Hali_ya_VVU_kwenye_kadi', 8);
            $table->string('amepima_postnatal', 6);
            $table->string('kipimo_vvu_wakati_wa_postnatal', 8);
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
        Schema::dropIfExists('postnatals');
    }
}
