@extends('layout.admin')
@section('title', 'Phân công giảng dạy')
@section('main')

<div class="p-t-100 p-b-140" >
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="panel">
                    <div class="panel-heading"><b>Phân công</b></div>
                    <div class="panel-body">
                        <form method="post" enctype="multipart/form-data">
                            <label for="cars">Lớp học: </label>
                            <select id="cars" name="cars" style="width: 50%;padding:10px">
                                <option value=""></option>
                                @foreach ($listlop as $lop)
                                <option value="{{$lop->l_malop}}">{{$lop->l_tenlop}}</option>
                                @endforeach
                            </select> <br> <br>

                            <label for="cars">Môn học:</label>
                            <select id="cars" name="cars" style="width: 50%;padding:10px">
                                <option value=""></option>
                                @foreach ($listmon as $mon)
                                <option value="{{$mon->m_mamon}}">{{$mon->m_tenmon}}</option>
                                @endforeach
                            </select> <br> <br>
                            <a href="{{asset('bandaotao/phancong/add')}}" class=" btn-new" style="margin-left:70px;text-decoration:none;color: white;">Chọn</a>
                        </form>
                    </div> 
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="panel">
                    <div class="panel-heading"><b>Phân công</b></div>
                    <div class="panel-body">
                        ưgegerg
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop