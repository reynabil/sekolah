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
                    <form action="/updateberita/ {{ $data->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Masukkan Foto</label>
                            <input class="form-control" type="file" name="foto" id="foto"
                                value="{{ $data->foto }}">
                            <img class="img mb-3" src="{{ asset('fotosekolah/' . $data->foto) }}" alt=""
                                style="width: 100px;">
                        </div>
                        @error('foto')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Nama Ruang</label>
                            <input class="form-control" type="text" value="{{ $data->judul }}" name="judul"
                                id="judul">
                        </div>
                        @error('foto')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <label for="formFile" class="form-label">Deskripsi</label>
                        <div class="mb-3">
                            <textarea value="" name="deskripsi" id="masyaallah" cols="80" rows="10">{{  $data->deskripsi  }}</textarea>
                        </div>
                        @error('deskripsi')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror


                        <button type="submit" class="btn btn-primary mb-3">Simpan</button>
                    </form>
                    <button class="btn btn-warning"><a href="/news">kembali</a></button>
                </div>
            </div>
        </div>
    </div>
@endsection
{{-- @push('styles')
    <link href="{{ asset('template/nabil/xhtml/vendor/summernote/summernote.min.css') }}" rel="stylesheet">
@endpush
@push('scripts')
    <script src="{{ asset('template/nabil/xhtml/vendor/summernote/summernote.min.js') }}">
    </script>
    <script src="{{ asset('template/nabil/xhtml/js/plugins-init/summernote-init.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        })
    </script>
@endpush --}}
