@extends('layout.main')


@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ asset('template/nabil/xhtml/javascript:void(0)') }}">Agenda Kegiatan</a>
                    </li>
                    <li class="breadcrumb-item active"><a href="/lulusan">Info Kelulusan</a></li>
                    <li class="breadcrumb-item active"><a href="">Tambah data </a></li>
                </ol>
            </div>
            <!-- row -->


            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tambah Data</h4>
                </div>
                <div class="card-body">
                    <form action="/insertdatakelulusan" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Kelas</label>
                            <input class="form-control" type="text" name="kelas" id="kelas">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Masukkan Foto</label>
                            <input class="form-control" type="file" name="foto" id="foto">
                        </div>
                        @error('foto')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">
                                <h5>Tanggal</h5>
                            </label>
                            <input type="date" name="tanggal" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        @error('bahanajar')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror


                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">
                                <h5>Waktu</h5>
                            </label>
                            <input type="time" name="waktu" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        @error('kelas')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
