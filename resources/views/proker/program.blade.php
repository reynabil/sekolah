@extends('web.face')

@section('content')
    <x-section title="Program Kerja"></x-section>
    <!-- Intro Section -->
    <div id="mission-section" style="padding-top: 1px" class="ptb ptb-xs-60">
        <div class="container">

            <section class="ptb ptb-xs-60">
                <div class="container">
                    <div class="row">
                        <!-- Post Item -->
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-md-12 blog-post-hr">
                                    <div class="blog-post mb-45">
                                        <div class="post-media">
                                            <div id="mission-section" class="ptb ptb-xs-60">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="block-title v-line mb-35 ">
                                                                <h2><span>Program </span> Kerja</h2>
                                                                <p class="italic"> Program Kerja SMKN 1 Pasuruan </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            @if (count($data) > 0)
                                                                @foreach ($data as $row)
                                                                    <div class="about-block clearfix">
                                                                        <div
                                                                            class="fl width-25per box-shadow mt-15 mb-xs-15">
                                                                            <img class="img-responsive"
                                                                                src="{{ asset('fotosekolah/' . $row->foto) }}"
                                                                                alt="Photo"
                                                                                style="width: 400px;
                                                                    height: 250px;">
                                                                        </div>
                                                                        <div
                                                                            class="text-box pt-45 pb-15 pl-70 pl-xs-0 width-75per fl">
                                                                            <div class="box-title">
                                                                                <h3>{!! $row->tujuan !!}</h3>
                                                                            </div>
                                                                            <div class="text-content">
                                                                                <h4>- Kegiatan</h4>
                                                                                <p> {!! $row->kegiatan !!}</p>
                                                                                <h4> - Indikator</h4>
                                                                                <p>{!! $row->indikator !!}</p>
                                                                                <h4> - Penanggung Jawab</h4>
                                                                                <p>{!! $row->penanggungjk !!}</p>
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

                                                            <div class="about-block clearfix">
                                                                <div class=" text-left mt-60 mtb-xs-30">
                                                                    {{ $data->links() }}
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <hr />

                                </div>
                            </div>
                        </div>
                        <!-- End Post Item -->
                        <!-- Sidebar -->
                        <div class="col-sm-3 mt-sm-60" style="padding-top: 200px">
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
                        <!-- End Sidebar -->
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
