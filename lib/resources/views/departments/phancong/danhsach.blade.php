@extends('layout.department')
@section('title', 'Phân công giảng dạy' )
@section('main')

<div class="p-t-100 p-b-140" >
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="panel">
                    <div class="panel-heading"><b>Phân công</b> <br>
                        <label for="cars">Lớp: shtrhth</label>
                        <label for="cars"> | Môn học: </label>
                    </div> <br>
                    <div class="panel-body">
                        <div class="bootstrap-table">
                            <table class="table table-bordered" style="text-align:center">
                                <thead>
                                    <tr class="bg-primary">
                                        <th>Thứ - Ngày</th>
                                        <th>Buổi</th>
                                        <th>Tên bài giảng</th>
                                        <th>Tiết</th>
                                        <th>Giảng viên</th>
                                        <th>Ghi chú</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="width:15%">
                                            <select required name="" class="form-control">
                                                <option value="">Thứ 2</option>
                                                <option value="">Thứ 3</option>
                                            </select>
                                        </td>
                                        <td style="width:15%">
                                            <select required name="" class="form-control">
                                                <option value="">Sáng</option>
                                                <option value="">Chiều</option>
                                            </select>
                                        </td>
                                        <td>dskvsdv</td>
                                        <td>svbeb</td>
                                        <td>
                                            <select required name="" class="form-control">
                                                <option value="">Nguyễn Văn A</option>
                                                <option value="">Võ Văn B</option>
                                            </select>
                                        </td>
                                        <td>sdadb</td>
                                    </tr>
                                </tbody>
                            </table>
                            <input type="submit" name="submit" value="Phân công" class="btn-new">
                        </div>

                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop 