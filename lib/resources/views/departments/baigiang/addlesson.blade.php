@extends('layout.department')
@section('title', 'Quản lý Bài Giảng' )
@section('main')

<div class="p-t-100 p-b-140" >
    <div class="container">
        <!-- <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="panel">
                    <div class="panel-heading"><b>Môn</b></div>
                    <div class="panel-body">
                        <form method="post" enctype="multipart/form-data">
                            <label for="cars">Môn học:</label>
                            <select id="cars" name="cars" style="width: 50%;padding:10px">
                                <option value=""></option>
                                @foreach ($listmon as $mon)
                                <option value="{{$mon->m_mamon}}">{{$mon->m_tenmon}}</option>
                                @endforeach
                            </select> <br> <br>
                            <a href="{{asset('lanhdaokhoa/baigiang/add')}}" class=" btn-new" style="margin-left:70px;text-decoration:none;color: white;">Chọn</a>
                        </form>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div> -->


        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="panel ">
                    <div class="panel-heading"><b>Danh sách bài giảng</b></div>
                    <div class="panel-body">
                        <div class="bootstrap-table">
                            <table class="table table-bordered" style="margin-top:20px;text-align:center">
                                <thead>
                                    <tr class="bg-primary">
                                        <th style="width:15%">Mã môn học</th> 
                                        <th>Tên môn học</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($listmon as $mon)
                                    <tr>
                                        <td>{{$mon->m_mamon}}</td>
                                        <td>{{$mon->m_tenmon}}</td>
                                        <td>
                                            <a href="{{asset('lanhdaokhoa/baigiang/danhsach/'.$mon->m_mamon)}}">Danh sách bài giảng</a>
                                        </td>
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