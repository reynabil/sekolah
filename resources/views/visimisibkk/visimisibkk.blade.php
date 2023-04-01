@extends('web.face')

@section('content')
    <x-section title="Visi Misi BKK"></x-section>
    <!-- Intro Section -->
    <!-- About Section -->
    <div id="about-section" class="pt-80 pt-xs-60">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-8">
                    <div class="block-title v-line">
                        <h2><span>Misi</span> BKK</h2>
                        <p class="italic"> Berisi informasi visi dan misi BKK SMK Negeri 1 Pasuruan.
                        </p>
                        <hr>
                    </div>
                    <div class="text-content">
                        {!! $data->misibkk !!}
                    </div>
                    <hr class="divider">
                    <div class="post-content">
                        <div style="margin-bottom: 30px" class="post-img"> <img
                                style="width: 750px;
                        height: 261px;" class="img-responsive"
                                src="{{ asset('fotosekolah/' . $data->foto) }}" alt="Photo">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="dark-bg our-vision light-color padding-40">
                        <div class="block-title">
                            <h2><span>Visi</span> BKK</h2>
                            <p class="italic">
                                <hr>
                            </p>
                        </div>
                        <p> {{ $data->visibkk }} </p>
                    </div>
                </div>
                <div class="col-sm-3 mt-sm-60" style="margin-top: 40px">
                    <div class="sidebar-widget">
                        <h4>Lainnya</h4>

                        <ul class="categories">
                            <li> <a href="/sambutan">Sambutan Kepala Sekolah</a> </li>
                            <li> <a href="/visim">Visi Misi</a> </li>
                            <li> <a href="/fase">Fasilitas</a> </li>
                            <li> <a href="/ekstra">Ekstrakurikuler</a> </li>
                            <li> <a href="/sejarah">Sejarah SMK</a> </li>
                            <li> <a href="/identity">Identitas Sekolah</a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
