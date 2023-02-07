@extends('web.face')

@section('content')
    <section class="inner-intro bg-img light-color overlay-before parallax-background"
        style="background-image: url('{{ asset('education/theembazaar.com/tf/educate/assets/images/smk1.png') }}')">
        <div class="container">
            <div class="row title">
                <h1 data-title="history"><span>Ekstrakurikuler</span></h1>
            </div>
        </div>
    </section>


    <section class="latest__block padding ptb-xs-60">
        <div class="container">
            <div class="row pb-30 text-center">
                <div class="col-sm-12 mb-20">
                    <h2>Ekstrakurikuler</h2>
                    <span class="b-line"></span>
                </div>
            </div>
            <div class="row">
                @foreach ($data as $row)
                    <div class="col-md-4 mb-30">
                        <div class="img-scale">
                            <figure>
                                <img src="{{ asset('fotosekolah/' . $row->foto) }}" alt="" style="height: 220px">
                            </figure>
                            <div class="latest__block-post">
                                <div class="meta-post">

                                </div>
                                <h3 class="latest__block-title"><a
                                        href="/detail/{{ $row->id }}">{{ $row->judul }}</a>
                                </h3>

                                <div class="flat-link flat-arrow sm  ">
                                    <a href="/detail/{{ $row->id }}" class="more_btn__block">Selengkapnya <i
                                            class="fa fa-angle-right"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
