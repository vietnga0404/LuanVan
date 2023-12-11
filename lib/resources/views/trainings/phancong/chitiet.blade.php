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
                    <li class="link-li"><a href="{{asset('bandaotao/phancong/lop')}}">Danh sách lớp</a></li>
                    <li class="link-li"><i class="fa fa-long-arrow-right " aria-hidden="true"></i></li>
                    <li class="link-li link-ac"><a href="{{asset('bandaotao/phancong/lop')}}" style="color: #881A1A;"><b>Phân công chi tiết</b></a></li>
                </ul>
            </div>
        </div>
        @include('errors.note')
        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="panel ">
                    <div class="panel-heading"><b>Phân công chi tiết </b></div>
                    <div class="panel-body">
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
                                    <label for="">Từ ngày:&nbsp;&nbsp;</label>
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

                        <form action="{{ route('postDetail', ['ma' => $phanCong['ma'], 'id' => $phanCong['id']]) }}" method="post">
                            <table class="table table-bordered" style="margin-top:20px;text-align:center">
                                <thead>
                                    <tr class="bg-primary">
                                        <th>Tên bài giảng</th>
                                        <th>Số tiết</th>
                                        <th>Thứ - ngày</th>
                                        <th>Buổi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($listbai as $bai)
                                    
                                    <tr>
                                        <td name="data[{{ $bai->b_mabai }}][baigiang]" style="width: 50%;">{{$bai->b_tenbai}}</td>
                                        <td>{{$bai->b_sotiet}}</td>
                                        <td style="width: 25%;">
                                            <input type="text" id="dateString{{$bai->b_mabai}}" value="" placeholder="--------" name="data[{{ $bai->b_mabai }}][thu]" style="border: none;width:30%">|
                                            <input type="date" name="data[{{ $bai->b_mabai }}][ngay]" id="" onchange="showThu(event, '{{ $bai->b_mabai }}');">
                                        </td>
                                        <td>
                                            <select id="" name="data[{{ $bai->b_mabai }}][buoi]" style="width:70%">
                                                <option value="">Chọn buổi</option>
                                                @foreach($chitiet as $ct)
                                                <option value="{{$ct->mabuoi}}" >{{$ct->tenbuoi}}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                    </tr>
                                    {{csrf_field()}}
                                    @endforeach
                                </tbody>
                            </table>
                            <input type="submit" name="submit" value="Phân công" class="btn-new">
                            <a href="{{asset('bandaotao/phancong/lop')}}" class="btn-new" style="text-decoration:none;color: white;"><i class="fa fa-undo" aria-hidden="true"></i> Quay lại</a>
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