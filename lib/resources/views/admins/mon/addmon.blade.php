@extends('layout.admin')
@section('title', 'Quản lý Môn' )
@section('main')

<div class="p-t-100 p-b-140">
    <div class="container">
        <div class="row">
            <form action="" method="get" style="margin-bottom: 20px;margin-left:17px" autocomplete="off">
                <div class="row">
                    <div class="col-md-3">
                        <select class="form-control" name="thuockhoa">
                            <option value="0">Chọn khoa </option> 
                            @if(!empty(getAllKhoa()))
                            @foreach (getAllKhoa() as $khoa)
                            <option value="{{$khoa->k_makhoa}}" {{request()->thuockhoa==$khoa->k_makhoa?'selected':false}}>{{$khoa->k_tenkhoa}}</option>
                            @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="key" class="form-control" placeholder="Từ khóa tìm kiếm..." value="{{request()->key}}">
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn-new">Tìm kiếm</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="bg0 p-t-100 p-b-140" style="background-color: #F8F0E5;">
    <div class="container">
        @include('errors.note')
        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="panel ">
                    <div class="panel-heading"><b>Danh sách môn</b></div>
                    <div class="panel-body">
                        <div class="bootstrap-table">
                            <table class="table table-bordered" style="margin-top:20px;text-align:center">
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
                                    @foreach($listmon as $mon)
                                    <tr>
                                        <td>{{$mon->m_mamon}}</td>
                                        <td>{{$mon->m_tenmon}}</td>
                                        <td>{{$mon->k_tenkhoa}}</td>
                                        <td>
                                            <a href="{{asset('bandaotao/mon/edit/'.$mon->m_mamon)}}" class="btn btn-default"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="{{asset('bandaotao/mon/delete/'.$mon->m_mamon)}}" onclick="return confirm('Bạn chắc chắn muốn xóa!!')" class="btn btn-default"><span class="glyphicon glyphicon-trash"></span></a>
                                        </td>
                                        <td>
                                            <a href="{{asset('bandaotao/mon/danhsach/'.$mon->m_mamon)}}">Danh sách bài giảng</a>
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