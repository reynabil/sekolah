@extends('layout.main')


@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ asset('template/nabil/xhtml/javascript:void(0)') }}">Profil</a>
                    </li>
                    <li class="breadcrumb-item active"><a href="/ekskul">Denah</a></li>
                    <li class="breadcrumb-item active"><a href="">Tambah data </a></li>
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
                    <form action="/insertdatadenah" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Masukkan Foto</label>
                            <input class="form-control" type="file" name="foto_denah" id="foto_denah">
                        </div>
                        @error('foto')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <button type="submit" class="btn btn-primary mb-3">Simpan</button>
                    </form>
                    <a href="/fasilitas"><button class="btn btn-warning">kembali</button></a>
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
