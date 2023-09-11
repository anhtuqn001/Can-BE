<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNhomngachTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhomngach', function (Blueprint $table) {
            $table->id();
            $table->string('manhomngach');
            $table->string('tennhomngach');
            $table->integer('sothangnangluong');
            $table->decimal('bac1');
            $table->decimal('bac2');
            $table->decimal('bac3');
            $table->decimal('bac4');
            $table->decimal('bac5');
            $table->decimal('bac6');
            $table->decimal('bac7');
            $table->decimal('bac8');
            $table->decimal('bac9');
            $table->decimal('bac10');
            $table->decimal('bac11');
            $table->decimal('bac12');
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
        Schema::dropIfExists('nhomngach');
    }
}
