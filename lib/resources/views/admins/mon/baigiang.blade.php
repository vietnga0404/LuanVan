@extends('layout.admin')
@section('title', 'Quản lý Môn' )
@section('main')

<div class="bg0 p-t-100 p-b-140" style="background-color: #F8F0E5;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel ">
                    <div class="panel-heading">
                        <b>Danh sách bài giảng môn: {{}}</b>
                    </div>
                    <div class="panel-body">
                        <form method="post" enctype="multipart/form-data" autocomplete="off">
                            <div class="form-group">
                                <label>Tên bài giảng</label>
                                <input required type="text" name="tenbai" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Tiết</label>
                                <input required type="number" name="tiet" class="form-control" value="">
                            </div>
                            <div class="form-group">
                                <label>Tổng số tiết</label>
                                <input required type="number" name="tongtiet" class="form-control" value="">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" value="Cập nhật" class="form-control btn-new">
                            </div>
                            <div class="form-group">
                                <a href="{{asset('admin/mon')}}" class="form-control btn btn-default">Hủy Bỏ</a>
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