@extends('layout.lecturer')
@section('title', 'Lịch dạy' )
@section('main')

<div class="bg0 p-t-100 p-b-140" style="background-color: #F8F0E5;">
    <div class="container">
        <div class="row">
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
        </div>
    </div>
</div>

@stop