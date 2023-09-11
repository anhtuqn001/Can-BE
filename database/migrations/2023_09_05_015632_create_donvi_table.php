<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonviTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donvi', function (Blueprint $table) {
            $table->id();
            $table->string('tendonvi');
            $table->integer('id_tructhuoc');
            $table->integer('tinh');
            $table->integer('huyen');
            $table->integer('xa');
            $table->integer('captruong');
            $table->integer('loaiphongban');
            $table->integer('phanloai');
            $table->integer('khoiquanly');
            $table->integer('thutruong');
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
        Schema::dropIfExists('donvi');
    }
}
