@extends('layout.admin')
@section('title', 'Phân công giảng dạy')
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
                                @foreach($lich as $ld)
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Mã lịch: </label>
                                        {{$ld->ld_malich}}
                                    </div>
                                    <div class="form-group">
                                        <label for="">Lớp học: </label>
                                        {{$ld->l_tenlop}}
                                    </div>
                                    <div class="form-group">
                                        <label for="">Môn học:</label>
                                        {{$ld->m_tenmon}}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Từ ngày:&nbsp;&nbsp;</label>
                                        {{$ld->ld_tungay}}
                                        <label for="">Đến ngày:</label>
                                        {{$ld->ld_denngay}}
                                    </div>
                                    <div class="form-group">
                                        <label for="">Địa điểm:</label>
                                        {{$ld->ld_diadiem}}
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
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="width:50%">
                                            {{$ld->b_tenbai}}
                                        </td>
                                        <td> {{$ld->b_sotiet}}</td>
                                        <td>
                                            {{$ld->tenthu}} - {{$ld->ld_ngay}}
                                        </td>
                                        <td>
                                            {{$ld->tenbuoi}}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="{{asset('bandaotao/phancong/')}}" class="btn-new" style="text-decoration:none;color: white;"><i class="fa fa-undo" aria-hidden="true"></i> Quay lại</a>
                            @endforeach
                        </form>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop