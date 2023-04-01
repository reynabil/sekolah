@extends('web.face')

@section('content')
    <x-section1 title="Profil Alumni"></x-section1>
    <section style="margin-bottom: 50px;" class="pt-80">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <div class="box-resume">
                        <div class="center-top doctor-info"> <img style="width: 400px;
                        height: 350px;"
                                src="{{ asset('fotoalumni/' . $data->foto) }}" alt="" class="img-responsive"> </div>
                        <ul>
                            <li><strong>Nama</strong>{{ $data->nama_alumni }} </li>
                            <li><strong>Alamat</strong> {{ $data->alamat }}</li>
                            <li><strong>Email</strong>{{ $data->email }}</li>
                            <li><strong>No Telp</strong>{{ $data->no_telp }}</li>
                            <li><strong>Tahun Lulus</strong> {{ $data->tahunlulus }}</li>
                            <li><strong> Jurusan </strong> {{ $data->jurusan }}</li>
                            <li><strong> Pekerjaan </strong> {{ $data->pekerjaan }} </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-sm-offset-1 pt-xs-60">
                    <h2 style="text-align: center;">{{ $data->nama_alumni }}</h2>
                    <div style="text-align: center">
                        {!! $data->testimoni !!}
                    </div>
                    <div class="we-do">
                        <div class="doctor-details">
                            <div class="desc"> <i class="fa fa-graduation-cap bg-color"></i>
                                <h4>PENIDIKAN</h4>
                                <p>Sarjana Komputer, Univeristas Brawijaya, IND</p>
                            </div>
                            <div class="desc"> <i class="fa ion-ribbon-b bg-color"></i>
                                <h4>PENGALAMAN</h4>
                                <p>3 Tahun Dalam Menjadi Dosen</p>
                            </div>
                            <div class="desc pb-80"> <i class="fa fa-trophy bg-color"></i>
                                <h4>PENGHARGAAN &amp; PRESTASI</h4>
                                <p>Penghargaan Dosen Terbaik</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
