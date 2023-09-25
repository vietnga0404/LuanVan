@extends('layout.admin')
@section('title', 'Quản lý Lớp' )
@section('main')


<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
@include('errors.note')
    <div class="row">
        <div class="col-lg-8">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <b>Sửa lớp</b>
                </div>
                <div class="panel-body">
                    <form method="post" enctype="multipart/form-data" autocomplete="off">
                        <div class="form-group">
                            <label>Khóa học</label>
                            <input required type="text" name="khoa" class="form-control" value="{{$lop->l_khoahoc}}">
                        </div>
                        <div class="form-group">
                            <label>Hình thức lớp</label>
                           <br> {{$lop->l_hinhthuc}}
                            <select required name="hinhthuc" class="form-control">
                                
                                <option value="Tập trung" >Tập trung - A</option>
                                <option value="Không tập trung">Không tập trung - B</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label>Mã lớp</label>
                            <input required type="text" name="ma" class="form-control" value="{{$lop->l_malop}}">
                        </div>
                        <div class="form-group">
                            <label>Tên lớp</label>
                            <input required type="text" name="name" class="form-control" value="{{$lop->l_tenlop}}">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" value="Sửa lớp" class="form-control btn btn-primary">
                        </div>
                        <div class="form-group">
                            <a href="{{asset('admin/lop')}}" class="form-control btn btn-danger">Hủy Bỏ</a>
                        </div>
                        {{csrf_field()}}
                    </form>
                </div>
            </div>
        </div>
    </div><!--/.row-->
</div> <!--/.main-->

@stop