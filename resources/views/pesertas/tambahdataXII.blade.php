@extends('layout.main')


@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ asset('template/nabil/xhtml/javascript:void(0)') }}">Data Info PTK & PD</a>
                </li>
                <li class="breadcrumb-item active"><a href="/peserta">Data Peserta Didik</a></li>
                <li class="breadcrumb-item active"><a href="">Tambah data XII </a></li>
            </ol>
        </div>
        <!-- row -->


        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Tambah Data XII</h4>
            </div>
            <div class="card-body">
                <form action="/insertdataXII" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Nama Kelas</label>
                        <input class="form-control" type="text" name="nama_kelas" id="nama_kelas">
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Masukkan Foto</label>
                        <input class="form-control" type="file" name="foto" id="foto">
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Jumlah Laki</label>
                        <input class="form-control" type="number" name="jl" id="jl">
                    </div>
                    <div class="mb-3">
                    <label for="formFile" class="form-label">Jumlah Perempuan</label>
                        <input class="form-control" type="number" name="jp" id="jp">
                    </div>
                    <div class="mb-3">
                    <label for="formFile" class="form-label">Jumlah Siswa</label>
                        <input class="form-control" type="number" name="jml" id="jml">
                    </div>
                    @error('foto')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
