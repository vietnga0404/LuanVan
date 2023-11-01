@extends('layout.admin')
@section('title', 'Quản lý Môn' )
@section('main')

<div class="p-t-100 p-b-140">
    <div class="container">
        @include('errors.note')
        <div class="row">
            <div class="col-lg-12 col-md-12 col-lg-12">
                <div class="panel">
                    <div class="panel-heading"><b>Danh sách bài giảng môn: "{{$mon->m_tenmon}}"</b></div>
                    <div class="panel-body">
                        <div class="bootstrap-table">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="bg-primary">
                                        <th>Mã bài</th>
                                        <th>Tên bài</th>
                                        <th>Số tiết</th>
                                        <th>Thuộc môn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($listbai as $bai)
                                    <tr>
                                        <td>{{$bai->b_mabai}}</td>
                                        <td>{{$bai->b_tenbai}}</td>
                                        <td>{{$bai->b_sotiet}}</td>
                                        <td>{{$bai->m_tenmon}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <a href="{{asset('bandaotao/mon')}}" class="btn-new" style="color: white;"><i class="fa fa-undo" aria-hidden="true"></i> Quay lại</a>
        </div>
    </div>
</div> 

@stop