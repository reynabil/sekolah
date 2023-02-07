@extends('web.face')

@section('content')
    <section class="inner-intro bg-img light-color overlay-before parallax-background"
        style="background-image: url('{{ asset('education/theembazaar.com/tf/educate/assets/images/smk1.png') }}')">
        <div class="container">
            <div class="row title">
                <h1 data-title="history"><span>Visi Misi</span></h1>
            </div>
        </div>
    </section>
    <!-- Intro Section -->
    <section class="padding ptb-xs-60">
        <div class="container">
            <div class="row">
                <div class="col-sm-13">
                    <!-- About Section -->
                    <div id="about-section" class="pt-80 pt-xs-60">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-6 col-md-8">
                                    <div class="block-title v-line">
                                        <h2><span>Visi</span> Misi</h2>
                                        <p class="italic">  </p>
                                    </div>
                                    <div class="text-content">
                                        {{-- <p> SMKN 1 Pasuruan merupakan sekolah menengah kejuruan yang memiliki visi misi sebagai berikut :</p> --}}
                                    </div>
                                    <hr class="divider">
                                    <div class="post-content">
                                        <div class="post-img">
                                             <img class="img-responsive" src="{{ asset('fotosekolah/' . $data->foto) }}" style="height: 200px"
                                                alt="Photo">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="dark-bg our-vision light-color padding-40">
                                        <div class="block-title">
                                            <h2><span>Visi SMK Negeri 1 Pasuruan </span> </h2>
                                            <p class="italic">  </p>
                                        </div>
                                        <p> Terwujudnya insan yang berakhlak mulia, kreatif, inovatif, mandiri, dan peduli lingkungan.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class=" pt-xs-60">
                        <div class="history-timeline__block">
                            <ul class="history-timeline">
                                <li>

                                </li>
                                {{-- <li>
                                    <div class="icon-dot"></div>
                                    <p class="date text-block text-bold m-b-30"></p>
                                    <div class="mv-block">
                                        <div class="mv-block__mission mv-block__mission-bg" style="background:#0c1f38">
                                            <h3 style="color: #fff">{{ $data->jvisi }}</h3>
                                            <p style="color: #fff">

                                                {{ $data->visi }}</p>
                                        </div>

                                    </div>
                                </li> --}}
                                <li>
                                    <div class="icon-dot"></div>
                                    <p class="date text-block text-bold m-b-30"></p>
                                    <div class="mv-block">
                                        <div class="mv-block__mission mv-block__mission-bg">
                                            <h3>Misi SMK 1 Negeri Pasuruan</h3>
                                            {!! $data->misi !!}

                                        </div>

                                    </div>
                                </li>
                                <li>
                                    <div class="icon-dot"></div>
                                    <p class="date text-block text-bold m-b-30"></p>
                                    <div class="mv-block">
                                        <div class="mv-block__mission mv-block__mission-bg">
                                            <h3>Tujuan </h3>
                                            {!! $data->tujuan !!}
                                        </div>

                                    </div>
                                </li>
                                <li>
                                    <div class="icon-dot"></div>
                                    <p class="date text-block text-bold m-b-30"></p>
                                    <div class="mv-block">
                                        <div class="mv-block__mission mv-block__mission-bg">
                                            <h3>Komitmen SMK Negeri 1 Pasuruan : Pelangi "S" Biru</h3>

                                            {!! $data->komitmen !!}
                                        </div>

                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="abt-block">

                        </div>

                    </div>
                    <!-- About Section End-->

                </div>



            </div>
        </div>
    </section>
@endsection
