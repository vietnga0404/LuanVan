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

<body style="background-color: #F8F0E5;">
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
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <p style="text-align: center;color:black;font-size:20px">HỌC VIỆN CHÍNH TRỊ KHU VỰC IV</p>
                            </div>
                            <div class="form-group">
                                <p style="text-align: center;color:black;font-size:20px"><b>BAN QUẢN LÝ ĐÀO TẠO</b></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <p style="text-align: center;color:black;font-size:20px"><b>ĐẢNG CỘNG SẢN VIỆT NAM</b></p>
                            </div>
                            <div class="form-group">
                                <p style="text-align: center;color:black;font-size:18px"><i>Cần Thơ, ngày tháng năm</i></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <p style="text-align: center;color:black;font-size:25px;padding:30px"><b>KẾ HOẠCH HỌC TẬP</b></p>
                    </div>
                    <div class="row">
                        @foreach($lichday as $lich)
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Lớp học: </label>
                                {{$lich->l_tenlop}}
                            </div>
                            <div class="form-group">
                                <label for="">Môn học:</label>
                                {{$lich->m_tenmon}}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Từ ngày:&nbsp;&nbsp;</label>
                                {{date('d-m-Y',strtotime($lich->ld_tungay))}}
                                <label for="">Đến ngày:</label>
                                {{date('d-m-Y',strtotime($lich->ld_denngay))}}
                            </div>
                            <div class="form-group">
                                <label for="">Địa điểm:</label>
                                {{$lich->l_tenlop}}
                            </div>
                        </div>                        
                        @endforeach
                    </div>

                    <table class="table table-bordered" style="margin-top:20px;text-align:center;padding: 10px">
                        <thead>
                            <tr class="bg-primary">
                                <th style="width: 10%;">Thứ - ngày</th>
                                <th style="width: 5%;">Buổi</th>
                                <th style="width: 30%;">Tên bài giảng</th>
                                <th style="width: 5%;">Số tiết</th>
                                <th style="width: 10%;">Tên giảng viên</th>
                                <th style="width: 10%;">Ghi chú</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($lichday as $lich)
                            <tr>
                                <td>{{$lich->tenthu}} <br> {{$lich->ld_ngay}}</td>
                                <td>{{$lich->tenbuoi}}</td>
                                <td>{{$lich->b_tenbai}}</td>
                                <td>{{$lich->b_sotiet}}</td>
                                <td>{{$lich->gv_ten}} <br> SĐT: {{$lich->gv_sdt}}</td>
                                <td></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>