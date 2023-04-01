@extends('layout.main')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ asset('template/nabil/xhtml/javascript:void(0)') }}">Alumni</a>
                    </li>
                    <li class="breadcrumb-item active"><a href="/alumniindex">Profil Alumni</a></li>
                </ol>
            </div>
            <!-- row -->


            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Detail alumni {{ $data->nama_alumni }}</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <a href="/alumniindex" class="btn btn-warning mb-5"> Kembali</a>
                        <table class="table table-bordered table-responsive-sm">
                            <thead>
                                <tr>
                                    <th>Alamat</th>
                                    <th>No telp</th>
                                    <th>Email</th>
                                    <th>Tahun Lulus</th>
                                    <th>Pendidikan</th>
                                    <th>Pengalaman</th>
                                    <th>Penghargaan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp

                                <tr>
                                    <td>{{ $data->alamat }}</td>
                                    <td>0{{ $data->no_telp }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td>{{ $data->tahunlulus }}</td>
                                    <td>{{ $data->pendidikan }}</td>
                                    <td>{{ $data->pengalaman }}</td>
                                    <td>{{ $data->penghargaan }}</td>

                                </tr>


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
        $('.deletealumni').click(function() {
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
                        window.location = "//" + mahasiswaid + ""
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
