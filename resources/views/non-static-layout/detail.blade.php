@extends('.layout.main-layout')
@section('content')
@php
    App\Http\Controllers\CookieController::set('url',"/details/$id");
@endphp
@php  
  $contents = preg_split('/\n|\r\n?/', $detail['content']);
  $count =0;
@endphp
    <div class="container my-4 position-relative">
      
        <div class="row">
          <div class="col-md-1 ">
            <div class="d-flex flex-column g50 ic" >
              <i class="fa-brands fa-facebook"></i>
              <i class="fa-brands fa-twitter"></i>
              <i class="fa-solid fa-comment"></i>
              <i class="fa-solid fa-print"></i>
              <i class="fa-brands fa-youtube"></i>
              <i class="fa-brands fa-instagram"></i>
            </div>
          </div>
            <div class="col-md-7 ">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <a href="" class="ts">Thời sự</a>
                    <span>Thứ bảy, 10/12/2022, 00:00 (GMT+7)</span>
                </div>
                <h2>{{$post['name']}}</h2>
                <div class="nd">
                    <p>{{$post['shortDescription']}}</p>
                </div>
                <div class="mb-2">
                    <img src="{{$post['rootImage']}}" class="img-fluid w-100 mb-2" alt="">
                    <span></span>
                </div>
                <div class="nd">
                @foreach($contents as $content)
                  <p>{{$content}}</p>
                  @php 
                    $count =$count+1;
                  @endphp
                    @if($count%(count($contents)/(count($images)+1)+1))
                    
                    </div>
                    <div class="mb-2">
                        <img src="{{$images[$count/3-1]['link']}}" class="img-fluid w-100 mb-2" alt="">
                        <span>{{$images[$count/3-1]['title']}}</span>
                    </div>
                    <div class='nd'>
                    @endif
                  @endforeach
                </div>
            </div>
            <div class="col-md-4   ">
                <img src="https://scr.vn/wp-content/uploads/2020/07/H%C3%ACnh-T%E1%BA%BFt-h%C3%A0i-vui-g%E1%BB%ADi-s%E1%BA%BFp.jpg" class="img-fluid w-100" alt="">
               <div class="clct my-3 w350 bt">
                <a href=""><h3>Xem nhiều</h3></a>
                <img src="https://i1-vnexpress.vnecdn.net/2022/12/07/BHXH-ThuDuc-TTung-2-1670379662.jpg?w=300&h=180&q=100&dpr=1&fit=crop&s=AhkTlwH15yUKT7cDjJt3pA" class="img-fluid w-100 mb-3" alt="">
               <div class=" my-3">
                <a href="" class="xn" >Thức suốt đêm chờ rút bảo hiểm xã hội một lần </a>
                <span><i class="fa-solid fa-comment"></i>18</span>
               </div>
               <div class="my-3">
                <a href="" class="xn">Nghịch lý khó tuyển công nhân bị cắt giảm  </a>
                <span><i class="fa-solid fa-comment"></i>18</span>
               </div>
               <div class="my-3">
                <a href="" class="xn">TPHCM đề nghị dừng 17 dự án  </a>
                <span><i class="fa-solid fa-comment"></i>18</span>
               </div>
               </div>
            </div>
        </div>
    </div>
    <div class="container my-3">
        <div class="row">
            <div class="col-md-8">
                <h4>Ý kiến(9)</h4>
               <div class="textare">
                <textarea name="" placeholder="Ý kiến của bạn" class="w-100 h30 tx" id=""></textarea>
               </div>
                <div>
                    <!-- Tabs navs -->
<ul class="nav nav-tabs my-3" id="ex1" role="tablist">
    <li class="nav-item" role="presentation">
      <a
        class="nav-link "
        id="ex1-tab-1"
        data-mdb-toggle="tab"
        href="#ex1-tabs-1"
        role="tab"
        aria-controls="ex1-tabs-1"
        aria-selected="true"
        >Quan tâm nhất</a
      >
    </li>
    <li class="nav-item" role="presentation">
      <a
        class="nav-link"
        id="ex1-tab-2"
        data-mdb-toggle="tab"
        href="#ex1-tabs-2"
        role="tab"
        aria-controls="ex1-tabs-2"
        aria-selected="false"
        >Mới nhất</a
      >
    </li>
    
  </ul>
  <!-- Tabs navs -->
  
  <!-- Tabs content -->
  <div class="tab-content" id="ex1-content">
    <div
      class="tab-pane fade show active"
      id="ex1-tabs-1"
      role="tabpanel"
      aria-labelledby="ex1-tab-1"
    >
      <div class="d-flex mb-4 g2">
        <div>
            <img src="https://a1.vnecdn.net/s71263535471831351321.png?w=60&h=60&s=JAV7SpLFhs2MPOG1ebzjAQ" class="img-fluid b50" alt="">
        </div>
        <div class="d-flex flex-column justify-content-between">
            <div>
                <strong>vanchuong</strong>
            <span>Thiết kế web rất oke</span>
            </div>
            <div class="d-flex g3">
                <span><i class="fa-solid fa-thumbs-up"></i> 150</span>
                <span>Trả lời</span>
                <span>Chia sẻ</span>
                <span>12h trước</span>
            </div>
        </div>
      </div>
      <div class="d-flex mb-3 g2">
        <div>
            <img src="https://a1.vnecdn.net/s71263535471831351321.png?w=60&h=60&s=JAV7SpLFhs2MPOG1ebzjAQ" class="img-fluid b50" alt="">
        </div>
        <div class="d-flex flex-column justify-content-between">
            <div>
                <strong>vanchuong</strong>
            <span>Thiết kế web rất oke</span>
            </div>
            <div class="d-flex g3">
                <span><i class="fa-solid fa-thumbs-up"></i> 150</span>
                <span>Trả lời</span>
                <span>Chia sẻ</span>
                <span>12h trước</span>
            </div>
        </div>
      </div>
    </div>
    <div class="tab-pane fade" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">
        <div class="d-flex mb-4 g2">
            <div>
                <img src="https://a1.vnecdn.net/s71263535471831351321.png?w=60&h=60&s=JAV7SpLFhs2MPOG1ebzjAQ" class="img-fluid b50" alt="">
            </div>
            <div class="d-flex flex-column justify-content-between">
                <div>
                    <strong>vanchuong</strong>
                <span>Thiết kế web rất oke</span>
                </div>
                <div class="d-flex g3">
                    <span><i class="fa-solid fa-thumbs-up"></i> 150</span>
                    <span>Trả lời</span>
                    <span>Chia sẻ</span>
                    <span>12h trước</span>
                </div>
            </div>
          </div>
    </div>
    
  </div>
  <!-- Tabs content -->
                </div>
            </div>
        </div>
    </div>
@endsection