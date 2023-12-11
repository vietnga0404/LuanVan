@extends('layout.training')
@section('title', 'Quản lý Khoa' )
@section('main')


<div class="bg0 p-t-100 p-b-140" style="background-color: #F8F0E5;">
    <div class="container">
        @include('errors.note')
        <div class="row">
            <div class="col-lg-12">
                <div class="panel ">
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
                                <input type="submit" name="submit" class="form-control btn-new" value="Sửa khoa">
                            </div>
                            <div class="form-group">
                                <a href="{{asset('bandaotao/khoa')}}" class="form-control btn btn-default">Hủy Bỏ</a>
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