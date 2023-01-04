<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class InsertIntoPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        DB::table('post')->insert(
            array(
                'name' => 'Bé trai kẹt trong cọc bê tông tử vong',
                'rootImage' => 'https://i1-vnexpress.vnecdn.net/2023/01/04/00825203c08d18d3419c-167282792-4519-7453-1672832148.jpg?w=680&h=0&q=100&dpr=1&fit=crop&s=dd1z5oJGGe0i2_WzqXUGKQ',
                'shortDescription' => 'ĐỒNG THÁPEm Thái Lý Hạo Nam, 10 tuổi, bị kẹt bốn ngày trong cọc bêtông sâu 35 m ở công trình cầu tại xã Phú Lợi, huyện Thanh Bình, đã tử vong.',
                'category_id' => '1'
            ),
        );
    }
}
