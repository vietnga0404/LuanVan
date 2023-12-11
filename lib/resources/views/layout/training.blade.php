<!DOCTYPE html>
<html>

<head>
    <base href="{{ asset('public/layout/')}}/">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Ban đào tạo | @yield('title') </title>
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
                            <a href="{{asset('bandaotao/home')}}">
                                <span class="col-xs-3"><i class="glyph fa fa-home" aria-hidden="true"></i></span>
                                <span class="col-xs-9">Trang chủ</span>
                            </a>
                        </li> |
                        <li>
                            <a href="{{asset('bandaotao/khoa')}}">
                                <span class="col-xs-4"><i class="glyph fa fa-building" aria-hidden="true"></i></span>
                                <span class="col-xs-8">Khoa</span>
                            </a>
                        </li> |
                        <li>
                            <a href="{{asset('bandaotao/lop')}}">
                                <span class="col-xs-3"><i class="glyph fa fa-industry" aria-hidden="true"></i></span>
                                <span class="col-xs-9">Lớp học</span>
                            </a>
                        </li> |
                        <li>
                            <a href="{{asset('bandaotao/mon')}}">
                                <span class="col-xs-3"><i class="glyph fa fa-book" aria-hidden="true"></i></span>
                                <span class="col-xs-9">Môn học</span>
                            </a>
                        </li> |
                        <li>
                            <a href="{{asset('bandaotao/phancong')}}">
                                <span class="col-xs-3"><i class="glyph fa fa-calendar" aria-hidden="true"></i></span>
                                <span class="col-xs-9">Phân công</span>
                            </a>
                        </li>                         
                    </ul>
                </div>
            </div>
        </div>

        <!--  -->
        <!-- Header Mobile -->
        <!-- <div class="wrap-header-mobile">
            <div class="bg-header col-xs-12">
                <div class="logo-mobile">
                    <a href="{{asset('/')}}"><img src="img/name1.png" alt="IMG-LOGO"></a>
                </div>
            </div>
           
            <div class="wrap-icon-header flex-w flex-r-m m-r-15">
                fregqe
            </div>

            <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </div>
        </div> -->

        <!-- Menu Mobile -->
        <div class="menu-mobile">
            <div class="main-menu-m">
                <ul class="main-menu">
                    <li>
                        <a href="{{asset('bandaotao/home')}}">
                            <span class="col-xs-3"><i class="glyph fa fa-home" aria-hidden="true"></i></span>
                            <span class="col-xs-9">Trang chủ</span>
                        </a>
                    </li> |
                    <li>
                        <a href="{{asset('bandaotao/khoa')}}">
                            <span class="col-xs-4"><i class="glyph fa fa-building" aria-hidden="true"></i></span>
                            <span class="col-xs-8">Khoa</span>
                        </a>
                    </li> |
                    <li>
                        <a href="{{asset('bandaotao/lop')}}">
                            <span class="col-xs-3"><i class="glyph fa fa-industry" aria-hidden="true"></i></span>
                            <span class="col-xs-9">Lớp học</span>
                        </a>
                    </li> |
                    <li>
                        <a href="{{asset('bandaotao/mon')}}">
                            <span class="col-xs-3"><i class="glyph fa fa-book" aria-hidden="true"></i></span>
                            <span class="col-xs-9">Môn học</span>
                        </a>
                    </li> |
                    <li>
                        <a href="{{asset('bandaotao/phancong')}}">
                            <span class="col-xs-3"><i class="glyph fa fa-calendar" aria-hidden="true"></i></span>
                            <span class="col-xs-9">Phân công giảng dạy</span>
                        </a>
                    </li> 
                    
                </ul>
            </div>
        </div>

    </header>

    <div class="p-t-100 p-b-140">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header page-menu">
                        <div class="col-md-6 page-title ">
                            <b>Ban Đào Tạo</b>
                        </div>
                        <div class="col-md-6">
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

    <!-- Main -->
    @yield('main')

    <!-- Footer -->
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

    <!-- Click button popup new -->
    <script>
        let modalBtn = document.getElementById("popup-btn");
        let modal = document.querySelector(".popup");
        let closeBtn = document.querySelector(".close-btn");
        // Hiển thị popup khi nhấp chuột vào button
        modalBtn.onclick = function() {
            modal.style.display = "block"
        }
        // Đóng popup khi ấn vào nút đóng
        closeBtn.onclick = function() {
            modal.style.display = "none"
        }
        // Đóng khi nhấp chuột vào bất cứ khu vực nào trên màn hình
        window.onclick = function(e) {
            if (e.target == modal) {
                modal.style.display = "none"
            }
        }
    </script>

    <!-- <script>
        // Add active class to the current button (highlight it)
        var header = document.getElementById("myDIV");
        var btns = header.getElementsByClassName("button");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
        }
    </script> -->

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
</body>

</html>