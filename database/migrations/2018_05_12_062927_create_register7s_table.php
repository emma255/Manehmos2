<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegister7sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register7s', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('jina_la_mtoto');
            $table->string('namba_ya_usajili');
            // $table->foreign('Jina_la_mtoto')->references('jina_la_mtoto')->on('register_children');
            // $table->foreign('namba_ya_usajili')->references('namba_ya_mtoto')->on('register_children');
            $table->string('vitamin_A_umri');
            $table->string('amepata_vitamin_A');
            $table->float('uzito_mtoto');
            $table->float('urefu_mtoto');
            $table->string('mebendazole_albendazole_umri');
            $table->string('amepata_mebendazole_albendazole');
            $table->string('PENTA');
            $table->date('penta_tarehe');
            $table->string('Polio');
            $table->date('Polio_tarehe');
            $table->string('PCV13');
            $table->date('PCV13_tarehe');
            $table->string('Rota');
            $table->date('Rota_tarehe');
            $table->string('Surua');
            $table->date('Surua_tarehe');
            $table->string('rufaa_alikotoka');
            $table->string('rufaa_alikopelekwa');
            $table->string('rufaa_sababu');
            $table->string('Maoni_o_maelezo_mengine');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('register7s');
    }
}
