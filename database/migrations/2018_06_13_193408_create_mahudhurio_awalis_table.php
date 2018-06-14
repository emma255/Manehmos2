<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMahudhurioAwalisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE TABLE mahudhurioAwali(id int(1) NOT NULL AUTO_INCREMENT, hudhurio varchar(10) not NULL, primary key(id));");
        DB::statement("insert into mahudhurioAwali(hudhurio) values('Masaa 48');");
        DB::statement("insert into mahudhurioAwali(hudhurio) values('Siku 3-7');");
        DB::statement("insert into mahudhurioAwali(hudhurio) values('Siku 8-28');");
        DB::statement("insert into mahudhurioAwali(hudhurio) values('Siku 29-42');");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::dropIfExists('mahudhurio_awali');
    }
}
