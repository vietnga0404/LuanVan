@extends('layout.admin')
@section('title', 'Phân công giảng dạy')
@section('main')

<div class="p-t-100 p-b-140">
    <div class="container">
        
        <!-- danh sách môn -->
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
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($listmon as $mon)
                                    <tr>
                                        <td>{{$mon->m_mamon}}</td>
                                        <td>{{$mon->m_tenmon}}</td>
                                        <td>
                                            <a href="{{asset('bandaotao/phancong/'.$mon->m_mamon.'/lop/')}}">Phân công lớp</a>
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
        <div class="row">
            <div class="col-lg-12">
                <ul class="link-ul">
                    <li class="link-li"><a href="{{asset('bandaotao/phancong')}}" >Phân công</a></li>
                    <li class="link-li"><i class="fa fa-long-arrow-right " aria-hidden="true"></i></li>
                    <li class="link-li link-ac"><a href="{{asset('bandaotao/phancong/mon')}}" style="color: #881A1A;"><b>Danh sách môn</b></a></li>
                    <li class="link-li"><i class="fa fa-long-arrow-right " aria-hidden="true"></i></li>
                    <li class="link-li"><a href="{{asset('bandaotao/phancong/'.$mon->m_mamon.'/lop/')}}" >Phân công lớp</a></li>
                    <li class="link-li"><i class="fa fa-long-arrow-right " aria-hidden="true"></i></li>
                    <li class="link-li"><a href="{{asset('bandaotao/phancong/lop')}}" >Danh sách lớp</a></li>
                    <li class="link-li"><i class="fa fa-long-arrow-right " aria-hidden="true"></i></li>
                    <li class="link-li"><a href="" >Phân công chi tiết</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@stop