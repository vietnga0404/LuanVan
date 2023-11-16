@extends('layout.lecturer')
@section('title', 'Lịch dạy' )
@section('main')

<div class="bg0 p-t-100 p-b-140" style="background-color: #F8F0E5;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="panel ">
                    <div class="panel-heading"><b>Lịch giảng dạy</b></div>
                    <div class="panel-body">
                        <form action="" method="get" style="margin-bottom: 20px;margin-left:17px" autocomplete="off">
                            <div style="margin-left: 200px;">
                                <table style="border: 0;">
                                    <tbody>
                                        <tr>
                                            <td align=right style="padding-right: 10px;width: 110px;"><label for="">Lớp học:</label></td>
                                            <td align=left>
                                                <select class="form-select form-control" name="lop" style="width: 50%;">
                                                    <option value="0"></option>
                                                    @if(!empty(getAllLop()))
                                                    @foreach(getAllLop() as $lop)
                                                    <option value="{{$lop->l_malop}}" {{request()->lop==$lop->l_malop?'selected':false}}>{{$lop->l_tenlop}}</option>
                                                    @endforeach
                                                    @endif
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align=right style="padding-right: 10px;width: 20%;"><label for="">Môn học:</label></td>
                                            <td align=left>
                                                <select class="form-select form-control" name="mon" style="width: 50%;">
                                                    <option value="0"></option>
                                                    @if(!empty(getAllMon()))
                                                    @foreach(getAllMon() as $mon)
                                                    <option value="{{$mon->m_mamon}}" {{request()->mon==$mon->m_mamon?'selected':false}}>{{$mon->m_tenmon}}</option>
                                                    @endforeach
                                                    @endif
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align=right style="padding-right: 10px;width: 20%;"> <label for="">Giảng viên:</label></td>
                                            <td align=left>
                                                <select class=" form-select form-control" name="giangvien" style="width: 50%;">
                                                    <option value="0"></option>
                                                    @if(!empty(getAllGV()))
                                                    @foreach(getAllGV() as $giangvien)
                                                    <option value="{{$giangvien->gv_ma}}" {{request()->giangvien==$giangvien->gv_ma?'selected':false}}>{{$giangvien->td_kihieu}} {{$giangvien->gv_ten}}</option>
                                                    @endforeach
                                                    @endif
                                                </select>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- <button class="btn-new" id="popup-btn" style="margin-left: 280px;"><i class="fa fa-search" aria-hidden="true"></i> Xem lịch giảng dạy</button> -->

                            </div>
                        </form>

                        <button class="btn-new" id="popup-btn" style="margin-left: 280px;"><i class="fa fa-search" aria-hidden="true"></i> Xem lịch giảng dạy</button>

                        <div class="col-lg-12">
                            <div class="panel ">
                                <div class="popup">
                                    <div class="popup-content">
                                        <span class="close-btn">&times;</span>
                                        <div class="row" style="padding: 25px;">
                                            <table class="table table-bordered" style="margin-top:20px;text-align:center">
                                                <thead>
                                                    <tr class="bg-primary">
                                                        <th>Khóa học</th>
                                                        <th>Hình thức lớp</th>
                                                        <th>Mã lớp</th>
                                                        <th width="35%">Tên lớp</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   efefes
                                                </tbody>
                                            </table>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="panel ">
                    <div class="panel-heading"><b>Danh sách lớp</b></div>
                    <div class="panel-body">
                        <div class="bootstrap-table">
                            <table class="table table-bordered" style="margin-top:20px;text-align:center">
                                <thead>
                                    <tr class="bg-primary">
                                        <th>Khóa học</th>
                                        <th>Hình thức lớp</th>
                                        <th>Mã lớp</th>
                                        <th width="35%">Tên lớp</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>thrs</td>
                                        <td>shh</td>
                                        <td>sghg</td>
                                        <td>sghs</td>

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