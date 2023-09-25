@extends('layout.admin')
@section('title', 'Quản lý Môn' )
@section('main')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    @include('errors.note')
    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading"><b>Danh sách môn</b></div>
                <div class="panel-body">
                    <div class="bootstrap-table">
                        <table class="table table-bordered" style="margin-top:20px;">
                            <thead>
                                <tr class="bg-primary">
                                    <th style="width:20%">Mã môn học</th>
                                    <th>Tên môn học</th>
                                    <th>Thuộc khoa</th>
                                    <th style="width:30%">Tùy chọn</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($listmon as $mon)
                                <tr>
                                    <td>{{$mon->m_mamon}}</td>
                                    <td>{{$mon->m_tenmon}}</td>
                                    <td>{{$mon->m_khoa}}</td>
                                    <td>
                                        <a href="{{asset('admin/mon/edit/'.$mon->m_mamon)}}" class="btn btn-default"><span class="glyphicon glyphicon-edit"></span></a>
                                        <a href="{{asset('admin/mon/delete/'.$mon->m_mamon)}}" onclick="return confirm('Bạn chắc chắn muốn xóa!!')" class="btn btn-default"><span class="glyphicon glyphicon-trash"></span></a>
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

    <!-- thêm mới -->
    <div class="row">
        <button class="btn-new" id="popup-btn"><i class="fa fa-plus" aria-hidden="true"></i> Thêm môn mới </button>
        <div class="col-lg-12">
            <div class="panel panel-primary">
                <div class="popup">
                    <div class="popup-content">
                        <span class="close-btn">&times;</span>

                        <form method="post" enctype="multipart/form-data" autocomplete="off">
                            <div class="row" style="padding: 25px;">
                                <div class="panel panel-primary">
                                    <div class="panel-heading"><b>Thêm môn mới</b></div>
                                </div>
                                <div class="form-group">
                                    <label>Mã môn</label>
                                    <input required type="text" name="ma" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Tên môn</label>
                                    <input required type="text" name="name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Thuộc khoa</label>
                                    <select required name="thuockhoa" class="form-control">
                                        @foreach ($listkhoa as $khoa)
                                        <option value="{{$khoa->k_makhoa}}">{{$khoa->k_tenkhoa}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="submit" value="Thêm" class="form-control btn btn-primary">
                                </div>
                            </div>
                            {{csrf_field()}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop