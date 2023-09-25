@extends('layout.admin')
@section('title', 'Quản lý Khoa ' )
@section('main')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
@include('errors.note')
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading"><b>Danh sách khoa</b></div>
                <div class="panel-body">
                    <div class="bootstrap-table">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="bg-primary">
                                    <th style="width:20%">Mã khoa</th>
                                    <th>Tên khoa</th>
                                    <th style="width:30%">Tùy chọn</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($listkhoa as $khoa)
                                <tr>
                                    <td>{{$khoa->k_makhoa}}</td>
                                    <td>{{$khoa->k_tenkhoa}}</td>
                                    <td style="text-align: center;">
                                        <a href="{{asset('admin/khoa/edit/'.$khoa->k_makhoa)}}" class="btn btn-default" ><span class="glyphicon glyphicon-edit"></span> </a>
                                        <a href="{{asset('admin/khoa/delete/'.$khoa->k_makhoa)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-default"><span class="glyphicon glyphicon-trash"></span></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- thêm mới -->
    <div class="row">
        <button class="btn-new" id="popup-btn"><i class="fa fa-plus" aria-hidden="true"></i> Thêm khoa mới </button>
        <div class="col-lg-12">
            <div class="panel panel-primary">
                <div class="popup">
                    <div class="popup-content">
                        <span class="close-btn">&times;</span>

                        <form method="post" autocomplete="off">
                            <div class="row" style="padding: 25px;">
                                <div class="panel panel-primary">
                                    <div class="panel-heading"><b>Thêm lớp mới</b></div>
                                </div>
                                <div class="form-group">
                                    <label>Mã khoa</label>
                                    <input required type="text" name="ma" class="form-control" placeholder="Mã khoa...">
                                </div>
                                <div class="form-group">
                                    <label>Tên khoa</label>
                                    <input required type="text" name="name" class="form-control" placeholder="Tên khoa...">
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="submit" class="form-control btn btn-primary" placeholder="Tên khoa..." value="Thêm mới">
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