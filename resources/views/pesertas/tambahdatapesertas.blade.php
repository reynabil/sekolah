@extends('layout.main')


@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ asset('template/nabil/xhtml/javascript:void(0)') }}">Data Info PTK & PD</a>
                </li>
                <li class="breadcrumb-item active"><a href="/peserta">Data Peserta Didik</a></li>
                <li class="breadcrumb-item active"><a href="">Tambah data </a></li>
            </ol>
        </div>
        <!-- row -->


        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Tambah Data</h4>
            </div>
            <div class="card-body">
                <form action="/insertdatapesertas" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Masukkan Foto</label>
                        <input class="form-control" type="file" name="foto" id="foto">
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
