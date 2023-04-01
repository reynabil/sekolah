@extends('layout.main')


@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ asset('template/nabil/xhtml/javascript:void(0)') }}">Profil</a>
                    </li>
                    <li class="breadcrumb-item active"><a href="/proker">Program Kerja</a></li>
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
                    <form action="/insertproker" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input name="foto" type="file" class="custom-file-input">
                                <label class="custom-file-label">Pilih file</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-12 col-xxl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Tujuan</h4>
                                    </div>
                                    <div class="card-body">
                                        <textarea name="tujuan" class="summernote"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-xl-12 col-xxl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Kegiatan</h4>
                                    </div>
                                    <div class="card-body">
                                        <textarea name="kegiatan" class="summernote"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-xl-12 col-xxl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Indikator</h4>
                                    </div>
                                    <div class="card-body">
                                        <textarea name="indikator" class="summernote"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="row">
                            <div class="col-xl-12 col-xxl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Penanggung Jawab</h4>
                                    </div>
                                    <div class="card-body">
                                        <textarea name="penanggungjk" class="summernote"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="formFile" class="form-label">Batas Waktu</label>
                            <input class="form-control" type="date" name="batas_waktu" id="batas_waktu">
                        </div>

                        <button type="submit" class="btn btn-primary">Masukkan

                        </button>
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
