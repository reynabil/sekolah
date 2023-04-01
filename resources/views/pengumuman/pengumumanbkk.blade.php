@extends('web.face')

@section('content')
    <x-section1 title="Pengumuman"></x-section1>

    <section class="course-section__block padding ptb-xs-60">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="block-title v-line mb-35 ">
                                <h2><span>Pengumuman </span> Penerimaan Kerja</h2>
                                <p class="italic"> Pengumuman Penerimaan Kerja SMKN 1 Pasuruan </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @if (count($data) > 0)
                            @foreach ($data as $item)
                                <div style="height: 500px;" class="col-md-4 col-sm-6 mb-30">
                                    <div class="courses-block img-scale">
                                        <figure class="img__block">
                                            <img style="width: 450px;
                                    height:200px;"
                                                class="img-responsive" src="{{ asset('fotopengumuman/' . $item->foto) }}"
                                                alt="courses">
                                        </figure>
                                        <div class="courses-content__block">
                                            <h4 class="item-title">{{ $item->judul }}</h4>
                                            <p class="item-content italic">Tanggal terbit : {{ $item->created_at }}</p>
                                            <a href="/siswa/{{ $item->id }}" class="more_btn__block mt-0">Selengkapnya<i
                                                    class="fa fa-angle-right"></i></a>
                                            <ul class="courses-info">
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="row mt-80 text-center">
                                <i style="margin-bottom: 5px;" class="fa-solid fa-file fa-3x"></i>
                                <p class="italic">Belum ada Data</p>
                            </div>
                        @endif

                    </div>


                    <!-- Pagination Nav -->
                    {{ $data->links() }}
                </div>
                <!--Sidebar-->
                <div class="col-sm-3 mt-sm-60" style="padding-top: 20px">
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
