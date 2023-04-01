@extends('web.face')

@section('content')
    <x-section1 title="Siswa Yang diterima"></x-section1>
    <!-- End Intro Section -->
    <div class=" padding ptb-xs-60">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!--Team Section-->
                    <section id="team" class="team-section">

                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="block-title v-line mb-35 ">
                                        <h2><span>Siswa </span> Yang Di Terima</h2>
                                        <p class="italic"> Siswa Yang Di Terima Kerja SMKN 1 Pasuruan </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-80">
                                <div class="col-sm-12">
                                    {{-- <div class="team-pagination owl-carousel" data-pagination="false" data-items="3"
                                        data-loop="true" data-margin="10" data-center="false" data-navigation="true"
                                        data-desktop="4" data-desktopsmall="3" data-tablet="2" data-mobile="1"
                                        data-autoplay="true" data-autotime="2000" data-autoplayHoverPause="true"> --}}

                                        <!--Team Member-->
                                        @foreach ($data as $item)
                                            <div class="team-member col-md-4 col-sm-6 col-xs-12">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <img style="width: auto;
                                                                height: 250px;"
                                                            src="{{ asset('fotosiswa/' . $item->foto_siswa) }}"
                                                            alt="">
                                                        <!--Overlay Box-->
                                                        <div class="overlay-box">
                                                            <!--User Info-->
                                                            <div class="user-info">
                                                                <div class="text">
                                                                    Siswa
                                                                </div>
                                                                <h5 class="italic" style="margin:auto;">
                                                                    {{ $item->nama_siswa }}
                                                                </h5>
                                                            </div>
                                                            <!--Social Icon Two-->
                                                            <ul class="social-icon-two">
                                                                <li>
                                                                    <a class="fancylight popup-btn"
                                                                    data-fancybox-group="light" href="{{ asset('fotosiswa/' .$item->foto_siswa) }}">Lihat Detail Foto</a>
                                                                </li>
                                                            </ul>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>

                    </section>
                    <!--Team Section End-->
                </div>
            </div>
        </div>
    </div>
@endsection
