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
                    <li class="link-li"><a href="{{asset('bandaotao/phancong/lop')}}">Danh sách lớp</a></li>
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
                                        <th>Lớp học</th>
                                        <th>Môn học</th>
                                        <th>Trạng thái</th>
                                        <th>Tùy chọn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($lich as $ld)
                                    <tr>
                                        <td>{{$ld->l_tenlop}}</td>
                                        <td>{{$ld->m_tenmon}}</td>
                                        <td>{!!$ld->ld_status==0?'<button class="btn btn-primary btn-sm" disabled>Đang phân công</button>':'<button class="btn btn-success btn-sm" disabled>Đã phân công</button>'!!}</td>
                                        <td>
                                            @if ($ld->ld_status==0)
                                            @else
                                            <a href="{{ route('getSchdule', ['mon' => $ld->ld_mon, 'lop' => $ld->ld_lop]) }}" class="btn btn-default" title="Xem chi tiết"><span class="glyphicon glyphicon-eye-open"></span></a>
                                            <a href="{{ route('bdtEditLichDay', ['mon' => $ld->ld_mon, 'lop' => $ld->ld_lop]) }}" class="btn btn-default"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="{{ route('Delete', ['mon' => $ld->ld_mon, 'lop' => $ld->ld_lop]) }}" onclick="return confirm('Bạn chắc chắn muốn xóa!!')" class="btn btn-default"><span class="glyphicon glyphicon-trash"></span></a>
                                            @endif
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
    </div>
</div>

@stop