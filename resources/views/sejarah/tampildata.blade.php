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
                    <form action="/updatedatasejarah/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Masukkan Foto</label>
                            <input class="form-control" type="file" name="fotos" id="fotos"
                                value="{{ $data->fotos }}">
                            <img class="img mb-3" src="{{ asset('fotosekolah/' . $data->fotos) }}" alt=""
                                style="width: 100px;">
                        </div>
                        @error('fotos')

                            <div class="text-danger">{{ $message }}</div>
                        @enderror

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
                                                    <textarea name="sejarah" id="mytextarea">{!! $data->sejarah !!}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>

                        <button type="submit" class="btn btn-primary mb-3">Simpan</button>
                    </form>
                    <button class="btn btn-warning"><a href="/history">kembali</a></button>
                </div>
            </div>
        </div>
    </div>
@endsection
