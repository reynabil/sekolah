@extends('layout.main')


@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ asset('template/nabil/xhtml/javascript:void(0)') }}">Profil</a>
                    </li>
                    <li class="breadcrumb-item active"><a href="/sambutanks">Sambutan Kepala sekolah</a></li>
                    <li class="breadcrumb-item active"><a href="">Tambah data </a></li>
                </ol>
            </div>
            <!-- row -->

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Data</h4>
                </div>
                <div class="card-body">
                    <form action="/updatedatasambutanks/{{ $data->id }}" method="POST" enctype="multipart/form-data">
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
                            <label for="formFile" class="form-label">judul</label>
                            <input class="form-control" type="text" value="{{ $data->judul }}" name="judul"
                                id="judul">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">nama</label>
                            <input class="form-control" type="text" value="{{ $data->nama }}" name="nama"
                                id="nama">
                        </div>
                        <div>
                            <section style="padding-top:10px;">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    Deskripsi
                                                </div>
                                                <div class="card-body">
                                                    {{--  <form method="POST" enctype="multipart/form-data">  --}}
                                                    <textarea name="deskripsi" id="mytextarea">{!! $data->deskripsi !!}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        @error('deskripsi')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                        <button type="submit" class="btn btn-primary mb-3">Simpan</button>
                    </form>
                    <button class="btn btn-warning"><a href="/sambutanks">kembali</a></button>
                </div>
            </div>
        </div>
    </div>

@endsection
