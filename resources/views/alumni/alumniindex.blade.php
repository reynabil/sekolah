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
                    <h4 class="card-title">alumni</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-responsive-sm">
                            <a href="/tambahalumni" class="btn btn-success mb-5">Tambah Data</a>
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Foto</th>
                                    <th>Nama Alumni</th>
                                    <th>Pekerjaan</th>
                                    <th>Testimoni</th>
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
                                            <img src="{{ asset('fotoalumni/' . $row->foto) }}" alt=""
                                                style="width: 100px";>
                                        </td>
                                        <td>{{ $row->nama_alumni }}</td>
                                        <td>{{ $row->pekerjaan }}</td>
                                        <td>{!! $row->testimoni !!}</td>
                                        <td>
                                            @if ($row->status == 0)
                                                <form action="/updatestatus/{{ $row->id }}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <a style="margin-bottom: 5px;" type="submit"><button type="submit"
                                                            class="btn btn-success">
                                                            <i class="fa-solid fa-upload"></i> </button></a>
                                                </form>
                                            @else
                                                <button disabled style="margin-bottom: 5px;" class="btn btn-success"> <i
                                                        class="fa-solid fa-check"></i> </button>
                                            @endif

                                            <a style="margin-bottom: 5px;" href="/tampilalumni/{{ $row->id }}"
                                                class="btn btn-warning"><i
                                                    class="fa-sharp fa-solid fa-pen-to-square"></i></a>
                                            <a style="margin-bottom: 5px;" href="/detailalumniindex/{{ $row->id }}"
                                                class="btn btn-primary"><i class="fa-solid fa-magnifying-glass"></i></a>
                                            <a style="margin-bottom: 5px;" href="#"
                                                class="btn btn-danger deletealumni" data-id="{{ $row->id }}"
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
