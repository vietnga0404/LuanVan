@extends('layout.admin')
@section('title', 'Phân công giảng dạy')
@section('main')

<div class="p-t-100 p-b-140">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="link-ul">
                    <li class="link-li"><a href="{{asset('bandaotao/phancong')}}">Phân công</a></li>
                    <li class="link-li"><i class="fa fa-long-arrow-right " aria-hidden="true"></i></li>
                    <li class="link-li"><a href="{{asset('bandaotao/phancong/mon')}}">Danh sách môn</a></li>
                    <li class="link-li"><i class="fa fa-long-arrow-right " aria-hidden="true"></i></li>
                    <li class="link-li"><a href="{{asset('')}}">Phân công lớp</a></li>
                    <li class="link-li"><i class="fa fa-long-arrow-right " aria-hidden="true"></i></li>
                    <li class="link-li"><a href="{{asset('bandaotao/phancong/lop')}}">Danh sách lớp</a></li>
                    <li class="link-li"><i class="fa fa-long-arrow-right " aria-hidden="true"></i></li>
                    <li class="link-li link-ac"><a href="" style="color: #881A1A;"><b>Phân công chi tiết</b></a></li>
                </ul>
            </div>
        </div>
        @include('errors.note')
        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="panel ">
                    <div class="panel-heading"><b>Danh sách </b></div>
                    <div class="panel-body">
                        <form method="post" enctype="multipart/form-data">
                            <div class="row" style="border-bottom: 2px dotted #ddd;">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Lớp học: </label>
                                        {{$lich->ld_lop}}
                                    </div>
                                    <div class="form-group">
                                        <label for="">Môn học:</label>
                                        {{$lich->ld_mon}}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Từ ngày:&nbsp;&nbsp;</label>
                                        {{$lich->ld_tungay}}
                                        <label for="">Đến ngày:</label>
                                        {{$lich->ld_denngay}}
                                    </div>
                                    <div class="form-group">
                                        <label for="">Địa điểm:</label>
                                        {{$lich->ld_diadiem}}
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="panel-body">
                        <div class="bootstrap-table">
                            <table class="table table-bordered" style="margin-top:20px;text-align:center">
                                <thead>
                                    <tr class="bg-primary">
                                        <th>Tên bài giảng</th>
                                        <th>Số tiết</th>
                                        <th>Thứ - ngày</th>
                                        <th>Buổi</th>
                                        <th>Trạng thái</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <select name="" id="">
                                                @foreach($listbai as $bai)
                                                <option value="{{$bai->b_mabai}}">{{$bai->b_tenbai}}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>{{$bai->b_sotiet}}</td>
                                        <td>
                                            
                                            <select name="" id="">
                                                <option value="">{{$lich->ld_thu}}</option>
                                            </select>
                                        </td>
                                        <td>fs</td>
                                        <td>fs</td>
                                    </tr>
                                </tbody>
                            </table>
                            <input type="submit" name="submit" value="Phân công lớp" class="btn-new">
                            <a href="{{asset('bandaotao/phancong/lop')}}" class="btn-new" style="text-decoration:none;color: white;"><i class="fa fa-undo" aria-hidden="true"></i> Quay lại</a>

                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop