@extends('web.face')

@section('content')
    <x-section title="Kompetensi Keahlian"></x-section>
    <section id="our-services" class="padding ptb-xs-60 text-center ">

        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2><span>Kompetensi </span> Keahlian</h2>
                    <p class="italic">Kompetensi Keahlian SMKN 1 Pasuruan </p>
                </div>
            </div>
            <div class="row">
                @if (count($data) > 0)
                    @foreach ($data as $item)
                        <a href="/detailkompetensi/{{ $item->id }}">
                            <div class="col-md-4 col-sm-6 mb-30">
                                <div class="featured-item feature-bg-box dark_bg">
                                    <div class="">
                                        <img style="width: 100px;
                                height: 135px;"
                                            src="{{ asset('fotokompetensi/' . $item->foto) }}" alt="">
                                    </div>
                                    <div class="title text-uppercase">
                                        <h4> <strong>{{ $item->nama_jurusan }}</strong> </h4>
                                    </div>
                                    <div class="desc ellipsis">
                                        {!! $item->deskripsi !!}
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                @else
                    <div class="row mt-80 text-center">
                        <i style="margin-bottom: 5px;" class="fa-solid fa-file fa-3x"></i>
                        <p class="italic">Belum ada Data</p>
                    </div>
                @endif


            </div>
        </div>
    </section>
@endsection
