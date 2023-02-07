@extends('web.face')

@section('content')
    @include('web.slider')
    <!--  Main Banner End Here-->
    <!--top Section start Here-->
    @include('web.border')
    <!--top Section End Here-->
    <!--About Section Start Here-->
    <div id="mission-section" class="ptb ptb-xs-60">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="block-title v-line mb-35 ">
                        <h2>{{ $sambutan->judul }}</h2>
                        <p class="italic">{{ $sambutan->nama }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="about-block clearfix">
                        <div class="fl width-15per box-shadow mt-15 mb-xs-15"> <img class="img-responsive"
                                src=" {{ asset('fotosekolah/' . $sambutan->foto) }}" style="height: 255px; width: 200px;" alt="Photo"> </div>
                        <div class="text-box pt-45 pb-15 pl-70 pl-xs-0 width-75per fl">
                            <div class="box-title">
                                <h3>Assalamualaikum wr.wb.</h3>
                            </div>
                            <div class="text-content">
                                {!! $sambutan->deskripsi !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--About Section Start End-->
    <!--why we use section End-->
    <!--Course Section section Here-->
    <section class="course-section__block padding ptb-xs-60">
        <div class="container">
            <div class="row pb-30">
                <div class="col-sm-6 mb-20">
                    <h2>Seputar Sekolah</h2>

                </div>
                <div class="col-sm-6 mb-20 text-right text-xs-left">
                    <a href="/berita" class="more_btn__block mt-0">Selengkapnya <i class="fa fa-angle-right"></i></a>
                </div>
            </div>

            <div class="row pb-30">
                @foreach ($data->take(4) as $row)
                    <div class="row pb-30">
                        <div class="col-md-3 col-sm-6 mb-30">
                            <div class="courses-block img-scale">

                                <figure class="img__block">
                                    <img style="height: 200px" class="img-responsive"
                                        src="{{ asset('fotosekolah/' . $row->foto) }}" alt="courses">
                                </figure>
                                <div class="courses-content__block">
                                    <div class="class_time"> <i
                                            class="fa fa-clock-o">{{ $row->created_at->format('d-m-y') }}</i></div>
                                    <h4 class="item-title"><a href="#">{{ $row->judul }}</a></h4>
                                    <p style="text-overflow: ellipsis;
                                overflow: hidden;
                                width: 200px;
                                height: 50px;
                                position: relative;
                                margin-bottom: 20px;
                                -webkit-line-clamp: 2;
                                -webkit-box-orient: vertical;
                                display: -webkit-box;
                                word-break: break-word;"
                                        class="item-content">{{ $row->deskripsi }}</p>
                                    <a href="/selengkapnya/{{ $row->id }}" class="more_btn__block mt-0">Selengkapnya
                                        <i class="fa fa-angle-right"></i></a>
                                    <ul class="courses-info">
                                    </ul>


                                </div>
                            </div>
                        </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--Course Section section End-->
    <!--Team section start-->
    {{-- <section class="team_wrapper__block padding ptb-xs-60">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section_title__block text-center">
                        <h2>Our Lecturers</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="single_member__block">
                        <img src="{{ asset('fotosekolah/kepsek.jpg') }}"
                            alt="" class="img-responsive">
                        <div class="member_S_links__block">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                        <h4 class="author__block">John Doe <span>Chartered Financial Advisor</span></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore [...]</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="single_member__block">
                        <img src="{{ asset('fotosekolah/teacher.jpg') }}"
                            alt="" class="img-responsive">
                        <div class="member_S_links__block">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                        <h4 class="author__block">John Doe <span>Chartered Financial Advisor</span></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore [...]</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="single_member__block">
                        <img src="{{ asset('education/theembazaar.com/tf/educate/assets/images/member-01.jpg') }}"
                            alt="" class="img-responsive">
                        <div class="member_S_links__block">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                        <h4 class="author__block">John Doe <span>Chartered Financial Advisor</span></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore [...]</p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--Team section End-->
    <!--Team section Start-->
    <section class="counter-section__block counter-section__img padding ptb-xs-60" style="background-image: url('{{ asset('education/theembazaar.com/tf/educate/assets/images/testsmk2.jpg') }}')">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 counter-section__box">
                    <span class="counter" data-count="70">0</span>
                    <p>Jumlah Guru PNS</p>
                </div>
                <div class="col-sm-6 col-md-3 counter-section__box">
                    <span class="counter" data-count="50">0</span>
                    <p>Jumlah Guru Non PNS</p>
                </div>
                <div class="col-sm-6 col-md-3 counter-section__box">
                    <span class="counter" data-count="120">0</span>
                    <p>Jumlah Siswa</p>
                </div>
                <div class="col-sm-6 col-md-3 counter-section__box">
                    <span class="counter" data-count="44">0</span>
                    <p>Jumlah Kelas</p>
                </div>
            </div>
        </div>
    </section>
    <!--Team section End-->
    <!--Event section Star-->
    {{-- <section class="event-section__block padding ptb-xs-60">
        <div class="container">
            <div class="row pb-30">
                <div class="col-sm-6 mb-20">
                    <h2>Upcoming Events</h2>

                </div>
                <div class="col-sm-6 mb-20 text-right">
                    <a href="#" class="more_btn__block">More <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="table__block ">
                        <div class="event__date-time text-center matchHeigh">
                            <div class="event__time">
                                <span><i class="fa fa-clock-o"></i> 10 am - 11 am</span>
                                <span><i class="fa fa-map-marker"></i> VENICE, India</span>
                            </div>
                            <div class="event__date">25</div>
                            <div class="event__month">June</div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-8">
                    <div class="single_plan__block single_plan__block-img block_bg5 mb-30 matchHeigh">
                        <div class="plan-content-box plan-content-box__white__bg">
                            <h3>Eduma Summer 2017.</h3>
                            <p>Lorem ipsum dolor sit amet, tetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim aquis Lorem ipsum dolor sit amet, tetur
                                adipiscing elit, sed do eiusmod tempor </p>
                            <a href="#" class="more_btn__block">More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="table__block ">
                        <div class="event__date-time text-center matchHeigh">
                            <div class="event__time">
                                <span><i class="fa fa-clock-o"></i> 10 am - 11 am</span>
                                <span><i class="fa fa-map-marker"></i> VENICE, India</span>
                            </div>
                            <div class="event__date">25</div>
                            <div class="event__month">June</div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-8">
                    <div class="single_plan__block single_plan__block-img block_bg6 block_bg6 matchHeigh">
                        <div class="plan-content-box plan-content-box__white__bg">
                            <h3>Summer School 2018.</h3>
                            <p>Lorem ipsum dolor sit amet, tetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim aquis Lorem ipsum dolor sit amet, tetur
                                adipiscing elit, sed do eiusmod tempor </p>
                            <a href="#" class="more_btn__block">More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--Event section End-->
    <!--Blog section Start-->
    <section class="latest__block padding ptb-xs-60">
        <div class="container">
            <div class="row pb-30 text-center">
                <div class="col-sm-12 mb-20">
                    <h2><span>Ekstra</span>kurikuler</h2>

                    <span class="b-line"></span>
                    <h3><a style="margin-left: 800px" href="/ekstra" class="more_btn__block mt-0">Ekstrakurikuler lainnya
                            <i class="fa fa-angle-right"></i></a></h3>
                </div>
            </div>

            <div class="row">
                @foreach ($ekskul->take(3) as $row)
                    <div class="col-md-4 mb-30">
                        <div class="img-scale">
                            <figure>
                                <img src="{{ asset('fotosekolah/' . $row->foto) }}" alt="" style="">
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
    {{-- @include('web.footer')
     --}}
    <!--Blog section End-->
    <!--form Section-->
@endsection
