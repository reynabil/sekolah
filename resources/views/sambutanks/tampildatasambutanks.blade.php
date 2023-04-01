@extends('layout.main')


@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ asset('template/nabil/xhtml/javascript:void(0)') }}">Profil</a>
                    </li>
                    <li class="breadcrumb-item active"><a href="/sambutanks">Sambutan Kepala sekolah</a></li>
                    <li class="breadcrumb-item active"><a href="">Edit data </a></li>
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

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input value="{{ $data->foto }}" name="foto" type="file" class="custom-file-input">
                                <label class="custom-file-label">Pilih file</label>
                            </div>
                        </div>
                        <img class="img mb-3" src="{{ asset('fotosekolah/' . $data->foto) }}" alt=""
                            style="width: 100px;">
                        @error('foto')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                        <div class="mb-3">
                            <label for="formFile" class="form-label">Nama</label>
                            <input class="form-control" type="text" value="{{ $data->nama }}" name="nama"
                                id="nama">
                        </div>

                        <div class="row">
                            <div class="col-xl-12 col-xxl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Summernote Editor</h4>
                                    </div>
                                    <div class="card-body">
                                        <textarea name="deskripsi" class="summernote">{!! $data->deskripsi !!}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- <div>
                            <section style="padding-top:10px;">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    Deskripsi
                                                </div>
                                                <div class="card-body">
                                                    <textarea name="deskripsi" id="mytextarea">{!! $data->deskripsi !!}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div> --}}

                        @error('deskripsi')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                        <button type="submit" class="btn btn-primary ">Simpan</button>
                        <a href="/sambutanks"><button class="btn btn-warning">Kembali</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
