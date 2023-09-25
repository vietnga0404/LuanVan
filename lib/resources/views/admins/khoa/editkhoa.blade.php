@extends('layout.admin')
@section('title', 'Quản lý Khoa' )
@section('main')


<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
@include('errors.note')
    <div class="row">
        <div class="col-lg-8">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <b>Sửa khoa</b>
                </div>
                <div class="panel-body">

                    <form method="post" autocomplete="off">
                        <div class="form-group">
                            <label>Mã khoa:</label>
                            <input required type="text" name="ma" class="form-control" placeholder="Mã khoa..." value="{{$khoa->k_makhoa}}">
                        </div>
                        <div class="form-group">
                            <label>Tên khoa:</label>
                            <input required type="text" name="name" class="form-control" placeholder="Tên khoa..." value="{{$khoa->k_tenkhoa}}">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="form-control btn btn-primary" value="Sửa khoa">
                        </div>
                        <div class="form-group">
                            <a href="{{asset('admin/khoa')}}" class="form-control btn btn-danger">Hủy Bỏ</a>
                        </div>
                        {{csrf_field()}}
                    </form>
                </div>
            </div>
        </div>
    </div><!--/.row-->
</div> <!--/.main-->

@stop