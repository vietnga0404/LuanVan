@extends('layout.admin')
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
                    <!-- <li class="link-li"><a href="{{asset('')}}">Phân công lớp</a></li>
                    <li class="link-li"><i class="fa fa-long-arrow-right " aria-hidden="true"></i></li> -->
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
                        <form method="post" enctype="multipart/form-data">
                            <div class="row" style="border-bottom: 2px dotted #ddd;">
                                @foreach($lich as $ld)
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Lớp học: </label>
                                        {{$ld->l_tenlop}}
                                    </div>
                                    <div class="form-group">
                                        <label for="">Môn học:</label>
                                        {{$ld->m_tenmon}}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Từ ngày:&nbsp;&nbsp;</label>
                                        {{$ld->ld_tungay}}
                                        <label for="">Đến ngày:</label>
                                        {{$ld->ld_denngay}}
                                    </div>
                                    <div class="form-group">
                                        <label for="">Địa điểm:</label>
                                        {{$ld->ld_diadiem}}
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </form>

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
                                    <tr>
                                        <td style="width:35%">
                                            <select id="" name="baigiang" style="width:60%">
                                                <option value="">Chọn bài giảng</option>
                                                @foreach($listbai as $bai)
                                                <option value="{{$bai->b_mabai}}">{{$bai->b_tenbai}}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>{{$bai->b_sotiet}}</td>
                                        <td style="width:35%">
                                            <input type="text" id="dateString" value="" placeholder="--------" name="thu" style="border: none;width:20%">|
                                            <input type="date" name="ngay" id="" onchange="showThu(event);">
                                        </td>
                                        <td style="width:20%">
                                            <select id="" name="buoi" style="width:70%">
                                                <option value="">Chọn buổi</option>
                                                @foreach($chitiet as $ct)
                                                <option value="{{$ct->mabuoi}}">{{$ct->tenbuoi}}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <input type="submit" name="submit" value="Phân công" class="btn-new">
                            <a href="{{asset('bandaotao/phancong/lop')}}" class="btn-new" style="text-decoration:none;color: white;"><i class="fa fa-undo" aria-hidden="true"></i> Quay lại</a>
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
    function showThu(e) {
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
        document.getElementById("dateString").value = days[string];
    }
</script>
@stop