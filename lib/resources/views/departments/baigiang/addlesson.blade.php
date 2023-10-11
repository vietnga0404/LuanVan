@extends('layout.department')
@section('title', 'Quản lý Bài Giảng' )
@section('main')

<div class="bg0 p-t-100 p-b-140" style="background-color: #F8F0E5;">
    <div class="container">
        @include('errors.note')
        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="panel ">
                    <div class="panel-heading"><b>Danh sách môn</b></div>
                    <div class="panel-body">
                        <div class="bootstrap-table">
                            <table class="table table-bordered" style="margin-top:20px;">
                                <thead>
                                    <tr class="bg-primary">
                                        <th style="width:15%">Mã môn học</th>
                                        <th>Tên môn học</th>
                                        <th>Thuộc khoa</th>
                                        <th style="width:15%">Tùy chọn</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>upp</td>
                                        <td>fuyoyf</td>
                                        <td>foyo</td>
                                        <td>
                                            <a href="" class="btn btn-default"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="" onclick="return confirm('Bạn chắc chắn muốn xóa!!')" class="btn btn-default"><span class="glyphicon glyphicon-trash"></span></a>
                                        </td>
                                        <td>
                                            <a href="">Danh sách bài giảng</a>
                                        </td>
                                    </tr>
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