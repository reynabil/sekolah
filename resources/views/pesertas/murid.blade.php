@extends('web.face')

@section('content')
<x-section1 title="Peserta Didik"></x-section1>
    <div id="history-section" class="padding ptb-xs-60 gray-bg">
        <div class="container">
            <div class="row ">
                <div class="col-sm-12">
                    <div class="block-title v-line mb-35">
                        <h2><span>Data </span> Peserta Didik</h2>
                        <p class="italic"> Data Peserta Didik SMKN 1 Pasuruan </p>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="history-block nf-carousel-theme arrow_theme">
                        <a href="/sepuluh">
                            <div class="history-box">
                                <span class="history_date bg-color">Kelas X</span>
                                <img style="width: 410px;
                                height: 170px;" src="{{ asset('fotosekolah/X.jpg') }}"
                                    alt="" />
                                <h4 style="margin-top: 50px" class="mt-15 text-center">Data Peserta didik kelas X</h4>

                            </div>
                        </a>

                        <a href="/sebelas">
                            <div class="history-box">
                                <span class="history_date secondary_bg">Kelas XI</span>
                                <img style="width: 410px;
                                height: 170px;" src="{{ asset('fotosekolah/XI.jpg') }}"
                                    alt="" />
                                <h4 style="margin-top: 50px" class="mt-15 text-center">Data Peserta Didik Kelas XI</h4>
                            </div>
                        </a>
                        <a href="/duabelas">
                            <div class="history-box">
                                <span class="history_date bg-color3">Kelas XII</span>
                                <img style="width: 410px;
                                height: 170px;" src="{{ asset('fotosekolah/XII.jpg') }}"
                                    alt="" />
                                <h4 style="margin-top: 50px" class="mt-15 text-center">Data Peserta Didik Kelas XII</h4>
                            </div>
                        </a>

                        <a href="/tigabelas">
                            <div class="history-box">
                                <span class="history_date secondary_bg">Kelas XIII KA</span>
                                <img style="width: 410px;
                                height: 170px;" src="{{ asset('fotosekolah/XIII.jpg') }}"
                                    alt="" />
                                <h4 style="margin-top: 50px" class="mt-15 text-center">Data Peserta Didik Kelas XIII KA</h4>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
