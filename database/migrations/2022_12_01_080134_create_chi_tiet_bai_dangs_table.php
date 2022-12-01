<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChiTietBaiDangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        Schema::dropIfExists('chi_tiet_bai_dangs');
        Schema::create('chi_tiet_bai_dangs', function (Blueprint $table) {
  
            $table->increments("id");
            $table->integer('idBaiDang')->unsigned(); 
            $table->longText('noiDung');
            $table->date('thoiGian');
            $table->integer('trangThai');
            $table->string('tacGia');
            $table->integer('idAnh')->unsigned();  
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
        Schema::dropIfExists('chi_tiet_bai_dangs');
    }
}
