@extends('layout.admin')
@section('title', 'Quản lý Môn' )
@section('main')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    @include('errors.note')
    <div class="row">
        <div class="col-lg-8">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <b>Sửa môn</b>
                </div>
                <div class="panel-body">
                    <form method="post" enctype="multipart/form-data" autocomplete="off">
                        <div class="form-group">
                            <label>Mã môn</label>
                            <input required type="text" name="ma" class="form-control" value="{{$mon->m_mamon}}">
                        </div>
                        <div class="form-group">
                            <label>Tên môn</label>
                            <input required type="text" name="name" class="form-control" value="{{$mon->m_tenmon}}">
                        </div>

                        <div class="form-group">
                            <label>Thuộc khoa</label>
                            <select required name="thuockhoa" class="form-control">
                                @foreach($khoalist as $khoa)
                                <option value="{{$khoa->k_makhoa}}" @if($mon->m_khoa == $khoa->k_makhoa) selected @endif >{{$khoa->k_tenkhoa}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" value="Sửa lớp" class="form-control btn btn-primary">
                        </div>
                        <div class="form-group">
                            <a href="{{asset('admin/mon')}}" class="form-control btn btn-danger">Hủy Bỏ</a>
                        </div>
                        {{csrf_field()}}
                    </form>
                </div>
            </div>
        </div>
    </div><!--/.row-->
</div> <!--/.main-->

@stop