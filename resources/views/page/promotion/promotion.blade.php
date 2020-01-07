

@extends('layout.master')
@section('content_promotion')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Khuyến mãi
            </h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="fa fa-folder"></i> Quản lý</a></li>
                <li class="breadcrumb-item"><a href="#">Khuyến mãi</a></li>
            </ol>
        </section>
        <section class="content">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Khuyến mãi</h3>
                    <h6 class="box-subtitle">Danh sách các khuyến mãi hiện có</h6>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">
                        <div id="example_wrapper" class="dataTables_wrapper">
                            <!-- botton add -->
                            <button type="button" class="btn btn-app btn-success" data-toggle="modal" data-target="#modaladd" style="height: 30px;padding: 0;border-radius: 6px;">
                                <span style="font-size: 35px;padding: 0px;line-height: 30px;">+</span>
                            </button>
                            <a href="catalog/export">
                                <button type="button" class="btn btn-app btn-success" style="height: 30px;padding: 0;border-radius: 6px;">
                                            <span style="font-size: 20px;">
                                                 <i class="fa fa-arrow-down"></i><i class="mdi mdi-file-excel"></i>
                                            </span>
                                </button>
                            </a>
                            <button type="button" data-toggle="modal" data-target="#modalimport" class="btn btn-app btn-success" style="height: 30px;padding: 0;border-radius: 6px;">
                                       <span style="font-size: 20px;">
                                                <i class="fa fa-arrow-up"></i><i class="mdi mdi-file-excel"></i>
                                        </span>
                            </button>
                            <button type="button" data-toggle="modal" data-target="#modal-thongke" class="btn btn-app btn-success" style="height: 30px;padding: 0;border-radius: 6px;">
                                       <span style="font-size: 14px;">
                                               Thống kê
                                        </span>
                            </button>

                            <!-- modal import -->

                            <div class="modal fade" id="modalimport" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <form action="{{route('importCatalog')}}" method="POST"  enctype="multipart/form-data">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title">Nhập file excel</h3>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                                @csrf
                                                <div class="form-group">
                                                    <label style="font-weight: bold" >Thêm file</label>
                                                    <input type="file" name="file_import" class="form-control">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-bold btn-pure btn-secondary" data-dismiss="modal">Đóng</button>
                                                <button type="submit" class="btn btn-bold btn-pure btn-success float-right">Thêm</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- /.modal-content -->
                                </div>
                            </div>
                            <!-- modal import -->
                            <!-- modal add promotion -->
                            <div class="modal fade bs-example-modal-lg" id="modaladd" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <form id="addform" method="POST" novalidate>
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title">Thêm khuyến mãi</h3>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                                {{csrf_field()}}
                                                <div class="row">
                                                    <div class="col-md-8">
                                                          <div class="controls">
                                                            <div class="form-group">
                                                             <label>Mã khuyến mãi</label>
                                                                <div class="controls">
                                                                    <input type="text" name="code_promotion" class="form-control" required="" data-validation-containsnumber-regex="(\d)+" data-validation-containsnumber-message="Không được nhập chữ" aria-invalid="false"> 
                                                                    <div class="help-block"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="controls">
                                                            <div class="form-group">
                                                            <label>Mức khuyến mãi(%)</label>
                                                                <div class="controls">
                                                                    <input type="text" name="sale" class="form-control" required="" data-validation-containsnumber-regex="(\d)+" data-validation-containsnumber-message="Không được nhập chữ" aria-invalid="false"> 
                                                                    <div class="help-block"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">

                                                        <div class="form-group">
                                                            <label>Từ ngày</label>
                                                            <input name="from_date"  type="date" placeholder="2019-10-10" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Đến ngày</label>
                                                            <input name="to_date"  type="date" placeholder="2019-10-10" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>



                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-bold btn-pure btn-secondary" data-dismiss="modal">Đóng</button>
                                                <button type="submit" class="btn btn-bold btn-pure btn-success float-right">Lưu</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- modal add promotion -->

                            <!-- Modal edit promotion -->
                            <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document" style="min-width: 1000px">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">CẬP NHẬT</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form id="editform" >
                                            <div class="modal-body">
                                                {{csrf_field()}}
                                                {{method_field('PUT')}}
                                                <input type="hidden" name="id" id="id">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                          <div class="controls">
                                                            <div class="form-group">
                                                             <label>Mã khuyến mãi</label>
                                                                <div class="controls">
                                                                    <input type="text" name="code_promotion" id="code_promotion" class="form-control" required="" data-validation-containsnumber-regex="(\d)+" data-validation-containsnumber-message="Không được nhập chữ" aria-invalid="false"> 
                                                                    <div class="help-block"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="controls">
                                                            <div class="form-group">
                                                            <label>Mức khuyến mãi(%)</label>
                                                                <div class="controls">
                                                                    <input type="text" name="sale" id="sale" class="form-control" required="" data-validation-containsnumber-regex="(\d)+" data-validation-containsnumber-message="Không được nhập chữ" aria-invalid="false"> 
                                                                    <div class="help-block"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Từ ngày</label>
                                                            <input name="from_date" id="from_date" type="date" placeholder="2019-10-10" class="form-control" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Đến ngày</label>
                                                            <input name="to_date" id="to_date"  type="date" placeholder="2019-10-10" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>



                                            </div>
                                            <div class="modal-footer" style="min-width: 1000px;">
                                                <button type="button" class="btn btn-bold btn-pure btn-secondary" data-dismiss="modal">Đóng</button>
                                                <button type="submit" class="btn btn-bold btn-pure btn-success float-right">Cập nhật</button>
                                            </div>
                                    </div>
                                    </form>

                                </div>
                            </div>
                            <!-- modal edit promotion -->

                            <div class="modal modal-fill fade" data-backdrop="false" id="modal-thongke" tabindex="-1" style="overflow-y: scroll !important;display: block;opacity: 1;" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div>
                                                <canvas id="chart_1" width="100%" height="40px"></canvas>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-bold btn-pure btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-bold btn-pure btn-primary float-right">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <table id="data_promotion" class="table table-bordered table-hover display nowrap margin-top-10 w-p100 dataTable" role="grid" aria-describedby="example_info">
                                <thead>
                                <tr role="row">
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 20%;">ID_PROMOTION</th>
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 20%;">Mã khuyến mãi</th>
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 20%;">Mức khuyến mãi</th>
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 20%;">Từ ngày</th>
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 20%;">Đến ngày</th>
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 20%;">Tương tác</th>
                                </tr>
                                </thead>

                            <!--     @foreach($promotion as $promotion1)
                                <tr role="row " class="odd ">
                                    <td style="display:none">{{$promotion1->id_promotion}}</td>
                                            <td>{{$promotion1->code_promotion}}</td>
                                            <td>{{$promotion1->sale}}</td>
                                            <td>{{$promotion1->from_date}}</td>
                                            <td>{{$promotion1->to_date}}</td>
                                            <td>
                                            <a href=" {{ route('promotionDestroy', $promotion1->id_promotion )}}">  <span class="badge badge-danger" style="padding: 1% 5%;"><i class="fa fa-trash"></i></span></a>
                                            <a href="#" class="editbtn"> <span  class="badge badge-success  " style="padding: 1% 5%;"><i class="fa fa-edit "></i></span></a>
                                            </td>

                                        </tr>
                                    @endforeach -->
                                <tfoot>
                                <tr>
                                       <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 20%;">ID_PROMOTION</th>
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 20%;">Mã khuyến mãi</th>
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 20%;">Mức khuyến mãi</th>
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 20%;">Từ ngày</th>
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 20%;">Đến ngày</th>
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 20%;">Tương tác</th>
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
@push('scripts_promotion')
<script>
$(function() {
    $('#data_promotion').DataTable({
        processing: true,
        serverSide: true,
           "language": {
                processing: 'Đang load dữ liệu ....',
                search: "Tìm kiếm:",
                zeroRecords: "Không có kết quả",
                infoEmpty:      "Rỗng",
                infoFiltered:   "(lọc từ _MAX_ kết quả)",
                paginate: {
                  "first": "Trang đầu",
                  "last": "Trang cuối",
                  "next": "Trang sau",
                  "previous": "Trang trước"
                },
                lengthMenu: "Hiển thị   _MENU_   đơn vị",
                info: "Hiển thị _START_ tới _END_ trong _TOTAL_ dòng",
              },
        ajax: '{{asset('/datatable/listpromotion')}}',
        columns: [
            { data: 'id_promotion', type: 'hidden',class:'d-none' },
            { data: 'code_promotion', name: 'code_promotion' },
            { data: 'sale', name: 'sale' },
            { data: 'from_date', name: 'from_date' },
            { data: 'to_date', name: 'to_date' },
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ],
        drawCallback: function () {
            $('.editbtn').on('click',function () {
                $('#editmodal').modal('show');
                $tr = $(this).closest('tr');
                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();
                console.log(data);
                $('#id').val(data[0]);
                $('#code_promotion').val(data[1]);
                $('#sale').val(data[2]);
                $('#from_date').val(data[3]);
                $('#to_date').val(data[4]);
            });
            $(editform).on('submit',function (e) {
                e.preventDefault();
                var id = $('#id').val();
                $.ajax({
                    type:"PUT",
                    url:"editPromotion/"+ id,
                    data: $('#editform').serialize(),
                    success:function (response) {
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
                                    function(isConfirm){
                                      if (isConfirm) {
                                        swal({title: "Cập nhật thành công",text: "Thông tin của bạn đã được cập nhật", type: "success"},
                                                   function(){ 
                                                       location.reload();
                                                   }
                                            );
                                      } else {
                                        swal("Hủy", "Thông tin của bạn chưa được cập nhật", "error");

                                      }
                                    });
                    },
                    error:function (error) {
                                 swal({title: "Cập nhật không thành công", type: "error"});
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
                    $(document).ready(function(){
                        $(addform).on('submit',function (e) {
                            e.preventDefault();
                            $.ajax({
                                type:"POST",
                                url:"promotionadd",
                                data: $('#addform').serialize(),
                                success:function (response) {
                                    console.log(response);
                                    $('#modaladd').modal('hide');
                                    swal({title: "Thêm thành công", type: "success"},
                                        function(){ 
                                            location.reload();
                                        });
                                },
                            error:function (error) {
                       swal({title: "Thêm không thành công", type: "error"});
                }
                            });
                        });
                    });
                    </script>
