@extends('layout.master')
@section('content_products')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Vai trò
            </h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="fa fa-folder"></i>Tài khoản</a></li>
                <li class="breadcrumb-item"><a href="#">Vai trò</a></li>
            </ol>
        </section>
        <section class="content">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Vai trò</h3>
                    <h6 class="box-subtitle">Tổng hợp tất cả các vai trò</h6>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">
                        <div id="example_wrapper" class="dataTables_wrapper">
                            <div class="modal fade bs-example-modal-lg" id="modalimport" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <form action="{{route('importCatalog')}}" method="POST" enctype="multipart/form-data">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title">Nhập file excel</h3>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                                @csrf
                                                <div class="form-group">
                                                    <label style="font-weight: bold">Thêm file</label>
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
                            <div class="box-body">
                                <div class="table-responsive">
                                    <div id="example_wrapper" class="dataTables_wrapper">
                                        <!-- botton add -->
                                        <button type="button" class="btn btn-app btn-success" data-toggle="modal" data-target="#modaladd" style="height: 30px;padding: 0;border-radius: 6px;">
                                            <span style="font-size: 35px;padding: 0px;line-height: 30px;">+</span>
                                        </button>
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
                                                                        <label>Vai trò</label>
                                                                        <input name="name" type="text" placeholder="Tên loại" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Vai trò hiển thị</label>
                                                                        <input name="display_name" type="text" placeholder="Tên viết tắt" class="form-control">
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
                                                                        <label>Vai trò</label>
                                                                        <input name="name" type="text" id="name" placeholder="Tên loại" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Vai trò hiển thị</label>
                                                                        <input name="display_name" type="text" id="display_name" placeholder="Tên viết tắt" class="form-control">
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
                                        <div id="example_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="example"></label></div>
                                        <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100 dataTable" role="grid" aria-describedby="example_info">
                                            <thead>
                                            <tr role="row">
                                                <th tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 20%;">Vai trò</th>
                                                <th tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 20%;">Vai trò hiển thị</th>
                                                <th tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 15%">Tương tác</th>

                                            </tr>
                                            </thead>


                                            <tbody>
                                            @foreach ($Roles as $role)
                                                <tr>



                                                    <td class="" style="display:none;">{{$role->id}}</td>
                                                    <td class="" style="">{{$role->name}}</td>
                                                    <td class="">{{$role->display_name}}</td>




                                                    <td>
                                                        <a href="{{ route('roledestroy', $role->id )}}">  <span class="badge badge-danger" style="padding: 1% 5%;"><i class="fa fa-trash"></i></span></a>
                                                        <a href="#" class="editbtn"> <span  class="badge badge-success  " style="padding: 1% 5%;"><i class="fa fa-edit "></i></span></a>
                                                    </td>


                                                </tr>
                                            @endforeach
                                            </tbody>
                                            <tfoot>
                                            <tr role="row">
                                                <th tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 20%;">Vai trò</th>
                                                <th tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 20%;">Vai trò hiển thị</th>
                                                <th tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 15%">Tương tác</th>

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

<script src="https://code.jquery.com/jquery-3.4.1.js" ></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.editbtn').on('click',function () {
            $('#editmodal').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function () {
                return $(this).text();
            }).get();
            console.log(data);
            $('#id').val(data[0]);
            $('#name').val(data[1]);
            $('#display_name').val(data[2]);
        });
        $(editform).on('submit',function (e) {
            e.preventDefault();
            var id = $('#id').val();
            $.ajax({
                type:"PUT",
                url:"role/edit/"+ id,
                data: $('#editform').serialize(),
                success:function (response) {
                    console.log(response);
                    $('#editmodal').modal('hide');
                    location.reload();
                    alert("Data Update");
                },
                error:function (error) {
                    alert("Data Not Update");
                }
            });
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $(addform).on('submit',function (e) {
            e.preventDefault();
            $.ajax({
                type:"POST",
                url:"role/roleadd",
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


