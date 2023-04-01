@extends('layout.main')


@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ asset('template/nabil/xhtml/javascript:void(0)') }}">Data Info PTK
                            & PD</a>
                    </li>
                    <li class="breadcrumb-item active"><a href="/tenagas">Data Tenaga Non Pendidik</a></li>
                    <li class="breadcrumb-item active"><a href="">Edit data </a></li>
                </ol>
            </div>
            <!-- row -->


            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Data</h4>
                </div>
                <div class="card-body">
                    <form action="/updatedatatenaga/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Masukkan Foto</label>
                            <input class="form-control" type="file" name="foto" id="foto"
                                value="{{ $data->foto }}">
                            <img class="img mb-3" src="{{ asset('fotosekolah/' . $data->foto) }}" alt=""
                                style="width: 100px;">
                        </div>
                        @error('foto')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">
                                <h5>NAMA</h5>
                            </label>
                            <input type="text" name="nama" class="form-control" id="exampleInputEmail1"
                                value="{{ $data->nama }}" aria-describedby="emailHelp">
                        </div>
                        @error('nama')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Status Kepegawaian</label>
                            <input type="text" name="status_kepegawaian" value="{{ $data->status_kepegawaian }}" class="form-control" id="status_kepegawaian"
                                aria-describedby="emailHelp">
                        </div>
                        @error('status')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="/tenaga"><button class="btn btn-warning">Kembali</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
