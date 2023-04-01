@extends('web.face')

@section('content')
    <x-section title="Visi Misi"></x-section>
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
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="block-title v-line mb-35 ">
                                                <h2><span>Visi </span>Misi</h2>
                                                <p class="italic"> Visi Misi SMKN 1 Pasuruan </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-content">
                                        {{-- <p> SMKN 1 Pasuruan merupakan sekolah menengah kejuruan yang memiliki visi misi sebagai berikut :</p> --}}
                                    </div>
                                    <hr class="divider">
                                    <div class="post-content">
                                        <div class="post-img">
                                            <img class="img-responsive" src="{{ asset('fotosekolah/' . $data->foto) }}"
                                                style="height: 200px;
                                             width: 750px;"
                                                alt="Photo">
                                        </div>
                                    </div>

                                </div>

                                <div class="col-sm-6 col-md-4">
                                    <div class="dark-bg our-vision light-color padding-40">
                                        <div class="block-title">
                                            <h2><span>Visi SMK Negeri 1 Pasuruan </span> </h2>
                                            <p class="italic"> </p>
                                        </div>
                                        <p> {!! $data->visi !!}</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 col-md-8">
                                <!-- About Section -->
                                <div class="pt-60 pt-xs-60">
                                    <div class="accordion-box accordion-box-1 accordion-box-2 light-color"
                                        data-accordion-group>


                                        <div class="accordion open" data-accordion>
                                            <div class="accordion-title" data-control>
                                                <p>Misi</p>
                                            </div>
                                            <div class="accordion-content animated" data-content>
                                                <div class="content-inner">
                                                    <p>{!! $data->misi !!}</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion" data-accordion>
                                            <div class="accordion-title" data-control>
                                                <p>Tujuan</p>
                                            </div>
                                            <div class="accordion-content animated" data-content>
                                                <div class="content-inner">
                                                    <p>{!! $data->tujuan !!}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion" data-accordion>
                                            <div class="accordion-title" data-control>
                                                <p>Komitmen</p>
                                            </div>
                                            <div class="accordion-content animated" data-content>
                                                <div class="content-inner">
                                                    <p>{!! $data->komitmen !!}</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- About Section End-->
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="sidebar-widget">
                                    <h4>Berita lainnya</h4>
                                    @foreach ($berita->take(6) as $row)
                                        <ul class="categories">
                                            <li><a href="/selengkapnya/{{ $row->id }}"><i
                                                        class="fa fa-chevron-right"></i>{{ $row->judul }}</a></li>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- About Section End-->


                </div>



            </div>
        </div>
    </section>
@endsection
