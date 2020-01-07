@extends('layout.master')
@section('content_billimport')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            PHIẾU NHẬP KHO
        </h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="fa fa-folder"></i>Nhập/Xuất</a></li>
            <li class="breadcrumb-item"><a href="#">Nhập kho</a></li>
        </ol>
    </section>
    <section class="content">
        <div class="box">
            <form action="addbill" method="post">
                {{@csrf_field()}}
                <div class="box-header with-border">
{{--                    <h3 class="box-title">PHIẾU NHẬP KHO</h3>--}}
                    <h6 class="box-subtitle">Bạn vui lòng nhấn vào + để tạo bill nhập kho</h6>
                </div>
                <button type="submit" class="btn btn-app btn-success" data-toggle="modal"
                        data-target="#modaladd" style="height: 30px;padding: 0;border-radius: 6px;">
                    <span style="font-size: 35px;padding: 0px;line-height: 30px;">+</span>
                </button>
                <!-- button add -->
{{--                <div class="box-body">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-md-12">--}}
{{--                            <div class="form-group">--}}
{{--                                <h6>Nhà cung cấp</h6>--}}
{{--                                <select name="id_vendor" class="form-control" tabindex="-1" aria-hidden="true">--}}
{{--                                    <option selected="selected">Chọn nhà cung cấp</option>--}}
{{--                                    @foreach($vendors as $vendor1)--}}
{{--                                    <option value="{{$vendor1->id_vendor}}">{{$vendor1->name_vendor}}</option>--}}
{{--                                    @endforeach--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <h6>Danh mục</h6>--}}
{{--                                <select name="id_cata" class="form-control" tabindex="-1" aria-hidden="true">--}}
{{--                                    <option selected="selected">Chọn danh mục</option>--}}
{{--                                    @foreach($catalogs as $catalogs1)--}}
{{--                                    <option value="{{$catalogs1->id_cata}}">{{$catalogs1->name_cata}}</option>--}}
{{--                                    @endforeach--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <h6>Đơn vị</h6>--}}
{{--                                <select name="id_unit" class="form-control" tabindex="-1" aria-hidden="true">--}}
{{--                                    <option selected="selected">Chọn đơn vị</option>--}}
{{--                                    @foreach($units as $units1)--}}
{{--                                    <option value="{{$units1->id_unit}}">{{$units1->name_unit}}</option>--}}
{{--                                    @endforeach--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <h6>Khuyến mãi</h6>--}}
{{--                                <select name="id_promotion" class="form-control" tabindex="-1" aria-hidden="true">--}}
{{--                                    <option selected="selected">Chọn khuyến mãi</option>--}}
{{--                                    @foreach($promotions as $promotions1)--}}
{{--                                    <option value="{{$promotions1->id_promotion}}">{{$promotions1->code_promotion}}</option>--}}
{{--                                    @endforeach--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="row">--}}
{{--                        <h3 style="padding: 15px;padding-bottom: 0;">Sản phẩm</h3>--}}
{{--                        <span id="add_product_import" class="label label-success" style="height: 17px;margin-top: 32px;">Thêm</span>--}}
{{--                    </div>--}}

{{--                    <div class="product_row_import">--}}
{{--                        <div class="product_inline_import">--}}
{{--                            <div class="row" style="padding: 10px 15px;">--}}
{{--                                <strong style="padding-right: 6px;">1.</strong>--}}
{{--                                <span style="padding-top:5px;" class="label label-danger delete_product_import">--}}
{{--                                    <i class="fa fa-trash"></i></span></div>--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-md-2">--}}
{{--                                    <H6>Mã vạch</h6>--}}
{{--                                    <input type="text" name="code_pro" class="form-control" id="ssn">--}}
{{--                                </div>--}}
{{--                                <div class="col-md-4">--}}
{{--                                    <h6>Tên sản phẩm</h6>--}}
{{--                                    <input type="text" name="name_pro" class="form-control" id="ssn">--}}
{{--                                </div>--}}
{{--                                <div class="col-md-2">--}}
{{--                                    <h6>Số lượng</h6>--}}
{{--                                    <input type="text" name="quantity" class="form-control" id="ssn">--}}
{{--                                </div>--}}
{{--                                <div class="col-md-2">--}}
{{--                                    <h6>Đơn giá</h6>--}}
{{--                                    <input type="text" name="price" class="form-control" id="ssn">--}}
{{--                                </div>--}}
{{--                                <div class="col-md-2">--}}
{{--                                    <h6>Thêm</h6>--}}
{{--                                    <input type="submit" class="form-control" id="ssn">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100 dataTable" role="grid" aria-describedby="example_info">--}}
{{--                        <thead>--}}
{{--                            <tr role="row">--}}
{{--                                <th tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 7%;">Mã vạch</th>--}}
{{--                                <th tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 15%">Loại sản phẩm</th>--}}
{{--                                <th tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 12%;">Mã khuyến mãi</th>--}}
{{--                                <th tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 10%">Đơn vị</th>--}}
{{--                                <th tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 20%">Nhà cung cấp</th>--}}
{{--                                <th tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 10%">Tên sản phẩm</th>--}}
{{--                                <th tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 7%">Số lượng </th>--}}
{{--                                <th tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 10%">đơn giá </th>--}}
{{--                                <th tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 19%;">Xóa</th>--}}
{{--                            </tr>--}}
{{--                        </thead>--}}


{{--                        <tbody>--}}
{{--                            <tr id="table_product_inline">--}}
{{--                                <td class="">COD111</td>--}}
{{--                                <td class="">Thực phẩm</td>--}}
{{--                                <td class="">SALE111</td>--}}
{{--                                <td class="">Vỉ</td>--}}
{{--                                <td class="">Ba Huân</td>--}}
{{--                                <td class="">Trứng gà</td>--}}
{{--                                <td class="">30</td>--}}
{{--                                <td class="">30.000VNĐ/ Vỉ</td>--}}
{{--                                <td>--}}
{{--                                    <span class="badge badge-danger delete_product_table" style="padding: 1% 10%;"><i class="fa fa-trash"></i></span>--}}
{{--                                </td>--}}
{{--                            </tr>--}}

{{--                        </tbody>--}}
{{--                        <tfoot>--}}
{{--                            <tr>--}}
{{--                                <th tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 7%;">Mã vạch</th>--}}
{{--                                <th tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 15%">Loại sản phẩm</th>--}}
{{--                                <th tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 12%;">Mã khuyến mãi</th>--}}
{{--                                <th tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 10%">Đơn vị</th>--}}
{{--                                <th tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 20%">Nhà cung cấp</th>--}}
{{--                                <th tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 10%">Tên sản phẩm</th>--}}
{{--                                <th tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 7%">Số lượng </th>--}}
{{--                                <th tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 10%">đơn giá </th>--}}
{{--                                <th tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 19%;">Xóa</th>--}}

{{--                            </tr>--}}
{{--                        </tfoot>--}}
{{--                    </table>--}}
{{--                </div>--}}
            </form>
        </div>
    </section>
</div>
@endsection
