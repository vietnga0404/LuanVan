@extends('layout.home')
@section('title', 'Quyết định về việc ban hành Quy chế Tuyển sinh và Đào tạo Cao cấp lý luận chính trị')
@section('main')

<div class=" p-t-100 p-b-140" style="margin-top:30px">
    <div class="container">
        <div class="row" style="">
            <div class="col-xs-12">
                <a href="{{asset('/')}}" style="color: #5f6468;">Trang chủ</a> <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                <a href="{{asset('/vanban')}}" style="color: #881A1A;">văn bản</a>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-9">
                <div class="panel" style="padding: 10px;">
                    <div class="panel-title">
                        <a href="{{asset('/hoatdong')}}" style="color: white;"> <b>VĂN BẢN QUẢN LÝ</b></a>
                    </div>
                    <p style="background-color:  #F8DF9F;padding: 5px"><b><i class="fa fa-print" aria-hidden="true"></i> Số / Ký hiệu: 10145-QĐ/HVCTQG</b></p>
                    <div class="panel-content">
                        <div class="content-title">
                            <b> Trích yếu: Quyết định về việc ban hành Quy chế Tuyển sinh và Đào tạo Cao cấp lý luận chính trị </b>
                        </div>
                        <div class="content">
                            <table style="padding: 10px;">
                                <tr>
                                    <td style="width: 15%;">Loại văn bản:</td>
                                    <td style="width: 30%;">Văn bản quản lý</td>
                                    <td style="width: 20%;">Ngày ban hành:</td>
                                    <td style="width: 15%;">30/06/2022</td>
                                </tr>
                                <tr>
                                    <td>Tải tệp đính kèm:</td>
                                    <td><a href="{{asset('/vanban')}}">Quy che daotao CCLLCT.pdf</a></td>
                                    <td>Ngày có hiệu lực:</td>
                                    <td>30/06/2022</td>
                                </tr>
                                <tr>
                                    <td>Người kí:</td>
                                    <td>Nguyễn Xuân Thắng</td>
                                    <td>Trạng thái văn bản:</td>
                                    <td>Đang có hiệu lưc</td>
                                </tr>
                            </table>
                            <p>Nội dung văn bản: <br>
                                Quyết định về việc ban hành Quy chế Tuyển sinh và Đào tạo Cao cấp lý luận chính trị</p>
                            <p>Tệp tin đính kèm: <br>
                                <i class="fa fa-files-o" aria-hidden="true"></i> <a href="{{asset('/vanban')}}">Quy che daotao CCLLCT.pdf</a>
                            </p>
                        </div>
                    </div>
                    <div class="panel-ft">
                        <div class="panel-title">
                            <a href="{{asset('/hoatdong')}}" style="color: white;"> <b>VĂN BẢN LIÊN QUAN</b></a>
                        </div>
                        <ul style="padding-top: 10px;">
                            <li class="ft-li"> <a href="{{asset('/vanban')}}">Kế hoạch Tổ chức tiếp sinh và khai giảng năm học mới các Lớp Cao cấp LLCT hệ tập trung K16</a></li>
                            <li class="ft-li"> <a href="{{asset('/vanban')}}">Thông báo về việc tổ chức giảng dạy và học tập đối với các hệ lớp Cao cấp lý luận chính trị</a></li>
                            <li class="ft-li"> <a href="{{asset('/vanban')}}">Thông báo tuyển dụng nhân viên kỹ thuật</a></li>
                            <li class="ft-li"> <a href="{{asset('/vanban')}}">Thông báo tuyển dụng nhân viên ký túc xá</a></li>
                            <li class="ft-li"> <a href="{{asset('/vanban')}}">Quyết định về việc ban hành Quy chế Tuyển sinh và Đào tạo Cao cấp lý luận chính trị</a></li>
                            <li class="ft-li"> <a href="{{asset('/vanban')}}">Tuyển dụng nhân viên kỹ thuật điện - nước</a></li>
                            <li class="ft-li"> <a href="{{asset('/vanban')}}">Thông báo tuyển sinh đào tạo trình độ cao học năm 2022</a></li>
                            <li class="ft-li"> <a href="{{asset('/vanban')}}">Thông báo về việc đảm bảo kỷ luật, kỷ cương trong công tác đào tạo</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- right -->
            <div class="col-xs-3">
                <div class="panel">
                    <div class="panel-body">
                        <form action=" {{ route('search') }}">
                            <input type="text" name="keyword" placeholder="Từ khóa tìm kiếm..." value="{{request()->keyword}}" autocomplete="off">
                            <button type="submit" class="btn-new" style="margin-top: 10px;">Tìm kiếm</button>
                        </form>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="panel">
                    <div class="panel-heading"><b><i class="fa fa-newspaper-o" aria-hidden="true"></i> Tin tức sự kiện</b></div>
                    <div class="scroll">
                        <ul class="home-scroll">
                            <li> <a href="{{asset('/sukien')}}">Trường Chính trị tỉnh Cà Mau tổ chức Hội nghị công bố quyết định</a></li>
                            <li> <a href="{{asset('/sukien')}}">Bảo đảm thượng tôn Hiến pháp và pháp luật</a></li>
                            <li> <a href="{{asset('/thongtin')}}" title="Trường Đại học An ninh nhân dân – 60 năm xây dựng và phát triển">Trường Đại học An ninh nhân dân – 60 năm xây dựng và phát triển</a></li>
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
                            <li> <a href="">Thông báo tuyển dụng viên chức năm 2023</a></li>
                            <li> <a href="">Thông báo tuyển dụng nhân viên</a></li>
                            <li> <a href="">Thông báo về việc thực hiện một số quy định của học viên</a></li>
                            <li> <a href="">Thông báo Tuyển sinh đào tạo trình độ Thạc sĩ năm 2023</a></li>
                            <li> <a href="">Thông báo Tuyển sinh cao học năm 2023 (bổ sung chuyên ngành tuyển sinh)</a></li>
                            <li> <a href="">Thông báo về việc đảm bảo đào tạo trong công tác đào tạo</a></li>
                            <li> <a href="">Thông báo về việc đảm bảo kỷ luật, kỷ cương trong công tác đào tạo</a></li>
                            <li> <a href="">Thông báo về việc đảm bảo kỷ luật, kỷ cương trong công tác đào tạo</a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="panel">
                    <div class="panel-heading"><b><i class="fa fa-file-text" aria-hidden="true"></i> Văn bản quản lý</b></div>
                    <div class="scroll">
                        <ul class="home-scroll">
                            <li> <a href="">Kế hoạch Tổ chức tiếp sinh và khai giảng năm học mới các Lớp Cao cấp LLCT hệ tập trung K16</a></li>
                            <li> <a href="">Quyết định về việc ban hành Quy chế Tuyển sinh và Đào tạo Cao cấp lý luận chính trị</a></li>
                            <li> <a href="">Tuyển dụng nhân viên kỹ thuật điện - nước</a></li>
                            <li> <a href="">Thông báo tuyển sinh đào tạo trình độ cao học năm 2022</a></li>
                            <li> <a href="">Thông báo về việc tổ chức giảng dạy và học tập đối với các hệ lớp Cao cấp lý luận chính trị</a></li>
                            <li> <a href="">Thông báo tuyển dụng nhân viên kỹ thuật</a></li>
                            <li> <a href="">Thông báo tuyển dụng nhân viên ký túc xá</a></li>
                            <li> <a href="">Thông báo về việc đảm bảo kỷ luật, kỷ cương trong công tác đào tạo</a></li>
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