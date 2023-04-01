@extends('web.face')


@section('content')
    <!-- Intro Section -->
    <x-section title="Detail Kompetensi Keahlian"></x-section>
    <!-- Intro Section -->
    <section class="course-section__block padding ptb-xs-60">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="block-title v-line mb-35 ">
                        <h2 style=""><span>Detail </span> Kompetensi Keahlian</h2>
                        <p style="" class="italic">Detail Kompetensi Keahlian SMKN 1 Pasuruan </p>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-9 mb-30">
                    <div class="course__details_block">
                        <div class="course__figure_img">
                            <img style="width: 850px;
                            height: 450px;"
                                src="{{ asset('fotokompetensi/' . $data->foto_detail) }}" alt="" style="";>
                        </div>
                        <div class="course__text_details mt-40">
                            <h1 style="text-align: center" class="mb-20">{{ $data->nama_jurusan }}</h1>
                            <div style="text-align: center">{!! $data->deskripsi !!}</div>
                        </div>
                    </div>

                </div>
                <!--Sidebar-->

                <div class="col-sm-3 mt-sm-60">
                    <div class="sidebar-widget">
                        <h4>Jurusan Lainnya</h4>
                        @foreach ($data1->take(6) as $row)
                            <ul class="categories">
                                <li><a href="/detailkompetensi/{{ $row->id }}"><i
                                            class="fa fa-chevron-right"></i>{{ $row->nama_jurusan }}</a></li>
                        @endforeach
                    </div>
                    <div class="sidebar-widget">
                        <h4>Berita Seputar Sekolah</h4>
                        @foreach ($berita->take(5) as $row)
                            <ul class="categories">
                                <li><a href="/selengkapnya/{{ $row->id }}"><i
                                            class="fa fa-chevron-right"></i>{{ $row->judul }}</a></li>
                        @endforeach
                    </div>
                </div>
                <!--Sidebar-->

            </div>

        </div>
    </section>
@endsection
