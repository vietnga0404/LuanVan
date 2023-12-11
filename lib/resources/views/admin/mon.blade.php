@extends('layout.admin')
@section('title', 'Thống kê')
@section('main')

<div class="bg0 p-t-100 p-b-140" style="background-color: #F8F0E5;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="panel ">
                    <div class="panel-heading"><b>Danh sách môn</b></div>
                    <div class="panel-body">
                        <div class="bootstrap-table">
                            <table class="table table-bordered" style="margin-top:20px;text-align:center">
                                <thead>
                                    <tr class="bg-primary">
                                        <th style="width:15%">Mã môn học</th>
                                        <th>Tên môn học</th>
                                        <th>Thuộc khoa</th>                                        
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($listmon as $mon)
                                    <tr>
                                        <td>{{$mon->m_mamon}}</td>
                                        <td>{{$mon->m_tenmon}}</td>
                                        <td>{{$mon->k_tenkhoa}}</td>                                        
                                        <td>
                                            <a href="{{asset('admin/thongke/baigiang/'.$mon->m_mamon)}}">Danh sách bài giảng</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="card-footer py-4 page-link" style="text-align: right;margin-top: -20px;">
                                <nav aria-label="...">
                                    <ul class="pagination justify-content-start">
                                        {{$listmon->links()}}
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <a href="{{asset('admin/thongke')}}" class="btn-new" style="text-decoration:none;color: white;"><i class="fa fa-undo" aria-hidden="true"></i> Quay lại</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop