@extends('layout.main')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ asset('template/nabil/xhtml/javascript:void(0)') }}">Bahan
                            Ajar</a>
                    </li>
                    <li class="breadcrumb-item active"><a href="/kelasxis">Bahan Ajar Kelas XI</a></li>
                </ol>
            </div>
            <!-- row -->


            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Bahan Ajar Kelas XI</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-responsive-sm">
                            <a href="/tambahdatakelasxis" class="btn btn-success mb-5">Tambah Data</a>
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Foto</th>
                                    <th>Bahan Ajar</th>
                                    <th>Kelas</th>
                                    <th>Deskripsi</th>
                                    <th>Link</th>
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
                                        <td>
                                            <img src="{{ asset('fotobahanajar/' . $row->foto) }}" alt=""
                                                style="width: 40px";>
                                        </td>
                                        <td>{{ $row->bahanajar }}</td>
                                        <td>{{ $row->kelas }}</td>
                                        <td>{!! $row->deskripsi !!}</td>
                                        <td style="width: 10px"> <a href="{{ $row->link }}">Check</a></td>
                                        <td>
                                            <a href="/tampildatakelasxis/{{ $row->id }}" class="btn btn-warning mb-3"><i
                                                    class="fa-sharp fa-solid fa-pen-to-square"></i></a>
                                            <a href="#" class="btn btn-danger delete" data-id="{{ $row->id }}"
                                                data-nama_dosen="{{ $row->nama_dosen }}"><i
                                                    class="fa-sharp fa-solid fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $data->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.3.slim.js"
        integrity="sha256-DKU1CmJ8kBuEwumaLuh9Tl/6ZB6jzGOBV/5YpNE2BWc=" crossorigin="anonymous"></script>
    <script>
        $('.delete').click(function() {
            var mahasiswaid = $(this).attr('data-id');
            var nama = $(this).attr('data-nama_dosen');
            swal({
                    title: "Apakah Anda Yakin?",
                    text: "Kamu Akan Menghapus Data  " + nama + " ",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "/deletekelasxes/" + mahasiswaid + ""
                        swal("Data telah dihapus!", {
                            icon: "success",
                        });
                    } else {
                        swal("Data Tidak Jadi Dihapus");
                    }
                });
        });
    </script>
@endsection
