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
                @foreach($view_posts as $viewpost)
                <div class="bt py-3">
                    <a href="/details/{{$viewpost->id}}" >{{$viewpost->name}}</a>
                    <div class="row pt-3">
                        <a href="/details/{{$viewpost->id}}" class="col-md-5">
                            <img src="{{$viewpost->rootImage}}" class="img-fluid" alt="">
                        </a>
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
                        <li><a href="" class="a-k" >Thế giới</a></li>
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
            </div>
        </div>
        <div class="row bt py-3">
            <div class="col-md-12 pl-0">
                <ul class="ti-ul">
                    <li><a href="/category/domestic" class="a-k">Tin trong nước</a></li>
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
        </div>
        <div class="row bt py-3">
            <div class="col-4 pl-0 br">
                <div class="bt pb-3">
                    <ul class="ti-ul">
                        <li><a href="" class="a-k">Kinh doanh</a></li>
                    </ul>
                    <div>
                        <img src="https://i1-vnexpress.vnecdn.net/2022/12/08/huy-7327-1670472720-4642-1670472801.jpg?w=380&h=228&q=100&dpr=1&fit=crop&s=oeKkEbBrkTEAoh1zpHV0zQ" class="img-fluid" alt="">
                        <a href="">Đề xuất nghiên cứu bổ sung quy hoạch 9 sân bay mới</a>
                        <p>Cục Hàng không Việt Nam vừa đề xuất Bộ Giao thông Vận tải tiếp tục nghiên cứu, đưa vào quy hoạch 9 sân bay mới khi đủ điều kiện. </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 br">
                <div class="bt pb-3">
                    <ul class="ti-ul">
                        <li><a href="" class="a-k">Kinh doanh</a></li>
                    </ul>
                    <div>
                        <img src="https://i1-vnexpress.vnecdn.net/2022/12/09/tau-dau-iran-1670545360-4950-1670545561.jpg?w=380&h=228&q=100&dpr=1&fit=crop&s=ok2L2G1BUIvcmdqbF2164w" class="img-fluid" alt="">
                        <a href="">Mỹ trừng phạt doanh nhân mua bán dầu Iran</a>
                        <p>Bộ Tài chính Mỹ áp lệnh trừng phạt doanh nhân Thổ Nhĩ Kỳ và cấm vận 20 công ty dưới quyền ông vì cáo buộc mua bán dầu Iran. </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 br">
                <div class="bt pb-3">
                    <ul class="ti-ul">
                        <li><a href="" class="a-k">Kinh doanh</a></li>
                    </ul>
                    <div>
                        <img src="https://i1-vnexpress.vnecdn.net/2022/12/08/huy-7327-1670472720-4642-1670472801.jpg?w=380&h=228&q=100&dpr=1&fit=crop&s=oeKkEbBrkTEAoh1zpHV0zQ" class="img-fluid" alt="">
                        <a href="">Đề xuất nghiên cứu bổ sung quy hoạch 9 sân bay mới</a>
                        <p>Cục Hàng không Việt Nam vừa đề xuất Bộ Giao thông Vận tải tiếp tục nghiên cứu, đưa vào quy hoạch 9 sân bay mới khi đủ điều kiện. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end main-->
@endsection