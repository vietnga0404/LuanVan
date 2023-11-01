@extends('layout.admin')
@section('title', 'Phân công giảng dạy')
@section('main')

<div class="p-t-100 p-b-140">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="link-ul">
                    <li class="link-li"><a href="{{asset('bandaotao/phancong')}}" >Phân công</a></li>
                    <li class="link-li"><i class="fa fa-long-arrow-right " aria-hidden="true"></i></li>
                    <li class="link-li"><a href="{{asset('bandaotao/phancong/mon')}}" >Danh sách môn</a></li>
                    <li class="link-li"><i class="fa fa-long-arrow-right " aria-hidden="true"></i></li>
                    <li class="link-li link-ac"><a href="{{asset('')}}" style="color: #881A1A;"><b>Phân công lớp</b></a></li>
                    <li class="link-li"><i class="fa fa-long-arrow-right " aria-hidden="true"></i></li>
                    <li class="link-li"><a href="{{asset('bandaotao/phancong/lop')}}" >Danh sách lớp</a></li>
                    <li class="link-li"><i class="fa fa-long-arrow-right " aria-hidden="true"></i></li>
                    <li class="link-li"><a href="" >Phân công chi tiết</a></li>
                </ul>
            </div>
        </div>
        @include('errors.note')
        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="panel">
                    <div class="panel-heading"><b>Phân công</b></div>
                    <div class="panel-body">
                        <form method="post" enctype="multipart/form-data">
                            <div class="row" style="border-bottom: 2px dotted #ddd;margin-bottom:10px">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Lớp học: </label>
                                        <select id="" name="lop" style="width: 80%;padding:10px">
                                            <option value=""></option>
                                            @foreach ($listlop as $lop)
                                            <option value="{{$lop->l_malop}}">{{$lop->l_tenlop}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Môn học:</label>
                                        <select id="" name="mon" style="width: 80%;padding:10px">
                                            <option value="{{$mon->m_mamon}}">{{$mon->m_tenmon}}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Từ ngày:&nbsp;&nbsp;</label>
                                        <input type="date" id="" name="tungay" style="width: 50%;padding:10px">

                                    </div>
                                    <div class="form-group">
                                        <label for="">Đến ngày:</label>
                                        <input type="date" id="date" name="denngay" style="width: 50%;padding:10px">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Địa điểm:</label>
                                        <input type="text" name="diadiem" style="width: 35%;padding:10px">
                                    </div>
                                </div>
                            </div>
                            <input type="submit" name="submit" value="Phân công lớp" class="btn-new">
                            <a href="{{asset('bandaotao/phancong/mon')}}" class="btn-new" style="text-decoration:none;color: white;"><i class="fa fa-undo" aria-hidden="true"></i> Quay lại</a>

                            {{csrf_field()}}
                        </form>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop