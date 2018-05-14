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
            $table->string('vitamin_A_umri')->nullable();
            $table->string('amepata_vitamin_A')->nullable();
            $table->float('uzito_mtoto');
            $table->float('urefu_mtoto');
            $table->string('mebendazole_albendazole_umri')->nullable();
            $table->string('amepata_mebendazole_albendazole')->nullable();
            $table->string('PENTA')->nullable();
            $table->date('penta_tarehe')->nullable();
            $table->string('Polio')->nullable();
            $table->date('Polio_tarehe')->nullable();
            $table->string('PCV13')->nullable();
            $table->date('PCV13_tarehe')->nullable();
            $table->string('Rota')->nullable();
            $table->date('Rota_tarehe')->nullable();
            $table->string('Surua')->nullable();
            $table->date('Surua_tarehe')->nullable();
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
