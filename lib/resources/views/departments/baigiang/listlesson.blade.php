@extends('layout.department')
@section('title', 'Quản lý Bài Giảng' )
@section('main')

<div class="p-t-100 p-b-140">
    <div class="container">
        @include('errors.note')
        <div class="row">
            <div class="col-lg-12 col-md-12 col-lg-12">
                <div class="panel">
                    <div class="panel-heading"><b>Danh sách bài giảng môn: "{{$mon->m_tenmon}}"</b></div>
                    <div class="panel-body">
                        <div class="bootstrap-table">
                            <table class="table table-bordered" style="text-align:center">
                                <thead>
                                    <tr class="bg-primary">
                                        <th>Mã bài</th>
                                        <th>Tên bài giảng</th>
                                        <th>Số tiết</th>
                                        <th>Thuộc môn</th>
                                        <th>Tùy chọn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($listbai as $bai)
                                    <tr>
                                        <td>{{$bai->b_mabai}}</td>
                                        <td>{{$bai->b_tenbai}}</td>
                                        <td>{{$bai->b_sotiet}}</td>
                                        <td>{{$bai->m_tenmon}}</td>
                                        <td style="text-align: center;">
                                            <a href="{{asset('lanhdaokhoa/baigiang/danhsach/'.$mon->m_mamon.'/edit/'.$bai->b_mabai)}}" class="btn btn-default"><span class="glyphicon glyphicon-edit"></span> </a>
                                            <a href="{{asset('lanhdaokhoa/baigiang/danhsach/'.$mon->m_mamon.'/delete/'.$bai->b_mabai)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-default"><span class="glyphicon glyphicon-trash"></span></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- thêm mới -->
        <div class="row">
            <button class="btn-new" id="popup-btn"><i class="fa fa-plus" aria-hidden="true"></i> Thêm bài giảng </button>
            <a href="{{asset('lanhdaokhoa/baigiang')}}" class="btn-new" style="text-decoration:none;color: white;"><i class="fa fa-undo" aria-hidden="true"></i> Quay lại</a>
            <div class="col-lg-12">
                <div class="panel ">
                    <div class="popup">
                        <div class="popup-content">
                            <span class="close-btn">&times;</span>
                            <form method="post" autocomplete="off">
                                <div class="row" style="padding: 25px;">
                                    <div class="panel ">
                                        <div class="panel-heading"><b>Thêm bài giảng mới</b></div>
                                    </div>
                                    <div class="form-group">
                                        <label>Mã bài</label>
                                        <input required type="text" name="ma" class="form-control" placeholder="Mã bài giảng...">
                                    </div>
                                    <div class="form-group">
                                        <label>Tên bài giảng</label>
                                        <input required type="text" name="name" class="form-control" placeholder="Tên bài giảng...">
                                    </div>
                                    <div class="form-group">
                                        <label>Số tiết</label>
                                        <input required type="text" name="sotiet" class="form-control" placeholder="Số tiết...">
                                    </div>
                                    <div class="form-group">
                                        <label>Thuộc môn</label>
                                        <select required name="thuocmon" class="form-control">
                                            <option value="{{$mon->m_mamon}}">{{$mon->m_tenmon}}</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <input type="submit" name="submit" class="form-control btn-new" value="Thêm mới">
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

@stop