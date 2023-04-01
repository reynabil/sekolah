@extends('web.face')

@section('content')
    <x-section1 title="Sasaran Mutu"></x-section1>

    <section class="padding ptb-xs-60">
        <div class="container">

            <div class="row">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="block-title v-line mb-35 ">
                            <h2><span>Sasaran </span> Mutu</h2>
                            <p class="italic"> Sasaran Mutu BKK SMKN 1 Pasuruan </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mt-xs-40 pb-xs-40">
                    <div class="tab-title">
                    </div>
                    <div class="company-brochure mt-30">
                        <img style="width: 430px;
                        height: 300px;"
                            src="{{ asset('fotosasaran/' . $data->logo) }}" alt=""></a>
                            <h3 style="text-align: center">SMKN 1 Pasuruan</h3>
                            <p style="text-align: center">Jl. Veteran, Bugul Lor, Kec. Panggungrejo, Kota Pasuruan, Jawa Timur 67122</p>
                        {{-- <div style="margin-top: 50px;" class="sidebar-widget">
                            <h4>Lainnya</h4>

                            <ul class="categories">
                                <li> <a href="/sambutan">Sambutan Kepala Sekolah</a> </li>
                                <li> <a href="/visim">Visi Misi</a> </li>
                                <li> <a href="/fase">Fasilitas</a> </li>
                                <li> <a href="/ekstra">Ekstrakurikuler</a> </li>
                                <li> <a href="/sejarah">Sejarah SMK</a> </li>
                                <li> <a href="/identity">Identitas Sekolah</a> </li>
                            </ul>
                        </div> --}}
                        <div class="sidebar-widget" style="margin-top: 50px;">
                            <h4>Seputar Sekolah</h4>
                            @foreach ($berita->take(4) as $row)
                                <ul class="categories">
                                    <li><a href="/selengkapnya/{{ $row->id }}"><i
                                                class="fa fa-chevron-right"></i>{{ $row->judul }}</a></li>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="col-sm-9">
                    <div class="tab-content">
                        <div class="row">

                            <div class="col-sm-12">
                                <img style="width: 900px;
                                height: 500px;"
                                    src="{{ asset('fotosasaran/' . $data->foto) }}" alt="">
                            </div>
                            <div class="col-sm-12">
                                <h2 class="pt-30">Sasaran Mutu BKK</h2>
                                <p class="italic">Berisi Informasi Sasaran Mutu BKK SMK Negeri 1 Pasuruan</p>
                                <p>{!! $data->deskripsi_singkat !!}</p>
                            </div>
                        </div>
                    </div>
                    <!-- About Section -->
                    <div class="pt-60 pt-xs-60">
                        <div class="accordion-box accordion-box-1 accordion-box-2 light-color" data-accordion-group>

                            @foreach ($data1 as $item)
                                <div class="accordion {{ $loop->first ? 'open' : '' }}" data-accordion>
                                    <div class="accordion-title" data-control>
                                        <p>{{ $item->judul }} </p>
                                    </div>
                                    <div class="accordion-content animated" data-content>
                                        <div class="content-inner">
                                            <div>{!! $item->deskripsi !!}</div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                        </div>
                    </div>
                    <!-- About Section End-->
                </div>
            </div>
        </div>
    </section>
@endsection
