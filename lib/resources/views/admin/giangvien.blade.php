@extends('layout.admin')
@section('title', 'Thống kê')
@section('main')

<div class="p-t-100 p-b-140" >
    <div class="container">
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
                                        <th>Trình độ</th>
                                        <th>Thuộc khoa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($listgv as $giangvien)
                                    <tr>
                                        <td>{{$giangvien->gv_ma}}</td>
                                        <td>{{$giangvien->gv_ten}}</td>
                                        <td>{{$giangvien->gv_gioitinh}}</td>
                                        <td>{{$giangvien->gv_sdt}}</td>
                                        <td>{{$giangvien->td_ten}}</td>
                                        <td>{{$giangvien->k_tenkhoa}}</td>                                    
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="card-footer py-4 page-link" style="text-align: right;margin-top: -20px;">
                                <nav aria-label="...">
                                    <ul class="pagination justify-content-start">
                                        {{$listgv->links()}}
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <a href="{{asset('admin/thongke')}}" class="btn-new" style="color: white;"><i class="fa fa-undo" aria-hidden="true"></i> Quay lại</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop