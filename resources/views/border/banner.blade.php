@extends('layout.main')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ asset('template/nabil/xhtml/javascript:void(0)') }}">Beranda</a>
                    </li>
                    <li class="breadcrumb-item active"><a href="/border">Border</a></li>
                </ol>
            </div>
            <!-- row -->


            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Border</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-responsive-sm">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Judul Border 1</th>
                                    <th>Deskripsi</th>
                                    <th>Judul Border 2 </th>
                                    <th>Deskripsi</th>
                                    <th>Judul Border 3</th>
                                    <th>Deskripsi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($data as $row)
                                    <tr>
                                        <th scope="row">{{ $no++ }}</th>
                                        <td>{!! $row->judul1 !!}</td>
                                        <td>{!! $row->deskripsi1 !!}</td>
                                        <td>{!! $row->judul2 !!}</td>
                                        <td>{!! $row->deskripsi2 !!}</td>
                                        <td>{!! $row->judul3 !!}</td>
                                        <td>{!! $row->deskripsi1 !!}</td>
                                        <td>
                                            <a href="/tampilborder/{{ $row->id }}" class="btn btn-warning"><i
                                                    class="fa-sharp fa-solid fa-pen-to-square"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
