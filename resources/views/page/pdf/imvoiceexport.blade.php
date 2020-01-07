@extends('layout.imvoice')
@section('content')
    <!doctype html>
<html lang="vi">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
<style>
    body { font-family: DejaVu Sans, sans-serif; }
</style>
<div class="content-wrapper">
    <h5 style="text-align:center;">Cộng hòa xã hội chủ nghĩa Việt Nam</h5>
    <h6 style="text-align:center;"><i>độc lập - tự do - hạnh phúc</i></h6><br>
    <h1 style="text-align:center;font-size: 18px"><b>THÔNG TIN PHIẾU XUẤT</b></h1>
    <hr>
    <table class="table table-bordered">
    <tr class="text-center">
    <th >Nha cung cap</th>
    <th>Loai san pham</th>
    <th>Ma san pham</th>
    <th>Ten san pham</th>
    <th>Khuyen mai</th>
    <th>So luong xuat</th>
    <th>Don gia</th>
    <th>Ngay nhap</th>
    <th>Nguoi  xuat kho</th>
</tr>
        @foreach($products1 as $products2)
        <tr>
                            <td>
                                {{$products2->name_vendor}}
                            </td>
                            <td>
                                {{$products2->name_cata}}
                            </td>
                            <td>
                                {{$products2->code_pro}}
                            </td>
                            <td>
                                {{$products2->name_pro}}
                            </td>
                            <td>
                                {{$products2->code_promotion}}
                            </td>

                            <td>
                                {{$products2->quantity}}
                            </td>
                            <td>
                                {{$products2->price}}
                            </td>
                            <td>
                                {{$products2->created_at}}
                            </td>
                            <td>
                                {{$products2->name}}
                            </td>
                </tr>
        @endforeach
    </table>
    <div class="container">
        <div class="row" >
            <div  style="width: 300px;float: left;text-align: center">
                Người xuất báo cáo<br><i>(Ký và ghi rõ họ tên)</i><br>Ngày ... Tháng ... Năm ... <br>Ký tên
            </div>


            <div style="width: 300px; float: right;text-align: center">
                Quản lý<br><i>(Ký và ghi rõ họ tên)</i><br>Ngày ... Tháng ... Năm ... <br>Ký tên
            </div>
        </div>
    </div>
</body>
</html>
@endsection




