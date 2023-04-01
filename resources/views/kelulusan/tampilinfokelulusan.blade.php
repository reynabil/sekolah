@extends('layout.main')


@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ asset('template/nabil/xhtml/javascript:void(0)') }}">Agenda
                            Kegiatan</a>
                    </li>
                    <li class="breadcrumb-item active"><a href="/lulusan">Info Kelulusan</a></li>
                    <li class="breadcrumb-item active"><a href="">Edit data </a></li>
                </ol>
            </div>
            <!-- row -->


            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Data</h4>
                </div>
                <div class="card-body">
                    <form action="/updatekelulusan/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Kelas</label>
                            <input value="{{ $data->kelas }}" class="form-control" type="text" name="kelas"
                                id="kelas">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Masukkan Foto</label>
                            <input class="form-control" type="file" name="foto" id="foto">
                            <img style="width: 500px;
                            margin-top: 20px;" src="{{ asset('fotokelulusan/' . $data->foto) }}" alt="">
                        </div>
                        @error('foto')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">
                                <h5>Tanggal</h5>
                            </label>
                            <input value="{{ \Carbon\Carbon::parse($data->tanggal)->format('Y-m-d') }}" type="date"
                                name="tanggal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        @error('bahanajar')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror


                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">
                                <h5>Waktu</h5>
                            </label>
                            <input value="{{ $data->waktu }}" type="time" name="waktu" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        @error('kelas')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="/kelulusan"> <button class="btn btn-warning">Kembali</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
