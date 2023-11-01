@extends('layout.lecturer')
@section('title', 'Lớp' )
@section('main')

<div class="p-t-100 p-b-140">
    <div class="container">
        <div class="row">
            <form action="" method="get" style="margin-bottom: 20px;margin-left:17px" autocomplete="off">
                <div class="row">
                    <div class="col-md-3">
                        <select required name="hinhthuc" class="form-control">
                            <option value="0">Hình thức</option>
                            <option value="Tập trung" {{request()->hinhthuc=='Tập trung'?'selected':false}}>Tập trung</option>
                            <option value="Không tập trung" {{request()->hinhthuc=='Không tập trung'?'selected':false}}>Không tập trung</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="khoa" class="form-control" placeholder="Khóa học" value="{{request()->khoa}}">
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
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop