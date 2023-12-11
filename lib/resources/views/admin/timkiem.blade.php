@extends('layout.admin')
@section('title', 'Thống kê')
@section('main')

<div class="bg0 p-t-100 p-b-140" style="background-color: #F8F0E5;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel">
                    <div class="panel-heading"><b>Tìm kiếm</b></div>
                    <div class="panel-body">
                        <form action=" {{ route('timkiem') }}" style="text-align: center; padding:10px">
                            <input required type="text" name="keyword" placeholder="Từ khóa tìm kiếm..." value="" autocomplete="off" style="width:50%;padding:10px">
                            <button type="submit" class="btn-new" style="margin-top: 10px;">Tìm kiếm</button>
                        </form>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop