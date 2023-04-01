@extends('web.face')

@section('content')
    <x-section title="Fasilitas"></x-section>


    <section id="our-services" class="padding ptb-xs-60 text-center ">

        <div class="container">
            {{-- <div class="row">
                <div class="col-sm-12">
                    <div class="block-title v-line mb-35 ">
                        <h2 style="margin-right: 1000px;">fasilitas </h2>
                        <p style="margin-right: 920px;" class="italic"> Fasilitas SMKN 1 Pasuruan </p>
                    </div>
                </div>
            </div> --}}
            <div style="margin:auto;">
                <h2><span>Fasilitas </span> Sekolah</h2>
                <p class="italic"> Fasilitas Sekolah SMKN 1 Pasuruan </p>
            </div>

            <div class="row">
                @foreach ($data as $row)
                    <a href="/foto/{{ $row->id }}">
                        <div class="col-md-4 col-sm-6 mb-30">
                            <div class="featured-item feature-bg-box dark_bg">
                                <div class="icon">
                                    {!! $row->icon !!}
                                </div>
                                <div class="title text-uppercase">
                                    <h3>{{ $row->nama_ruang }}</h3>
                                </div>
                                <div class="desc">
                                    <h1>{{ $row->jumlah }}</h1>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach

                <div class="row pb-30 ">
                    <div class="row">
                        <div class="col-sm-12">
                            <div style="margin:auto;">
                                <hr>
                                <h2><span>Denah </span> Sekolah</h2>
                                <p class="italic"> Denah Sekolah SMKN 1 Pasuruan </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="nf-item branding coffee spacing">
                    <div class="item-box">
                        <a> <img style="width: 1140px;
                        height: 600px;" alt="1"
                                src="{{ asset('fotofasilitas/' . $data1->foto_denah) }}" class="item-container"> </a>
                        <div class="link-zoom">
                            <a href="{{ asset('fotofasilitas/' . $data1->foto_denah) }}" class="fancylight popup-btn"
                                data-fancybox-group="light"> <i class="fa fa-search-plus"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
