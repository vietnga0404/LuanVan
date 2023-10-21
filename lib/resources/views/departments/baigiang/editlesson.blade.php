@extends('layout.department')
@section('title', 'Quản lý Bài Giảng' )
@section('main')

<div class="p-t-100 p-b-140">
    <div class="container">
        @include('errors.note')
        <div class="row">
            <div class="col-lg-12">
                <div class="panel ">
                    <div class="panel-heading">
                        <b>Sửa bài giảng</b>
                    </div>
                    <div class="panel-body">
                        <form method="post" enctype="multipart/form-data" autocomplete="off">
                            <div class="form-group">
                                <label>Mã bài giảng</label>
                                <input required type="text" name="ma" class="form-control" value="{{$bai->b_mabai}}">
                            </div>
                            <div class="form-group">
                                <label>Tên bài giảng</label>
                                <input required type="text" name="name" class="form-control" value="{{$bai->b_tenbai}}">
                            </div>
                            <div class="form-group">
                                <label>Số tiết</label>
                                <input required type="number" name="sotiet" class="form-control" value="{{$bai->b_sotiet}}">
                            </div>
                            <div class="form-group">
                                <label>Thuộc môn</label>
                                <select required name="thuocmon" class="form-control">
                                    @foreach($listmon as $mon)
                                    <option value="{{$mon->m_mamon}}" >{{$mon->m_tenmon}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" value="Sửa bài giảng" class="form-control btn-new">
                            </div>
                            <div class="form-group">
                                <a href="{{asset('lanhdaokhoa/baigiang/danhsach/'.$ma)}}" class="form-control btn btn-default">Hủy Bỏ</a>
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