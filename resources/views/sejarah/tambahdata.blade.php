@extends('layout.main')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ asset('template/nabil/xhtml/javascript:void(0)') }}">Profil</a>
                    </li>
                    <li class="breadcrumb-item active"><a href="/history">Perkembangan Kompetensi Keahlian</a></li>
                    <li class="breadcrumb-item active"><a href="">Tambah data </a></li>
                </ol>
            </div>

            <!-- row -->

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tambah Data</h4>
                </div>
                <div class="card-body">
                    <form action="/insertdataperkembangan" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tahun</label>
                            <input type="number" name="tahun" class="form-control" id="tahun">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Judul</label>
                            <input type="text" name="judul" class="form-control" id="judul">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input name="foto" type="file" class="custom-file-input">
                                <label class="custom-file-label">Pilih file</label>
                            </div>
                        </div>
                        @error('foto')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="row">
                            <div class="col-xl-12 col-xxl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Deskripsi</h4>
                                    </div>
                                    <div class="card-body">
                                        <textarea name="deskripsi" class="summernote"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @error('deskripsi')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                        <button type="submit" class="btn btn-primary mb-3">Simpan</button>
                    </form>
                    <button class="btn btn-warning"><a href="/history">Kembali</a></button>
                </div>
            </div>
        </div>
    </div>
@endsection
