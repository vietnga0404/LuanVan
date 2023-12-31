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
                        <a class="login" style="color: #881A1A;">Đăng nhập</a>
                        <form action="" method="post">
                            @include('errors.note')
                            <div class="inputBox" style="margin-bottom: 30px;">
                                <input required type="text" required="required" name="email">
                                <span><i class="fa fa-envelope-o" aria-hidden="true"></i> Email </span>
                            </div>
                            <div class="inputBox" style="margin-bottom: 30px;">
                                <input required type="password" required="required" name="password">
                                <span><i class="fa fa-key" aria-hidden="true"></i> Password </span>
                            </div>
                            <button class="enter" style="margin-left:130px;margin-bottom:50px;width:125px"><b>Đăng nhập</b></button>
                            <div class="inputBox more">
                                <a href="{{ route('register.form') }}">Đăng ký |</a>
                                <a href="{{ asset('/') }}">Quay lại Trang chủ</a> <br>
                            </div>

                            {{csrf_field()}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>