@extends('layout.main')


@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ asset('template/nabil/xhtml/javascript:void(0)') }}">BKK</a>
                    </li>
                    <li class="breadcrumb-item active"><a href="/pengumuman">Pengumuman Penerimaan Kerja</a></li>
                    <li class="breadcrumb-item active"><a href="">Edit data </a></li>
                </ol>
            </div>
            <!-- row -->


            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Data</h4>
                </div>
                <div class="card-body">
                    <form action="/updatepengumuman/{{ $data->id }}" method="POST" enctype="multipart/form-data">
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
                        <img style="width: 300px;" src="{{ asset('fotopengumuman/' .$data->foto) }}" alt="">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">
                                <h5 style="margin-top: 10px">Judul</h5>
                            </label>
                            <input value="{{ $data->judul }}" type="text" name="judul" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="/pengumuman"><button class="btn btn-warning">Kembali</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
