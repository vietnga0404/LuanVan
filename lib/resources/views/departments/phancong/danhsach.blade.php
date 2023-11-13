@extends('layout.department')
@section('title', 'Phân công giảng viên' )
@section('main')

<div class="p-t-100 p-b-140">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="panel">
                    <div class="panel-heading"><b>Phân công</b></div>
                    <div class="panel-body">
                        <div class="bootstrap-table">
                            <table class="table table-bordered" style="text-align:center">
                                <thead>
                                    <tr class="bg-primary">
                                        <th>Mã lịch</th>                                    
                                        <th>Lớp</th>
                                        <th>Môn</th>
                                        <th>Tên bài giảng</th>
                                        <!-- <th>Thứ - Ngày</th> -->
                                        <th>Trạng thái</th>
                                        <th></th>
                                        <!-- <th></th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($lich as $ld)
                                    <tr>
                                        <td>{{$ld->ld_malich}}</td>
                                        <td>{{$ld->l_tenlop}}</td>
                                        <td>{{$ld->m_tenmon}}</td>
                                        <td style="width: 25%;">{{$ld->b_tenbai}}</td>
                                        <!-- <td>{{$ld->tenthu}} <br> {{$ld->ld_ngay}}</td> -->
                                        <td>{!!$ld->ld_status==0?'<button class="btn btn-primary btn-sm">Đang phân công</button>':'<button class="btn btn-success btn-sm">Đã phân công</button>'!!}</td>
                                        <td>
                                            @if ($ld->ld_status==0)
                                            <a href="{{asset('lanhdaokhoa/phancong/giangvien/'.$ld->ld_malich)}}">Phân công giảng viên</a>
                                            @else
                                            <a href="{{asset('lanhdaokhoa/phancong/edit/'.$ld->ld_malich)}}" class="btn btn-default"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="{{asset('lanhdaokhoa/phancong/delete/'.$ld->ld_malich)}}" onclick="return confirm('Bạn chắc chắn muốn xóa!!')" class="btn btn-default"><span class="glyphicon glyphicon-trash"></span></a>
                                            @endif
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