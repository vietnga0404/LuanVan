@extends('layout.department')
@section('title', 'Quản lý Giảng viên' )
@section('main')
 

<div class="bg0 p-t-100 p-b-140" style="background-color: #F8F0E5;">
    <div class="container">
        @include('errors.note')
        <div class="row">
            <div class="col-lg-12">
                <div class="panel ">
                    
                    <div class="panel-heading">
                        <b>Sửa thông tin giảng viên </b>
                    </div>
                    <div class="panel-body">
                        <form method="post" enctype="multipart/form-data" autocomplete="off">
                            <div class="form-group">
                                <label>Mã giảng viên</label>
                                <input required type="text" name="ma" class="form-control" value="{{$giangvien->gv_ma}}">
                            </div>
                            <div class="form-group">
                                <label>Tên giảng viên</label>
                                <input required type="text" name="name" class="form-control" value="{{$giangvien->gv_ten}}">
                            </div>
                            <div class="form-group">
                                <label>Giới tính</label>
                                <select required name="gioitinh" class="form-control">
                                    <option value="Nam" @if($giangvien->gv_gioitinh == 'Nam') selected @endif >Nam</option>
                                    <option value="Nữ" @if($giangvien->gv_gioitinh == 'Nữ') selected @endif >Nữ</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Số điện thoại</label>
                                <input required type="number" name="sdt" class="form-control" value="{{$giangvien->gv_sdt}}">
                            </div>
                            <div class="form-group">
                                <label>Trình độ</label>
                                <select required name="trinhdo" class="form-control">
                                    @foreach($trinhdolist as $trinhdo)
                                    <option value="{{$trinhdo->td_id}}" @if($giangvien->gv_trinhdo == $trinhdo->td_id) selected @endif >{{$trinhdo->td_ten}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Thuộc khoa</label>
                                <select required name="thuockhoa" class="form-control">
                                    @foreach($khoalist as $khoa)
                                    <option value="{{$khoa->k_makhoa}}" @if($giangvien->gv_khoa == $khoa->k_makhoa) selected @endif >{{$khoa->k_tenkhoa}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" value="Sửa thông tin" class="form-control btn-new">
                            </div>
                            <div class="form-group">
                                <a href="{{asset('lanhdaokhoa/giangvien')}}" class="form-control btn btn-default">Hủy Bỏ</a>
                            </div>
                            {{csrf_field()}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/.row-->
</div> <!--/.main-->

@stop