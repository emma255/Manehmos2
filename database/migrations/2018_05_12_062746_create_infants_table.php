<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infants', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('jina_la_mtoto');
            $table->string('namba_ya_usajili');
            // $table->foreign('mtoto')->references('jina_la_mtoto')->on('register_children');
            // $table->foreign('namba')->references('namba_ya_mtoto')->on('register_children');
            $table->string('hudhurio');
            $table->date('tarehe');
            $table->float('joto');
            $table->float('uzito');
            $table->float('hb');
            $table->string('maambukizi_machoni');
            $table->string('maambukizi_mdomoni');
            $table->string('maambukizi_kitovu');
            $table->string('lishe');
            $table->string('uambukizo_mkali');
            $table->string('kmc');
            $table->string('maambukizi_ngozini');
            $table->date('tarehe_BCG')->nullable();
            $table->date('tarehe_OPVO')->nullable();
            $table->string('matatizo_mengine');
            $table->date('tarehe_ya_kurudi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('infants');
    }
}
