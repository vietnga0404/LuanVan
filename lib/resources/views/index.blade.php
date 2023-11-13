<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{{ asset('public/layout/')}}/">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Trang chủ</title>
    <link rel="icon" type="image/png" href="{{asset('public/layout/img/logo1.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/layout/css/main.css')}}">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/datepicker3.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <script src="js/lumino.glyphs.js"></script>
</head>

<body style="background-color: #F8F0E5;">
    <header>
        <div class="container-menu-desktop">
            <div class="bg-header col-xs-12">
                <div class="col-xs-3 ">
                    <a href="">
                        <img src="img/lg1.png" alt="" width="300px">
                    </a>
                </div>
                <div class="col-xs-6 ul-header">
                    <li>
                        <p><b>HỆ THỐNG QUẢN LÝ ĐÀO TẠO</b></p>
                    </li>
                    <li>
                        <b>Phân hệ: Phân công giảng dạy</b>
                    </li>
                </div>
                <div class="col-xs-3 header-right">
                    <a href="">
                        <img src="img/co.png" alt="" width="280px">
                    </a>
                </div>
            </div>
            <div class="main-m">
                <div class="container">
                    <ul class="main-menu">
                        <li>
                            <a href="{{asset('/login')}}">
                                <span class="col-xs-12">Phân công giảng dạy</span>
                            </a>
                        </li> |
                        <li>
                            <a href="{{asset('/login')}}">
                                <span class="col-xs-12">Phân công giảng viên</span>
                            </a>
                        </li> |
                        <li>
                            <a href="{{asset('/login')}}">
                                <span class="col-xs-12">Lịch dạy</span>
                            </a>
                        </li> |
                        <li>
                            <a href="{{asset('hocvien/thoikhoabieu')}}">
                                <span class="col-xs-12">Thời khóa biểu</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

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
                                                <span class="col-sm-12 col-xs-9 none-padding" >
                                                    <p class="noibat-tittle">Lễ khai giảng Lớp cao cấp lý luận chính trị hệ không tập trung ...</p>
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
                                                    <p class="noibat-tittle">Lễ khai giảng Lớp cao cấp lý luận chính trị hệ không tập trung ...</p>
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
                                                    <p class="noibat-tittle">Lễ khai giảng Lớp cao cấp lý luận chính trị hệ không tập trung ...</p>
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
                                                    <p class="noibat-tittle">Lễ khai giảng Lớp cao cấp lý luận chính trị hệ không tập trung ...</p>
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
                            <form action="" >
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

    <div class="bg-footer">
        <ul class="ul-footer">
            <li class="tieude">
                <p>HỌC VIỆN CHÍNH TRỊ KHU&nbsp;VỰC IV</p>
            </li>
            <li>Bản quyền: Học viện Chính trị&nbsp;khu vực IV&nbsp;</li>
            <li>Số 6 Nguyễn Văn Cừ (nối dài), phường An Bình, quận Ninh Kiều, thành phố Cần Thơ</li>
        </ul>
    </div>
    <!-- Back to top -->
    <button onclick="topFunction()" id="myBtn" title="Go to top">
        <i class="fa fa-arrow-up" aria-hidden="true"></i>
    </button>

    <!-- Back to top -->
    <script>
        // Get the button
        let mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>

    <!-- lịch -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/chart.min.js"></script>
    <script src="js/chart-data.js"></script>
    <script src="js/easypiechart.js"></script>
    <script src="js/easypiechart-data.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>

    <script>
        $('#calendar').datepicker({});

        ! function($) {
            $(document).on("click", "ul.nav li.parent > a > span.icon", function() {
                $(this).find('em:first').toggleClass("glyphicon-minus");
            });
            $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
        }(window.jQuery);

        $(window).on('resize', function() {
            if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
        })
        $(window).on('resize', function() {
            if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
        })
    </script>

</body>

</html>