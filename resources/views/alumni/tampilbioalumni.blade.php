@extends('layout.main')


@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ asset('template/nabil/xhtml/javascript:void(0)') }}">Alumni</a>
                    </li>
                    <li class="breadcrumb-item active"><a href="/alumniindex">Bidodata Alumni</a></li>
                    <li class="breadcrumb-item active"><a href="">Tambah data </a></li>
                </ol>
            </div>
            <!-- row -->
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tambah Detail Alumni</h4>
                </div>
                <div class="card-body">
                    <form action="/insertbiodataalumni" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Judul</label>
                            <select class="form-control default-select" name="id_judul" id="id_judul">
                                <option value="{{ $data->id_judul }}"></option>
                                @foreach ($alumni as $a)
                                    <option value="{{ $a->id }}"<?php if ($data->alumni == $a->id) {
                                        echo 'selected';
                                    } ?>>
                                        {{ $a->nama_alumni }} </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="formFile" class="form-label">Alamat</label>
                            <input value="{{ $data->alamat }}" class="form-control" type="text" name="alamat" id="alamat">
                        </div>

                        <div class="mb-3">
                            <label for="formFile" class="form-label">Email</label>
                            <input value="{{ $data->email }}" class="form-control" type="text" name="email" id="email">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">No Telepon</label>
                            <input value="{{ $data->no_telp }}" class="form-control" type="text" name="no_telp" id="no_telp">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Tahun Lulus</label>
                            <input value="{{ $data->tahun_lulus }}" class="form-control" type="number" name="tahun_lulus" id="tahun_lulus">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Jurusan</label>
                            <input value="{{ $data->jurusan }}" class="form-control" type="text" name="jurusan" id="jurusan">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Pekerjaan</label>
                            <input value="{{ $data->pekerjaan }}" class="form-control" type="text" name="pekerjaan" id="pekerjaan">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Pendidikan</label>
                            <input value="{{ $data->pendidikan }}" class="form-control" type="text" name="pendidikan" id="pendidikan">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Pengalaman</label>
                            <input value="{{ $data->pengalaman }}" class="form-control" type="text" name="pengalaman" id="pengalaman">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Penghargaan</label>
                            <input value="{{ $data->penghargaan }}" class="form-control" type="text" name="penghargaan" id="penghargaan">
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
