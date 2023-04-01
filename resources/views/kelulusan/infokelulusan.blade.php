@extends('web.face')

@section('content')
    <x-section title="Info Kelulusan"></x-section>

    <section class="course-section__block padding ptb-xs-60">
        <div class="container">
            <div class="row">
                <div class="row ">
                    <div class="col-sm-12">
                        <div class="block-title v-line mb-35">
                            <h2><span>Info </span> Kelulusan</h2>
                            <p class="italic"> Info Kelulusan SMKN 1 Pasuruan </p>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="row">
                        <form method="GET" action="/kelulusan">
                            <input style="height: 40px;
                            margin-left: 15px;" type="text"
                                name="keyword" />
                            <button style="width: 50px;
                            height: 40px;" class="btn btn-warning"
                                type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>

                        </form>
                        @if (isset($data))
                            @if (count($data) > 0)
                                @foreach ($data as $item)
                                    <div class="col-md-4 col-sm-6 mb-30">

                                        <div class="courses-block img-scale">

                                            <figure class="img__block">
                                                <img style="width: 450px; margin: auto;
                                            height: 220px;"
                                                    class="img-responsive" src="{{ asset('fotokelulusan/' . $item->foto) }}"
                                                    alt="courses">
                                            </figure>
                                            <div class="courses-content__block">
                                                <h3 style="text-align: center" class="item-title"> {{ $item->kelas }} </h3>
                                                <p class="item-content">Tanggal : {{ $item->tanggal->format('d F Y') }}</p>
                                                <p class="item-content"> Waktu Pengumuman : {{ $item->waktu }} </p>
                                                <a class="fancylight popup-btn" data-fancybox-group="light"
                                                    href="{{ asset('fotokelulusan/' . $item->foto) }}">
                                                    <button style="margin-bottom: 10px; margin:auto;"
                                                        class="btn btn-warning">Detail</button></a>
                                            </div>
                                        </div>

                                    </div>
                                @endforeach
                            @else
                            <div class="row mt-80 text-center">
                                data Belum ada
                            </div>

                            @endif
                    </div>
                    {{ $data->links() }}
                    @endif
                </div>
                <!--Sidebar-->
                <div class="col-sm-3 mt-sm-60" style="padding-top: 60px;">
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
                        <h4>Berita Seputar Sekolah</h4>
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
