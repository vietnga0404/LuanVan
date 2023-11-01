<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{{ asset('public/layout/')}}/">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Đăng nhập</title>
    <link rel="icon" type="image/png" href="{{asset('public/layout/img/logo1.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/layout/css/main.css')}}">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/datepicker3.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <script src="js/lumino.glyphs.js"></script>
</head>

<body style="background-image: url('img/bg_hoasen.gif');">
    <div class="bg0 p-t-100 p-b-140" style="background-image: url('img/bg_hoasen.gif');">
        <div class="container">
            <div class="row">
                <div class="log">
                    <div class="card col-lg-6">
                        <a class="login">Log in</a>
                        <form action="{{ route('register.handle') }}" method="post">
                            @include('errors.note')
                            <div class="inputBox" style="margin-bottom: 30px;">
                                <input type="text" required="required" name="email" value="{{old('email')}}">
                                <span><i class="fa fa-envelope-o" aria-hidden="true"></i> Email</span>
                            </div>
                            <div class="inputBox" style="margin-bottom: 30px;">
                                <input type="password" required="required" name="password">
                                <span><i class="fa fa-key" aria-hidden="true"></i> Password</span>
                            </div>
                            <div class="inputBox" style="margin-bottom: 30px;">
                                <select name="role">
                                    <option value="giangvien"> Giảng viên </option>
                                    <option value="hocvien"> Học viên </option>
                                </select>
                            </div>
                            <button class="enter" style="margin-left:130px;margin-bottom:50px" type="submit"><b>Đăng ký</b></button>
                            
                            {{csrf_field()}}
                        </form>
                    </div>
                    <!-- <div class="col-lg-6">
                        <img src="img/logo-011.png" alt="" style="height: 400px;width: 570px;">
                    </div> -->
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <!-- <div class="bg-footer">
        <ul class="ul-footer">
            <li class="tieude">
                <p>HỌC VIỆN CHÍNH TRỊ KHU&nbsp;VỰC IV</p>
            </li>
            <li>Bản quyền: Học viện Chính trị&nbsp;khu vực IV&nbsp;</li>
            <li>Số 6 Nguyễn Văn Cừ (nối dài), phường An Bình, quận Ninh Kiều, thành phố Cần Thơ</li>
        </ul>
    </div> -->
</body>

</html>