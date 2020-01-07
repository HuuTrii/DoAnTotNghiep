@extends('layout.master')
@section('content_unit')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Đơn vị
        </h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Quản lý</a></li>
            <li class="breadcrumb-item"><a href="#">Đơn Vị</a></li>
        </ol>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Đơn Vị</h3>
                <h6 class="box-subtitle">Danh Sách</h6>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                    <div id="example_wrapper" class="dataTables_wrapper">
                        <!-- botton add -->
                        <button type="button" class="btn btn-app btn-success" data-toggle="modal" data-target="#modaladd" style="height: 30px;padding: 0;border-radius: 6px;">
                            <span style="font-size: 35px;padding: 0px;line-height: 30px;">+</span>
                        </button>
                        <a href="unit/unit/export">
                            <button type="button" class="btn btn-app btn-success" style="height: 30px;padding: 0;border-radius: 6px;">
                                <span style="font-size: 20px;">
                                    <i class="fa fa-arrow-down"></i><i class="mdi mdi-file-excel"></i>
                                </span>
                            </button>
                        </a>
                        <button type="button" class="btn btn-app btn-success" data-toggle="modal"
                                data-target="#modalimport" style="height: 30px;padding: 0;border-radius: 6px;">
                                <span style="font-size: 20px;">
                                     <i class="fa fa-arrow-up"></i><i class="mdi mdi-file-excel"></i>
                                </span>
                        </button>

                        <!-- modal add unit -->
                        <div class="modal fade bs-example-modal-lg" id="modaladd" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="display: none;" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <form id="addform" method="POST">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3 class="modal-title">Thêm Đơn Vị</h3>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <div class="modal-body">
                                            {{csrf_field()}}
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label>Tên đơn vị</label>
                                                        <input name="name_unit" type="text" placeholder="Tên loại" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Tên viết tắt</label>
                                                        <input name="acronym" type="text" placeholder="Tên viết tắt" class="form-control">
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
                        <!-- modal add unit -->
                        <!-- modal import -->
                        <div class="modal fade bs-example-modal-lg" id="modalimport" tabindex="-1" role="dialog"
                             aria-labelledby="myLargeModalLabel" style="display: none;" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title">Nhập file excel</h3>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('importUnit') }}" method="POST" enctype="multipart/form-data">
                                            {{csrf_field()}}
                                            <label style="font-weight: bold" >Thêm file</label>
                                            <input type="file" name="file_import" class="form-control">
                                            <br>
                                            <button class="btn btn-success">Import</button>
                                        </form>
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
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- modal import -->


                        <!-- Modal edit unit -->
                        <div class="modal fade bs-example-modal-lg" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">CẬP NHẬT</h5>
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
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label>Tên đơn vị</label>
                                                        <input name="name_unit" type="text" id="name_unit" placeholder="Tên loại" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Tên viết tắt</label>
                                                        <input name="acronym" type="text" id="acronym" placeholder="Tên viết tắt" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer" style="min-width: 1000px;">
                                            <button type="button" class="btn btn-bold btn-pure btn-secondary" data-dismiss="modal">Đóng</button>
                                            <button type="submit" class="btn btn-bold btn-pure btn-success float-right">Cập nhật</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- modal edit unit -->
                        <table id="data_unit" class="table table-bordered table-hover display nowrap margin-top-10 w-p100 dataTable" role="grid" aria-describedby="example_info">
                            <thead>
                                <tr role="row">
                                    <th class="id" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 25%;">Id_unit
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 25%;">Tên Đơn vị</th>
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 25%;">Tên viết tắt</th>
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 30%;">Tương tác</th>
                                </tr>
                            </thead>
                            <!--     @foreach($unit as $unit1)
                                    <tr role="row " class="odd ">
                                        <td style="display:none">{{$unit1->id_unit}}</td>
                                        <td>{{$unit1->name_unit}}</td>
                                        <td>{{$unit1->acronym}}</td>
                                        <td>
                                            <a href=" {{ route('unitDestroy', $unit1->id_unit )}}"> <span class="badge badge-danger" style="padding: 1% 5%;"><i class="fa fa-trash"></i></span></a>
                                            <a href="#" class="editbtn"> <span class="badge badge-success  " style="padding: 1% 5%;"><i class="fa fa-edit "></i></span></a>
                                        </td>

                                    </tr>
                                @endforeach -->
                            <tbody>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th rowspan="1 " colspan="1 ">Tên Đơn vị</th>
                                    <th rowspan="1 " colspan="1 ">Tên viết tắt</th>
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1">Tương tác</th>

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
@push('scripts_unit')
<script>
    $(function() {
        $('#data_unit').DataTable({
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
            ajax: '{{asset('/datatable/listunit')}}',
            columns: [
            {data: 'id_unit', type: 'hidden',class: 'd-none'},
            {data: 'name_unit',name: 'name_unit'},
            {data: 'acronym',name: 'acronym'},
            {data: 'action',name: 'action',orderable: false,searchable: false}
            ],
            drawCallback: function() {
                $('.editbtn').on('click', function() {
                    $tr = $(this).closest('tr');
                    var data = $tr.children("td").map(function() {
                        return $(this).text();
                    }).get();
                    $('#id').val(data[0]);
                    $('#name_unit').val(data[1]);
                    $('#acronym').val(data[2]);
                });
                $(editform).on('submit', function(e) {
                    e.preventDefault();
                    var id = $('#id').val();
                    console.log("id", id);
                    $.ajax({
                        type: "PUT",
                        url: "unit/editUnit/" + id,
                        data: $('#editform').serialize(),
                        success: function(response) {
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
                                function(isConfirm) {
                                    if (isConfirm) {
                                        swal({
                                                title: "Cập nhật thành công",
                                                text: "Thông tin của bạn đã được cập nhật",
                                                type: "success"
                                            },
                                            function() {
                                                location.reload();
                                            }
                                        );
                                    } else {
                                        swal("Hủy", "Thông tin của bạn chưa được cập nhật", "error");

                                    }
                                });
                        },
                        error: function(error) {
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
    $(document).ready(function() {
        $(addform).on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "unit/unitadd",
                data: $('#addform').serialize(),
                success: function(response) {
                    console.log(response);
                    $('#modaladd').modal('hide');
                    swal({
                            title: "Thêm thành công",
                            type: "success"
                        },
                        function() {
                            location.reload();
                        });
                },
                error: function(error) {
                    swal({
                        title: "Thêm không thành công",
                        type: "error"
                    });
                }
            });
        });
    });
</script>
