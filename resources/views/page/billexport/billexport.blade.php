@extends('layout.master')
@section('content_billimport')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                PHIẾU XUẤT KHO
            </h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="fa fa-folder"></i>Nhập/Xuất</a></li>
                <li class="breadcrumb-item"><a href="#">Xuất kho</a></li>
            </ol>
        </section>
        <section class="content">
            <div class="box">
                <form action="addbillexport" method="post">
                    {{@csrf_field()}}
                    <div class="box-header with-border">
                        {{--                    <h3 class="box-title">PHIẾU NHẬP KHO</h3>--}}
                        <h6 class="box-subtitle">Bạn vui lòng nhấn vào + để tạo bill xuất kho</h6>
                    </div>
                    <button type="submit" class="btn btn-app btn-success" data-toggle="modal"
                            data-target="#modaladd" style="height: 30px;padding: 0;border-radius: 6px;">
                        <span style="font-size: 35px;padding: 0px;line-height: 30px;">+</span>
                    </button>
                </form>
            </div>
        </section>
    </div>
@endsection
