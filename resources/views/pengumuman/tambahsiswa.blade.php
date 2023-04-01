@extends('layout.main')


@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ asset('template/nabil/xhtml/javascript:void(0)') }}">BKK</a>
                    </li>
                    <li class="breadcrumb-item active"><a href="/pengumuman">Pengumuman Penerimaan Kerja</a></li>
                    <li class="breadcrumb-item active"><a href="">Tambah data Siswa</a></li>
                </ol>
            </div>
            <!-- row -->


            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tambah Data</h4>
                </div>
                <div class="card-body">
                    <form action="/insertsiswa" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input name="foto_siswa" type="file" class="custom-file-input">
                                <label class="custom-file-label">Pilih file</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Judul</label>
                            <select class="form-control default-select" name="id_judul" id="id_judul">
                                <option value=""></option>
                                @foreach ($data as $d)
                                    <option value="{{ $d->id }}">
                                        {{ $d->judul }} </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="formFile" class="form-label">NISN</label>
                            <input class="form-control" type="number" name="nisn" id="foto">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Nama Siswa</label>
                            <input class="form-control" type="text" name="nama_siswa" id="foto">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Email</label>
                            <input class="form-control" type="email" name="email" id="foto">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">No Telp</label>
                            <input class="form-control" type="number" name="no_telp" id="foto">
                        </div>
                        <div class="basic-form mb-5">
                            <label for="">Jenis Kelamin</label>
                            <div class="form-group mb-0">
                                <label class="radio-inline mr-3"><input type="radio" value="laki-laki"
                                        name="jeniskelamin"> Laki-Laki</label>
                                <label class="radio-inline mr-3"><input type="radio" value="perempuan"
                                        name="jeniskelamin"> Perempuan</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Siimpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
