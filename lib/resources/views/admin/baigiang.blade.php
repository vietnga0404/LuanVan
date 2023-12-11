@extends('layout.admin')
@section('title', 'Thống kê' )
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
                                        <th>Mã bài giảng</th>
                                        <th>Tên bài giảng</th>
                                        <th>Số tiết</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($listbai as $bai)
                                    <tr>
                                        <td style="width: 15%;">{{$bai->b_mabai}}</td>
                                        <td style="width: 70%;">{{$bai->b_tenbai}}</td>
                                        <td>{{$bai->b_sotiet}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="card-footer py-4 page-link" style="text-align: right;margin-top: -20px;">
                                <nav aria-label="...">
                                    <ul class="pagination justify-content-start">
                                        {{$listbai->links()}}
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <a href="{{asset('admin/thongke/mon')}}" class="btn-new" style="color: white;"><i class="fa fa-undo" aria-hidden="true"></i> Quay lại</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 

@stop