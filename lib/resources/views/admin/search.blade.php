<!DOCTYPE html>
<html>


<head>
    <base href="{{ asset('public/layout/')}}/">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Admin | @yield('title')</title>
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
        <!-- Header desktop -->
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
                            <a href="{{asset('admin/thongke')}}">
                                <span class="col-xs-3"><i class="fa fa-area-chart" aria-hidden="true"></i></span>
                                <span class="col-xs-9">Thống kê</span>
                            </a>
                        </li> |
                        <li>
                            <a href="{{asset('admin/taikhoan')}}">
                                <span class="col-xs-3"><i class="glyph fa fa-graduation-cap" aria-hidden="true"></i></span>
                                <span class="col-xs-9">Tài khoản</span>
                            </a>
                        </li> |
                        <li>
                            <a href="{{asset('admin/timkiem')}}">
                                <span class="col-xs-3"><i class="fa fa-search" aria-hidden="true"></i></span>
                                <span class="col-xs-9">Tìm kiếm</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <div class="p-t-100 p-b-140">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header page-menu">
                        <div class="col-lg-4 page-title ">
                            <b>Admin</b>
                        </div> 
                        <div class="col-lg-8">
                            <ul class="user-menu">
                                <a href="#" class="user" data-toggle="dropdown">
                                    <i class="fa fa-user-circle-o" aria-hidden="true"></i> {{Auth::user()->name}}
                                </a> &nbsp;
                                <a href="{{asset('logout')}}" class="user">
                                    <i class="fa fa-sign-out" aria-hidden="true"></i> Thoát
                                </a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=" p-t-100 p-b-140" style="margin-top:30px">
        <div class="container">
            <div class="col-lg-12" style="margin-bottom: 20px;">
                <a href="{{asset('admin/timkiem')}}" class="btn-new" style="text-decoration:none;color: white;"><i class="fa fa-undo" aria-hidden="true"></i> Quay lại</a>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel-heading"><b>Kết quả tìm kiếm từ khóa: "{{request()->keyword}}"</b></div>
                    <div class="panel">
                        @if(count($resultKhoa))
                        <p style="font-size: 20px;padding: 10px 0px 0px 20px;color:#881A1A;text-decoration:underline"><b>Khoa:</b></p>
                        <div class="panel-body" style="padding-top: 0px;">
                            <div class="bootstrap-table">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr class="bg-primary">
                                            <th style="width:20%;">Mã Khoa</th>
                                            <th style=" text-align:left">Tên khoa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($resultKhoa as $khoa)
                                        <tr>
                                            <td  style="text-align:center">{{$khoa->k_makhoa}}</td>
                                            <td>{{$khoa->k_tenkhoa}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        @endif
                    </div>
                    <div class="panel">
                        @if(count($resultLop))
                        <p style="font-size: 20px;padding: 10px 0px 0px 20px;color:#881A1A;text-decoration:underline"><b>Lớp:</b></p>
                        <div class="panel-body" style="padding-top: 0px;">
                            <div class="bootstrap-table">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr class="bg-primary">
                                            <th style="width:20%;">Mã Lớp</th>
                                            <th style=" text-align:left">Tên lớp</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($resultLop as $lop)
                                        <tr>
                                            <td  style="text-align:center">{{$lop->l_malop}}</td>
                                            <td>{{$lop->l_tenlop}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        @endif
                    </div>
                    <div class="panel">
                        @if(count($resultMon))
                        <p style="font-size: 20px;padding: 10px 0px 0px 20px;color:#881A1A;text-decoration:underline"><b>Môn:</b></p>
                        <div class="panel-body" style="padding-top: 0px;">
                            <div class="bootstrap-table">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr class="bg-primary">
                                            <th style="width:20%;">Mã môn</th>
                                            <th style=" text-align:left">Tên môn</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($resultMon as $mon)
                                        <tr>
                                            <td  style="text-align:center">{{$mon->m_mamon}}</td>
                                            <td>{{$mon->m_tenmon}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        @endif
                    </div>
                    <div class="panel">
                        @if(count($resultBai))
                        <p style="font-size: 20px;padding: 10px 0px 0px 20px;color:#881A1A;text-decoration:underline"><b>Bài giảng:</b></p>
                        <div class="panel-body" style="padding-top: 0px;">
                            <div class="bootstrap-table">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr class="bg-primary">
                                            <th style="width:20%;">Mã bài giảng</th>
                                            <th style="text-align:left">Tên bài giảng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            @foreach($resultBai as $bai)
                                        <tr>
                                            <td style="text-align:center">{{$bai->b_mabai}}</td>
                                            <td>{{$bai->b_tenbai}}</td>
                                        </tr>
                                        @endforeach
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        @endif
                    </div>
                    <div class="panel">
                        @if(count($resultGV))
                        <p style="font-size: 20px;padding: 10px 0px 0px 20px;color:#881A1A;text-decoration:underline"><b>Giảng viên:</b></p>
                        <div class="panel-body" style="padding-top: 0px;">
                            <div class="bootstrap-table">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr class="bg-primary">
                                            <th style="width:20%;">Mã GV</th>
                                            <th style="text-align:left">Tên GV</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            @foreach($resultGV as $gv)
                                        <tr>
                                            <td  style="text-align:center">{{$gv->gv_ma}}</td>
                                            <td>{{$gv->gv_ten}}</td>
                                        </tr>
                                        @endforeach
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        @endif
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