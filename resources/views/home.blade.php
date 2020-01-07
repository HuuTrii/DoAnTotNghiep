@extends('layout.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">BẠN ĐÃ ĐĂNG NHẬP TRƯỚC ĐÓ</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <a href="tongquan"><button class="btn btn-primary">click me</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
