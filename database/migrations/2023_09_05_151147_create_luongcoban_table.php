<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLuongcobanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('luongcoban', function (Blueprint $table) {
            $table->id();
            $table->decimal('mucluongcoban');
            $table->date('ngayapdung');
            $table->date('ngayquyetdinh');
            $table->string('soquyetdinh');
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
        Schema::dropIfExists('luongcoban');
    }
}
