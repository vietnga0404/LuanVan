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
                        <table style="border: 0;cellpadding:0;cellspacing: 5px;">
                            <tbody>
                                <tr>
                                    <td align=right style="padding-right: 10px;width: 110px;">Lớp học:</td>
                                    <td align=left>
                                        <select class="form-select form-control" name="" style="width: 50%;">
                                            <option value="0">[ Chức vụ ]</option>

                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td align=right style="padding-right: 10px;width: 20%;"> <label for="">Môn học:</label></td>
                                    <td align=left>
                                        <select class="form-select form-control" name="" style="width: 50%;">
                                            <option value="0">[ Chức vụ ]</option>

                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td align=right style="padding-right: 10px;width: 20%;"> <label for="">Giảng viên:</label></td>
                                    <td align=left>
                                        <select class=" form-select form-control" name="" style="width: 50%;">
                                            <option value="0">[ Chức vụ ]</option>

                                        </select>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <button class="btn-new" id="popup-btn" style="margin-left:470px ;"><i class="fa fa-search" aria-hidden="true"></i> Xem lịch giảng dạy</button>
                        <div class="col-lg-12">
                            <div class="panel ">
                                <div class="popup">
                                    <div class="popup-content">
                                        <span class="close-btn">&times;</span>
                                        <form method="post" autocomplete="off">
                                            <div class="row" style="padding: 25px;">
                                                <div class="panel ">
                                                    <div class="panel-heading"><b>Thêm lớp mới</b></div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Mã khoa</label>
                                                    <input required type="text" name="ma" class="form-control" placeholder="Mã khoa...">
                                                </div>
                                                <div class="form-group">
                                                    <label>Tên khoa</label>
                                                    <input required type="text" name="name" class="form-control" placeholder="Tên khoa...">
                                                </div>
                                                <div class="form-group">
                                                    <input type="submit" name="submit" class="form-control btn-new" placeholder="Tên khoa..." value="Thêm mới">
                                                </div>
                                            </div>
                                            {{csrf_field()}}
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