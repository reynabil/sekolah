@extends('layout.main')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ asset('template/nabil/xhtml/javascript:void(0)') }}">Beranda</a>
                    </li>
                    <li class="breadcrumb-item active"><a href="/fotohome">Foto Kegiatan</a></li>
                    <li class="breadcrumb-item active"><a href="">Edit data </a></li>
                </ol>
            </div>
            <!-- row -->


            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Data</h4>
                </div>
                <div class="card-body">
                    <form action="/updatefotohome/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Judul </label>
                            <input class="form-control" type="text" name="judul" id="judul"
                                value="{{ $data->judul }}">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Masukkan Foto</label>
                            <input class="form-control" type="file" name="foto" id="foto"
                                value="{{ $data->foto }}">
                            <img class="img mb-3" src="{{ asset('foto_home/' . $data->foto) }}" alt=""
                                style="width: 500px;
                            height: 200px;
                            margin-top:20px;">
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="/slider"><button class="btn btn-warning">Kembali</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
