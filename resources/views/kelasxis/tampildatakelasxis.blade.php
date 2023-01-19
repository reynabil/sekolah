@extends('layout.main')


@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ asset('template/nabil/xhtml/javascript:void(0)') }}">Bahan Ajar</a>
                    </li>
                    <li class="breadcrumb-item active"><a href="/kelasxis">Bahan Ajar Kelas XI</a></li>
                    <li class="breadcrumb-item active"><a href="">Tambah Data </a></li>
                </ol>
            </div>
            <!-- row -->


            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Data</h4>
                </div>
                <div class="card-body">
                    <form action="/updatedatakelasxis/{{ $data->id }}" method="POST" enctype="multipart/form-data">
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
                            <label for="exampleInputEmail1" class="form-label"><h5>Bahan Ajar</h5></label>
                            <input type="text" name="bahanajar" class="form-control" id="exampleInputEmail1" value="{{ $data->bahanajar}}" aria-describedby="emailHelp">
                        </div>
                        @error('bahanajar')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        

                                <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"><h5>Kelas</h5></label>
                                <input type="text" name="kelas" class="form-control" id="exampleInputEmail1" value="{{ $data->kelas}}" aria-describedby="emailHelp">
                            </div>
                                @error('kelas')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"><h5>Link</h5tlabel>
                                <input type="text" name="link" class="form-control" id="exampleInputEmail1" value="{{ $data->link}}" aria-describedby="emailHelp">
                            </div>
                                @error('link')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror


                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
