<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class InsertIntoDetailPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('detail_post')->insert(
            array(
                'post_id' => '1',
                'content' => 'Thông tin được Phó chủ tịch UBND tỉnh Đồng Tháp Đoàn Tấn Bửu xác nhận lúc 18h31 ngày 4/1 tại hiện trường tai nạn. Đến thời điểm này, đơn vị cứu hộ đã gần 100 giờ tìm kiếm với nhiều phương án nhưng không thành công. Cọc bêtông dài 35 m nơi cháu bé mắc kẹt chưa thể rút lên được.
                Theo ông Bửu, liên ngành pháp y, y tế và chính quyền địa phương đánh giá các yếu tố như: vị trí bé bị tai nạn, độ sâu khi rơi, thời gian kéo dài, bị chấn thương, đồng thời quan sát hiện trường cùng các yếu tố chuyên môn khác, nên giai đoạn đầu tiên lượng xấu.
                "Đến thời điểm hiện nay các cơ quan chuyên môn đã có thủ tục xác định nạn nhân tử vong và tìm mọi cách đưa em lên sớm nhất để lo hậu sự", Phó chủ tịch tỉnh Đồng Tháp cho biết.
                Ông Bửu cũng cho biết sau khi các cơ quan chuyên môn kết luận bé tử vong, việc cứu hộ cũng sẽ thay đổi. Trước đây, lực lượng cứu hộ tiến hành song song giải cứu và cố gắng duy trì sự sống cho em bé. Tuy nhiên, lúc này bé trai đã không còn nữa, nên biện pháp cứu hộ sẽ thay đổi với mục tiêu sớm đưa bé lên để lo hậu sự.
                Trước khi UBND tỉnh Đồng Tháp thông tin bé tử vong, anh Thái Văn Tấn Tài - cha bé Hạo Nam (40 tuổi), được chính quyền địa phương mời đến hiện trường vụ tai nạn. Anh đi đến với khuôn mặt thất thần, đôi mắt hoe đỏ. Những ngày qua, anh luôn có mặt ở hiện trường tìm kiếm với mong muốn cứu được con. Tại nhà anh Nam, nhiều hàng xóm có mặt để chia buồn cùng gia đình.
                Tối nay, nhiều người dân đã dừng xe hai bên đầu cầu gần đường dẫn vào khu vực tai nạn để nghe ngóng. Cảnh sát liên tục phát loa yêu cầu đám đông giải tán, vãn hồi trật tự. Ở khu vực hiện trường đèn vẫn sáng, nhiều nhóm công binh, nhân viên kỹ thuật đang làm việc để sớm đưa trụ bêtông lên khỏi mặt đất.
                Hôm 31/12/2022, Nam cùng 3 bạn vào dự án xây cầu Rọc Sen ở xã Phú Lợi, cách nhà gần một km, nhặt phế liệu. Lúc đi qua công trình đang thi công, Nam lọt xuống cọc bêtông rỗng ruột, đường kính 25 cm, đã đóng sâu 35 m. Em kêu cứu chừng 10 phút rồi tiếng dần mất hút, theo nhân chứng.
                Cảnh sát cứu hộ, cứu nạn tỉnh Đồng Tháp phối hợp với Quân khu 9 và nhiều lực lượng điều các thiết bị chuyên dụng đến đào bới, tìm kiếm nạn nhân. Do trụ bêtông cắm sâu, tiết diện nhỏ, nhân viên cứu hộ không thể chui lọt. Đến trưa nay, máy đã khoan sâu hơn 30 m, song gặp đất, đá cứng, bám dính cao, các máy khoan áp lực nước sau một đêm hoạt động đã không hiệu quả.
                Chính quyền tỉnh Đồng Tháp nhìn nhận, việc thiếu kinh nghiệm, hạn chế máy móc, nhân lực khiến công tác cứu hộ nạn nhân gặp khó khăn, kéo dài.'
            )
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
