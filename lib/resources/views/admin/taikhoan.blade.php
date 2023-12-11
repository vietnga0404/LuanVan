@extends('layout.admin')
@section('title', 'Quản lý tài khoản')
@section('main')

<div class="bg0 p-t-100 p-b-140" style="background-color: #F8F0E5;">
    <div class="container">
        @include('errors.success')
        <div class="row">
            <div class="col-lg-12">
                <div class="panel">
                    <div class="panel-heading"><b>Danh sách tài khoản người dùng</b></div>
                    <div class="panel-body">
                        <div class="bootstrap-table">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="bg-primary">
                                        <th>Tên người dùng</th>
                                        <th>Email</th>
                                        <th>Nhóm người dùng</th>
                                        <th>Trạng thái</th>
                                        <th>Tùy chọn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($account as $tk)
                                    <tr style="text-align:center">
                                        <td>{{$tk->name}}</td>
                                        <td>{{$tk->email}}</td>
                                        <td>{{$tk->role}}</td>
                                        <td style="width:20%">
                                            @if($tk->status==1)
                                            <a href="{{ route('khoaTK', ['id'=>$tk['id']] )}}" class="btn btn-default"><span class="glyphicon glyphicon-lock" title="Khóa tài khoản"></span></a>
                                            @else                                           
                                            <a href="{{ route('mokhoaTK', ['id'=>$tk['id']] )}}" class="btn btn-default" title="Mở khóa tài khoản"><b><i class="fa fa-key" aria-hidden="true" style="font-size: 16px;"></i></b></a>

                                            @endif
                                        </td>
                                        <td>
                                            @if($tk->status==1)
                                            <a href="{{asset('admin/taikhoan/delete/'.$tk->id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-default"><span class="glyphicon glyphicon-trash"></span></a>
                                            @else
                                            <p>Tài khoản đã bị khóa</p>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="card-footer py-4 page-link" style="text-align: right;margin-top: -20px;">
                                <nav aria-label="...">
                                    <ul class="pagination justify-content-start">
                                        {{$account->links()}}
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- thêm mới -->
        <div class="row">
            <button class="btn-new" id="popup-btn"><i class="fa fa-plus" aria-hidden="true"></i> Thêm tài khoản mới </button>
            <div class="col-lg-12">
                <div class="panel ">
                    <div class="popup">
                        <div class="popup-content">
                            <span class="close-btn">&times;</span>
                            <form action="" method="post" autocomplete="off">
                                <div class="row" style="padding: 25px;">
                                    <div class="panel ">
                                        <div class="panel-heading"><b>Thêm tài khoản người dùng mới </b></div>
                                    </div>
                                    <div class="form-group">
                                        <label>Tên người dùng</label>
                                        <input required type="text" name="name" class="form-control" placeholder="Tên người dùng...">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input required type="email" name="email" class="form-control" placeholder="Email...">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input required type="password" name="password" class="form-control" placeholder="Password...">
                                    </div>
                                    <div class="form-group">
                                        <label>Nhóm người dùng</label>
                                        <select name="role" id="" class="form-control" required>
                                            <option value="bandaotao">Ban đào tạo</option>
                                            <option value="lanhdaokhoa">Lãnh đạo khoa</option>
                                            <option value="giangvien">Giảng viên</option>
                                            <option value="hocvien">Học viên</option>
                                        </select>
                                    </div>
                                    <input type="text" hidden name="status" value="1">
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