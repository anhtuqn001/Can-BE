<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoaihopdongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loaihopdong', function (Blueprint $table) {
            $table->id();
            $table->string('maloaihd');
            $table->string('tenloaihd');
            $table->integer('id_tieumuc');
            $table->integer('id_nhomhopdong');
            $table->boolean('bienche');
            $table->boolean('bhxh');
            $table->boolean('bhyt');
            $table->boolean('bhtn');
            $table->string('ghichu');
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
        Schema::dropIfExists('loaihopdong');
    }
}
