@extends('layout.main')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ asset('template/nabil/xhtml/javascript:void(0)') }}">Data Info PTK
                            & PD</a>
                    </li>
                    <li class="breadcrumb-item active"><a href="/pendidiks">Data Pendidik</a></li>
                </ol>
            </div>
            <!-- row -->


            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Pendidik</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-responsive-sm">
                            <div class="mb-5">
                                <a href="/tambahdatapendidik" class="btn btn-success  mr-3">Tambah Data</a>
                                <a href="/exportpdf" class=""><button type="button" class="btn btn-rounded btn-warning"><span
                                    class="btn-icon-left text-warning"><i class="fa fa-download color-warning"></i>
                                </span>Export PDF</button></a>
                            </div>

                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Foto</th>
                                    <th>NAMA</th>
                                    <th>PANGKAT</th>
                                    <th>TUGAS</th>
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
                                            <img src="{{ asset('fotopendidik/' . $row->foto) }}" alt=""
                                                style="width: 100px;
                                                height:120px;";>
                                        </td>
                                        <td>{{ $row->nama }}</td>
                                        <td>{{ $row->pangkat_gol }}</td>
                                        <td>{{ $row->tugas }}</td>
                                        <td>
                                            <a href="/tampildatapendidik/{{ $row->id }}" class="btn btn-warning"><i
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
                        window.location = "/deletependidik/" + mahasiswaid + ""
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
