@extends('layout.department')
@section('title', 'Quản lý Bài Giảng' )
@section('main')

<div class="p-t-100 p-b-140">
    <div class="container">
        LỌC DỮU LIỆU
        <!-- <div class="row">
            <div class="col-lg-12 col-md-12 col-lg-12">
                <div class="panel">
                    <div class="panel-heading"><b>Danh sách tất cả bài giảng </b></div>
                    <div class="panel-body">
                        <div class="bootstrap-table">
                            <table class="table table-bordered" style="text-align:center">
                                <thead>
                                    <tr class="bg-primary">
                                        <th>Mã bài</th>
                                        <th>Tên bài giảng</th>
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
        </div> -->

        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="panel ">
                    <div class="panel-heading"><b>Danh sách bài giảng theo môn</b></div>
                    <div class="panel-body">
                        <div class="bootstrap-table">
                            <table class="table table-bordered" style="margin-top:20px;text-align:center">
                                <thead>
                                    <tr class="bg-primary">
                                        <th style="width:15%">Mã môn học</th>
                                        <th>Tên môn học</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($listmon as $mon)
                                    <tr>
                                        <td>{{$mon->m_mamon}}</td>
                                        <td>{{$mon->m_tenmon}}</td>
                                        <td>
                                            <a href="{{asset('lanhdaokhoa/baigiang/danhsach/'.$mon->m_mamon)}}">Danh sách bài giảng</a>
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