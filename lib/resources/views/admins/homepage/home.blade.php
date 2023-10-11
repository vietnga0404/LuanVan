@extends('layout.admin')
@section('title', 'Home ' )
@section('main')

<div class="bg0 p-t-100 p-b-140" style="background-color: #F8F0E5;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="panel ">
                    <div class="panel-heading">
                        <b>Thông tin Ban Đào Tạo</b>
                    </div>
                    <div class="panel-body">
                        <table>
                            <tr>
                                <td>Họ tên: </td>
                                <td> Griffin </td>

                            </tr>
                            <tr>
                                <td>Ngày sinh: </td>
                                <td>Griffin</td>

                            </tr>
                            <tr>
                                <td>Giới tính: </td>
                                <td>Swanson</td>

                            </tr>
                            <tr>
                                <td>SDT: </td>
                                <td>Brown</td>

                            </tr>
                        </table>
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
            </div><!--/.col-->
        </div><!--/.row-->
    </div>
</div>
@stop