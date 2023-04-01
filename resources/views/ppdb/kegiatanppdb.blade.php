@extends('web.face')

@section('content')
    <x-section title="Kegiatan PPDB">
    </x-section>
    <section id="our-services" class="padding ptb-xs-60 text-center ">

        <div class="row">
            <div class="col-sm-12">
                <div class="">
                    <h2><span>Kegiatan </span> PPDB</h2>
                    <p class="italic"> Kegiatan PPDB SMKN 1 Pasuruan </p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="item-box" style="">
                    <a> <img style="width: 1300px;
                                    height: 600px;" alt="1"
                            src="{{ asset('fotosekolah/' . $data->foto) }}" class="item-container"> </a>
                    <div class="link-zoom">
                        <a href="{{ asset('fotosekolah/' . $data->foto) }}" class="fancylight popup-btn"
                            data-fancybox-group="light"> <i class="fa fa-search-plus"></i> </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
