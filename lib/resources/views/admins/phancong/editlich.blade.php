@extends('layout.admin')
@section('title', 'Phân công giảng dạy')
@section('main')

<div class="p-t-100 p-b-140">
    <div class="container">
        <div class="row">        
            <div class="col-xs-12 col-md-12 col-lg-12">
            @include('errors.note')
                <div class="panel ">
                    <div class="panel-heading"><b>Chi tiết lịch dạy</b></div>
                    <div class="panel-body">
                        <form method="post" action="{{ route('bdtEditLichDay', ['mon' => $phanCong['mon'], 'lop' => $phanCong['lop']]) }}">
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
                                        <th  style="width:40%">Tên bài giảng</th>
                                        <th>Số tiết</th>
                                        <th style="width:27%">Thứ - ngày</th>
                                        <th>Buổi</th>
                                        <th>Giảng viên</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($lich as $ld)
                                    <input type="hidden" name="data[{{ $ld->b_mabai }}][ld_malich]" id="" value="{{$ld->ld_malich}}">
                                    <tr>
                                        <td>
                                            {{$ld->b_tenbai}}
                                        </td>
                                        <td> {{$ld->b_sotiet}}</td>
                                        <td>                                         
                                            <input type="text" id="dateString{{$ld->b_mabai}}" value="{{$ld->tenthu}}" placeholder="--------" name="data[{{ $ld->b_mabai }}][ld_thu]" style="border: none;width:25%">|
                                            <input type="date" name="data[{{ $ld->b_mabai }}][ld_ngay]" id="" value="{{$ld->ld_ngay}}" onchange="showThu(event, '{{ $ld->b_mabai }}');">
                                        </td>
                                        <td>
                                            <select id="" name="data[{{ $ld->b_mabai }}][ld_buoi]" style="width:70%">
                                                <option value="">Chọn buổi</option>
                                                @foreach($chitiet as $ct)
                                                <option value="{{$ct->mabuoi}}" @if($ct->mabuoi == $ld->ld_buoi) selected @endif >{{$ct->tenbuoi}}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td> {{$ld->gv_ten}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="form-group">
                                <input type="submit" name="submit" value="Sửa lịch dạy" class="form-control btn-new">
                            </div>
                            <div class="form-group">
                                <a href="{{asset('bandaotao/phancong/')}}" class="form-control btn btn-default">Hủy Bỏ</a>
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


<script>
    function showThu(e, bai) {
        days = new Array(
            'Chủ nhật',
            'Thứ 2',
            'Thứ 3',
            'Thứ 4',
            'Thứ 5',
            'Thứ 6',
            'Thứ 7',
        );
        value = new Date(e.target.value);
        string = value.getDay();
        document.getElementById("dateString" + bai).value = days[string];
    }
</script>
@stop