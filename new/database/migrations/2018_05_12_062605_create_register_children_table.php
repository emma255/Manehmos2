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
            $table->date('tarehe_ya_kuandikishwa');
            $table->string('namba_ya_usajili_RITA',17)->default('hajasajiliwa RITA');
            $table->string('jina_la_mtoto',30);
            $table->string('namba_ya_mtoto',10)->unique();
            $table->string('jinsia', 8);
            $table->string('namba_ya_HEID',27)->default('Mama hana maambukizi ya VVU');
            $table->string('jina_la_mama',10);
            $table->string('mahali_anapoishi_mtoto',25);
            $table->timestamps();
            $table->primary('namba_ya_mtoto');
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
