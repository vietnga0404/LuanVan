@extends('layout.admin')
@section('title', 'Thống kê')
@section('main')

<div class="p-t-100 p-b-140">
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="margin-bottom: 50px;">
            <div class="panel-heading" style="margin-bottom: 20px;"><b> Thống kê </b></div>

                <section class="statis mt-4 text-center">
                    <div class="row">
                        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                            <div class="box" style="background-color: #F2ABB3;">
                                <i class="uil fa fa-building" aria-hidden="true"></i>
                                <h3 class="tittle">{{$khoa}}</h3>
                                <p class="line"></p>
                                <a class="tittle" href="{{ route('khoa') }}">Khoa</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                            <div class="box" style="background-color: #EAB159;">
                                <i class="uil fa fa-industry" aria-hidden="true"></i>
                                <h3 class="tittle">{{$lop}}</h3>
                                <p class="line"></p>
                                <a class="tittle" href="{{ route('lop') }}">Lớp học</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-4 mb-md-0">
                            <div class="box" style="background-color: #70AE98;">
                                <i class="uil fa fa-book" aria-hidden="true"></i>
                                <h3 class="tittle">{{$mon}}</h3>
                                <p class="line"></p>
                                <a class="tittle" href="{{ route('mon') }}">Môn học</a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-md-12">
                <section class="statis mt-4 text-center">
                    <div class="row">
                        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                            <div class="box" style="background-color: #E17E76;">
                                <i class="uil fa fa-file-text" aria-hidden="true"></i>
                                <h3 class="tittle">{{$bai}}</h3>
                                <p class="line"></p>
                                <a class="tittle" href="{{ route('mon') }}">Bài giảng</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                            <div class="box" style="background-color: #84B4C4;">
                                <i class="uil fa fa-graduation-cap" aria-hidden="true"></i>
                                <h3 class="tittle">{{$gv}}</h3>
                                <p class="line"></p>
                                <a class="tittle" href="{{ route('giangvien') }}">Giảng viên</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-4 mb-md-0">
                            <div class="box" style="background-color: #ECAD8F;">
                                <i class="uil fa fa-calendar" aria-hidden="true"></i>
                                <h3 class="tittle" >{{$lich}}</h3>
                                <p class="line"></p>
                                <a class="tittle" href="{{ route('lichday') }}">Lịch dạy</a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>


@stop