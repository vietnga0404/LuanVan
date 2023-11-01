@extends('layout.department')
@section('title', 'Phân công giảng dạy' )
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
                                        <th>Lớp</th>
                                        <th>Môn</th>
                                        <th>Tên bài giảng</th>
                                        <th>Ngày</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($lichday as $ld)
                                    <tr>
                                        <td>{{$ld->l_tenlop}}</td>
                                        <td>{{$ld->m_tenmon}}</td>
                                        <td>{{$ld->b_tenbai}}</td>
                                        <td>{{$ld->ld_ngay}}</td>
                                        <td>
                                            <a href="{{asset('lanhdaokhoa/phancong/giangvien/'.$ld->ld_malich)}}">Phân công giảng viên</a>
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