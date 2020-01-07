@extends('layout.page')
@section('content_products_type')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Biểu đồ thống kê
            </h1>

            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="fa fa-folder"></i>Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="#">Biểu đồ thống kê</a></li>
            </ol>
        </section>
        <section class="content" id="app">
            <div class="box  p-5" >
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
                <a href="{{asset('')}}" id="cc1">
                    <button type="button" class="btn btn-app btn-success"
                            style="height: 30px;padding: 0;border-radius: 6px;">
                <span style="font-size: 20px;">
                    <i class='fa fa-sign-in'></i>
                </span>
                    </button>
                </a>
                <a href="{{asset('')}}" id="cc2">
                    <button type="button" class="btn btn-app btn-success"
                            style="height: 30px;padding: 0;border-radius: 6px;">
                <span style="font-size: 20px;">
              <i class='fa fa-sign-out'></i>
                </span>
                    </button>
                </a>
            </div>
        </section>

        <section class="content" id="app">
            {!! $chart->container() !!}
        </section>


        <script>
            $(document).ready(function () {
                $('#choncc').on('change',function(){
                    let id = $(this).val();
                    $('#cc1').attr('href','imvoicebillimport/'+id)
                    $('#cc2').attr('href','imvoiceexport/'+id)
                })
            });
        </script>
    </div>
@endsection




