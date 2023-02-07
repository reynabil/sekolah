@extends('web.face')

@section('content')
    <section class="inner-intro bg-img light-color overlay-before parallax-background"
        style="background-image: url('{{ asset('education/theembazaar.com/tf/educate/assets/images/smk1.png') }}')">
        <div class="container">
            <div class="row title">
                <h1 data-title="history"><span>Fasilitas</span></h1>
            </div>
        </div>
    </section>


    <section id="our-services" class="padding ptb-xs-60 text-center ">

        <div class="container">
            <div class="row pb-30 text-center">
                <div class="col-sm-12 mb-20">
                    <h2>Fasilitas</h2>
                    <span class="b-line"></span>
                </div>
            </div>

            <div class="row">
                @foreach ($data as $row)
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
                @endforeach
                {{-- <div class="col-md-4 col-sm-6 mb-30">
                    <div class="featured-item feature-bg-box dark_bg">
                        <div class="icon">
                            <i class="fa-solid fa-flask"></i>
                        </div>
                        <div class="title text-uppercase">
                            <h3>Ruang Laboratarium</h3>
                        </div>
                        <div class="desc">
                            <h1>22</h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-30">
                    <div class="featured-item feature-bg-box dark_bg">
                        <div class="icon">
                            <i class="fas fa-volleyball-ball"></i>
                        </div>
                        <div class="title text-uppercase">
                            <h3>Ruang Ekskul</h3>
                        </div>
                        <div class="desc">
                            <h1>15</h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-35">
                    <div class="featured-item feature-bg-box dark_bg">
                        <div class="icon">
                            <i class="fas fa-laptop-house"></i>
                        </div>
                        <div class="title text-uppercase">
                            <h3>Ruang Kantor</h3>
                        </div>
                        <div class="desc">
                            <h1>6</h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-30">
                    <div class="featured-item feature-bg-box dark_bg">
                        <div class="icon">
                            <i class="fas fa-broadcast-tower"></i>
                        </div>
                        <div class="title text-uppercase">
                            <h3>Ruang BroadCast</h3>
                        </div>
                        <div class="desc">
                            Di SMKN 1 Pasuruan atau juga bisa disebut skensa terdapat ruang broadcast
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-30">
                    <div class="featured-item feature-bg-box dark_bg">
                        <div class="icon">
                            <i class="fas fa-book"></i>
                        </div>
                        <div class="title text-uppercase">
                            <h3>Perpustakaan</h3>
                        </div>
                        <div class="desc">
                            Di Skensa juga terdapat perpustakaan yang dapat di kunjungi oleh para murid
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
@endsection
