<!DOCTYPE html>
<html>

<head>
    <base href="{{ asset('public/layout/')}}/">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> @yield('title') | Khoa</title>
    <link rel="icon" type="image/png" href="{{asset('public/layout/img/logo1.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/datepicker3.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <script type="text/javascript" src="../../editor/ckeditor/ckeditor.js"></script>
    <script src="js/lumino.glyphs.js"></script>
</head>

<body>
    <div class="navbar-fixed-top">
        <img src="img/banner1.png" style="width: 100%">
    </div>

    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <ul class="nav menu">
            <li role="presentation" class="divider"></li>
            <li class="active">
                <a href="{{asset('admin/home')}}">
                    <i class="glyph fa fa-user" aria-hidden="true"></i>Thông tin cá nhân
                </a>
            </li>
            <li>
                <a href="{{asset('admin/')}}">
                    <i class="glyph fa fa-calendar" aria-hidden="true"></i>Thời khóa biểu
                </a>
            </li>
            <li>
                <a href="{{asset('admin/phancong')}}">
                    <i class="glyph fa fa-calendar" aria-hidden="true"></i>Tìm kiếm
                </a>
            </li>
        </ul>
    </div><!--/.sidebar-->

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header page-menu">
                    <ul class="user-menu">
                        <a href="#" class="user" data-toggle="dropdown">
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i> Adminvebfsb
                        </a> &nbsp;
                        <a href="" class="user">
                            <i class="fa fa-sign-out" aria-hidden="true"></i> Thoát
                        </a>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    @yield('main')

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