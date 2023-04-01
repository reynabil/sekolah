@extends('layout.main')


@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ asset('template/nabil/xhtml/javascript:void(0)') }}">Agenda
                            Kegiatan</a>
                    </li>
                    <li class="breadcrumb-item active"><a href="/sekolahs">Sekolah dan PHBN</a></li>
                    <li class="breadcrumb-item active"><a href="">Tambah data </a></li>
                </ol>
            </div>
            <!-- row -->


            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tambah Data</h4>
                </div>
                <div class="card-body">
                    <form action="/insertdatasekolahs" method="POST" enctype="multipart/form-data">
                        @csrf


                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">
                                <h5>Tanggal</h5>
                            </label>
                            <input type="date" name="tanggal" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        @error('tanggal')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">
                                <h5>Kegiatan</h5>
                            </label>
                            <input type="text" name="kegiatan" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        @error('kegiatan')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="row">
                            <div class="col-xl-12 col-xxl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Deskripsi</h4>
                                    </div>
                                    <div class="card-body">
                                        <textarea name="keterangan" class="summernote"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @error('keterangan')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
