@extends('layout.page')
@section('content_products_type')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Biểu đồ tổng quan
            </h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="fa fa-folder"></i>Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="#">Tổng quan</a></li>
            </ol>
        </section>
        <section class="content" id="app">
            {!! $chart->container() !!}
        </section>



    </div>
@endsection




