@extends('web.face')

@section('content')
    <section class="inner-intro bg-img light-color overlay-before parallax-background"
        style="background-image: url('{{ asset('education/theembazaar.com/tf/educate/assets/images/testsmk2.jpg') }}')">
        <div class="container">
            <div class="row title">
                <h1 data-title="history"><span>Sejarah SMK</span></h1>
            </div>
        </div>
    </section>
    <!-- Intro Section -->
    <!-- About Section -->
    <div id="about-section" class="padding pt-xs-60">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="heading-box pb-30">
                        <h2><span>Sejarah</span> SMK</h2>

                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-sm-6 pb-xs-30">

                    <div class="text-content">
                        {!! $data->sejarah !!}
                    </div>
                </div>
                <div class="col-sm-6">
                    <img class="img-responsive" src="{{ asset('fotosekolah/' . $data->fotos) }}" alt="Photo">
                </div>

            </div>

        </div>
    </div>
    <!-- About Section End-->
    <!-- Our History -->
    <div id="history-section" class="padding ptb-xs-60 gray-bg">
        <div class="container">
            <div class="row ">
                <div class="col-sm-12">
                    <div class="heading-box pb-30 text-center">
                        <h2>Pekembangan <span> Kompetensi</span> Keahlian</h2>

                    </div>

                </div>
            </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="history-block nf-carousel-theme arrow_theme">
                            @foreach ($perkembangan as $row)
                            <div class="history-box">
                                <span class="history_date secondary_bg">{{ $row->tahun}}</span>
                                <img src="{{ asset('fotosekolah/'. $row->foto) }}"
                                    alt="" />
                                <h4 class="mt-15">{{ $row->judul }}</h4>
                                {!! $row->deskripsi !!}
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>


        </div>
    </div>

    <!-- Our History End-->

    <!-- Mission Section -->
    {{-- <div id="mission-section" class="padding ptb-xs-60 bg-color light-color">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 pb-xs-30">
                    <div class="heading-box pb-15">
                        <h2><span>Our</span> Mission</h2>

                    </div>
                    <p>
                        Perspiciatis unde omnis iste natus doxes sit voluptatem accusantium dantiumeaque ipsa quae
                        ab illos Perspiciatis unde omnis iste natus doxes sit voluptatem accusantium dantiumeaque
                        ipsa quae ab illos
                    </p>

                </div>

                <div class="col-sm-6">
                    <div class="heading-box pb-15">
                        <h2><span>Our</span> Philosphy</h2>

                    </div>
                    <p>
                        Perspiciatis unde omnis iste natus doxes sit voluptatem accusantium dantiumeaque ipsa quae
                        ab illos Perspiciatis unde omnis iste natus doxes sit voluptatem accusantium dantiumeaque
                        ipsa quae ab illos
                    </p>

                </div>
            </div>

        </div>
    </div>
    <!-- Testimonials -->
    <!-- Testimonial -->
    <section class="testimonial-section padding ptb-xs-60 ">
        <div class="container">
            <div class="row text-center pb-30">
                <div class="col-sm-12">
                    <div class="heading-box text-center">
                        <h2><span>Our</span> Clients Says</h2>

                    </div>

                </div>
            </div>
            <div class="row">

                <div class="carousel-slider nf-carousel-theme arrow_theme light-color">
                    <div class="carousel-item col-sm-4 ">
                        <div class="testimonial-block bg-color">
                            <figure class="testimonial-img">
                                <img class="img-circle img-border" src="assets/images/testimonial/1.jpg" alt="">
                            </figure>
                            <h3 class="testimonial-author">Selly Thomas</h3>
                            <hr class="small-divider">
                            <p>
                                At vero eos et accusamus et iusto odio dignissimos ducimus qui.
                            </p>
                            <span class="star"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star"
                                    aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i
                                    class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                    <div class="carousel-item col-sm-4 ">
                        <div class="testimonial-block secondary_bg">
                            <figure class="testimonial-img">
                                <img class="img-circle img-border" src="assets/images/testimonial/2.jpg" alt="">
                            </figure>
                            <h3 class="testimonial-author writer">Jane Anselmo</h3>
                            <hr class="small-divider">
                            <p>
                                At vero eos et accusamus et iusto odio dignissimos ducimus qui.
                            </p>
                            <span class="star"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star"
                                    aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i
                                    class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                    <div class="carousel-item col-sm-4 ">
                        <div class="testimonial-block bg-color3">
                            <figure class="testimonial-img">
                                <img class="img-circle img-border" src="assets/images/testimonial/3.jpg" alt="">
                            </figure>
                            <h3 class="testimonial-author">Melisa Barry</h3>
                            <hr class="small-divider">
                            <p>
                                At vero eos et accusamus et iusto odio dignissimos ducimus qui.
                            </p>
                            <span class="star"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star"
                                    aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i
                                    class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star"
                                    aria-hidden="true"></i> </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
