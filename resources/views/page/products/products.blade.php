@extends('layout.master')
@section('content_products')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Sản Phẩm
            </h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="fa fa-folder"></i> Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="#">Sản phẩm</a></li>
            </ol>
        </section>
        <section class="content">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Sản phẩm</h3>
                    <h6 class="box-subtitle">Tổng hợp tất cả các sẩn phẩm</h6>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">
                        <div id="example_wrapper" class="dataTables_wrapper">

                            <!-- button add -->
                            <button type="button" class="btn btn-app btn-success" data-toggle="modal"
                                    data-target="#modaladd" style="height: 30px;padding: 0;border-radius: 6px;">
                                <span style="font-size: 35px;padding: 0px;line-height: 30px;">+</span>
                            </button>
                            <!-- button add -->

                            <!-- button export excel -->
                            <a href="product/export">
                                <button type="button" class="btn btn-app btn-success"
                                        style="height: 30px;padding: 0;border-radius: 6px;">
                <span style="font-size: 20px;">
                    <i class="fa fa-arrow-down"></i><i class="mdi mdi-file-excel"></i>
                </span>
                                </button>
                            </a>
                            <form action=""  method="POST" >
                                <div class="form-group">
                                    <label>Nhà cung cấp</label>
                                    <select name="id_vendor" id="choncc" class="form-control" tabindex="-1"
                                            aria-hidden="true">
                                        <option selected="selected">Chọn nhà cung cấp</option>
                                        @foreach($vendors as $vendors1)
                                            <option
                                                value="{{$vendors1->id_vendor}}">{{$vendors1->name_vendor}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </form>
{{--                            <form action=""  method="POST">--}}
{{--                            <div class="form-group">--}}
{{--                                <label>Nhà cung cấp</label>--}}
{{--                                <select name="id_vendor" id="choncc" class="form-control" tabindex="-1"--}}
{{--                                        aria-hidden="true">--}}
{{--                                    <option selected="selected">Chọn nhà cung cấp</option>--}}
{{--                                    @foreach($vendors as $vendors1)--}}
{{--                                        <option--}}
{{--                                            value="{{$vendors1->id_vendor}}">{{$vendors1->name_vendor}}</option>--}}
{{--                                    @endforeach--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                            </form>--}}

{{--                            <a href="{{asset('')}}" id="cc1">--}}
{{--                                <button type="button" class="btn btn-app btn-success"--}}
{{--                                        style="height: 30px;padding: 0;border-radius: 6px;">--}}
{{--                <span style="font-size: 20px;">--}}
{{--                    <i class='fa fa-sign-in'></i>--}}
{{--                </span>--}}
{{--                                </button>--}}
{{--                            </a>--}}
{{--                            <a href="{{asset('')}}" id="cc2">--}}
{{--                                <button type="button" class="btn btn-app btn-success"--}}
{{--                                        style="height: 30px;padding: 0;border-radius: 6px;">--}}
{{--                <span style="font-size: 20px;">--}}
{{--              <i class='fa fa-sign-out'></i>--}}
{{--                </span>--}}
{{--                                </button>--}}
{{--                            </a>--}}

                            <a href="{{asset('')}}" id="cc3">
                                <button type="button" class="btn btn-app btn-success"
                                        style="height: 30px;padding: 0;border-radius: 6px;">
                <span style="font-size: 20px;">
              <i class='fa fa-sign-out'></i>
                </span>
                                </button>
                            </a>
                            <!-- button export excel -->
                            <!-- edit button -->

                            <!-- modal add số lượng -->
                            <div class="modal fade bs-example-modal-lg" id="modalSL" tabindex="-1" role="dialog"
                                 aria-labelledby="myLargeModalLabel" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <form id="addSL" method="POST" >
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title">Nhập sản phẩm</h3>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true">×
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                {{csrf_field()}}
                                                <div class="form-group">
                                                    <label>Số lượng</label>
                                                    <input name="quantity" type="text" placeholder="số lượng"
                                                           class="form-control">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-bold btn-pure btn-secondary"
                                                        data-dismiss="modal">Đóng
                                                </button>
                                                <button type="submit"
                                                        class="btn btn-bold btn-pure btn-success float-right">Lưu
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- modal add số lượng -->

                            <!-- modal export số lượng -->
                            <div class="modal fade bs-example-modal-lg" id="modalexportSL" tabindex="-1" role="dialog"
                                 aria-labelledby="myLargeModalLabel" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <form id="exportSL" method="POST" >
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title">Xuất sản phẩm</h3>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true">×
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                {{csrf_field()}}
                                                <div class="form-group">
                                                    <label>Số lượng</label>
                                                    <input name="quantity" type="text" placeholder="số lượng"
                                                           class="form-control">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-bold btn-pure btn-secondary"
                                                        data-dismiss="modal">Đóng
                                                </button>
                                                <button type="submit"
                                                        class="btn btn-bold btn-pure btn-success float-right">Lưu
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- modal export số lượng -->

                            <!-- modal add products -->
                            <div class="modal fade bs-example-modal-lg" id="modaladd" tabindex="-1" role="dialog"
                                 aria-labelledby="myLargeModalLabel" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <form id="addform" method="POST" enctype="multipart/form-data">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title">Thêm sản phẩm</h3>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true">×
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                {{csrf_field()}}
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Tên sản phẩm</label>
                                                            <input name="name_pro" type="text"
                                                                   placeholder="Tên Sản phẩm" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Mã sản phẩm</label>
                                                            <input name="code_pro" type="text" placeholder="Mã sản phẩm"
                                                                   class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Danh mục</label>
                                                            <select name="id_cata" class="form-control" tabindex="-1"
                                                                    aria-hidden="true">
                                                                <option selected="selected">Chọn danh mục</option>
                                                                @foreach($catalogs as $catalogs1)
                                                                    <option
                                                                        value="{{$catalogs1->id_cata}}">{{$catalogs1->name_cata}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Nhà cung cấp</label>
                                                            <select name="id_vendor" class="form-control" tabindex="-1"
                                                                    aria-hidden="true">
                                                                <option selected="selected">Chọn nhà cung cấp</option>
                                                                @foreach($vendors as $vendors1)
                                                                    <option
                                                                        value="{{$vendors1->id_vendor}}">{{$vendors1->name_vendor}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
{{--                                                    <div class="col-md-3">--}}
{{--                                                        <div class="form-group">--}}
{{--                                                            <label>Hình</label>--}}
{{--                                                            <input name="images" type="file" placeholder="Hình"--}}
{{--                                                                   class="form-control">--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Mã khuyến mãi</label>
                                                            <select name="id_promotion" class="form-control"
                                                                    tabindex="-1" aria-hidden="true">
                                                                <option selected="selected">Chọn khuyến mãi</option>
                                                                @foreach($promotions as $promotions1)
                                                                    <option
                                                                        value="{{$promotions1->id_promotion}}">{{$promotions1->code_promotion}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Đơn vị</label>
                                                            <select name="id_unit" class="form-control" tabindex="-1"
                                                                    aria-hidden="true">
                                                                <option selected="selected">Chọn đơn vị</option>
                                                                @foreach($units as $units1)
                                                                    <option
                                                                        value="{{$units1->id_unit}}">{{$units1->name_unit}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Số lượng</label>
                                                            <input name="quantity" type="text" placeholder="Số lượng"
                                                                   class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Đơn giá</label>
                                                            <input name="price" type="text" placeholder="Đơn giá"
                                                                   class="form-control">
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-bold btn-pure btn-secondary"
                                                        data-dismiss="modal">Đóng
                                                </button>
                                                <button type="submit"
                                                        class="btn btn-bold btn-pure btn-success float-right">Lưu
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!--modal add products -->

                            <!-- modal edit product -->
                            <div class="modal fade" id="editmodal" tabindex="-1" role="dialog"
                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document" style="min-width: 1000px;">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">CẬP NHẬT SẢN PHẨM</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form id="editform">
                                            <div class="modal-body">
                                                {{csrf_field()}}
                                                {{method_field('PUT')}}
                                                <input type="hidden" name="id" id="id">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Tên sản phẩm</label>
                                                            <input name="name_pro" id="name_pro" type="text"
                                                                   placeholder="Tên Sản phẩm" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Mã sản phẩm</label>
                                                            <input name="code_pro" id="code_pro" type="text"
                                                                   placeholder="Mã sản phẩm"
                                                                   class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Danh mục</label>
                                                            <select name="id_cata" id="id_cata" class="form-control"
                                                                    tabindex="-1"
                                                                    aria-hidden="true">
                                                                <option selected="selected">Chọn danh mục</option>
                                                                @foreach($catalogs as $catalogs1)
                                                                    <option
                                                                        value="{{$catalogs1->id_cata}}">{{$catalogs1->name_cata}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Nhà cung cấp</label>
                                                            <select name="id_vendor" id="id_vendor" class="form-control"
                                                                    tabindex="-1"
                                                                    aria-hidden="true">
                                                                <option selected="selected">Chọn nhà cung cấp</option>
                                                                @foreach($vendors as $vendors1)
                                                                    <option
                                                                        value="{{$vendors1->id_vendor}}">{{$vendors1->name_vendor}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
{{--                                                    <div class="col-md-3">--}}
{{--                                                        <div class="form-group">--}}
{{--                                                            <label>Hình</label>--}}
{{--                                                            <input name="images" id="images" type="file" placeholder="Hình"--}}
{{--                                                                   class="form-control">--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Mã khuyến mãi</label>
                                                            <select name="id_promotion" id="id_promotion"
                                                                    class="form-control"
                                                                    tabindex="-1" aria-hidden="true">
                                                                <option selected="selected">Chọn khuyến mãi</option>
                                                                @foreach($promotions as $promotions1)
                                                                    <option
                                                                        value="{{$promotions1->id_promotion}}">{{$promotions1->code_promotion}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Đơn vị</label>
                                                            <select name="id_unit" id="id_unit" class="form-control"
                                                                    tabindex="-1"
                                                                    aria-hidden="true">
                                                                <option selected="selected">Chọn đơn vị</option>
                                                                @foreach($units as $units1)
                                                                    <option
                                                                        value="{{$units1->id_unit}}">{{$units1->name_unit}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Số lượng</label>
                                                            <input name="quantity" id="quantity" type="text"
                                                                   placeholder="Số lượng"
                                                                   class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Đơn giá</label>
                                                            <input name="price" id="price" type="text"
                                                                   placeholder="Đơn giá"
                                                                   class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="modal-footer" style="min-width: 1000px">
                                                <button type="button" class="btn btn-bold btn-pure btn-secondary"
                                                        data-dismiss="modal">Đóng
                                                </button>
                                                <button type="submit"
                                                        class="btn btn-bold btn-pure btn-success float-right">Cập nhật
                                                </button>
                                            </div>
                                    </div>
                                    </form>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                            <!-- modal add product -->
                            <!-- modal import -->
                            <div class="modal fade bs-example-modal-lg" id="modalimport" tabindex="-1" role="dialog"
                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <form action="{{route('importCatalog')}}" method="POST"
                                          enctype="multipart/form-data">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title">Nhập file excel</h3>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true">
                                                    ×
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                @csrf
                                                <div class="form-group">
                                                    <label style="font-weight: bold">Thêm file</label>
                                                    <input type="file" name="file_import" class="form-control">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-bold btn-pure btn-secondary"
                                                        data-dismiss="modal">Đóng
                                                </button>
                                                <button type="submit"
                                                        class="btn btn-bold btn-pure btn-success float-right">
                                                    Thêm
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- /.modal-content -->
                                </div>
                            </div>
                        </div>

                        <table id="data_products"
                               class="table table-bordered table-hover display nowrap margin-top-10 w-p100 dataTable"
                               role="grid">
                            <thead>
                            <tr role="row">
                                <th aria-controls="example" rowspan="1" colspan="1">ID_PRO</th>
                                <th aria-controls="example" rowspan="1" colspan="1" style="width: 5%;">Mã sản phẩm</th>
                                <th aria-controls="example" rowspan="1" colspan="1" style="width: 15%">Loại sản phẩm
                                </th>
                                <th aria-controls="example" rowspan="1" colspan="1" style="width: 12%;">Mã khuyến mãi
                                </th>
                                <th aria-controls="example" rowspan="1" colspan="1" style="width: 10%">Đơn vị</th>
                                <th aria-controls="example" rowspan="1" colspan="1" style="width: 15%">Nhà cung cấp</th>
                                <th aria-controls="example" rowspan="1" colspan="1" style="width: 10%">Tên sản phẩm</th>
                                <th aria-controls="example" rowspan="1" colspan="1" style="width: 7%">Số lượng</th>
                                <th aria-controls="example" rowspan="1" colspan="1" style="width: 10%">đơn giá</th>
                                <th aria-controls="example" rowspan="1" colspan="1" style="width: 24%;">Tương tác</th>
                            </tr>
                            </thead>


                            <!-- <tbody>
                            <tr role="row " class="odd ">
                            <td class="">COD111</td>
                            <td class="">Thực phẩm</td>
                            <td class="">SALE111</td>
                            <td class="">Vỉ</td>
                            <td class="">Ba Huân</td>
                            <td class="">Trứng gà</td>
                            <td class="">30</td>
                            <td class="">30.000VNĐ/ Vỉ</td>
                            <td>
                                <span class="badge badge-danger" style="padding: 1% 5%;"><i class="fa fa-trash"></i></span>
                                <span data-toggle="modal" data-target=".modaledit" class="badge badge-success" style="padding: 1% 5%;"><i class="fa fa-edit "></i></span>
                            </td>
                            </tr>

                            </tbody> -->
                            <tfoot>
                            <tr>
                               <th aria-controls="example" rowspan="1" colspan="1">ID_PRO</th>
                                <th aria-controls="example" rowspan="1" colspan="1" style="width: 5%;">Mã sản phẩm</th>
                                <th aria-controls="example" rowspan="1" colspan="1" style="width: 15%">Loại sản phẩm
                                </th>
                                <th aria-controls="example" rowspan="1" colspan="1" style="width: 12%;">Mã khuyến mãi
                                </th>
                                <th aria-controls="example" rowspan="1" colspan="1" style="width: 10%">Đơn vị</th>
                                <th aria-controls="example" rowspan="1" colspan="1" style="width: 15%">Nhà cung cấp</th>
                                <th aria-controls="example" rowspan="1" colspan="1" style="width: 10%">Tên sản phẩm</th>
                                <th aria-controls="example" rowspan="1" colspan="1" style="width: 7%">Số lượng</th>
                                <th aria-controls="example" rowspan="1" colspan="1" style="width: 10%">đơn giá</th>
                                <th aria-controls="example" rowspan="1" colspan="1" style="width: 24%;">Tương tác</th>
                            </tr>
                            </tfoot>
                        </table>

                    </div>
                </div>
            </div>
            <!-- /.box-body -->
    </div>
    </section>
    </div>
@endsection
@push('scripts_products')
    <script>
        $(function () {
            $('#data_products').DataTable({
                order: [
                    [0, 'desc']
                ],
                processing: true,
                serverSide: true,
                "language": {
                    processing: 'Đang load dữ liệu ....',
                    search: "Tìm kiếm:",
                    zeroRecords: "Không có kết quả",
                    infoEmpty: "Rỗng",
                    infoFiltered: "(lọc từ _MAX_ kết quả)",
                    paginate: {
                        "first": "Trang đầu",
                        "last": "Trang cuối",
                        "next": "Trang sau",
                        "previous": "Trang trước"
                    },

                    lengthMenu: "Hiển thị   _MENU_   đơn vị",
                    info: "Hiển thị _START_ tới _END_ trong _TOTAL_ dòng",
                },
                   ajax: '<?php if(isset($billimport) && $billimport === "billimport")
                        echo'/datatable/listproducts/billimport';
                            elseif (isset($billimport) && $billimport === "billexport")
                               echo'/datatable/listproducts/billexport';
                            else
                                echo'/datatable/listproducts';
                            ?>',
                columns: [
                    {
                        data: 'id_pro',
                        type: 'hidden',
                        class: 'd-none'
                    },
                    {
                        data: 'code_pro',
                        name: 'code_pro'
                    },
                    {
                        // bên ông code vầy hơi căng rồi
                        data: 'name_cata',
                        name: 'id_cata'
                    },
                    {
                        data: 'name_promotion',
                        name: 'id_promotion'
                    },
                    {
                        data: 'name_unit',
                        name: 'id_unit'
                    },
                    {
                        data: 'name_vendor',
                        name: 'id_vendor'
                    },
                    {
                        data: 'name_pro',
                        name: 'name_pro'
                    },
                    // {
                    //     data: 'images',
                    //     name: 'images'
                    // },
                    {
                        data: 'quantity',
                        name: 'quantity'
                    },
                    {
                        data: 'price',
                        name: 'price'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ],
                drawCallback: function () {
                    $('.addSL').on('click', function () {
                        $tr = $(this).closest('tr');
                        var data = $tr.children("td").map(function () {
                            return $(this).text();
                        }).get();
                        console.log(data);
                            $('#addSL').on('submit', function (e) {
                                e.preventDefault();
                                $.ajax({
                                    type: "POST",
                                    url: "productsSL/" + data[0],
                                    data: $('#addSL').serialize(),
                                    success: function (response) {
                                        console.log(response);
                                        $('#modalSL').modal('hide');
                                        swal({
                                                title: "Thêm thành công",
                                                type: "success"
                                            },
                                            function () {
                                                location.reload();
                                            });
                                    },
                                    error: function (error) {
                                        swal({
                                            title: "Thêm không thành công",
                                            type: "error"
                                        });
                                    }
                                });
                            });

                    });
                    $('.exportSL').on('click', function () {
                        $tr = $(this).closest('tr');
                        var data = $tr.children("td").map(function () {
                            return $(this).text();
                        }).get();
                        console.log(data);
                        $('#exportSL').on('submit', function (e) {
                            e.preventDefault();
                            $.ajax({
                                type: "POST",
                                url: "productsExportSL/" + data[0],
                                data: $('#exportSL').serialize(),
                                success: function (response) {
                                    console.log(response);
                                    $('#modalSL').modal('hide');
                                    swal({
                                            title: "Thêm thành công",
                                            type: "success"
                                        },
                                        function () {
                                            location.reload();
                                        });
                                },
                                error: function (error) {
                                    swal({
                                        title: "Thêm không thành công",
                                        type: "error"
                                    });
                                }
                            });
                        });

                    });
                    $('.editbtn').on('click', function () {
                        $('#editmodal').modal('show');
                        $tr = $(this).closest('tr');
                        var data = $tr.children("td").map(function () {
                            return $(this).text();
                        }).get();
                        console.log(data);
                        $('#id').val(parseInt(data[0]));
                        $('#code_pro').val(parseInt(data[1]));
                        $('#id_cata').val(parseInt(data[2]));
                        $('#id_promotion').val(parseInt(data[3]));
                        $('#id_unit').val(parseInt(data[4]));
                        $('#id_vendor').val(parseInt(data[5]));
                        $('#name_pro').val(data[6]);
                        // $('#images').val(data[7]);
                        $('#quantity').val(data[7]);
                        $('#price').val(data[8]);
                    });
                    $(editform).on('submit', function (e) {
                        e.preventDefault();
                        var id = $('#id').val();
                        $.ajax({
                            type: "PUT",
                            url: "editProducts/" + id,
                            data: $('#editform').serialize(),
                            success: function (response) {
                                console.log(response);
                                $('#editmodal').modal('hide');
                                swal({
                                        title: "Bạn muốn cập nhật thông tin?",
                                        // text: "But you will still be able to retrieve this file.",
                                        type: "warning",
                                        showCancelButton: true,
                                        confirmButtonColor: "#3085d6",
                                        confirmButtonText: "Vâng, Tôi muốn cập nhật!",
                                        cancelButtonText: "Không, Tôi không muốn cập nhật!",
                                        closeOnConfirm: false,
                                        closeOnCancel: false
                                    },
                                    function (isConfirm) {
                                        if (isConfirm) {
                                            swal({
                                                    title: "Cập nhật thành công",
                                                    text: "Thông tin của bạn đã được cập nhật",
                                                    type: "success"
                                                },
                                                function () {
                                                    location.reload();
                                                }
                                            );
                                        } else {
                                            swal("Hủy", "Thông tin của bạn chưa được cập nhật", "error");

                                        }
                                    });
                            },
                            error: function (error) {
                                swal({
                                    title: "Cập nhật không thành công",
                                    type: "error"
                                });
                            }
                        });
                    });
                }
            });
        });
    </script>
@endpush
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#addform').on('submit', function (e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "productsadd",
                // enctype: 'multipart/form-data',
                data: $('#addform').serialize(),
                success: function (response) {
                    console.log(response);
                    $('#modaladd').modal('hide');
                    swal({
                            title: "Thêm thành công",
                            type: "success"
                        },
                        function () {
                            location.reload();
                        });
                },
                error: function (error) {
                    swal({
                        title: "Thêm không thành công",
                        type: "error"
                    });
                }
            });
        });

        $('#choncc').on('change',function(){
            let id = $(this).val();
    $('#cc1').attr('href','imvoicebillimport/'+id)
    $('#cc2').attr('href','imvoiceexport/'+id)
    $('#cc3').attr('href','imvoiceexportproducts/'+id)

})
    });

</script>

