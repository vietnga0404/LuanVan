@extends('layout.department')
@section('title', 'Phân công giảng viên' )
@section('main')

<div class="p-t-100 p-b-140">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="panel">
                    <div class="panel-heading"><b>Phân công giảng viên</b></div>
                    <div class="panel-body">
                        <form action="{{ route('postGV', ['id' => $ldId]) }}" method="post">
                            <div class="row" style="border-bottom: 2px dotted #ddd;">
                                @foreach($lichday as $lich)
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Lớp học: </label>
                                        {{$lich->l_tenlop}}
                                    </div>
                                    <div class="form-group">
                                        <label for="">Môn học:</label>
                                        {{$lich->m_tenmon}}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Từ ngày:&nbsp;&nbsp;</label>
                                        {{$lich->ld_tungay}}
                                        <label for="">Đến ngày:</label>
                                        {{$lich->ld_denngay}}
                                    </div>
                                    <div class="form-group">
                                        <label for="">Địa điểm:</label>
                                        {{$lich->ld_diadiem}}
                                    </div>
                                </div>
                            </div>

                            <div class="bootstrap-table">
                                <table class="table table-bordered" style="text-align:center">
                                    <thead>
                                        <tr class="bg-primary">
                                            <!-- <th>Lớp</th> -->
                                            <!-- <th>Môn</th> -->
                                            <th>Tên bài giảng</th>
                                            <th>Ngày - thứ</th>
                                            <th>Buổi</th>
                                            <th>Giảng viên</th>
                                            <!-- <th>Thời gian</th> -->
                                            <!-- <th>Địa điểm</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <!-- <td>{{$lich->l_tenlop}}</td> -->
                                            <!-- <td>{{$lich->m_tenmon}}</td> -->
                                            <td style="width: 40%;">{{$lich->b_tenbai}}</td>
                                            <td>{{$lich->tenthu}} <br> {{$lich->ld_ngay}}</td>
                                            <td>{{$lich->tenbuoi}}</td>
                                            <td>
                                                <select name="giang_vien" id="" style="width: 90%;">
                                                    <option value="">Chọn giảng viên</option>
                                                    @foreach($giangvien as $gv)
                                                    <option value="{{$gv->gv_ma}}">{{$gv->gv_ten}}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <!-- <td>Từ ngày {{$lich->ld_tungay}} đến ngày {{$lich->ld_denngay}}</td> -->
                                            <!-- <td>{{$lich->ld_diadiem}}</td> -->
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <input type="submit" name="submit" value="Phân công" class="btn-new">
                                <a href="{{asset('lanhdaokhoa/phancong')}}" class="btn-new" style="text-decoration:none;color: white;"><i class="fa fa-undo" aria-hidden="true"></i> Quay lại</a>
                            </div>
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