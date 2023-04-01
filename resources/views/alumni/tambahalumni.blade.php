@extends('layout.main')


@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ asset('template/nabil/xhtml/javascript:void(0)') }}">Alumni</a>
                    </li>
                    <li class="breadcrumb-item active"><a href="/alumni">Profil Alumni</a></li>
                    <li class="breadcrumb-item active"><a href="">Tambah data </a></li>
                </ol>
            </div>
            <!-- row -->
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tambah Data</h4>
                </div>
                <div class="card-body">
                    <form action="/insertalumni" method="POST" enctype="multipart/form-data">
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
                        @error('foto')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Nama Alumni</label>
                            <input class="form-control" type="text" name="nama_alumni" id="nama_alumni">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Pekerjaan</label>
                            <input class="form-control" type="text" name="pekerjaan" id="pekerjaan">
                        </div>

                        <div class="row">
                            <div class="col-xl-12 col-xxl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Testimoni</h4>
                                    </div>
                                    <div class="card-body">
                                        <textarea name="testimoni" class="summernote"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="formFile" class="form-label">Email</label>
                            <input class="form-control" type="text" name="email" id="email">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">No Telepon</label>
                            <input class="form-control" type="text" name="no_telp" id="no_telp">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Alamat</label>
                            <input class="form-control" type="text" name="alamat" id="alamat">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Tahun Lulus</label>
                            <input class="form-control" type="number" name="tahunlulus" id="tahunlulus">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Jurusan</label>
                            <input class="form-control" type="text" name="jurusan" id="jurusan">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Pendidikan</label>
                            <input class="form-control" type="text" name="pendidikan" id="pendidikan">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Pengalaman</label>
                            <input class="form-control" type="text" name="pengalaman" id="pengalaman">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Penghargaan</label>
                            <input class="form-control" type="text" name="penghargaan" id="penghargaan">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
