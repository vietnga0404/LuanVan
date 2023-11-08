@extends('layout.department')
@section('title', 'Phân công giảng dạy' )
@section('main')

<div class="p-t-100 p-b-140">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="panel">
                    <div class="panel-heading"><b>Phân công giảng viên</b></div>
                    <div class="panel-body">
                        <div class="bootstrap-table">
                            <table class="table table-bordered" style="text-align:center">
                                <thead>
                                    <tr class="bg-primary">
                                        <th>Lớp</th>
                                        <th>Môn</th>
                                        <th>Tên bài giảng</th>
                                        <th>Ngày - thứ</th>
                                        <th>Buổi</th>
                                        <th>Giảng viên</th>
                                        <th>Thời gian</th>
                                        <th>Địa điểm</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($lichday as $lich)
                                    <tr>
                                        <td>{{$lich->l_tenlop}}</td>
                                        <td>{{$lich->m_tenmon}}</td>
                                        <td>{{$lich->ld_baigiang}}</td>
                                        <td>{{$lich->ld_ngay}} - {{$lich->ld_thu}}</td>
                                        <td>{{$lich->ld_buoi}}</td>
                                        @foreach($giangvien as $gv)
                                        <td>
                                            <select name="" id="">
                                                <option value="0"></option>
                                                <option value="{{$gv->gv_ma}}">{{$gv->gv_ten}}</option>
                                            </select>
                                        </td>
                                        @endforeach
                                        <td>Từ ngày {{$lich->ld_tungay}} đến ngày {{$lich->ld_denngay}}</td>
                                        <td>{{$lich->ld_diadiem}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <input type="submit" name="submit" value="Phân công" class="btn-new">
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop