@extends('web.face')

@section('content')
    <section class="inner-intro bg-img light-color overlay-before parallax-background"
        style="background-image: url('{{ asset('education/theembazaar.com/tf/educate/assets/images/smk1.png') }}')">
        <div class="container">
            <div class="row title">
                <h1 data-title="history"><span>Foto Fasilitas</span></h1>
            </div>
        </div>
    </section>
    <section id="work" class="padding">
        <div class="container">
            <!-- work Filter -->
            <div class="row pb-30 text-center">
                <div class="col-sm-12 mb-20">
                    <h2>Foto {{ $data->nama_ruang }}</h2>
                    <span class="b-line"></span>
                </div>
            </div>
            <!-- End work Filter -->
            <div class="row container-grid nf-col-3">
                @foreach (json_decode($data->foto) as $foto)
                    <div class="nf-item branding coffee spacing">
                        <div class="item-box">
                            <a> <img style="width: 430px;
                            height: 250px" alt="1"
                                    src="{{ asset('fotofasilitas/' . $foto) }}" class="item-container"> </a>
                            <div class="link-zoom">
                                <a href="{{ asset('fotofasilitas/' . $foto) }}" class="fancylight popup-btn"
                                    data-fancybox-group="light"> <i class="fa fa-search-plus"></i> </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
