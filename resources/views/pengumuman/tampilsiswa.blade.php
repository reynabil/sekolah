@extends('layout.main')


@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ asset('template/nabil/xhtml/javascript:void(0)') }}">BKK</a>
                    </li>
                    <li class="breadcrumb-item active"><a href="/pengumuman">Pengumuman Penerimaan Kerja</a></li>
                    <li class="breadcrumb-item active"><a href="">Edit data Siswa</a></li>
                </ol>
            </div>
            <!-- row -->


            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Data</h4>
                </div>
                <div class="card-body">
                    <form action="/updatesiswa/{{ $data->id }}" method="POST" enctype="multipart/form-data">
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
                        <img style="width: 300px;" src="{{ asset('fotosiswa/' . $data->foto_siswa) }}" alt="">
                        <div class="form-group">
                            <label>Judul</label>
                            <select class="form-control default-select" name="id_judul" id="id_judul">
                                <option value="{{ $data->id_judul }}"></option>
                                @foreach ($pengumuman as $p)
                                    <option value="{{ $p->id }}"<?php if ($data->id_judul == $p->id) {
                                        echo 'selected';
                                    } ?>>
                                        {{ $p->judul }} </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="formFile" class="form-label">NISN</label>
                            <input value="{{ $data->nisn }}" class="form-control" type="number" name="nisn"
                                id="foto">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Nama Siswa</label>
                            <input value="{{ $data->nama_siswa }}" class="form-control" type="text" name="nama_siswa"
                                id="foto">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Email</label>
                            <input value="{{ $data->email }}" class="form-control" type="email" name="email"
                                id="foto">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">No Telp</label>
                            <input value="{{ $data->no_telp }}" class="form-control" type="number" name="no_telp"
                                id="foto">
                        </div>
                        <div class="basic-form mb-5">
                            <label for="">Jenis Kelamin</label>
                            <div class="form-group mb-0">
                                <label class="radio-inline mr-3"><input type="radio" value="laki-laki"
                                        name="jeniskelamin"<?php if ($data['jeniskelamin'] == 'laki-laki') {
                                            echo 'checked';
                                        } ?>> Laki-Laki</label>
                                <label class="radio-inline mr-3"><input type="radio" value="perempuan"
                                        name="jeniskelamin"<?php if ($data['jeniskelamin'] == 'perempuan') {
                                            echo 'checked';
                                        } ?>> Perempuan</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
