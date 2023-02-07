@extends('layout.main')


@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ asset('template/nabil/xhtml/javascript:void(0)') }}">Profil</a>
                    </li>
                    <li class="breadcrumb-item active"><a href="/proker">Program Kerja</a></li>
                    <li class="breadcrumb-item active"><a href="">Edit data </a></li>
                </ol>
            </div>
            <!-- row -->

            <script src="https://cdn.tiny.cloud/1/z3vshivvjuw47heg0vg12ouq5rr8i7ckkxmmjadvrhgsynq8/tinymce/6/tinymce.min.js"
                referrerpolicy="origin"></script>

            <script>
                tinymce.init({
                    selector: '#mytextarea'
                });
            </script>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Data</h4>
                </div>
                <div class="card-body">
                    <form action="/updateproker/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{-- <div class="mb-3">
                            <label for="formFile" class="form-label">Masukkan Foto</label>
                            <input class="form-control" type="file" name="foto" id="foto"
                                value="{{ $data->foto }}">
                            <img class="img mb-3" src="{{ asset('fotosekolah/' . $data->foto) }}" alt=""
                                style="width: 300px;">
                        </div> --}}
                        <div class="mb-3">
                            <label for="nama" class="form-label">Tujuan</label>
                            <input type="text" class="form-control" name="tujuan" id="tujuan"
                                aria-describedby="emailHelp" value="{{ $data->tujuan }}">
                        </div>
                        {{-- @error('visi')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror --}}
                        <section style="padding-top:10px;">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header">
                                                Kegiatan
                                            </div>
                                            <div class="card-body">
                                                {{--  <form method="POST" enctype="multipart/form-data">  --}}
                                                <textarea name="misi" id="mytextarea">{!! $data->kegiatan !!}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section style="padding-top:10px;">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header">
                                                Indikator
                                            </div>
                                            <div class="card-body">
                                                {{--  <form method="POST" enctype="multipart/form-data">  --}}
                                                <textarea name="tujuan" id="mytextarea">{!! $data->indikator !!}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section style="padding-top:10px;">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header">
                                                Penanggung Jawab Kegiatan
                                            </div>
                                            <div class="card-body">
                                                {{--  <form method="POST" enctype="multipart/form-data">  --}}
                                                <textarea name="komitmen" id="mytextarea">{!! $data->penanggungjk !!}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Batas Waktu</label>
                            <input class="form-control" value="{{ $data->batas_waktu }}" type="date" name="batas_waktu"
                                id="batas_waktu">
                        </div>
                        <button type="submit" class="btn btn-primary mb-3">Simpan
                        </button>
                    </form>
                    <button class="btn btn-warning"><a href="/proker">kembali</a></button>
                </div>
            </div>
        </div>
    </div>
@endsection
