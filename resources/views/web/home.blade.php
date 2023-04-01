@extends('web.face')

@section('content')
    @include('web.slider')
    <!--  Main Banner End Here-->
    <!--top Section start Here-->
    @include('web.border')
    <!--top Section End Here-->
    <!--About Section Start Here-->
    <section class="about-section__block text-center pt-90">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2>Selamat Datang di SMKN 1 Pasuruan</h2>
                    <hr>
                    <p>
                    <h6 class="italic">Selamat datang siswa yang terbaik! Saya harap Anda akan memberikan upaya terbaik dalam
                        belajar dan membuat orang tua kalian bangga.</h6>
                    </p>
                    <img style="width: 900px;" src="{{ asset('fotosekolah/education.png') }}" alt="about"
                        class="img-responsive pt-60">
                </div>
            </div>
        </div>
    </section>
    <div id="mission-section" class="ptb ptb-xs-60">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="block-title v-line mb-35 ">
                        <h2><span>Sambutan</span> Kepala Sekolah</h2>
                        <p class="italic">{{ $sambutan->nama }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="about-block clearfix">
                        <div class="fl width-15per box-shadow mt-15 mb-xs-15"> <img class="img-responsive"
                                src=" {{ asset('fotosekolah/' . $sambutan->foto) }}" style="height: 255px; width: 200px;"
                                alt="Photo"> </div>
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
                <div class="col-sm-6 mb-20 text-right text-xs-left">

                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="block-title v-line mb-35 ">
                            <h2><span>Berita </span> Seputar Sekolah</h2>
                            <p class="italic"> Berita Seputar SMKN 1 Pasuruan </p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <a style="margin-left: 1070px;" href="/berita"><button style="margin-bottom: 20px" class="btn btn-warning">
                    Berita Lainnya <i class="fa fa-angle-right"></i></button> </a> --}}


            <div class="row pb-30">
                @foreach ($berita->take(4) as $row)
                    <div class="col-md-3 col-sm-6 mb-30">

                        <div class="courses-block img-scale">

                            <figure class="img__block">
                                <img style="height: 200px;
                                    width:455px;"
                                    class="img-responsive" src="{{ asset('fotosekolah/' . $row->foto) }}" alt="courses">
                            </figure>
                            <div class="courses-content__block">
                                <div class="class_time"> <i class="fa fa-clock-o">{{ $row->created_at }}</i></div>
                                <h4 style="height: 70px;" class="item-title"><a href="#">{{ $row->judul }}</a></h4>
                                <div class="ellipsis">
                                    {!! $row->deskripsi !!}
                                </div>
                                <a href="/selengkapnya/{{ $row->id }}" class="more_btn__block mt-0">Selengkapnya
                                    <i class="fa fa-angle-right"></i></a>
                                <ul class="courses-info">
                                </ul>


                            </div>
                        </div>

                    </div>
                @endforeach


            </div>
    </section>

    <section class="counter-section__block counter-section__img padding ptb-xs-60"
        style="background-image: url('{{ asset('education/theembazaar.com/tf/educate/assets/images/testsmk2.jpg') }}')">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 counter-section__box">
                    <span class="counter" data-count="{{ $pendidik }}">0</span>
                    <p>Jumlah Pendidik</p>
                </div>
                <div class="col-sm-6 col-md-3 counter-section__box">
                    <span class="counter" data-count="{{ $tenaga }}">0</span>
                    <p>Jumlah Tenaga Non pendidik</p>
                </div>
                <div class="col-sm-6 col-md-3 counter-section__box">
                    <span class="counter" data-count="{{ $jurusan }}">0</span>
                    <p>Jumlah Jurusan</p>
                </div>
                <div class="col-sm-6 col-md-3 counter-section__box">
                    <span class="counter" data-count="{{ $fasilitas }}">0</span>
                    <p>Jumlah Kelas</p>
                </div>
            </div>
        </div>
    </section>
    <section class="latest__block padding ptb-xs-60">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="block-title v-line mb-35 ">
                        <h2><span>Ekstrakurikuler </span> Sekolah</h2>
                        <p class="italic"> Ekstrakurikuler SMKN 1 Pasuruan </p>
                    </div>
                </div>
                {{-- <h3><a style="margin-left: 850px;
                margin-bottom: 20px;" href="/ekstra"
                        class="more_btn__block mt-0">Ekstrakurikuler lainnya
                        <i class="fa fa-angle-right"></i></a></h3> --}}
            </div>


            <div class="row">
                @foreach ($ekskul->take(3) as $row)
                    <div class="col-md-4 mb-30">
                        <div class="img-scale">
                            <figure>
                                <img style="width: 430px;
                                height:250px;"
                                    src="{{ asset('fotosekolah/' . $row->foto) }}" alt="" style="">
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



    <div id="our-work" class="pt-90 pt-xs-60" style="width: 100%">
        <div class="container">
            <div class="row text-center">
                <div class="col-sm-8 col-sm-push-2 col-md-6 col-md-push-3 mb-30">
                    <div class="heading-box pb-15">
                        <h2><span>Kegiatan </span> Terakhir</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid gap-4" style="width:100%">
            <div class="row" class="col-12">
                @foreach ($kegiatan->take(4) as $item)
                <div class="col-sm-6 col-md-3 no-padding">
                    <div class="item-box" class="col-12">
                        <a> <img style="width:100%;
                        height:370px;" alt="1"
                                src="{{ asset('foto_home/' . $item->foto) }}" class="item-container"> </a>
                        <div class="link-zoom">
                            <a href="{{ asset('foto_home/' . $item->foto) }}" class="fancylight popup-btn"
                                data-fancybox-group="light"><i class="fa fa-search-plus"></i> </a>
                        </div>
                        <div class="gallery-heading">
                            <h4><a href="#">{{ $item->judul }}</a></h4>
                            <p>
                                SMKN 1 Kota Pasuruan
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach

               


            </div>
        </div>
    </div>
@endsection
