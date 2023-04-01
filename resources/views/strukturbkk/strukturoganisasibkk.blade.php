@extends('web.face')

@section('content')
    <x-section title="Struktur BKK"></x-section>
    <!-- Intro Section -->

    <section class="course-section__block padding ptb-xs-60">
        <div class="container">
            <div class="row">

                <div class="col-sm-9 mb-30">
                    <div class="block-title v-line">
                        <h2><span>Struktur Organisasi</span> BKK</h2>
                        <p class="italic"> Berisi informasi strukur BKK SMK Negeri 1 Pasuruan.
                        </p>
                        <hr>
                    </div>
                    <div class="course__details_block">
                        <div class="course__figure_img">
                            <img style="width: 1024px;
                            height: 680px;" src="{{ asset('fotosekolah/' .$data->foto_struktur) }}" alt="" />
                        </div>
                    </div>
                </div>
                <!--Sidebar-->
                <div class="col-sm-3 mt-sm-60" style="margin-top: 130px;">
                    <div class="sidebar-widget">
                        <h4>Lainnya</h4>

                        <ul class="categories">
                            <li> <a href="/sambutan">Sambutan Kepala Sekolah</a> </li>
                            <li> <a href="/visim">Visi Misi</a> </li>
                            <li> <a href="/fase">Fasilitas</a> </li>
                            <li> <a href="/ekstra">Ekstrakurikuler</a> </li>
                            <li> <a href="/sejarah">Sejarah SMK</a> </li>
                            <li> <a href="/identity">Identitas Sekolah</a> </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 mt-sm-60">
                    <div class="sidebar-widget">
                        <h4>Seputar Sekolah</h4>
                        @foreach ($berita->take(4) as $row)
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
