<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class InsertIntoImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        DB::table('detail_post')->insert(
            array(
                'tilte' => 'Lực lượng công binh Quân khu 9 tại hiện trường, sáng 4/1. Ảnh: Ngọc Tài',
                'link' => 'https://i1-vnexpress.vnecdn.net/2023/01/04/00825203c08d18d3419c-167282792-4519-7453-1672832148.jpg?w=680&h=0&q=100&dpr=1&fit=crop&s=dd1z5oJGGe0i2_WzqXUGKQ',
                'post_id' => '1'
            ),
            array(
                'tilte' => 'Anh Thái Văn Tấn Tài (40 tuổi, cha Hạo Nam) ngóng chờ con ở hiện trường trong những ngày qua. Ảnh: Hoàng Nam',
                'link' => 'https://i1-vnexpress.vnecdn.net/2023/01/04/c156c9e63371eb2fb260-167283344-4897-5584-1672834686.jpg?w=680&h=0&q=100&dpr=1&fit=crop&s=8H0fys0pSpBwGBHbrN4sCw',
                'post_id' => '1'
            ),array(
                'tilte' => 'Chị Nguyễn Thị Mỹ Linh trong căn nhà của mình ở xã Phú Lợi, huyện Thanh Bình, hôm 2/1, sau ba ngày con trai rơi xuống cọc bêtông ở công trường xây cầu. Ảnh: Ngọc Tài',
                'link' => 'https://i1-vnexpress.vnecdn.net/2023/01/04/me-be-1-1672829020-3686-1672832148.jpg?w=680&h=0&q=100&dpr=1&fit=crop&s=uX9f4P8ofeAY_DGcRSWEZQ',
                'post_id' => '1'
            ),
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
