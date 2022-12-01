<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDanhGiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('danh_gias');
        Schema::create('danh_gias', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('noiDung');
            $table->date('thoiGianDanhGia');
            $table->integer('idRep');
            $table->integer('idBaiDang')->unsigned(); 

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
        Schema::dropIfExists('danh_gias');
    }
}
