@extends('layout.admin')
@section('title', 'Thống kê')
@section('main')

<div class="bg0 p-t-100 p-b-140" style="background-color: #F8F0E5;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel">
                    <div class="panel-heading"><b>Danh sách khoa</b></div>
                    <div class="panel-body">
                        <div class="bootstrap-table">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="bg-primary">
                                        <th style="width:20%">Mã khoa</th>
                                        <th>Tên khoa</th>                                    
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($listkhoa as $khoa)
                                    <tr>
                                        <td style="text-align:center">{{$khoa->k_makhoa}}</td>
                                        <td>{{$khoa->k_tenkhoa}}</td>                                     
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="card-footer py-4 page-link" style="text-align: right;margin-top: -20px;">
                                <nav aria-label="...">
                                    <ul class="pagination justify-content-start">
                                        {{$listkhoa->links()}}
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