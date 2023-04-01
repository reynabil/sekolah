@extends('layout.main')


@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ asset('template/nabil/xhtml/javascript:void(0)') }}">Profil</a>
                    </li>
                    <li class="breadcrumb-item active"><a href="/visimisib">Visi Misi</a></li>
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
                    <form action="/updatevisimisibkk/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Masukkan Foto</label>
                            <input class="form-control" type="file" name="foto" id="foto"
                                value="{{ $data->foto }}">
                            <img class="img mb-3" src="{{ asset('fotosekolah/' . $data->foto) }}" alt=""
                                style="width: 300px;">
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Visi</label>
                            <input type="text" class="form-control" name="visibkk" id="visibkk"
                                aria-describedby="emailHelp" value="{{ $data->visibkk }}">
                        </div>
                        @error('visi')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="row">
                            <div class="col-xl-12 col-xxl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Deskripsi</h4>
                                    </div>
                                    <div class="card-body">
                                        <textarea name="misibkk" class="summernote">{!! $data->misibkk !!}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan
                        </button>
                        <a href="/visimisib"> <button class="btn btn-warning">Kembali</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
