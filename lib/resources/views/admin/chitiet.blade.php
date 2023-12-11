@extends('layout.admin')
@section('title', 'Thống kê')
@section('main')

<div class="p-t-100 p-b-140">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="panel ">
                    <div class="panel-heading"><b>Chi tiết lịch dạy</b></div>
                    <div class="panel-body">
                        <form method="post" enctype="multipart/form-data">
                            <div class="row" style="border-bottom: 2px dotted #ddd;">                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Lớp học: </label>
                                        {{$lop}}
                                    </div>
                                    <div class="form-group">
                                        <label for="">Môn học:</label>
                                        {{$mon}}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Từ ngày:&nbsp;&nbsp;</label>
                                        {{date('d-m-Y',strtotime($tungay))}}
                                        <label for="">Đến ngày:</label>
                                        {{date('d-m-Y',strtotime($denngay))}}
                                    </div>
                                    <div class="form-group">
                                        <label for="">Địa điểm:</label>
                                        {{$diadiem}}
                                    </div>
                                </div>

                            </div>
                            <table class="table table-bordered" style="margin-top:20px;text-align:center">
                                <thead>
                                    <tr class="bg-primary">
                                        <th>Tên bài giảng</th>
                                        <th>Số tiết</th>
                                        <th>Thứ - ngày</th>
                                        <th>Buổi</th>
                                        <th>Tên giảng viên</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($lich as $ld)
                                    <tr>
                                        <td style="width:50%">
                                            {{$ld->b_tenbai}}
                                        </td>
                                        <td> {{$ld->b_sotiet}}</td>
                                        <td>
                                            {{$ld->tenthu}} <br> {{date('d-m-Y',strtotime($ld->ld_ngay))}}
                                        </td>
                                        <td>
                                            {{$ld->tenbuoi}}
                                        </td>
                                        <td>
                                            {{$ld->gv_ten}}
                                        </td>                                        
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <a href="{{asset('admin/thongke/lichday')}}" class="btn-new" style="text-decoration:none;color: white;"><i class="fa fa-undo" aria-hidden="true"></i> Quay lại</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop