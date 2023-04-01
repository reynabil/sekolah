@extends('layout.main')


@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ asset('template/nabil/xhtml/javascript:void(0)') }}">Profil</a>
                    </li>
                    <li class="breadcrumb-item active"><a href="/fasilitas">Fasilitas</a></li>
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
                    <h4 class="card-title">Edit Data</h4>
                </div>
                <div class="card-body">
                    <form action="/updatedatadenah/ {{ $data->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Masukkan Foto</label>
                            <input class="form-control" type="file" name="foto_denah" id="foto_denah"
                                value="{{ $data->foto_denah }}">
                            <img class="img mt-3" src="{{ asset('fotofasilitas/' . $data->foto_denah) }}" alt=""
                                style="width: 800px;">
                        </div>
                        @error('foto_denah')
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

