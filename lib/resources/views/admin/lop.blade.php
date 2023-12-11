@extends('layout.admin')
@section('title', 'Thống kê')
@section('main')

<div class="bg0 p-t-100 p-b-140" style="background-color: #F8F0E5;">
    <div class="container">
        @include('errors.note')
        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="panel ">
                    <div class="panel-heading"><b>Danh sách lớp</b></div>
                    <div class="panel-body">
                        <div class="bootstrap-table">
                            <table class="table table-bordered" style="margin-top:20px;text-align:center">
                                <thead>
                                    <tr class="bg-primary">
                                        <th>Khóa học</th>
                                        <th>Hình thức lớp</th>
                                        <th>Mã lớp</th>
                                        <th width="35%">Tên lớp</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($listlop as $lop)
                                    <tr>
                                        <td>{{$lop->l_khoahoc}}</td>
                                        <td>{{$lop->l_hinhthuc}}</td>
                                        <td>{{$lop->l_malop}}</td>
                                        <td>{{$lop->l_tenlop}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="card-footer py-4 page-link" style="text-align: right;margin-top: -20px;">
                                <nav aria-label="...">
                                    <ul class="pagination justify-content-start">
                                        {{$listlop->links()}}
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <a href="{{asset('admin/thongke')}}" class="btn-new" style="text-decoration:none;color: white;"><i class="fa fa-undo" aria-hidden="true"></i> Quay lại</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop