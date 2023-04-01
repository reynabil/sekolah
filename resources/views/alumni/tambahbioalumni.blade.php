@extends('layout.main')


@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ asset('template/nabil/xhtml/javascript:void(0)') }}">Alumni</a>
                    </li>
                    <li class="breadcrumb-item active"><a href="/alumniindex">Bidodata Alumni</a></li>
                    <li class="breadcrumb-item active"><a href="">Tambah data </a></li>
                </ol>
            </div>
            <!-- row -->
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tambah Detail Alumni</h4>
                </div>
                <div class="card-body">
                    <form action="/insertbiodataalumni" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>PIlih Alumni Yang akan Diisi Biodata</label>
                            <select class="form-control default-select" name="alumni" id="alumni">
                                <option value=""></option>
                                @foreach ($data as $d)
                                    <option value="{{ $d->id }}">
                                        {{ $d->nama_alumni }} </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="formFile" class="form-label">Alamat</label>
                            <input class="form-control" type="text" name="alamat" id="alamat">
                        </div>

                        <div class="mb-3">
                            <label for="formFile" class="form-label">Email</label>
                            <input class="form-control" type="text" name="email" id="email">
                        </div>
                        {{-- <section style="padding-top:60px;">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header">
                                                Testimoni
                                            </div>
                                            <div class="card-body">
                                                <textarea name="testimoni" id="mytextarea"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section> --}}
                        <div class="mb-3">
                            <label for="formFile" class="form-label">No Telepon</label>
                            <input class="form-control" type="text" name="no_telp" id="no_telp">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Tahun Lulus</label>
                            <input class="form-control" type="number" name="tahun_lulus" id="tahun_lulus">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Jurusan</label>
                            <input class="form-control" type="text" name="jurusan" id="jurusan">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Pekerjaan</label>
                            <input class="form-control" type="text" name="pekerjaan" id="pekerjaan">
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
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
