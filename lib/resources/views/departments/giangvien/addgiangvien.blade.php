@extends('layout.department')
@section('title', 'Quản lý Giảng viên' )
@section('main')

<div class="p-t-100 p-b-140">
    <div class="container">
        <div class="row">
            <form action="" method="get" style="margin-bottom: 20px;margin-left:17px" autocomplete="off">
                <div class="row">
                    <div class="col-md-3">
                        <select class="form-control" name="chucvu">
                            <option value="0">Chức vụ</option>
                            @if(!empty(getAllChucVu()))
                            @foreach (getAllChucVu() as $chucvu)
                            <option value="{{$chucvu->cv_id}}" {{request()->chucvu==$chucvu->cv_id?'selected':false}}>{{$chucvu->cv_ten}}</option>
                            @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-control" name="thuockhoa">
                            <option value="0">Thuộc khoa</option>
                            @if(!empty(getAllKhoa()))
                            @foreach (getAllKhoa() as $khoa)
                            <option value="{{$khoa->k_makhoa}}" {{request()->thuockhoa==$khoa->k_makhoa?'selected':false}}>{{$khoa->k_tenkhoa}}</option>
                            @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="col-md-4">
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
                    <div class="panel-heading"><b>Danh sách giảng viên</b></div>
                    <div class="panel-body">
                        <div class="bootstrap-table">
                            <table class="table table-bordered" style="margin-top:20px;text-align:center">
                                <thead>
                                    <tr class="bg-primary">
                                        <th>Mã giảng viên</th>
                                        <th>Tên giảng viên</th>
                                        <th>Giới tính</th>
                                        <th>Số điện thoại</th>
                                        <th>Chức vụ</th>
                                        <th>Thuộc khoa</th>
                                        <th>Tùy chọn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($listgv as $giangvien)
                                    <tr>
                                        <td>{{$giangvien->gv_ma}}</td>
                                        <td>{{$giangvien->gv_ten}}</td>
                                        <td>{{$giangvien->gv_gioitinh}}</td>
                                        <td>{{$giangvien->gv_sdt}}</td>
                                        <td>{{$giangvien->cv_ten}}</td>
                                        <td>{{$giangvien->k_tenkhoa}}</td>
                                        <td>
                                            <a href="{{asset('lanhdaokhoa/giangvien/edit/'.$giangvien->gv_ma)}}" class="btn btn-default"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="{{asset('lanhdaokhoa/giangvien/delete/'.$giangvien->gv_ma)}}" onclick="return confirm('Bạn chắc chắn muốn xóa!!')" class="btn btn-default"><span class="glyphicon glyphicon-trash"></span></a>
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
            <button class="btn-new" id="popup-btn"><i class="fa fa-plus" aria-hidden="true"></i> Thêm giảng viên mới </button>
            <div class="col-lg-12">
                <div class="panel ">
                    <div class="popup">
                        <div class="popup-content">
                            <span class="close-btn">&times;</span>
                            <form method="post" enctype="multipart/form-data" autocomplete="off">
                                <div class="row" style="padding: 25px;">
                                    <div class="panel">
                                        <div class="panel-heading"><b>Thêm giảng viên</b></div>
                                    </div>
                                    <div class="form-group">
                                        <label>Mã giảng viên</label>
                                        <input required type="text" name="ma" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Tên giảng viên</label>
                                        <input required type="text" name="name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Giới tính</label>
                                        <select required name="gioitinh" class="form-control">
                                            <option value="Nam">Nam</option>
                                            <option value="Nữ">Nữ</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Số điện thoại</label>
                                        <input required type="number" name="sdt" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Chức vụ</label>
                                        <select required name="chucvu" class="form-control">
                                            @foreach ($listchucvu as $chucvu)
                                            <option value="{{$chucvu->cv_id}}">{{$chucvu->cv_ten}}</option>
                                            @endforeach
                                        </select>
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
                                        <input type="submit" name="submit" value="Thêm" class="form-control btn-new">
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
</div>

@stop