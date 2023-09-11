<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBangluongthangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bangluongthang', function (Blueprint $table) {
            $table->id();
            $table->integer('id_donvi');
            $table->integer('id_huyen');
            $table->integer('luong_thang');
            $table->integer('luong_nam');
            $table->string('hovaten');
            $table->integer('cmnd');
            $table->integer('gioitinh');
            $table->date('ngaysinh');
            $table->string('id_chucvu');
            $table->string('diachi');
            $table->string('diachibangluong');
            $table->integer('stkbank');
            $table->integer('bank');
            $table->date('ngaybienche');
            $table->integer('ngaycong');
            $table->integer('ngaycongtinhluong');
            $table->integer('ngaycongtru');
            $table->string('mangach');
            $table->integer('bac');
            $table->decimal('lcb');
            $table->float('hsl');
            $table->date('ngayhuongluong');
            $table->integer('muchuong');
            $table->float('luongkhoan');
            $table->integer('loaihd');
            $table->float('pc_chucvu');
            $table->float('pc_tnvk');
            $table->float('pc_tnn');
            $table->float('pc_khuvuc');
            $table->float('pc_thuhut');
            $table->float('pc_launam');
            $table->float('pc_kiemnhiem');
            $table->float('pc_trachnhiem');
            $table->float('pc_dochai');
            $table->float('pc_dacbiet');
            $table->float('pc_khac');
            $table->float('bhxh_dv');
            $table->float('bhxh');
            $table->float('bhyt_dv');
            $table->float('bhyt');
            $table->float('bhtn_dv');
            $table->float('bhtn');
            $table->float('kpcd_dv');
            $table->float('kpcd');
            $table->decimal('truylinh');
            $table->float('khoantru');
            $table->decimal('khoancong');
            $table->integer('thaisan');
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
        Schema::dropIfExists('bangluong');
    }
}
