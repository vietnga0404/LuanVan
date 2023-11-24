@extends('layout.student')
@section('title', 'Thư viện' )
@section('main')

<div class="bg0 p-t-100 p-b-140" style="background-color: #F8F0E5;">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="panel ">
                    <div class="panel-heading"><b>Thông tin chi tiết sách</b></div>
                    <div class="panel-body ">
                        <table style="padding: 10px;">
                            @foreach ($chitiet as $sach)
                            <tr>
                                <td style="width: 5%;"><b>Loại sách:</b></td>
                                <td style="width: 20%;">{{$sach->loai}} - {{$sach->tenloai}}</td>
                            </tr>
                            <tr>
                                <td><b>Mã sách:</b></td>
                                <td>{{$sach->sach}}</td>
                            </tr>
                            <tr>
                                <td><b>Tên sách:</b></td>
                                <td>{{$sach->tensach}}</td>
                            </tr>
                            <tr>
                                <td><b>Kệ sách:</b></td>
                                <td>{{$sach->ke_sach}}</td>
                            </tr>
                            <tr>
                                <td><b>Tác giả:</b></td>
                                <td>{{$sach->tac_gia}}</td>
                            </tr>
                            <tr>
                                <td><b>Nhà xuất bản:</b></td>
                                <td>{{$sach->nha_xuat_ban}}</td>
                            </tr>
                            <tr>
                                <td><b>Năm xuất bản:</b></td>
                                <td>{{$sach->nam_xuat_ban}}</td>
                            </tr>
                            <tr>
                                <td><b>Trích dẫn:</b></td>
                            </tr>
                        </table>
                        {!!$sach->trich_dan!!}
                        @endforeach
                        <a href="{{asset('hocvien/thuvien/')}}" class="btn-new" style="text-decoration:none;color: white;"><i class="fa fa-undo" aria-hidden="true"></i> Quay lại</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop