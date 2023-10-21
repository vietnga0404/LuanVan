@extends('layout.admin')
@section('title', 'Quản lý Lớp' )
@section('main')

<div class="bg0 p-t-100 p-b-140" style="background-color: #F8F0E5;">
    <div class="container">
        @include('errors.note')
        <div class="row">
            <div class="col-lg-12">
                <div class="panel ">
                    <div class="panel-heading">
                        <b>Sửa lớp </b>
                    </div>
                    <div class="panel-body">
                        <form method="post" enctype="multipart/form-data" autocomplete="off">
                            <div class="form-group">
                                <label>Khóa học</label>
                                <input required type="text" name="khoa" class="form-control" value="{{$lop->l_khoahoc}}">
                            </div>
                            <div class="form-group">
                                <label>Hình thức lớp</label>
                                <select required name="hinhthuc" class="form-control">
                                    <option value="Tập trung" @if($lop->l_hinhthuc == 'Tập trung') selected @endif>Tập trung - A</option>
                                    <option value="Không tập trung" @if($lop->l_hinhthuc == 'Không tập trung') selected @endif>Không tập trung - B</option>
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
                                <input type="submit" name="submit" value="Sửa lớp" class="form-control btn-new">
                            </div>
                            <div class="form-group">
                                <a href="{{asset('bandaotao/lop')}}" class="form-control btn btn-default">Hủy Bỏ</a>
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