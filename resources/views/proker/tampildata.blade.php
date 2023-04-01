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

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input value="{{ $data->foto }}" name="foto" type="file" class="custom-file-input">
                                <label class="custom-file-label">Pilih file</label>
                            </div>
                        </div>
                        <img class="img mb-3" src="{{ asset('fotoproker/' . $data->foto) }}" alt=""
                            style="width: 300px;">
                            
                        <div class="row">
                            <div class="col-xl-12 col-xxl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Tujuan</h4>
                                    </div>
                                    <div class="card-body">
                                        <textarea name="tujuan" class="summernote">{!! $data->tujuan !!}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- @error('visi')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror --}}
                        <div class="row">
                            <div class="col-xl-12 col-xxl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Kegiatan</h4>
                                    </div>
                                    <div class="card-body">
                                        <textarea name="kegiatan" class="summernote">{!! $data->kegiatan !!}</textarea>
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
                                        <textarea name="indikator" class="summernote">{!! $data->indikator !!}</textarea>
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
                                        <textarea name="penanggungjk" class="summernote">{!! $data->penanggungjk !!}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="formFile" class="form-label">Batas Waktu</label>
                            <input class="form-control"
                                value="{{ \Carbon\Carbon::parse($data->batas_waktu)->format('Y-m-d') }}" type="date"
                                name="batas_waktu" id="batas_waktu">
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="/proker"><button class="btn btn-warning">Kembali</button></a>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
