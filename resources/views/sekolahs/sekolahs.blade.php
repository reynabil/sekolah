@extends('layout.main')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ asset('template/nabil/xhtml/javascript:void(0)') }}">Agenda Kegiatan</a>
                    </li>
                    <li class="breadcrumb-item active"><a href="/sekolahs">Kegiatan Sekolah dan PHBN</a></li>
                </ol>
            </div>
            <!-- row -->


            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Kegiatan Sekolah dan PHBN</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-responsive-sm">
                            <a href="/tambahdatasekolahs" class="btn btn-success mb-5">Tambah Data</a>
                            <thead>
                                <tr>
                                    <th>#</th>
									<th>Tanggal</th>
                                    <th>Kegiatan</th>
                                    <th>Keterangan</th>
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

                                        <td>{{ $row->tanggal->format('d F Y') }}</td>
                                        <td>{{ $row->kegiatan }}</td>
                                        <td>{!! $row->keterangan !!}</td>
                                        <td>
                                            <a href="/tampildatasekolahs/{{ $row->id }}" class="btn btn-warning"><i
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
    <script src="https://code.jquery.com/jquery-3.6.3.slim.js" integrity="sha256-DKU1CmJ8kBuEwumaLuh9Tl/6ZB6jzGOBV/5YpNE2BWc=" crossorigin="anonymous"></script>
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
                        window.location = "/deletesekolahs/" + mahasiswaid + ""
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
