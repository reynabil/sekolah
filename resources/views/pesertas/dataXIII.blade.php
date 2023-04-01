@extends('layout.main')

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ asset('template/nabil/xhtml/javascript:void(0)') }}">Data Info PTK & PD</a>
                </li>
                <li class="breadcrumb-item active"><a href="/peserta">Data Pendidik</a></li>
                <li class="breadcrumb-item active"><a href="/">{{ $data->nama_kelas }}</a></li>
            </ol>
        </div>
        <!-- row -->


        <div class="card">
            <div class="card-header">
                <h4 class="card-title">{{ $data->nama_kelas }}</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-responsive-sm">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>NAMA KELAS</th>
                                <th>Jumlah Laki-laki</th>
                                <th>Jumlah Perempuan</th>
                                <th>JUMLAH</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                                <tr>
                                    <th scope="row">{{ $no++ }}</th>
                                    <td>{{ $data->nama_kelas }}</td>
                                    <td>{{ $data->jl }}</td>
                                    <td>{{ $data->jp }}</td>
                                    <td>{{ $data->jml }}</td>
                                    <td>
                                        <a href="/tampildataXIII/{{ $data->id }}" class="btn btn-warning"><i
                                                class="fa-sharp fa-solid fa-pen-to-square"></i></a>
                                        <a href="#" class="btn btn-danger delete" data-id="{{ $data->id }}"
                                            data-nama_dosen="{{ $data->nama_dosen }}"><i
                                                class="fa-sharp fa-solid fa-trash"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
