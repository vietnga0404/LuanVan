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
                    <!-- <li class="link-li"><a href="{{asset('')}}">Phân công lớp</a></li>
                    <li class="link-li"><i class="fa fa-long-arrow-right " aria-hidden="true"></i></li> -->
                    <li class="link-li"><a href="{{asset('bandaotao/phancong/lop')}}">Danh sách lớp</a></li>
                    <li class="link-li"><i class="fa fa-long-arrow-right " aria-hidden="true"></i></li>
                    <li class="link-li link-ac"><a href="{{asset('bandaotao/phancong/lop')}}" style="color: #881A1A;"><b>Phân công chi tiết</b></a></li>
                </ul>
            </div>
        </div>
        @include('errors.note')
        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="panel ">
                    <div class="panel-heading"><b>Phân công chi tiết </b></div>
                    <div class="panel-body">
                        <form method="post" enctype="multipart/form-data">
                            <div class="row" style="border-bottom: 2px dotted #ddd;">
                                @foreach($lich as $ld)
                                <div class="col-md-6">
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
                            @endforeach
                        </form>
                    </div>
                    <div class="panel-body">
                        <form action="" method="post">
                            <!-- <div class="bootstrap-table"> -->
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
                                                <select name="baigiang" id="" style="width:70%">
                                                    <option value="0"></option>
                                                    @foreach($listbai as $bai)
                                                    <option value="{{$bai->b_mabai}}">{{$bai->b_tenbai}}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td>{{$bai->b_sotiet}}</td>
                                            <td>

                                                <select name="" id="">
                                                    <option value=""></option>
                                                </select>
                                            </td>
                                            <td></td>
                                            <td>fs</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <input type="submit" name="submit" value="Phân công" class="btn-new">
                                <a href="{{asset('bandaotao/phancong/lop')}}" class="btn-new" style="text-decoration:none;color: white;"><i class="fa fa-undo" aria-hidden="true"></i> Quay lại</a>
                            <!-- </div> -->
                            {{csrf_field()}}
                        </form>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop