@extends('.layout.main-layout')
@section('content') 
    <!--satrt main-->
    <div class="container py-4">
        <!-- start main news  -->
        <div class="row bt">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-8 pr-0" >
                        <img src="{{$post_new['rootImage']}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-4 bg-light">
                        <a href="/details/{{$post_new['id']}}"><h4>{{$post_new['name']}}</h4></a> 
                        <p>{{$post_new['shortDescription']}}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <img src="https://scr.vn/wp-content/uploads/2020/07/T%E1%BA%BFt-n%C3%A0y-%C4%91%C6%B0a-g%E1%BA%A5u-v%E1%BB%81-nh%C3%A0.jpg" class="img-fluid" alt="">
            </div>
        </div>
        <!-- end main news  -->
        <div class="row py-4 bt">
            <!-- start left news  -->
            <div class="col-md-5 br " style="padding-left: 0px;">
                <div class="bt pb-3">
                    <a href="/details/1" >
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSr1RmoGhH9HqO3KyE50_u8vUwog0Vjc-MNjQ&usqp=CAU" class="img-fluid" alt="">
                    </a>
                </div>
                <!-- viewest -->
                @foreach($viewposts as $viewpost)
                <div class="bt py-3">
                    <a href="/details/{{$viewpost->id}}" >{{$viewpost->title}}</a>
                    <div class="row pt-3">
                        <div class="col-md-5">
                            <img src="{{$viewpost->rootImage}}" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-7 pl-0">
                            <p>{{$viewpost->shortDescription}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- viewest -->
            </div>
            <!-- end left news  -->
            <div class="col-md-7 ">
                <div class="bt pb-3">
                    <ul class="ti-ul">
                        <li><a href="" class="a-k" >Kinh doanh</a></li>
                        <li><a href="" class="a-k">Quốc tế</a></li>
                        <li><a href="" class="a-k">Doanh nghiệp</a></li>
                        <li><a href="" class="a-k">Chứng khoán</a></li>
                        <li><a href="" class="a-k">Bất động sản</a></li>
                        <li><a href="" class="a-k">Bảo hiểm</a></li>
                    </ul>
                    <div class="row ">
                        <div class="col-md-8 br">
                            <div class="row">
                                <div class="col-md-6" style="padding-right: 0;">
                                    <div class="h-100">
                                        <img src="https://i1-kinhdoanh.vnecdn.net/2022/12/07/anh-bthep-jpeg-1670399780-4984-1670399788.jpg?w=380&h=228&q=100&dpr=1&fit=crop&s=KXSD6sVFAj8ljMJY5km53Q" class="img-fluid h-100 " alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                   <div>
                                    <a href="">Tiêu thụ thép thấp nhất hai năm</a>
                                    <p class="ab">HÒA BÌNHVới hàng nghìn tấn rác thải tồn đọng, thành phố phải tập kết rác tạm thời trên đường trung tâm, đào hố chôn trong rừng.</p>
                                   </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                                <div>
                                    <a href="">Tiêu thụ thép thấp nhất hai năm</a>
                                    <p class="ab">Tổng lượng tiêu thụ thép toàn ngành tháng 10 giảm về mức thấp nhất hai năm trong bối cảnh các dự án bất động sản và đầu tư công ... </p>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="bt py-3">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="https://tpc.googlesyndication.com/pagead/imgad?id=CICAgODskInFnQEQARgBMghZFf9_GmaM4g" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-7">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td><a href="">Giá vàng</a></td>
                                        <td>Mua</td>
                                        <td>Bán</td>
                                    </tr>
                                    <tr>
                                        <td>Vàng SJC (triệu đồng/lượng)</td>                                    
                                        <td>66,35</td>
                                        <td>67,15</td>
                                    </tr>
                                    <tr>
                                        <td>Thế giới (USD/ounce)</td>                                    
                                        <td>1.782,8</td>
                                        <td>1.783,3</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="bt py-3">
                    <ul class="d-flex gap-3 idam g3">
                        <li><a href="">Hơn 2.400 mã sản phẩm được cấp phép xuất sang Trung Quốc</a></li>
                        <li><a href="">Airbus muốn mở rộng hợp tác hàng không vũ trụ với Việt Nam</a></li>
                        <li><a href="">Fed hướng đến lãi suất cao hơn dù giảm tốc đà tăng</a></li>
                    </ul>
                </div>
                <div class="bt py-3">
                    <ul class="ti-ul">
                        <li><a href="" class="a-k">Bóng đá</a></li>
                        <li><a href="" class="a-k">Lịch thi đấu</a></li>
                        <li><a href="" class="a-k">World cup 2022</a></li>
                        <li><a href="" class="a-k">Tennis</a></li>
                        <li><a href="" class="a-k">Cầu lông</a></li>
                       
                    </ul>
                    <div class="row ">
                        <div class="col-md-8 br">
                            <div class="row">
                                <div class="col-md-6" style="padding-right: 0;">
                                    <div class="h-100">
                                        <img src="https://i1-thethao.vnecdn.net/2022/12/07/ronaldo-bo-jpeg-1670422875-167-5650-2633-1670422911.jpg?w=380&h=228&q=100&dpr=1&fit=crop&s=5bRONEm9IDGl3Npy1TuNrQ" class="img-fluid h-100 " alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                   <div>
                                    <a href="">Ronaldo không tập cùng nhóm dự bị</a>
                                    <p class="ab">QATARCristano Ronaldo tập gym cùng đội hình chính Bồ Đào Nha trưa 7/12, thay vì tập trên sân bóng cùng nhóm dự bị giống anh</p>
                                   </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                                <div>
                                    <a href="">Chủ tịch FIFA: 'Vòng bảng World Cup 2022 hay nhất lịch sử'</a>
                                    <p class="ab">QATARTheo Chủ tịch FIFA Gianni Infantino, vòng bảng World Cup 2022 hay chưa từng có qua 22 lần tổ chức. </p>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="bt py-3">
                    <ul class="d-flex idam g3">
                        <li><a href="">Walker: 'Tôi sẽ không trải thảm đỏ để Mbappe ghi bàn'  <a href=""><i class="fa-solid fa-comment"></i>18</a></a></li>
                        <li>Maguire: 'Anh tự tin vô địch World Cup 2022'  <a href=""><i class="fa-solid fa-comment"></i>18</a></li>
                        <li>Rabiot: '90% bàn thắng của Pháp phụ thuộc Mbappe  <a href=""><i class="fa-solid fa-comment"></i>18</a></li>
                    </ul>
                </div>
                <div class="bt py-3">
                    <ul class="ti-ul">
                        <li><a href="" class="a-k">Giải trí</a> </li>
                        <li><a href="" class="a-k">Giới sao</a></li>
                        <li><a href="" class="a-k">Nhạc</a></li>
                        <li><a href="" class="a-k">Thời trang</a></li>
                        <li><a href="" class="a-k">Sách</a></li>
                       
                    </ul>
                    <div class="row ">
                        <div class="col-md-8 br">
                            <div class="row">
                                <div class="col-md-6" style="padding-right: 0;">
                                    <div class="h-100">
                                        <img src="https://i1-giaitri.vnecdn.net/2022/12/08/top1-1670470397-4193-1670470670.jpg?w=380&h=228&q=100&dpr=1&fit=crop&s=hC83_tegF9EmVBy6a9NtAQ" class="img-fluid h-100 " alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                   <div>
                                    <a href="">Tài tử 'Nghĩa nặng tình thâm' lao đao vì mắc ung thư</a>
                                    <p class="ab">Nhan Quốc Lương, đóng "Nghĩa nặng tình thâm", khánh kiệt vì chữa bệnh ung thư tế bào vảy ở tuổi 73. </p>
                                   </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                                <div>
                                    <a href="">Thùy Tiên đội mấn 10 kg diễn áo dài</a>
                                    <p class="ab">THÁI LANHoa hậu Nguyễn Thúc Thùy Tiên đội mấn 10 kg, trình diễn áo dài thêu hình hoa sen của Ngô Nhật Huy. </p>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row bt py-3">
            
                <div class="col-md-12 pl-0">
                    <ul class="ti-ul">
                        <li><a href="" class="a-k">Podcasts</a></li>
                        <li><a href="" class="a-k">VnExpress hôm nay</a></li>
                        <li><a href="" class="a-k">Giải mã</a></li>
                        <li><a href="" class="a-k">Hộp đen</a></li>
                       
                    </ul>
                </div>
           
            <div class="col-md-6 pl-0">
                <div class="bt pb-3">
                    
                    <div class="row ">
                        <div class="col-md-12 br">
                            <div class="row">
                                <div class="col-md-3" style="padding-right: 0;">
                                    <div class="h-100">
                                        <img src="https://i1-vnexpress.vnecdn.net/2022/12/08/de-quoc-lon-nhat-dong-nam-a-diet-vong-nhu-the-nao-1670488673.jpg?w=160&h=160&q=100&dpr=2&fit=crop&s=WG7Ud-KAQ-Oqh1cWrhGVKw" class="img-fluid h-100 " alt="">
                                    </div>
                                </div>
                                <div class="col-md-9">
                                   <div>
                                    <a href="" class="row2-title" >Đế quốc lớn nhất Đông Nam Á diệt vong như thế nào?</a>
                                    <p class="ab">Sau 600 năm phát triển rực rỡ từ thế kỷ IX, nền văn minh Khmer rộng một triệu km2 đột ngột biến mất, các nhà khoa học tìm thấy nhiều lý do dẫn đến sự diệt vong này.</p>
                                   </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row ">
                    <div class="col-md-12 ">
                        <div class="row">
                            <div class="col-md-3" style="padding-right: 0;">
                                <div class="h-100">
                                    <img src="https://i1-vnexpress.vnecdn.net/2022/12/08/va-lay-tu-khung-bo-tin-dung-den-1670433233.jpg?w=160&h=160&q=100&dpr=2&fit=crop&s=2alp84cMUSd78kJLnz7odg" class="img-fluid h-100 " alt="">
                                </div>
                            </div>
                            <div class="col-md-9">
                               <div>
                                <a href="" class="row2-title" >Vạ lây từ khủng bố tín dụng đen</a>
                                <p class="ab">Không có tên trong biên bản vay tín dụng của chị họ, Hoàng Đạt và cả gia đình vẫn nhận 50 cuộc gọi hăm doạ mỗi ngày, bị ghép ảnh bêu rếu là đồng phạm chiếm đoạt tài sản.</p>
                               </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="row bt py-3">
            <div class="col-md-4 br pl-0">
                <a href="">Tin tối World Cup: HLV Enrique bị sa thải; Anh có kế hoạch chặn Pháp hai năm qua</a>
                <p>De Paul nguy cơ lỡ tứ kết vì chấn thương; FIFA loại tổ trọng tài bắt trận Uruguay và Ghana... </p>
            </div>
            <div class="col-md-4 br">
                <a href="">Điểm tin 21h: Giám đốc BHXH Bắc Ninh bị bắt; TP HCM còn 'nợ' hơn 900 tỷ đồng hỗ trợ sau Covid-19</a>
                <p>Dòng tiền trở lại nhóm bất động sản, ngân hàng; TP HCM xoay xở tìm vốn đầu tư công cho năm 2023; Hà Nội đề xuất cơ chế tăng thu nhập cho công chức... </p>
            </div>
            <div class="col-md-4 br">
                <a href="">Người Việt sau 9 tháng di tản khỏi Ukraine</a>
                <p>9 tháng lánh nạn tại Đức, gia đình anh Ngô Hải được chính phủ hỗ trợ chỗ ở và gần 2.000 euro mỗi tháng nhưng ngôn ngữ vẫn là rào cản khiến anh nhiều lần muốn bỏ cuộc.</p>
            </div>
        </div>
        <div class="row bt py-3">
            <div class="col-md-12 d-flex g3 pl-0">
                <span>Chủ đề</span>
                <a href="" class="g-a">Lịch nghỉ Tết, lễ của cả năm 2023</a>
                <a href="" class="g-a">Công nhân mất việc</a>
                <a href="" class="g-a">Ông Giang Trạch Dân qua đời</a>
            </div>
        </div>
        <div class="row bt py-3">
            <div class="col-4 pl-0 br">
                <div class="bt pb-3">
                    <ul class="ti-ul">
                        <li><a href="" class="a-k">Kinh doanh</a></li>
                        <li><a href="" class="a-k">Quốc tế</a></li>
                        <li><a href="" class="a-k">Doanh nghiệp</a></li>
                       
                    </ul>
                    <div>
                        <img src="https://i1-vnexpress.vnecdn.net/2022/12/08/huy-7327-1670472720-4642-1670472801.jpg?w=380&h=228&q=100&dpr=1&fit=crop&s=oeKkEbBrkTEAoh1zpHV0zQ" class="img-fluid" alt="">
                        <a href="">Đề xuất nghiên cứu bổ sung quy hoạch 9 sân bay mới</a>
                        <p>Cục Hàng không Việt Nam vừa đề xuất Bộ Giao thông Vận tải tiếp tục nghiên cứu, đưa vào quy hoạch 9 sân bay mới khi đủ điều kiện. </p>
                    </div>
                </div>
                <div class="bt py-3">
                    <a href="">Thuê máy bơm chống ngập cho 3 khu vực ở TP HCM 'không cần thiết'</a>
                    <p>Đường Phan Huy Ích, Nguyễn Văn Quá và Thảo Điền được đề xuất chống ngập bằng máy bơm nhưng đại diện Sở Xây dựng nói không cần thiết vì đã có giải pháp khác. </p>
                </div>
            </div>
            <div class="col-md-4 br">
                <div class="bt pb-3">
                    <ul class="ti-ul">
                        <li><a href="" class="a-k">Kinh doanh</a></li>
                        <li><a href="" class="a-k">Quốc tế</a></li>
                        <li><a href="" class="a-k">Doanh nghiệp</a></li>
                       
                    </ul>
                    <div>
                        <img src="https://i1-vnexpress.vnecdn.net/2022/12/09/tau-dau-iran-1670545360-4950-1670545561.jpg?w=380&h=228&q=100&dpr=1&fit=crop&s=ok2L2G1BUIvcmdqbF2164w" class="img-fluid" alt="">
                        <a href="">Mỹ trừng phạt doanh nhân mua bán dầu Iran</a>
                        <p>Bộ Tài chính Mỹ áp lệnh trừng phạt doanh nhân Thổ Nhĩ Kỳ và cấm vận 20 công ty dưới quyền ông vì cáo buộc mua bán dầu Iran. </p>
                    </div>
                </div>
                <div class="bt py-3">
                    <a href="">Thuê máy bơm chống ngập cho 3 khu vực ở TP HCM 'không cần thiết'</a>
                    <p>Đường Phan Huy Ích, Nguyễn Văn Quá và Thảo Điền được đề xuất chống ngập bằng máy bơm nhưng đại diện Sở Xây dựng nói không cần thiết vì đã có giải pháp khác. </p>
                </div>
            </div>
            <div class="col-md-4 br">
                <div class="bt pb-3">
                    <ul class="ti-ul">
                        <li><a href="" class="a-k">Kinh doanh</a></li>
                        <li><a href="" class="a-k">Quốc tế</a></li>
                        <li><a href="" class="a-k">Doanh nghiệp</a></li>
                       
                    </ul>
                    <div>
                        <img src="https://i1-vnexpress.vnecdn.net/2022/12/08/huy-7327-1670472720-4642-1670472801.jpg?w=380&h=228&q=100&dpr=1&fit=crop&s=oeKkEbBrkTEAoh1zpHV0zQ" class="img-fluid" alt="">
                        <a href="">Đề xuất nghiên cứu bổ sung quy hoạch 9 sân bay mới</a>
                        <p>Cục Hàng không Việt Nam vừa đề xuất Bộ Giao thông Vận tải tiếp tục nghiên cứu, đưa vào quy hoạch 9 sân bay mới khi đủ điều kiện. </p>
                    </div>
                </div>
                <div class="bt py-3">
                    <a href="">Thuê máy bơm chống ngập cho 3 khu vực ở TP HCM 'không cần thiết'</a>
                    <p>Đường Phan Huy Ích, Nguyễn Văn Quá và Thảo Điền được đề xuất chống ngập bằng máy bơm nhưng đại diện Sở Xây dựng nói không cần thiết vì đã có giải pháp khác. </p>
                </div>
            </div>
        </div>
    </div>
    <!--end main-->
@endsection