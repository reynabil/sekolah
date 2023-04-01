@extends('web.face')
@section('content')
    <x-section1 title="Info Lowongan Kerja"></x-section1>

    <section class="course-section__block padding ptb-xs-60">
        <div class="container">
            <div class="row">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="block-title v-line mb-35 ">
                            <h2><span>Info </span> Lowongan Kerja</h2>
                            <p class="italic"> Info Lowongan Kerja SMKN 1 Pasuruan </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="row">
                        @if (count($data) > 0)
                            @foreach ($data as $item)
                                <div class="col-md-4 col-sm-6 mb-30">
                                    <div class="courses-block img-scale">
                                        <div class="item-box">
                                            <a> <img style="width: 450px;
                                                    height: 280px;"
                                                    alt="1" src="{{ asset('fotolowongan/' . $item->foto) }}"
                                                    class="item-container"> </a>
                                            <div class="link-zoom">
                                                <a href="{{ asset('fotolowongan/' . $item->foto) }}"
                                                    class="fancylight popup-btn" data-fancybox-group="light"> <i
                                                        class="fa fa-search-plus"></i> </a>
                                            </div>
                                        </div>
                                        <div style="height: 280px;" class="courses-content__block">
                                            <p style="text-align: center" class="item-title"><a
                                                    href="#"><strong>{{ $item->nama_perusahaan }}</strong></a></p>
                                            <hr>
                                            <p style="text-align: center"><strong>{{ $item->kualifikasi }}</strong>
                                            </p>
                                            <ul style="" class="courses-info">
                                            </ul>
                                            <p style="text-align: center" class="item-content">{{ $item->deskripsi }}</p>


                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                        <div class="row mt-80 text-center">
                            <i style="margin-bottom: 5px;"
                                class="fa-solid fa-file fa-3x"></i>
                            <p class="italic">Belum ada Data</p>
                        </div>
                        @endif

                    </div>
                    <!-- Pagination Nav -->
                    {{ $data->links() }}
                </div>
                <!--Sidebar-->
                <div class="col-sm-3 mt-sm-60" style="padding-top: 10px;">
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
