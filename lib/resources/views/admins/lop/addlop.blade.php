@extends('layout.admin')
@section('title', 'Quản lý Lớp ' )
@section('main')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    @include('errors.note')
    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading"><b>Danh sách lớp</b></div>
                <div class="panel-body">
                    <div class="bootstrap-table">
                        <table class="table table-bordered" style="margin-top:20px;">
                            <thead>
                                <tr class="bg-primary">
                                    <th>Khóa học</th>
                                    <th>Hình thức lớp</th>
                                    <th>Mã lớp</th>
                                    <th width="35%">Tên lớp</th>
                                    <th>Tùy chọn</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($listlop as $lop)
                                <tr>
                                    <td>{{$lop->l_khoahoc}}</td>
                                    <td>{{$lop->l_hinhthuc}}</td>
                                    <td>{{$lop->l_malop}}</td>
                                    <td>{{$lop->l_tenlop}}</td>
                                    <td>
                                        <a href="{{asset('admin/lop/edit/'.$lop->l_malop)}}" class="btn btn-default"><span class="glyphicon glyphicon-edit"></span></a>
                                        <a href="{{asset('admin/lop/delete/'.$lop->l_malop)}}" onclick="return confirm('Bạn chắc chắn muốn xóa!!')" class="btn btn-default"><span class="glyphicon glyphicon-trash"></span></a>
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
        <button class="btn-new" id="popup-btn"><i class="fa fa-plus" aria-hidden="true"></i> Thêm lớp mới </button>
        <div class="col-lg-12">
            <div class="panel panel-primary">
                <div class="popup">
                    <div class="popup-content">
                        <span class="close-btn">&times;</span>

                        <form method="post" enctype="multipart/form-data" autocomplete="off">
                            <div class="row" style="padding: 25px;">
                                <div class="panel panel-primary">
                                    <div class="panel-heading"><b>Thêm lớp mới</b></div>
                                </div>
                                <div class="form-group">
                                    <label>Khóa học</label> 
                                    <input required type="text" name="khoa" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Hình thức lớp</label>
                                    <select required name="hinhthuc" class="form-control">
                                        <option value="Tập trung">Tập trung - A</option>
                                        <option value="Không tập trung">Không tập trung - B</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Mã lớp</label>
                                    <input required type="text" name="ma" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Tên lớp</label>
                                    <input required type="text" name="name" class="form-control">
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