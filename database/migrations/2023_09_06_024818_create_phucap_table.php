<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhucapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phucap', function (Blueprint $table) {
            $table->id();
            $table->string('tenphucap');
            $table->string('pcviettat');
            $table->integer('cachtinh');
            $table->boolean('bhxh');
            $table->boolean('bhyt');
            $table->boolean('bhtn');
            $table->boolean('kpcd');
            $table->integer('id_tieumuc');
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
        Schema::dropIfExists('phucap');
    }
}
