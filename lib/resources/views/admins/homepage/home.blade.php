@extends('layout.admin')
@section('title', 'Home ' )
@section('main')


<div class="p-t-100 p-b-140">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6 col-lg-6">
                <div class="panel ">
                    <div class="panel-heading">
                        <b>Thông tin tài khoản</b>
                    </div>
                    <div class="panel-body">
                        <table>
                            <tr style="border-bottom: 1px solid #ddd;">
                                <td>Họ tên: </td>
                                <td> Griffin </td>

                            </tr>
                            <tr style="border-bottom: 1px solid #ddd;">
                                <td>Ngày sinh: </td>
                                <td>Griffin</td>

                            </tr>
                            <tr style="border-bottom: 1px solid #ddd;">
                                <td>Giới tính: </td>
                                <td>Swanson</td>

                            </tr>
                            <tr >
                                <td>SDT: </td>
                                <td>Brown</td>

                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-6">
                <div class="panel">
                    <div class="panel-heading"><b>Thông tin liên hệ</b></div>
                    <div class="panel-body">
                        <div class="bootstrap-table">
                            <table >
                                <tr style="border-bottom: 1px solid #ddd;">
                                    <th style="width:20%">Email:</th>
                                    <th>hcma4@hcma4.vn</th>

                                </tr>
                                <tr style="border-bottom: 1px solid #ddd;">
                                    <th>SDT: </th>
                                    <th>Brown</th>

                                </tr>
                                <tr style="border-bottom: 1px solid #ddd;">
                                    <th>Địa chỉ:</th>
                                    <th>Số 6 Nguyễn Văn Cừ (nối dài), phường An Bình, quận Ninh Kiều, thành phố Cần Thơ</th>
                                </tr>
                                <tr>
                                    <th>Liên hệ:</th>
                                    <th>0292.3889818</th>
                                </tr>
                            </table>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <div class="panel ">
                    <div class="panel-heading">
                        <i class="fa fa-calendar" aria-hidden="true"></i> <b>Lịch</b>
                    </div>
                    <div class="panel-body" style="background-color: #f3bebe;">
                        <div id="calendar"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop