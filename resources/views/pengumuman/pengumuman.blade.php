@extends('layout.main')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ asset('template/nabil/xhtml/javascript:void(0)') }}">BKK</a>
                    </li>
                    <li class="breadcrumb-item active"><a href="/pengumuman">Pengumuman Penerimaan Kerja</a></li>
                </ol>
            </div>
            <!-- row -->


            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Pengumuman Penerimaan Kerja</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-responsive-sm">
                            <a href="/tambahpengumuman" class="btn btn-success mb-5">Tambah Data</a>
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Foto</th>
                                    <th>Judul</th>
                                    <th>Tanggal Terbit</th>
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
                                            <img src="{{ asset('fotopengumuman/' . $row->foto) }}" alt=""
                                                style="width: 100px";>
                                        </td>
                                        <td>{{ $row->judul }}</td>
                                        <td>{{ $row->created_at }}</td>
                                        <td>
                                            <a href="/tampilpengumuman/{{ $row->id }}" class="btn btn-warning mb-3"><i
                                                    class="fa-sharp fa-solid fa-pen-to-square"></i></a>
                                            <a href="#" class="btn btn-danger deletepengumuman"
                                                data-id="{{ $row->id }}" data-nama_dosen="{{ $row->judul}}"><i
                                                    class="fa-sharp fa-solid fa-trash"></i></a>
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
    <script src="https://code.jquery.com/jquery-3.6.3.slim.js"
        integrity="sha256-DKU1CmJ8kBuEwumaLuh9Tl/6ZB6jzGOBV/5YpNE2BWc=" crossorigin="anonymous"></script>
    <script>
        $('.deletepengumuman').click(function() {
            var mahasiswaid = $(this).attr('data-id');
            var nama = $(this).attr('data-nama_dosen');
            swal(" Maaf ", " Data masih digunakan ");
        });
    </script>
    <script>
        $('.deletepengumuman').click(function() {
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
                        window.location = "/deletepengumuman/" + mahasiswaid + ""
                        swal("Data telah dihapus!", {
                            icon: "success",
                        });
                    } else {
                        swal("Data Tidak Jadi Dihapus");
                    }
                });
        });
    </script>


    <div class="content-body" style="padding:inherit">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ asset('template/nabil/xhtml/javascript:void(0)') }}">BKK</a>
                    </li>
                    <li class="breadcrumb-item active"><a href="/pengumuman">Pengumuman Penerimaan Kerja</a></li>
                </ol>
            </div>
            <!-- row -->


            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Siswa yang Di Terima</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-responsive-sm">
                            <a href="/tambahsiswa" class="btn btn-success mb-5">Tambah Data</a>
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Foto Siswa</th>
                                    <th>Diterima Di</th>
                                    <th>Nama Siswa</th>
                                    <th>NISN</th>
                                    <th>Email</th>
                                    <th>No Telepon</th>
                                    <th>Jenis Kelamin</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($siswa as $item)
                                    <tr>
                                        <th scope="item">{{ $no++ }}</th>
                                        <td>
                                            <img src="{{ asset('fotosiswa/' . $item->foto_siswa) }}" alt=""
                                                style="width: 200px;
                                                height: 150px;";>
                                        </td>
                                        <td>{{ $item->pengumumans->judul }}</td>
                                        <td>{{ $item->nisn }}</td>
                                        <td>{{ $item->nama_siswa }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>0{{ $item->no_telp }}</td>
                                        <td>{{ $item->jeniskelamin }}</td>
                                        <td>
                                            <a href="/tampilsiswa/{{ $item->id }}" class="btn btn-warning mb-3"><i
                                                    class="fa-sharp fa-solid fa-pen-to-square"></i></a>
                                            <a href="#" class="btn btn-danger delete" data-id="{{ $item->id }}"
                                                data-nama_dosen="{{ $row->nama_dosen }}"><i
                                                    class="fa-sharp fa-solid fa-trash"></i></a>
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
                        window.location = "/deletesiswa/" + mahasiswaid + ""
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
