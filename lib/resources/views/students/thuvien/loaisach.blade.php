@extends('layout.student')
@section('title', 'Thư viện' )
@section('main')

<div class="bg0 p-t-100 p-b-140" style="background-color: #F8F0E5;">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="panel ">
                    <div class="panel-heading"><b>Thư viện sách</b></div>
                    <div class="panel-body none-padding">
                        <div class="bootstrap-table">
                            <table class="table table-bordered" style="margin-top:20px;text-align:center">
                                <thead>
                                    <tr class="bg-primary">
                                        <th style="width: 5%;">STT</th>
                                        <th style="width: 15%;">Mã sách</th>
                                        <th>Tên sách</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($sach as $loaisach)
                                    <tr>
                                        <td>{{$loaisach->id}}</td>
                                        <td><a href="" class="tv">{{$loaisach->masach}}</a></td>
                                        <td><a href="" class="tv">{{$loaisach->tensach}}</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
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
                        <ul class="thuvien">
                            @foreach($loaisach as $sach)
                            <li><a href="{{asset('hocvien/thuvien/loaisach/'.$sach->maloai)}}">{{$sach->tenloai}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop