@extends('layout.department')
@section('title', 'Phân công giảng viên' )
@section('main')

<div class="p-t-100 p-b-140">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="panel ">
                    <div class="panel-heading"><b>Chi tiết lịch dạy</b></div>
                    <div class="panel-body">
                        <form method="post" action="{{ route('postEdit') }}" enctype="multipart/form-data">
                            <div class="row" style="border-bottom: 2px dotted #ddd;">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Lớp học: </label>
                                        {{$lop}}
                                    </div>
                                    <div class="form-group">
                                        <label for="">Môn học:</label>
                                        {{$mon}}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Từ ngày:</label>
                                        {{date('d-m-Y',strtotime($tungay))}}
                                        <label for="">Đến ngày:</label>
                                        {{date('d-m-Y',strtotime($denngay))}}
                                    </div>
                                    <div class="form-group">
                                        <label for="">Địa điểm:</label>
                                        {{$diadiem}}
                                    </div>
                                </div>
                            </div>
                            <table class="table table-bordered" style="margin-top:20px;text-align:center">
                                <thead>
                                    <tr class="bg-primary">
                                        <th>Tên bài giảng</th>
                                        <th>Số tiết</th>
                                        <th>Thứ - ngày</th>
                                        <th>Buổi</th>
                                        <th>Giảng viên</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($lich as $ld)
                                    <tr>
                                        <td style="width:50%">
                                            {{$ld->b_tenbai}}
                                        </td>
                                        <td> {{$ld->b_sotiet}}</td>
                                        <td>
                                            {{$ld->ld_thu}} <br> {{date('d-m-Y',strtotime($ld->ld_ngay))}}
                                        </td>
                                        <td>{{$ld->tenbuoi}}</td>
                                        <td>
                                            <select id="" name="giangvien" style="width:90%">
                                                <option value="">Chọn giảng viên</option>
                                                @foreach($giangvien as $gv)
                                                <option value="{{$gv->gv_ma}}" @if($gv->gv_ma == $ld->ld_gv) selected @endif >{{$gv->gv_ten}}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="form-group">
                                <input type="submit" name="submit" value="Sửa lịch dạy" class="form-control btn-new">
                            </div>
                            <div class="form-group">
                                <a href="{{asset('lanhdaokhoa/phancong/')}}" class="form-control btn btn-default">Hủy Bỏ</a>
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