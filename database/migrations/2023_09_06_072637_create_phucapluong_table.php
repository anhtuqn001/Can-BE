<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhucapluongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phucapluong', function (Blueprint $table) {
            $table->id();
            $table->integer('id_bangluong');
            $table->float('id_phucap');
            $table->integer('id_donvi');
            $table->decimal('heso');
            $table->decimal('thanhtien');
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
        Schema::dropIfExists('phucapluong');
    }
}
