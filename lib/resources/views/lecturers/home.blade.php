@extends('layout.lecturer')
@section('title', 'Home ' )
@section('main')

<div class="p-t-100 p-b-140">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="panel "> 
                    <div class="panel-heading">
                        <b>Thông tin tài khoản</b>
                    </div>
                    <div class="panel-body">
                        <table>
                            <tr style="text-align: left;">
                                <td>Từ ngày:</td>
                                <td>Đến ngày:</td>
                            </tr>
                            <tr>
                                <td class="col-md-6" id="tungay">
                                    <div class="panel">
                                        <div class="panel-body" style="background-color: #f3bebe;">
                                            <div id="calendar"></div>
                                        </div>
                                    </div>
                                </td>
                                <td class="col-md-6" id="denngay">
                                    <div class="panel">
                                        <div class="panel-body" style="background-color: #f3bebe;">
                                            <div id="calendar2"></div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop