@extends('layout.main')


@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ asset('template/nabil/xhtml/javascript:void(0)') }}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active"><a href="/sosmed">Sosmed</a></li>
                    <li class="breadcrumb-item active"><a href="">Tambah data </a></li>
                </ol>
            </div>
            <!-- row -->


            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tambah Data</h4>
                </div>
                <div class="card-body">
                    <form action="/insertsosmed" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">
                                <h5>Nama</h5>
                            </label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">
                                <h5>Link</h5>
                            </label>
                            <input type="text" name="link" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        @error('link')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
