@extends('layout.main')


@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ asset('template/nabil/xhtml/javascript:void(0)') }}">Bahan
                            Ajar</a>
                    </li>
                    <li class="breadcrumb-item active"><a href="/empats">Bahan Ajar Kelas XIII KA</a></li>
                    <li class="breadcrumb-item active"><a href="">Edit  Data </a></li>
                </ol>
            </div>
            <!-- row -->


            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Data</h4>
                </div>
                <div class="card-body">
                    <form action="/updatedataempats/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                       
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input name="foto" type="file" class="custom-file-input">
                                <label class="custom-file-label">Pilih file</label>
                            </div>
                        </div>
                        <img class="img mb-3" src="{{ asset('fotosekolah/' . $data->foto) }}" alt=""
                                style="width: 100px;">
                        @error('foto')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">
                                <h5>Bahan Ajar</h5>
                            </label>
                            <input type="text" name="bahanajar" class="form-control" id="exampleInputEmail1"
                                value="{{ $data->bahanajar }}" aria-describedby="emailHelp">
                        </div>
                        @error('bahanajar')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror


                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">
                                <h5>Kelas</h5>
                            </label>
                            <input type="text" name="kelas" class="form-control" id="exampleInputEmail1"
                                value="{{ $data->kelas }}" aria-describedby="emailHelp">
                        </div>
                        @error('kelas')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="row">
                            <div class="col-xl-12 col-xxl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Deskripsi</h4>
                                    </div>
                                    <div class="card-body">
                                        <textarea name="deskripsi" class="summernote">{!! $data->deskripsi !!}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">
                                <h5>Link</h5>
                            </label>
                            <input type="text" name="link" class="form-control" id="exampleInputEmail1"
                                value="{{ $data->link }}" aria-describedby="emailHelp">
                        </div>
                        @error('link')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror


                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="/empats"><button class="btn btn-warning">Kembali</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
