@extends('layout.main')


@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ asset('template/nabil/xhtml/javascript:void(0)') }}">Alumni</a>
                    </li>
                    <li class="breadcrumb-item active"><a href="/alumni">Profil Alumni</a></li>
                    <li class="breadcrumb-item active"><a href="">Edit data </a></li>
                </ol>
            </div>
            <!-- row -->
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Data</h4>
                </div>
                <div class="card-body">
                    <form action="/updatealumni/{{ $data->id }}" method="POST" enctype="multipart/form-data">
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
                        <img style="width: 300px;" src="{{ asset('fotoalumni/' . $data->foto) }}" alt="">
                        @error('foto')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Nama Alumni</label>
                            <input value="{{ $data->nama_alumni }}" class="form-control" type="text" name="nama_alumni"
                                id="nama_alumni">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Pekerjaan</label>
                            <input value="{{$data->pekerjaan }}"  class="form-control" type="text" name="pekerjaan"
                                id="pekerjaan">
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-xxl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Deskripsi</h4>
                                    </div>
                                    <div class="card-body">
                                        <textarea name="testimoni" class="summernote">{!! $data->testimoni !!}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Email</label>
                            <input value="{{ $data->email }}" class="form-control" type="text" name="email" id="email">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">No Telepon</label>
                            <input value="{{ $data->no_telp }}" class="form-control" type="text" name="no_telp" id="no_telp">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Alamat</label>
                            <input value="{{ $data->alamat }}" class="form-control" type="text" name="alamat" id="alamat">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Tahun Lulus</label>
                            <input value="{{ $data->tahunlulus }}" class="form-control" type="number" name="tahunlulus" id="tahunlulus">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Jurusan</label>
                            <input value="{{ $data->jurusan }}" class="form-control" type="text" name="jurusan" id="jurusan">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Pendidikan</label>
                            <input value="{{ $data->pendidikan }}" class="form-control" type="text" name="pendidikan" id="pendidikan">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Pengalaman</label>
                            <input value="{{ $data->pengalaman }}" class="form-control" type="text" name="pengalaman" id="pengalaman">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Penghargaan</label>
                            <input value="{{ $data->penghargaan }}" class="form-control" type="text" name="penghargaan" id="penghargaan">
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="/alumnindex"><button class="btn btn-warning">Kembali</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
