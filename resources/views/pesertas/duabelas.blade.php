@extends('web.face')

@section('content')
<x-section1 title="Peserta Didik"></x-section1>

    <div id="mission-section" class="ptb ptb-xs-60">
        <div class="container">
            <div class="row ">
                <div class="col-sm-12">
                    <div class="block-title v-line mb-35">
                        <h2><span>Data Peserta </span>  Didik Kelas XII</h2>
                        <p class="italic"> Data Peserta Didik Kelas XII SMKN 1 Pasuruan </p>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="card-body">

                <table class="table table-bordered shadow-lg "
                    style="margin-top: 50px;
                width: 1200px;
                margin-right: auto;
                margin-left: auto;">
                    <thead style="background: #0c1f38 ">
                        <tr>
                            <th class="text-center">Nama Kelas</th>
                            <th class="text-center">Jumlah Laki-laki</th>
                            <th class="text-center">Jumlah Perempuan</th>
                            <th class="text-center">Jumlah Siswa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr class="table-bordered border" style="border: 1px solid black">
                                <td>{{ $item->nama_kelas }}</td>
                                <td>{{ $item->jl }}</td>
                                <td>{{ $item->jp }}</td>
                                <td>{{ $item->jml }}</td </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
