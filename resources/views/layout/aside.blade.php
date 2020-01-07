        <aside class="main-sidebar">
            <!-- sidebar -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="ulogo">
                        <a href="">
                            <!-- logo for regular state and mobile devices -->
                            <span><b><img src="{{asset('img/logo-light.svg')}}" style="padding: 0% 0% 5% 5%;" alt="" width="45%"></b>Admin</span>
                        </a>
                    </div>
                    <div class="image">
                        <img src="{{asset('img/icon.png')}}" class="rounded-circle" alt="User Image">
                    </div>
                    <div class="info">
                        <p> {{ Auth::user()->name }}</p>
                        <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Settings"><i class="ion ion-gear-b"></i></a>
                        <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ion ion-android-mail"></i></a>
                        <a href="{{ route('logout') }}" class="link" data-toggle="tooltip" title="" data-original-title="Logout" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="ion ion-power"></i></a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
                <!-- sidebar menu -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="nav-devider"></li>
                    <li class="header nav-small-cap">PERSONAL</li>

                    <li class="active">
                        <a href="tongquan">
                            <i class="fa fa-tachometer"></i>
                            <span >Tổng quan</span>
                        </a>
                    </li>

                    <li class="">
                        <a href="products">
                            <i class="fa fa-barcode"></i>
                            <span href="products_type">Sản Phẩm</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-folder"></i>
                            <span>Tài Khoản</span>
                            <span class="pull-right-container">
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </span>
                        </a>
                        {{-- <a href="users">
                            <i class="fa fa-user"></i>
                            <span href="users">Tài Khoản</span>
                        </a> --}}
                        <ul class="treeview-menu">
                            <li><a href="users">Người dùng</a></li>
                            <li><a href="role">Vai trò</a></li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="chart">
                            <i class="fa fa-area-chart"></i>
                            <span href="chart">Kế Toán</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-folder"></i>
                            <span>Quản lý</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="products_type">Loại sản phẩm</a></li>
                            <li><a href="unit">Đơn vị</a></li>
                            <li><a href="vendor">Nhà cung cấp</a></li>
                            <li><a href="promotion">Khuyến mãi</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-arrows-h"></i>
                            <span>Nhập/Xuất</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="billimport">Nhập kho</a></li>
                            <li><a href="billexport">Xuất kho</a></li>
{{--                            <li><a href="" data-toggle="modal" data-target="#exportbill">Xuất kho</a></li>--}}
                        </ul>
                    </li>
                </ul>
            </section>
            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <form action="">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title">PHIẾU NHẬP KHO</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label style="padding: 1% 1%;">Nhà cung cấp</label>
                                            <select class="form-control" tabindex="-1" aria-hidden="true">
                                                <option selected="selected">Chọn nhà cung cấp</option>
                                                <option>Coca-Cola</option>
                                                <option>Pepsi</option>
                                                {{-- @foreach($vendors as $vendors1){--}}
                                                {{-- <option>{{$vendors1->id_vendor}}</option>--}}
                                                }
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <h3 style="padding: 15px;padding-bottom: 0;">Sản phẩm</h3>
                                    <span id="add_product" class="label label-success" style="height: 17px;margin-top: 32px;">Thêm</span>
                                    <span data-toggle="modal" data-target="#modalimport" id="add_product" class="label label-success" style="height: 17px;margin-top: 32px;font-size: 10px;margin-left:10px"> <i class="fa fa-arrow-up"></i><i class="mdi mdi-file-excel"></i></span>
                                    <!-- <button type="button" data-toggle="modal" data-target="#modalimport" class="btn btn-app btn-success" style="height: 30px;padding: 0;border-radius: 6px;">
                                       <span style="">

                                        </span>
                                </button> -->

                                    <!-- modal import -->


                                    <!-- modal import -->
                                </div>
                                <div class="product_row">
                                    <div class="product_inline">
                                        <div class="row" style="padding: 10px 15px;">
                                            <strong style="padding-right: 6px;">1.</strong>
                                            <span style="padding-top:5px;" class="label label-danger delete_product">
                                                <i class="fa fa-trash"></i></span></div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <H6>Mã Sản phẩm</h6>
                                                <input type="text" class="form-control" id="ssn">
                                            </div>
                                            <div class="col-md-4">
                                                <h6>Tên</h6>
                                                <input type="text" class="form-control" id="ssn">
                                            </div>
                                            <div class="col-md-2">
                                                <h6>Số lượng</h6>
                                                <input type="text" class="form-control" id="ssn">
                                            </div>
                                            <div class="col-md-2">
                                                <h6>Đơn giá</h6>
                                                <input type="text" class="form-control" id="ssn">
                                            </div>
                                            <div class="col-md-2">
                                                <h6>Thành tiền</h6>
                                                <input type="text" class="form-control" id="ssn">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button style="margin:10px auto" type="button" class="btn btn-bold btn-pure btn-primary float-right">Thêm</button>
                                <hr style="margin-top: 50px;">
                                <table class="table table-bordered table-hover display nowrap margin-top-10 w-p100 dataTable">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Mã sản phẩm</th>
                                            <th>Loại sản phẩm</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Số lượng</th>
                                            <th>Đơn giá</th>
                                            <th>Tổng tiển</th>
                                            <th colspan="" rowspan="" headers="" scope="">Xóa</th>
                                        </tr>
                                    </thead>
                                    <tbody id="table_product_row">
                                        <tr id="table_product_inline">
                                            <td>1</td>
                                            <td>COD111</td>
                                            <td>Thực phẩm</td>
                                            <td>Trứng</td>
                                            <td>12</td>
                                            <td>10.000đ</td>
                                            <td>120.000đ</td>
                                            <th colspan="" rowspan="" headers="" scope="" style="padding-top: 20px;"> <span style="padding-top:5px;" class="label label-danger delete_product_table">
                                                    <i class="fa fa-trash"></i></span></th>
                                        </tr>
                                    </tbody>
                                    <tfood>
                                        <tr>
                                            <th>STT</th>
                                            <th>Mã sản phẩm</th>
                                            <th>Loại sản phẩm</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Số lượng</th>
                                            <th>Đơn giá</th>
                                            <th>Tổng tiển</th>
                                            <th colspan="" rowspan="" headers="" scope="">Xóa</th>
                                        </tr>
                                    </tfood>

                                </table>
                            </div>
                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-bold btn-pure btn-secondary" data-dismiss="modal">Đóng</button>
                        <button type="button" class="btn btn-bold btn-pure btn-primary float-right">Thêm</button>
                        <button type="button" class="btn btn-bold btn-pure btn-success float-right">Nhập lại</button>
                    </div>
                </div>
                </form>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
            </div>

            <!-- Export -->
            <div class="modal fade bs-example-modal-lg" id="exportbill" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <form action="">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title">PHIẾU XUẤT KHO</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label style="padding: 1% 1%;">Nhà cung cấp</label>
                                            <select class="form-control" tabindex="-1" aria-hidden="true">
                                                <option selected="selected">Chọn nhà cung cấp</option>
                                                <option>Coca-Cola</option>
                                                <option>Pepsi</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <h3 style="padding: 15px;padding-bottom: 0;">Sản phẩm</h3>
                                    <span id="add_product" class="label label-success" style="height: 17px;margin-top: 32px;">Thêm</span>
                                </div>
                                <div class="product_row">
                                    <div class="product_inline">
                                        <div class="row" style="padding: 10px 15px;">
                                            <strong style="padding-right: 6px;">1.</strong>
                                            <span style="padding-top:5px;" class="label label-danger delete_product">
                                                <i class="fa fa-trash"></i></span></div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <H6>Mã Sản phẩm</h6>
                                                <input type="text" class="form-control" id="ssn">
                                            </div>
                                            <div class="col-md-4">
                                                <h6>Tên</h6>
                                                <input type="text" class="form-control" id="ssn">
                                            </div>
                                            <div class="col-md-2">
                                                <h6>Số lượng</h6>
                                                <input type="text" class="form-control" id="ssn">
                                            </div>
                                            <div class="col-md-2">
                                                <h6>Đơn giá</h6>
                                                <input type="text" class="form-control" id="ssn">
                                            </div>
                                            <div class="col-md-2">
                                                <h6>Thành tiền</h6>
                                                <input type="text" class="form-control" id="ssn">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button style="margin:10px auto" type="button" class="btn btn-bold btn-pure btn-primary float-right">Thêm</button>
                                <hr style="margin-top: 50px;">
                                <table class="table table-bordered table-hover display nowrap margin-top-10 w-p100 dataTable">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Mã sản phẩm</th>
                                            <th>Loại sản phẩm</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Số lượng</th>
                                            <th>Đơn giá</th>
                                            <th>Tổng tiển</th>
                                            <th colspan="" rowspan="" headers="" scope="">Xóa</th>
                                        </tr>
                                    </thead>
                                    <tbody id="table_product_row">
                                        <tr id="table_product_inline">
                                            <td>1</td>
                                            <td>COD111</td>
                                            <td>Thực phẩm</td>
                                            <td>Trứng</td>
                                            <td>12</td>
                                            <td>10.000đ</td>
                                            <td>120.000đ</td>
                                            <th colspan="" rowspan="" headers="" scope="" style="padding-top: 20px;"> <span style="padding-top:5px;" class="label label-danger delete_product_table">
                                                    <i class="fa fa-trash"></i></span></th>
                                        </tr>
                                    </tbody>
                                    <tfood>
                                        <tr>
                                            <th>STT</th>
                                            <th>Mã sản phẩm</th>
                                            <th>Loại sản phẩm</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Số lượng</th>
                                            <th>Đơn giá</th>
                                            <th>Tổng tiển</th>
                                            <th colspan="" rowspan="" headers="" scope="">Xóa</th>
                                        </tr>
                                    </tfood>

                                </table>
                            </div>
                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-bold btn-pure btn-secondary" data-dismiss="modal">Đóng</button>
                        <button type="button" class="btn btn-bold btn-pure btn-primary float-right">Thêm</button>
                        <button type="button" class="btn btn-bold btn-pure btn-success float-right">Nhập lại</button>
                    </div>
                </div>
                </form>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
            </div>
        </aside>
