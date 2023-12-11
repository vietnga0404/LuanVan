@extends('layout.admin')
@section('title', 'Thống kê')
@section('main')

<div class="p-t-100 p-b-140">
    <div class="container">

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
                                        <td>{!!$ld->ld_status==0?'<button class="btn btn-primary btn-sm" disabled>Đang phân công</button>':'<button class="btn btn-success btn-sm" disabled>Đã phân công</button>'!!}</td>
                                        <td>
                                            @if ($ld->ld_status==0)
                                            @else
                                            <a href="{{ route('chitietlich', ['mon' => $ld->ld_mon, 'lop' => $ld->ld_lop]) }}" class="btn btn-default" title="Xem chi tiết"><span class="glyphicon glyphicon-eye-open"></span></a>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <a href="{{asset('admin/thongke')}}" class="btn-new" style="text-decoration:none;color: white;"><i class="fa fa-undo" aria-hidden="true"></i> Quay lại</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop