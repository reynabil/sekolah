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

            <!-- row -->
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Data</h4>
                </div>
                <div class="card-body">
                    <form action="/updatedatafasilitas/ {{ $data->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Ikon</label>
                            <input class="form-control" type="text" value="{{ $data->icon }}" name="icon"
                                id="icon">
                        </div>
                        <em style="color: red">- Silahkan Mencari code icon di fontawesome</em><br>
                        <em style="color: red">- Jika icon tidak muncul cari icon yang lain</em>
                        @error('icon')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror


                        <div class="mb-3">
                            <label for="formFile" class="form-label">Nama Ruang</label>
                            <input class="form-control" type="text" value="{{ $data->nama_ruang }}" name="nama_ruang"
                                id="nama_ruang">
                        </div>
                        @error('nama_ruang')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror


                        <label for="defaultFormControlInput" class="form-label mb-3">Foto Fasilitas</label>
                        <div class="mb-3 row">
                            <?php $key = 0; ?>
                            @foreach (json_decode($data->foto) as $foto)
                                <div class="col-4">
                                    <img src="{{ asset('public/fotofasilitas/' . $foto) }}" alt="" width="200px"
                                        height="200px" class="my-3">
                                    <input type="file" name="foto[{{ $key++ }}]" class="form-control w-75"
                                        id="defaultFormControlInput" aria-describedby="defaultFormControlHelp"
                                        value="{{ $data->judul }}" />
                                </div>
                            @endforeach
                        </div>
                        @error('foto')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror



                        <div class="mb-3">
                            <label for="formFile" class="form-label">Jumlah</label>
                            <input class="form-control" type="number" value="{{ $data->jumlah }}" name="jumlah"
                                id="jumlah">
                        </div>
                        @error('jumlah')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="/fasilitas"><button class="btn btn-warning">Kembali</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
<!-- {{-- @push('styles')
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
@endpush --}} -->
