@extends('layout.department')
@section('title', 'Phân công giảng viên' )
@section('main')

<div class="p-t-100 p-b-140">
    <div class="container">        
        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="panel ">
                    <div class="panel-heading"><b>Danh sách phân công</b></div>
                    <div class="panel-body">
                        <div class="bootstrap-table">
                            <table class="table table-bordered" style="margin-top:20px;text-align:center">
                                <thead>
                                    <tr class="bg-primary">
                                        <th>Lớp học</th>
                                        <th>Môn học</th>
                                        <th>Trạng thái</th>
                                        <th>Tùy chọn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($lich as $ld)
                                    <tr>
                                        <td>{{$ld->l_tenlop}}</td>
                                        <td>{{$ld->m_tenmon}}</td>
                                        <td>{!!$ld->ld_status==0?'<button class="btn btn-primary btn-sm">Đang phân công</button>':'<button class="btn btn-success btn-sm">Đã phân công</button>'!!}</td>
                                        <td>
                                            @if ($ld->ld_status==0)
                                            <a href="{{ route('getGV', ['mon' => $ld->ld_mon, 'lop' => $ld->ld_lop]) }}">Phân công giảng viên</a>
                                            @else
                                            <a href="{{ route('getSchduleGV', ['mon' => $ld->ld_mon, 'lop' => $ld->ld_lop]) }}" class="btn btn-default" title="Xem chi tiết"><span class="glyphicon glyphicon-eye-open"></span></a>
                                            <a href="{{ route('EditGV', ['mon' => $ld->ld_mon, 'lop' => $ld->ld_lop]) }}" class="btn btn-default"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="{{ route('Delete', ['mon' => $ld->ld_mon, 'lop' => $ld->ld_lop]) }}" onclick="return confirm('Bạn chắc chắn muốn xóa!!')" class="btn btn-default"><span class="glyphicon glyphicon-trash"></span></a>
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