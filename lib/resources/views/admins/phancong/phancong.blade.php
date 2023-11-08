@extends('layout.admin')
@section('title', 'Phân công giảng dạy')
@section('main')

<div class="p-t-100 p-b-140">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="link-ul">
                    <li class="link-li link-ac"><a href="{{asset('bandaotao/phancong')}}" style="color: #881A1A;"><b>Phân công</b></a></li>
                    <li class="link-li"><i class="fa fa-long-arrow-right " aria-hidden="true"></i></li>
                    <li class="link-li"><a href="{{asset('bandaotao/phancong/mon')}}">Danh sách môn</a></li>
                    <li class="link-li"><i class="fa fa-long-arrow-right " aria-hidden="true"></i></li>
                    <!-- <li class="link-li"><a href="{{asset('')}}" >Phân công lớp</a></li>
                    <li class="link-li"><i class="fa fa-long-arrow-right " aria-hidden="true"></i></li> -->
                    <li class="link-li"><a href="{{asset('bandaotao/phancong/lop')}}">Danh sách lớp</a></li>
                    <!-- <li class="link-li"><i class="fa fa-long-arrow-right " aria-hidden="true"></i></li>
                    <li class="link-li"><a href="" >Phân công chi tiết</a></li> -->
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12" style="margin-bottom:20px;margin-top:30px">
                <a href="{{asset('bandaotao/phancong/mon')}}" class="btn-new" style="text-decoration:none;color: white;margin-bottom:50px"><i class="fa fa-plus" aria-hidden="true"></i> Thêm phân công</a>
            </div>
        </div>
        <!-- Danh sách đã phân công -->
        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="panel ">
                    <div class="panel-heading"><b>Danh sách đã phân công</b></div>
                    <div class="panel-body">
                        <div class="bootstrap-table">
                            <table class="table table-bordered" style="margin-top:20px;text-align:center">
                                <thead>
                                    <tr class="bg-primary">
                                        <th>Mã lịch</th>
                                        <th>Lớp học</th>
                                        <th>Môn học</th>
                                        <th>Tên bài giảng</th>
                                        <th>Thứ - ngày</th>
                                        <th>Buổi</th>
                                        <th>Địa điểm</th>
                                        <th>Trạng thái</th>
                                        <th>Tùy chọn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($lich as $ld)
                                    <tr>
                                        <td>{{$ld->ld_malich}}</td>
                                        <td>{{$ld->l_tenlop}}</td>
                                        <td>{{$ld->m_tenmon}}</td>
                                        <td>{{$ld->ld_baigiang}}</td>
                                        <td>{{$ld->ld_thu}} - {{$ld->ld_ngay}}</td>
                                        <td>{{$ld->ld_buoi}}</td>
                                        <td>{{$ld->ld_diadiem}}</td>
                                        <td>{{$ld->ld_status}}</td>
                                        <td>
                                            <a href="{{asset('bandaotao')}}" class="btn btn-default"><span class="glyphicon glyphicon-edit"></span></a> 
                                            <a href="{{asset('bandaotao')}}" onclick="return confirm('Bạn chắc chắn muốn xóa!!')" class="btn btn-default"><span class="glyphicon glyphicon-trash"></span></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop