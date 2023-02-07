@extends('layout.main')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ asset('template/nabil/xhtml/javascript:void(0)') }}">Profil</a>
                    </li>
                    <li class="breadcrumb-item active"><a href="/news">Berita</a></li>
                    <li class="breadcrumb-item active"><a href="">Edit Data </a></li>
                </ol>
            </div>
            <script src="https://cdn.tiny.cloud/1/z3vshivvjuw47heg0vg12ouq5rr8i7ckkxmmjadvrhgsynq8/tinymce/6/tinymce.min.js"
                referrerpolicy="origin"></script>

            <script>
                tinymce.init({
                    selector: '#mytextarea'
                });
            </script>
            <!-- row -->
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tambah Data</h4>
                </div>
                <div class="card-body">
                    <form action="/updateborder/ {{ $data->id }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="formFile" class="form-label"></label>
                            <input class="form-control" type="text" value="{{ $data->judul1 }}" name="judul1"
                                id="judul1">
                        </div>
                        @error('judul1')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <section style="padding-top:10px;">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header">
                                                Deskripsi
                                            </div>
                                            <div class="card-body">
                                                {{--  <form method="POST" enctype="multipart/form-data">  --}}
                                                <textarea name="deskripsi1" id="mytextarea">{!! $data->deskripsi1 !!}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        @error('deskripsi')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror


                        <div class="mb-3">
                            <label for="formFile" class="form-label">Judul Border 2</label>
                            <input class="form-control" type="text" value="{{ $data->judul2 }}" name="judul2"
                                id="judul2">
                        </div>
                        @error('judul2')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <section style="padding-top:10px;">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header">
                                                Deskripsi
                                            </div>
                                            <div class="card-body">
                                                {{--  <form method="POST" enctype="multipart/form-data">  --}}
                                                <textarea name="deskripsi2" id="mytextarea">{!! $data->deskripsi2 !!}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        @error('deskripsi')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Judul Border 3</label>
                            <input class="form-control" type="text" value="{{ $data->judul3 }}" name="judul3"
                                id="judul3">
                        </div>
                        @error('judul3')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <section style="padding-top:10px;">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header">
                                                Deskripsi
                                            </div>
                                            <div class="card-body">
                                                {{--  <form method="POST" enctype="multipart/form-data">  --}}
                                                <textarea name="deskripsi3" id="mytextarea">{!! $data->deskripsi3 !!}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        @error('deskripsi')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror


                        <button type="submit" class="btn btn-primary mb-3">Simpan</button>
                    </form>
                    <button class="btn btn-warning"><a href="/border">kembali</a></button>
                </div>
            </div>
        </div>
    </div>
@endsection
