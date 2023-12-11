@extends('layout.training')
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
                    <li class="link-li link-ac"><a href="{{asset('bandaotao/phancong/lop')}}" style="color: #881A1A;">Danh sách lớp</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="panel ">
                    <div class="panel-heading"><b>Danh sách </b></div>
                    <div class="panel-body">
                        <div class="bootstrap-table">
                            <table class="table table-bordered" style="margin-top:20px;text-align:center">
                                <thead>
                                    <tr class="bg-primary">
                                        <th>Lớp học</th>
                                        <th>Môn học</th>
                                        <th>Trạng thái</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($lich as $ld)
                                    <tr>
                                        <td>{{$ld->l_tenlop}}</td>
                                        <td>{{$ld->m_tenmon}}</td>
                                        <td>{!!$ld->ld_status==0?'<button class="btn btn-primary btn-sm" disabled>Đang phân công</button>':'<button class="btn btn-success btn-sm" disabled>Đã phân công</button>'!!}</td>
                                        <td>
                                            @if (is_null($ld->ld_status))
                                            <a href="{{ route('phancong', ['ma' => $ld->ld_mon, 'id' => $ld->ld_lop]) }}">Phân công chi tiết</a>
                                            @elseif($ld->ld_status==0) 
                                            
                                            @endif
                                        </td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <a href="{{asset('bandaotao/phancong/mon')}}" class="btn-new" style="text-decoration:none;color: white;"><i class="fa fa-undo" aria-hidden="true"></i> Quay lại</a>

                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop