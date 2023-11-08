@extends('layout.lecturer')
@section('title', 'Home ' )
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
                                <a href=""><b> Trường Đại học An ninh nhân dân – 60 năm xây dựng và phát triển </b></a>
                            </div>
                        </div>
                        <div class="row">
                            <ul class="col-md-12 none-padding noibat">
                                <li>
                                    <h4>
                                        <a href="">
                                            <span class="col-sm-12 col-xs-3 none-padding">
                                                <img src="img/st1_20231103061836PM.jpg" alt="" class="noibat-img">
                                            </span>
                                            <span class="col-sm-12 col-xs-9 none-padding">
                                                <p>Lễ khai giảng Lớp cao cấp lý luận chính trị hệ không tập trung ...</p>
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
                                                <p>Lễ khai giảng Lớp cao cấp lý luận chính trị hệ không tập trung ...</p>
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
                                                <p>Lễ khai giảng Lớp cao cấp lý luận chính trị hệ không tập trung ...</p>
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
                                                <p>Lễ khai giảng Lớp cao cấp lý luận chính trị hệ không tập trung ...</p>
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
                                    <a href=""><b> Trường Đại học An ninh nhân dân – 60 năm xây dựng và phát triển </b></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 none-padding">
                            <ul style="  list-style: square inside;">
                                <li class="info-li"><a href="">Kế hoạch Tổ chức tiếp sinh và khai giảng năm học mới các Lớp Cao cấp LLCT hệ tập trung K16</a></li>
                                <li class="info-li"><a href="">Kế hoạch Tổ chức tiếp sinh và khai giảng năm học mới các Lớp Cao cấp LLCT hệ tập trung K16</a></li>
                                <li class="info-li"><a href="">Kế hoạch Tổ chức tiếp sinh và khai giảng năm học mới các Lớp Cao cấp LLCT hệ tập trung K16</a></li>
                                <li class="info-li"><a href="">Kế hoạch Tổ chức tiếp sinh và khai giảng năm học mới các Lớp Cao cấp LLCT hệ tập trung K16</a></li>
                                <li class="info-li"><a href="">Kế hoạch Tổ chức tiếp sinh và khai giảng năm học mới các Lớp Cao cấp LLCT hệ tập trung K16</a></li>
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
                    <div class="panel-heading"><b><i class="fa fa-file-text" aria-hidden="true"></i> Văn bản quản lý</b></div>
                    <div class="scroll">
                        <ul class="home-scroll">
                            <li> <a href="https://hcma4.hcma.vn/vanban/Pages/default.aspx?ItemID=3763">Kế hoạch Tổ chức tiếp sinh và khai giảng năm học mới các Lớp Cao cấp LLCT hệ tập trung K16</a></li>
                            <li> <a href="https://hcma4.hcma.vn/vanban/Pages/default.aspx?ItemID=3763">Thông báo về việc đảm bảo kỷ luật, kỷ cương trong công tác đào tạo</a></li>
                            <li> <a href="https://hcma4.hcma.vn/vanban/Pages/default.aspx?ItemID=3763">Thông báo về việc đảm bảo kỷ luật, kỷ cương trong công tác đào tạo</a></li>
                            <li> <a href="https://hcma4.hcma.vn/tintuc/pages/thong-bao.aspx?ItemId=11876&CateID=343">Thông báo về việc đảm bảo kỷ luật, kỷ cương trong công tác đào tạo</a></li>
                            <li> <a href="https://hcma4.hcma.vn/tintuc/pages/thong-bao.aspx?ItemId=11876&CateID=343">Thông báo về việc đảm bảo kỷ luật, kỷ cương trong công tác đào tạo</a></li>
                            <li> <a href="https://hcma4.hcma.vn/tintuc/pages/thong-bao.aspx?ItemId=11876&CateID=343">Thông báo về việc đảm bảo kỷ luật, kỷ cương trong công tác đào tạo</a></li>
                            <li> <a href="https://hcma4.hcma.vn/tintuc/pages/thong-bao.aspx?ItemId=11876&CateID=343">Thông báo về việc đảm bảo kỷ luật, kỷ cương trong công tác đào tạo</a></li>
                            <li> <a href="https://hcma4.hcma.vn/tintuc/pages/thong-bao.aspx?ItemId=11876&CateID=343">Thông báo về việc đảm bảo kỷ luật, kỷ cương trong công tác đào tạo</a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="panel">
                    <div class="panel-heading"><b><i class="fa fa-bell" aria-hidden="true"></i> Thông báo</b></div>
                    <div class="scroll">
                        <ul class="home-scroll">
                            <li> <a href="https://hcma4.hcma.vn/tintuc/pages/thong-bao.aspx?ItemId=11876&CateID=343">Thông báo về việc đảm bảo kỷ luật, kỷ cương trong công tác đào tạo</a></li>
                            <li> <a href="https://hcma4.hcma.vn/tintuc/pages/thong-bao.aspx?ItemId=11876&CateID=343">Thông báo về việc đảm bảo kỷ luật, kỷ cương trong công tác đào tạo</a></li>
                            <li> <a href="https://hcma4.hcma.vn/tintuc/pages/thong-bao.aspx?ItemId=11876&CateID=343">Thông báo về việc đảm bảo kỷ luật, kỷ cương trong công tác đào tạo</a></li>
                            <li> <a href="https://hcma4.hcma.vn/tintuc/pages/thong-bao.aspx?ItemId=11876&CateID=343">Thông báo về việc đảm bảo kỷ luật, kỷ cương trong công tác đào tạo</a></li>
                            <li> <a href="https://hcma4.hcma.vn/tintuc/pages/thong-bao.aspx?ItemId=11876&CateID=343">Thông báo về việc đảm bảo kỷ luật, kỷ cương trong công tác đào tạo</a></li>
                            <li> <a href="https://hcma4.hcma.vn/tintuc/pages/thong-bao.aspx?ItemId=11876&CateID=343">Thông báo về việc đảm bảo kỷ luật, kỷ cương trong công tác đào tạo</a></li>
                            <li> <a href="https://hcma4.hcma.vn/tintuc/pages/thong-bao.aspx?ItemId=11876&CateID=343">Thông báo về việc đảm bảo kỷ luật, kỷ cương trong công tác đào tạo</a></li>
                            <li> <a href="https://hcma4.hcma.vn/tintuc/pages/thong-bao.aspx?ItemId=11876&CateID=343">Thông báo về việc đảm bảo kỷ luật, kỷ cương trong công tác đào tạo</a></li>
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
                                <tr style="border-bottom: 2px dotted #ddd;">
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