@extends('layout.student')
@section('title', 'Thư viện' )
@section('main')

<div class="bg0 p-t-100 p-b-140" style="background-color: #F8F0E5;">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="panel ">
                    <div class="panel-heading"><b>Danh sách lớp</b></div>
                    <div class="panel-body">
                        
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel ">
                    <div class="panel-heading"><b>Tìm sách</b></div>
                    <div class="panel-body">
                        <form action="">
                            <section>Từ khóa</section>
                            <input type="text" name="tukhoa" style="width: 100%;margin-bottom: 10px;">

                            <section>Loại sách</section>
                            <select required name="hinhthuc" class="form-control" style="margin-bottom: 10px;">
                                <option value="0">[Tất cả]</option>
                            </select>

                            <section>Tên sách</section>
                            <input type="text" name="tensach" id="" style="width: 100%;margin-bottom: 10px;">

                            <button type="submit" class="btn-new" style="margin-top: 10px;">Tìm kiếm</button>

                        </form>
                    </div>
                </div>
                <div class="panel ">
                    <div class="panel-heading"><b>Danh mục loại sách</b></div>
                    <div class="panel-body">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop