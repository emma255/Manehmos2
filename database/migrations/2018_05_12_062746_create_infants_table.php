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
            $table->foreignId('namba_ya_usajili')->constrained('register_children')->onDelete('cascade');
            $table->string('hudhurio', 17);
            $table->string('aina', 5);
            $table->date('tarehe');
            $table->float('joto', 4);
            $table->unsignedSmallInteger('uzito');
            $table->float('hb', 4);
            $table->string('maambukizi_machoni', 6);
            $table->string('maambukizi_mdomoni', 6);
            $table->string('maambukizi_kitovu', 6);
            $table->string('lishe', 3);
            $table->string('uambukizo_mkali', 6);
            $table->string('kmc', 6);
            $table->string('maambukizi_ngozini', 6);
            $table->date('tarehe_BCG')->nullable();
            $table->date('tarehe_OPVO')->nullable();
            $table->string('matatizo_mengine', 60);
            $table->date('tarehe_ya_kurudi');
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
        Schema::dropIfExists('infants');
    }
}
