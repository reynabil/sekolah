@extends('web.face')

@section('content')
    <section class="inner-intro bg-img light-color overlay-before parallax-background "
        style="background: url({{ asset('education/theembazaar.com/tf/educate/assets/images/banner/testsmk3.jpg') }})">
        <div class="container">
            <div class="row title">
                <h1 data-title="About"><span>Identitas Sekolah</span></h1>
            </div>
        </div>
    </section>
    <!-- Intro Section -->
    <!-- About Section -->
    <div id="about-section" class="padding pt-xs-60">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="block-title v-line mb-35 ">
                        <h2><span>Identitas</span> Sekolah</h2>

                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-sm-6 pb-xs-30">

                    <div class="text-content">
                        {!! $data->bait1 !!}
                    </div>
                    {{-- {!! $data->bait2 !!} --}}
                </div>
                <div class="col-sm-6">
                    <img style="width: 1000px; margin-bottom: 30px;"; class="img-responsive"
                        src="{{ asset('fotosekolah/' . $data->fotos) }}" alt="Photo">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.3554894960134!2d112.91365326049677!3d-7.6448677234092015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7c60c36bb4325%3A0x98bc4d9aa7c440c!2sVocational%20High%20School%201%20Pasuruan!5e0!3m2!1sen!2sid!4v1674697257446!5m2!1sen!2sid"
                        width="555" height="550" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>

        </div>
    </div>
    <div id="mission-section" style="padding-top: 1px" class="ptb ptb-xs-60">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="block-title v-line mb-35 ">
                        <h2><span>Vidio </span>Sekolah </h2>
                        <p class="italic"> Vidio singkat tentang profil sekolah </p>
                    </div>
                </div>
            </div>
            <section class="ptb ptb-xs-60">
                <div class="container">
                    <div class="row">
                        <!-- Post Item -->
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-md-12 blog-post-hr">
                                    <div class="blog-post mb-45">
                                        <div class="post-media">
                                            <iframe width="560" height="400"
                                                src="https://www.youtube.com/embed/8S_iBbv98UA" title="YouTube video player"
                                                frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                allowfullscreen></iframe>
                                        </div>

                                    </div>
                                    <hr />

                                </div>
                            </div>
                        </div>
                        <!-- End Post Item -->
                        <!-- Sidebar -->
                        <div class="col-sm-3 mt-sm-60">
                            <div class="sidebar-widget">
                                <h4>Lainnya</h4>

                                <ul class="categories">
                                    <li> <a href="/sambutan">Sambutan Kepala Sekolah</a> </li>
                                    <li> <a href="/visim">Visi Misi</a> </li>
                                    <li> <a href="/fase">Fasilitas</a> </li>
                                    <li> <a href="/ekstra">Ekstrakurikuler</a> </li>
                                    <li> <a href="/sejarah">Sejarah SMK</a> </li>
                                </ul>
                            </div>

                        </div>
                        <!-- End Sidebar -->
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
