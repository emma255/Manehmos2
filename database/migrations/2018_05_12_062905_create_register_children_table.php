<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisterChildrenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register_children', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('tarehe_ya_kuandikishwa');
            $table->string('namba_ya_usajili_RITA');
            $table->string('jina_la_mtoto');
            $table->string('namba_ya_mtoto');
            $table->string('jinsia');
            $table->string('namba_ya_HEID');
            $table->string('jina_la_mama');
            $table->string('mahali_anapoishi_mtoto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('register_children');
    }
}
