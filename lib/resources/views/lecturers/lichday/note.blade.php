<!DOCTYPE html>
<html>

<head>
    <base href="{{ asset('public/layout/')}}/">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Giảng viên | Lịch dạy</title>
    <link rel="icon" type="image/png" href="{{asset('public/layout/img/logo1.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/layout/css/main.css')}}">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/datepicker3.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <script src="js/lumino.glyphs.js"></script>
</head>

<body style="background-color: white">
    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12 none-padding">
            <div class="panel" style="padding: 20px;">
                <div class="panel-body ">
                    <div class="row" style="border-bottom: 2px solid #ddd;height:40px;">
                        <div class="col-md-6">
                            <a href="{{asset('giangvien/lichday')}}" class="btn-new" style="margin-left:50px"><i class="fa fa-undo" aria-hidden="true"></i> Quay lại</a>
                        </div>
                        <div class="col-md-6" style="text-align: end;">
                            <a href="{{asset('giangvien/lichday')}}"><i class="fa fa-times" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="row" style="text-align: center; margin-top:50px">
                       
                        <table border="1" style="border-collapse:collapse; border: 1px solid #666666;" cellpadding="0" cellspacing="0">
                            <tbody>
                                <tr style="width:50%">
                                    <td style="background-color:#488AC7; ">
                                        <h3 style="color: #FFF;">KHÔNG CÓ DỮ LIỆU CẦN TÌM. VUI LÒNG CHỌN LẠI ĐIỀU KIỆN TÌM!</h3>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>