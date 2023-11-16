@extends('layout.home')
@section('title', 'Trang chủ')
@section('main')

<div class=" p-t-100 p-b-140" style="margin-top:30px">
    <div class="container">
        <div class="row">
            <div class="col-xs-9">
                <div class="panel ">
                    <div class="panel-heading-home"> <i class="fa fa-caret-square-o-right" aria-hidden="true"></i>
                        <b>Hoạt động nổi bật</b>
                    </div>
                    <div class="panel-body">
                        <div class="row" style="background-color: #e5cccc;padding:10px">
                            <div class="hoatdong">
                                <a href="" title=""></a>
                            </div>
                            <div class="hoatdong-tittle">
                                <a href="{{asset('/hoatdong')}}"  title="Hội thảo khoa học cấp bộ “Liên kết vùng trong phát triển nhanh và bền vững vùng đồng bằng sông Cửu Long” ">
                                    <b> Hội thảo khoa học cấp bộ “Liên kết vùng trong phát triển nhanh và bền vững vùng đồng bằng sông Cửu Long” </b>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <ul class="col-md-12 none-padding noibat">
                                <li>
                                    <h4>
                                        <a href="" title="Lễ công bố và trao các quyết định về công tác tổ chức, cán bộ">
                                            <span class="col-sm-12 col-xs-3 none-padding">
                                                <img src="img/bn1_20231010083537PM.jpg" alt="" class="noibat-img">
                                            </span>
                                            <span class="col-sm-12 col-xs-9 none-padding">
                                                <p class="noibat-tittle">Lễ công bố và trao các quyết định về công tác tổ chức, cán bộ ...</p>
                                            </span>
                                            <p class="noibat-time">(03/11/2023 - 18:30)</p>
                                        </a>
                                    </h4>
                                </li>
                                <li>
                                    <h4>
                                        <a href="">
                                            <span class="col-sm-12 col-xs-3 none-padding">
                                                <img src="img/IMG_3169.JPG_20231008101617PM.jpg" alt="" class="noibat-img">
                                            </span>
                                            <span class="col-sm-12 col-xs-9 none-padding">
                                                <p class="noibat-tittle">Bí thư thứ hai Đại sứ quán Úc thăm và làm việc với Học viện Chính trị khu vực IV ...</p>
                                            </span>
                                            <p class="noibat-time">(03/11/2023 - 18:30)</p>
                                        </a>
                                    </h4>
                                </li>
                                <li>
                                    <h4>
                                        <a href="">
                                            <span class="col-sm-12 col-xs-3 none-padding">
                                                <img src="img/c1_20230802114135PM.jpg" alt="" class="noibat-img">
                                            </span>
                                            <span class="col-sm-12 col-xs-9 none-padding">
                                                <p class="noibat-tittle">Bế giảng lớp hoàn chỉnh chương trình Cao cấp lý luận chính trị K16, khóa học 2023...</p>
                                            </span>
                                            <p class="noibat-time">(03/11/2023 - 18:30)</p>
                                        </a>
                                    </h4>
                                </li>
                                <li>
                                    <h4>
                                        <a href="">
                                            <span class="col-sm-12 col-xs-3 none-padding">
                                                <img src="img/st1_20231103061836PM.jpg" alt="" class="noibat-img">
                                            </span>
                                            <span class="col-sm-12 col-xs-9 none-padding">
                                                <p class="noibat-tittle">Khai giảng Lớp Bồi dưỡng nghiệp vụ công tác Văn phòng ...</p>
                                            </span>
                                            <p class="noibat-time">(03/11/2023 - 18:30)</p>
                                        </a>
                                    </h4>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="panel ">
                    <div class="panel-heading-home"><i class="fa fa-newspaper-o" aria-hidden="true"></i>
                        <b>Thông tin hoạt động</b>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-6 none-padding">
                            <div class="col-md-12 none-padding">
                                <div class="info">
                                    <a href="" title=""></a>
                                </div>
                                <div class="info-tittle">
                                    <a href="{{asset('/thongtin')}}" title="Trường Đại học An ninh nhân dân – 60 năm xây dựng và phát triển"><b> Trường Đại học An ninh nhân dân – 60 năm xây dựng và phát triển </b></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 none-padding">
                            <ul style="  list-style: square inside;">
                                <li class="info-li"><a href="">Hoạt động trồng cây tạo cảnh quan khuôn viên Học viện</a></li>
                                <li class="info-li"><a href="">Ra mắt mô hình “Nuôi heo đất, cất 5 ngàn” của Chi bộ Lớp Cao cấp Lý luận chính trị K17A9 – Học viện Chính trị Khu vực IV.</a></li>
                                <li class="info-li"><a href="">Kế hoạch Tổ chức tiếp sinh và khai giảng năm học mới các Lớp Cao cấp LLCT hệ tập trung K16</a></li>
                                <li class="info-li"><a href="">Giới thiệu quyển sách “Một số vấn đề lý luận và thực tiễn về đổi mới, phát triển đất nước”</a></li>
                                <li class="info-li"><a href="">Lễ công bố quyết định của Ban Bí thư Trung ương đảng về công tác cán bộ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="panel ">
                    <div class="panel-heading-home"><i class="fa fa-calendar-o" aria-hidden="true"></i>
                        <b>Lịch</b>
                    </div>
                    <div class="panel-body" style="background-color: #e5cccc">
                        <div id="calendar"></div>
                    </div>
                </div>
            </div>

            <!-- right -->
            <div class="col-xs-3">
                <div class="panel">
                    <div class="panel-body">
                        <form action="">
                            <input type="text" name="keyword" placeholder="Từ khóa tìm kiếm..." value="{{request()->keyword}}">
                            <button type="submit" class="btn-new" style="margin-top: 10px;">Tìm kiếm</button>
                        </form>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="panel">
                    <div class="panel-heading"><b><i class="fa fa-newspaper-o" aria-hidden="true"></i> Tin tức sự kiện</b></div>
                    <div class="scroll">
                        <ul class="home-scroll">
                            <li> <a href="{{asset('/sukien')}}" title="Trường Chính trị tỉnh Cà Mau tổ chức Hội nghị công bố quyết định">Trường Chính trị tỉnh Cà Mau tổ chức Hội nghị công bố quyết định</a></li>
                            <li> <a href="{{asset('/sukien')}}">Bảo đảm thượng tôn Hiến pháp và pháp luật</a></li>
                            <li> <a href="{{asset('/thongtin')}}">Trường Đại học An ninh nhân dân – 60 năm xây dựng và phát triển</a></li>
                            <li> <a href="{{asset('/sukien')}}">Lễ công bố quyết định của Ban Bí thư Trung ương đảng về công tác cán bộ</a></li>
                            <li> <a href="{{asset('/sukien')}}">Khai mạc Hội nghị Trung ương giữa nhiệm kỳ</a></li>
                            <li> <a href="{{asset('/sukien')}}">Bế mạc Hội thi Giảng viên giỏi cấp Học viện lần thứ V – năm 2023</a></li>
                            <li> <a href="{{asset('/sukien')}}">Lễ ra mắt cuốn sách của Tổng Bí thư về đấu tranh phòng, chống tham nhũng, tiêu cực</a></li>
                            <li> <a href="{{asset('/sukien')}}">Sự lãnh đạo của Đảng trong Tổng khởi nghĩa Cách mạng Tháng Tám: tầm nhìn, quyết sách và hành động</a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="panel">
                    <div class="panel-heading"><b><i class="fa fa-bell" aria-hidden="true"></i> Thông báo</b></div>
                    <div class="scroll">
                        <ul class="home-scroll">
                            <li> <a href="{{asset('/thongbao')}}">Thông báo tuyển dụng viên chức năm 2023</a></li>
                            <li> <a href="{{asset('/thongbao')}}">Thông báo tuyển dụng nhân viên</a></li>
                            <li> <a href="{{asset('/thongbao')}}">Thông báo về việc thực hiện một số quy định của học viên</a></li>
                            <li> <a href="{{asset('/thongbao')}}">Thông báo Tuyển sinh đào tạo trình độ Thạc sĩ năm 2023</a></li>
                            <li> <a href="{{asset('/thongbao')}}">Thông báo Tuyển sinh cao học năm 2023 (bổ sung chuyên ngành tuyển sinh)</a></li>
                            <li> <a href="{{asset('/thongbao')}}">Thông báo về việc đảm bảo đào tạo trong công tác đào tạo</a></li>
                            <li> <a href="{{asset('/thongbao')}}">Thông báo về việc đảm bảo kỷ luật, kỷ cương trong công tác đào tạo</a></li>
                            <li> <a href="{{asset('/thongbao')}}">Thông báo về việc đảm bảo kỷ luật, kỷ cương trong công tác đào tạo</a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="panel">
                    <div class="panel-heading"><b><i class="fa fa-file-text" aria-hidden="true"></i> Văn bản quản lý</b></div>
                    <div class="scroll">
                        <ul class="home-scroll">
                            <li> <a href="{{asset('/vanban')}}">Kế hoạch Tổ chức tiếp sinh và khai giảng năm học mới các Lớp Cao cấp LLCT hệ tập trung K16</a></li>
                            <li> <a href="{{asset('/vanban')}}">Quyết định về việc ban hành Quy chế Tuyển sinh và Đào tạo Cao cấp lý luận chính trị</a></li>
                            <li> <a href="{{asset('/vanban')}}">Tuyển dụng nhân viên kỹ thuật điện - nước</a></li>
                            <li> <a href="{{asset('/vanban')}}">Thông báo tuyển sinh đào tạo trình độ cao học năm 2022</a></li>
                            <li> <a href="{{asset('/vanban')}}">Thông báo về việc tổ chức giảng dạy và học tập đối với các hệ lớp Cao cấp lý luận chính trị</a></li>
                            <li> <a href="{{asset('/vanban')}}">Thông báo tuyển dụng nhân viên kỹ thuật</a></li>
                            <li> <a href="{{asset('/vanban')}}">Thông báo tuyển dụng nhân viên ký túc xá</a></li>
                            <li> <a href="{{asset('/vanban')}}">Thông báo về việc đảm bảo kỷ luật, kỷ cương trong công tác đào tạo</a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="panel">
                    <div class="panel-heading"><b> <i class="fa fa-location-arrow" aria-hidden="true"></i> Liên hệ</b></div>
                    <div class="panel-body">
                        <div class="bootstrap-table">
                            <table>
                                <tr style="border-bottom: 2px dotted #ddd;">
                                    <td><b>Địa chỉ:</b> Số 6 Nguyễn Văn Cừ (nối dài), phường An Bình, quận Ninh Kiều, thành phố Cần Thơ</td>
                                </tr>
                                <tr style="border-bottom: 2px dotted #ddd;">
                                    <td><b>Email:</b> hcma4@hcma4.vn</td>
                                </tr>
                                <tr>
                                    <td><b>Liên hệ:</b> 0292.3889818</td>
                                </tr>
                            </table>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop