@extends('layout.admin')
@section('title', 'Phân công giảng dạy')
@section('main')

<div class="p-t-100 p-b-140">
    <div class="container">
        <div class="row">
            <form action="" method="get" style="margin-bottom: 20px;margin-left:17px" autocomplete="off">
                <div class="row">
                    <div class="col-md-3">
                        <select required name="lop" class="form-control">
                            <option value="0">[ Chọn lớp ]</option>
                            @if(!empty(getAllLop()))
                            @foreach (getAllLop() as $lop)
                            <option value="{{$lop->l_malop}}" {{request()->lop==$lop->l_malop?'selected':false}}>{{$lop->l_tenlop}}</option>
                            @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select required name="mon" class="form-control">
                            <option value="0">[ Chọn môn ]</option>
                            @if(!empty(getAllMon()))
                            @foreach (getAllMon() as $mon)
                            <option value="{{$mon->m_mamon}}" {{request()->mon==$mon->m_mamon?'selected':false}}>{{$mon->m_tenmon}}</option>
                            @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="key" class="form-control" placeholder="Từ khóa tìm kiếm..." value="">
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn-new">Tìm kiếm</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <ul class="link-ul">
                    <li class="link-li link-ac"><a href="{{asset('bandaotao/phancong')}}" style="color: #881A1A;"><b>Phân công</b></a></li>
                    <li class="link-li"><i class="fa fa-long-arrow-right " aria-hidden="true"></i></li>
                    <li class="link-li"><a href="{{asset('bandaotao/phancong/mon')}}">Danh sách môn</a></li>
                    <li class="link-li"><i class="fa fa-long-arrow-right " aria-hidden="true"></i></li>
                    <!-- <li class="link-li"><a href="{{asset('')}}" >Phân công lớp</a></li>
                    <li class="link-li"><i class="fa fa-long-arrow-right " aria-hidden="true"></i></li> -->
                    <li class="link-li"><a href="{{asset('bandaotao/phancong/lop')}}">Danh sách lớp</a></li>
                    <!-- <li class="link-li"><i class="fa fa-long-arrow-right " aria-hidden="true"></i></li>
                    <li class="link-li"><a href="" >Phân công chi tiết</a></li> -->
                </ul>
            </div>
        </div>

        <!-- Danh sách đã phân công -->
        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="panel ">
                    <div class="panel-heading"><b>Danh sách đã phân công</b></div>
                    <div class="panel-body">
                        <div class="bootstrap-table">
                            <table class="table table-bordered" style="margin-top:20px;text-align:center">
                                <thead>
                                    <tr class="bg-primary">
                                        <th>Mã lịch</th>
                                        <th>Lớp học</th>
                                        <th>Môn học</th>
                                        <th>Tên bài giảng</th>
                                        <th>Thứ - ngày</th>
                                        <!-- <th>Buổi</th>
                                        <th>Địa điểm</th> -->
                                        <th>Trạng thái</th>
                                        <th>Tùy chọn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($lich as $ld)
                                    <tr>
                                        <td>{{$ld->ld_malich}}</td>
                                        <td>{{$ld->l_tenlop}}</td>
                                        <td>{{$ld->m_tenmon}}</td>
                                        <td style="width: 20%;">{{$ld->b_tenbai}}</td>
                                        <td>{{$ld->tenthu}} <br> {{$ld->ld_ngay}}</td>
                                        <!-- <td>{{$ld->ld_buoi}}</td>
                                        <td>{{$ld->ld_diadiem}}</td> -->
                                        <td>{!!$ld->ld_status==0?'<button class="btn btn-primary btn-sm">Đang phân công</button>':'<button class="btn btn-success btn-sm">Đã phân công</button>'!!}</td>
                                        <td>
                                            <a href="{{asset('bandaotao/phancong/edit/'.$ld->ld_malich)}}" class="btn btn-default"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="{{asset('bandaotao/phancong/delete/'.$ld->ld_malich)}}" onclick="return confirm('Bạn chắc chắn muốn xóa!!')" class="btn btn-default"><span class="glyphicon glyphicon-trash"></span></a>
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

        <!-- Danh sach da phan cong theo mon -->

        <!-- <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="panel ">
                    <div class="panel-heading"><b>Danh sách môn</b></div>
                    <div class="panel-body">
                        <div class="bootstrap-table">
                            <table class="table table-bordered" style="margin-top:20px;text-align:center">
                                <thead>
                                    <tr class="bg-primary">
                                        <th>Tên lớp</th>
                                        <th>Tên môn</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>gdhgh</td>
                                        <td>dhg</td>
                                        <td>
                                            <a href="">Lịch dạy theo môn</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div> -->

    </div>
</div>

@stop