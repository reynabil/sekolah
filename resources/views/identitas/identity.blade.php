@extends('layout.main')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ asset('template/nabil/xhtml/javascript:void(0)') }}">Profil</a>
                    </li>
                    <li class="breadcrumb-item active"><a href="#">identitas</a></li>
                </ol>
            </div>
            <!-- row -->


            <div class="card">
                <div class="card-header">
                <h4 class="card-title">Identitas</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-responsive-sm">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Foto Sekolah</th>
                                    <th>Identitas Sekolah 1</th>
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

                                            <img src="{{ asset('fotosekolah/' . $row->fotos) }}" alt=""
                                                style="width: 100px";>
                                        <td>{!! $row->bait1 !!}</td>
                                        <td>
                                            <a href="/tampildataidentitas/{{ $row->id }}" class="btn btn-warning"><i
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
                        window.location = "/deletesambutanks/" + mahasiswaid + ""
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
