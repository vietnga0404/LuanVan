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
                                <span class="col-xs-12">Ban đào tạo</span>
                            </a>
                        </li> |
                        <li>
                            <a href="{{asset('/login')}}">
                                <span class="col-xs-12">Lãnh đạo Khoa</span>
                            </a>
                        </li> |
                        <li>
                            <a href="{{asset('/login')}}">
                                <span class="col-xs-12">Giảng viên</span>
                            </a>
                        </li> |
                        <li>
                            <a href="{{asset('/login')}}">
                                <span class="col-xs-12">Học viên</span>
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
                <div class="col-xs-12 col-md-9 col-lg-9">
                    <div class="panel ">
                        <div class="panel-heading">
                            <b>Thông tin tài khoản</b>
                        </div>
                        <div class="panel-body">
                            <table>
                                <tr style="border-bottom: 1px solid #ddd;">
                                    <td>Họ tên: </td>
                                    <td> Griffin </td>

                                </tr>
                                <tr style="border-bottom: 1px solid #ddd;">
                                    <td>Ngày sinh: </td>
                                    <td>Griffin</td>

                                </tr>
                                <tr style="border-bottom: 1px solid #ddd;">
                                    <td>Giới tính: </td>
                                    <td>Swanson</td>

                                </tr>
                                <tr>
                                    <td>SDT: </td>
                                    <td>Brown</td>

                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3 col-lg-3">
                    <div class="panel">
                        <div class="panel-heading"><b> <i class="fa fa-file-text" aria-hidden="true"></i> Quy chế đào tạo</b></div>
                        <div class="panel-body">
                            <div class="bootstrap-table">
                                <table>
                                    <tr style="border-bottom: 2px dotted #ddd;">
                                        <td>Quản lý Khoa</td>
                                    </tr>
                                    <tr style="border-bottom: 2px dotted #ddd;">
                                        <td>Quản lý Lớp</td>
                                    </tr>
                                    <tr style="border-bottom: 2px dotted #ddd;">
                                        <td>Quản lý Môn</td>
                                    </tr>
                                    <tr>
                                        <td>Phân công</td>
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
    <div class=" p-t-100 p-b-140" >
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-9 col-lg-9">
                    <div class="panel ">
                        <div class="panel-heading">
                            <b>Thông tin tài khoản</b>
                        </div>
                        <div class="panel-body">
                            <table>
                                <tr style="border-bottom: 1px solid #ddd;">
                                    <td>Họ tên: </td>
                                    <td> Griffin </td>

                                </tr>
                                <tr style="border-bottom: 1px solid #ddd;">
                                    <td>Ngày sinh: </td>
                                    <td>Griffin</td>

                                </tr>
                                <tr style="border-bottom: 1px solid #ddd;">
                                    <td>Giới tính: </td>
                                    <td>Swanson</td>

                                </tr>
                                <tr>
                                    <td>SDT: </td>
                                    <td>Brown</td>

                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3 col-lg-3">
                    <div class="panel">
                        <div class="panel-heading"><b><i class="fa fa-telegram" aria-hidden="true"></i>  Tin tức</b></div>
                        <div class="panel-body">
                            <div class="bootstrap-table">
                            <table>
                                    <tr style="border-bottom: 2px dotted #ddd;">
                                        <td>Quản lý Khoa</td>
                                    </tr>
                                    <tr style="border-bottom: 2px dotted #ddd;">
                                        <td>Quản lý Lớp</td>
                                    </tr>
                                    <tr style="border-bottom: 2px dotted #ddd;">
                                        <td>Quản lý Môn</td>
                                    </tr>
                                    <tr>
                                        <td>Phân công</td>
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
    <div class=" p-t-100 p-b-140" >
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-9 col-lg-9">
                    <div class="panel ">
                        <div class="panel-heading">
                            <b>Thông tin tài khoản</b>
                        </div>
                        <div class="panel-body">
                            <table>
                                <tr style="border-bottom: 1px solid #ddd;">
                                    <td>Họ tên: </td>
                                    <td> Griffin </td>

                                </tr>
                                <tr style="border-bottom: 1px solid #ddd;">
                                    <td>Ngày sinh: </td>
                                    <td>Griffin</td>

                                </tr>
                                <tr style="border-bottom: 1px solid #ddd;">
                                    <td>Giới tính: </td>
                                    <td>Swanson</td>

                                </tr>
                                <tr>
                                    <td>SDT: </td>
                                    <td>Brown</td>

                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3 col-lg-3">
                    <div class="panel">
                        <div class="panel-heading"><b><i class="fa fa-bell" aria-hidden="true"></i> Thông báo</b></div>
                        <div class="panel-body">
                            <div class="bootstrap-table">
                            <table>
                                    <tr style="border-bottom: 2px dotted #ddd;">
                                        <td>Quản lý Khoa</td>
                                    </tr>
                                    <tr style="border-bottom: 2px dotted #ddd;">
                                        <td>Quản lý Lớp</td>
                                    </tr>
                                    <tr style="border-bottom: 2px dotted #ddd;">
                                        <td>Quản lý Môn</td>
                                    </tr>
                                    <tr>
                                        <td>Phân công</td>
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
    <div class=" p-t-100 p-b-140" >
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-9 col-lg-9">
                    <div class="panel ">
                        <div class="panel-heading">
                            <b>Thông tin tài khoản</b>
                        </div>
                        <div class="panel-body">
                            <table>
                                <tr style="border-bottom: 1px solid #ddd;">
                                    <td>Họ tên: </td>
                                    <td> Griffin </td>

                                </tr>
                                <tr style="border-bottom: 1px solid #ddd;">
                                    <td>Ngày sinh: </td>
                                    <td>Griffin</td>

                                </tr>
                                <tr style="border-bottom: 1px solid #ddd;">
                                    <td>Giới tính: </td>
                                    <td>Swanson</td>

                                </tr>
                                <tr>
                                    <td>SDT: </td>
                                    <td>Brown</td>

                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3 col-lg-3">
                    <div class="panel">
                        <div class="panel-heading"><b> <i class="fa fa-location-arrow" aria-hidden="true"></i> Liên hệ</b></div>
                        <div class="panel-body">
                            <div class="bootstrap-table">
                            <table>
                                    <tr style="border-bottom: 2px dotted #ddd;">
                                        <td>Địa chỉ: Số 6 Nguyễn Văn Cừ (nối dài), phường An Bình, quận Ninh Kiều, thành phố Cần Thơ</td>
                                    </tr>
                                    <tr style="border-bottom: 2px dotted #ddd;">
                                        <td>Email: hcma4@hcma4.vn</td>
                                    </tr>
                                    <tr style="border-bottom: 2px dotted #ddd;">
                                        <td>Liên hệ: 0292.3889818</td>
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
</body>

</html>