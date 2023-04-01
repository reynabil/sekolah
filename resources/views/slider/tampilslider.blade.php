@extends('layout.main')


@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ asset('template/nabil/xhtml/javascript:void(0)') }}">Beranda</a>
                    </li>
                    <li class="breadcrumb-item active"><a href="/slider">Slider</a></li>
                    <li class="breadcrumb-item active"><a href="">Edit data </a></li>
                </ol>
            </div>
            <!-- row -->


            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Data</h4>
                </div>
                <div class="card-body">
                    <form action="/updateslider/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Masukkan Foto</label>
                            <input class="form-control" type="file" name="slider1" id="slider1"
                                value="{{ $data->slider1 }}">
                            <img class="img mb-3" src="{{ asset('banner/' . $data->slider1) }}" alt=""
                                style="width: 500px;
                                height: 200px;">
                        </div>
                        @error('slider1')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Masukkan Foto</label>
                            <input class="form-control" type="file" name="slider2" id="slider2"
                                value="{{ $data->slider2 }}">
                            <img class="img mb-3" src="{{ asset('banner/' . $data->slider2) }}" alt=""
                                style="width: 500px;
                                height: 200px;">
                        </div>
                        @error('slider2')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Masukkan Foto</label>
                            <input class="form-control" type="file" name="slider3" id="slider3"
                                value="{{ $data->slider3 }}">
                            <img class="img mb-3" src="{{ asset('banner/' . $data->slider3) }}" alt=""
                                style="width: 500px;
                                height: 200px;">
                        </div>
                        @error('slider3')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="/slider"><button class="btn btn-warning">Kembali</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
