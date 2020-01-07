@extends('layout.master')
@section('content_products')
<div class="content-wrapper">
<section class="content-header">
<h1>
Tài khoản
</h1>
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="#"><i class="fa fa-folder"></i>Tài khoản</a></li>
<li class="breadcrumb-item"><a href="#">Người dùng</a></li>
</ol>
</section>
<section class="content">
<div class="box">
<div class="box-header with-border">
<h3 class="box-title">Tài khoản</h3>
<h6 class="box-subtitle">Tổng hợp tất cả các tài khoản</h6>
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
                    <a href="users/export/name">
                        <button type="button" class="btn btn-app btn-success"
                                style="height: 30px;padding: 0;border-radius: 6px;">
                <span style="font-size: 20px;">
                    <i class="fa fa-arrow-down"></i><i class="mdi mdi-file-excel"></i>
                </span>
                        </button>
                    </a>
                    <div class="modal fade bs-example-modal-lg modaledituser" id="modaladd" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <form id="addform" method="POST">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title">Thêm mới user</h3>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body">
                                        {{csrf_field()}}
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Họ</label>
                                                    <input name="lastname" type="text" placeholder="Họ" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Tên</label>
                                                    <input name="name" type="text" placeholder="Tên" class="form-control">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input name="password" type="password" placeholder="Mật khẩu" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Re-Password</label>
                                                    <input name="password_confirmation" type="password" placeholder="Xác nhận mật khẩu" class="form-control">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input name="email" type="email" placeholder="Email" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Số điên thoại</label>
                                                    <input name="phone_number" type="number" placeholder="Số điên thoại" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Vai trò</label>
                                                    <div class="form-group">
                                                        <select class="form-control" name="role_id" id="">
                                                            @foreach ($Roles as $roles)
                                                                <option value="{{$roles->id}}">{{$roles->display_name}}</option>
                                                            @endforeach

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-bold btn-pure btn-secondary" data-dismiss="modal">Đóng</button>
                                        <button type="submit" class="btn btn-bold btn-pure btn-success float-right">Lưu</button>
                                    </div>
                                </div>
                        </div>
                        </form>
                        <!-- /.modal-content -->
                    </div>

                    <div class="modal fade bs-example-modal-lg modaledituser" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="display: none;" aria-hidden="true">

                        <div class="modal-dialog modal-lg">
                            <form id="editform">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title">Cập nhật user</h3>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body">
                                        {{csrf_field()}}
                                        {{method_field('PUT')}}
                                        <input type="hidden" name="id" id="id">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Họ</label>
                                                    <input name="lastname" id="lastname" type="text" placeholder="Họ" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Tên</label>
                                                    <input name="name" id="name" type="text" placeholder="Tên" class="form-control">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input name="password" type="password" placeholder="Mật khẩu" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Re-Password</label>
                                                    <input name="password_confirmation" type="password" placeholder="Xác nhận mật khẩu" class="form-control">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input name="email" id="email" type="email" placeholder="Email" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Số điên thoại</label>
                                                    <input name="phone_number" id="phone_number" type="number" placeholder="Số điên thoại" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Vai trò</label>
                                                    <div class="form-group">
                                                        <select class="form-control" name="role_id" id="role_id">
                                                            @foreach ($Roles as $roles)
                                                                <option value="{{$roles->id}}">{{$roles->display_name}}</option>
                                                            @endforeach

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-bold btn-pure btn-secondary" data-dismiss="modal">Đóng</button>
                                        <button type="submit" class="btn btn-bold btn-pure btn-success float-right">Cập nhật</button>
                                    </div>
                                </div>
                        </div>
                        </form>
                        <!-- /.modal-content -->
                    </div>
                </div>

                <div id="example_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="example"></label></div>
                <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100 dataTable" role="grid" aria-describedby="example_info">
                    <thead>
                    <tr role="row">
                        <th tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 20%;">Tên người dùng</th>
                        <th tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 15%">Email</th>
                        <th tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 10%;">Password</th>
                        <th tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 10%">Số điện thoại</th>
                        <th tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 15%">Vai trò</th>
                        <th tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 15%">Tương tác</th>

                    </tr>
                    </thead>


                    <tbody>
                    @foreach ($Users as $users)
                        <tr>
                            <td class="" style="display:none;">{{$users->id}}</td>
                            <td class="">{{$users->lastname}}</td>
                            <td class="">{{$users->name}}</td>
                            <td class="">{{$users->email}}</td>
                            <td class="">{{$users->phone_number}}</td>
                            <td class="">{{$users->role_id}}</td>
                            <td>
                                <a href="{{ route('delete', $users->id )}}">  <span class="badge badge-danger" style="padding: 1% 5%;"><i class="fa fa-trash"></i></span></a>
                                <a href="#" class="editbtn"> <span  class="badge badge-success  " style="padding: 1% 5%;"><i class="fa fa-edit "></i></span></a>
                            </td>


                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr role="row">
                        <th tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 20%;">Tên người dùng</th>
                        <th tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 15%">Email</th>
                        <th tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 10%;">Password</th>
                        <th tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 10%">Số điện thoại</th>
                        <th tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 15%">Vai trò</th>
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
$('#lastname').val(data[1]);
$('#name').val(data[2]);
$('#email').val(data[3]);
$('#phone_number').val(data[4]);
});
$(editform).on('submit',function (e) {
e.preventDefault();
var id = $('#id').val();
$.ajax({
type:"PUT",
url:"users/edit/"+ id,
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
url:"users/useradd",
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
