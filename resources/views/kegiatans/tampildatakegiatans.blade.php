@extends('layout.main')


@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ asset('template/nabil/xhtml/javascript:void(0)') }}">Agenda
                            Kegiatan</a>
                    </li>
                    <li class="breadcrumb-item active"><a href="/kegiatans">Kegiatan Keagamaan</a></li>
                    <li class="breadcrumb-item active"><a href="">Edit data </a></li>
                </ol>
            </div>
            <!-- row -->


            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Data</h4>
                </div>
                <div class="card-body">
                    <form action="/updatedatakegiatans/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">
                                <h5>Tanggal</h5>
                            </label>
                            <input type="date" name="tanggal" class="form-control" id="exampleInputEmail1"
                                value="{{ \Carbon\Carbon::parse($data->tanggal)->format('Y-m-d') }}" aria-describedby="emailHelp">
                        </div>
                        @error('tanggal')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">
                                <h5>Kegiatan</h5>
                            </label>
                            <input type="text" name="kegiatan" class="form-control" id="exampleInputEmail1"
                                value="{{ $data->kegiatan }}" aria-describedby="emailHelp">
                        </div>
                        @error('kegiatan')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">
                                <h5>Keterangan</h5>
                            </label>
                            <input type="text" name="keterangan" class="form-control" id="exampleInputEmail1"
                                value="{{ $data->keterangan }}" aria-describedby="emailHelp">
                        </div>
                        @error('keterangan')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="/keagamaan"><button class="btn btn-warning">kembali</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
