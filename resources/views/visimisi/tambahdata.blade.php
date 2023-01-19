@extends('layout.main')


@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ asset('template/nabil/xhtml/javascript:void(0)') }}">Profil</a>
                    </li>
                    <li class="breadcrumb-item active"><a href="/visi">Visi Misi</a></li>
                    <li class="breadcrumb-item active"><a href="">Tambah data </a></li>
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
                    <h4 class="card-title">Tambah Data</h4>
                </div>
                <div class="card-body">
                    <form action="/insertdatavisi" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="floatingTextarea2">Visi</label>
                            <textarea class="form-control" id="visi" name="visi" style="height: 100px"></textarea>
                        </div>
                        @error('visi')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                        <section style="padding-top:60px;">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header">
                                                Deskripsi
                                            </div>
                                            <div class="card-body">
                                                {{--  <form method="POST" enctype="multipart/form-data">  --}}
                                                <textarea name="misi" id="mytextarea"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        @error('misi')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                        <section style="padding-top:60px;">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header">
                                                Tujuan
                                            </div>
                                            <div class="card-body">
                                                {{--  <form method="POST" enctype="multipart/form-data">  --}}
                                                <textarea name="tujuan" id="mytextarea"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        @error('tujuan')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror



                        <section style="padding-top:60px;">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header">
                                                Komitmen
                                            </div>
                                            <div class="card-body">
                                                {{--  <form method="POST" enctype="multipart/form-data">  --}}
                                                <textarea name="komitmen" id="mytextarea"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        @error('komitmen')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
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
