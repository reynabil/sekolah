@extends('web.face')

@section('content')
    <x-section1 title="sejarah smk"></x-section1>
    <!-- Intro Section -->
    <!-- About Section -->
    <div id="about-section" class="padding pt-xs-60">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="block-title v-line mb-35 ">
                        <h2><span>Sejarah </span> Sekolah</h2>
                        <p class="italic"> Sejarah SMKN 1 Pasuruan </p>
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
                                <span class="history_date secondary_bg">{{ $row->tahun }}</span>
                                <img style="width: 230px;
                                height: 145px;" src="{{ asset('fotoperkembangan/' . $row->foto) }}" alt="" />
                                <h4 class="mt-15">{{ $row->judul }}</h4>
                                <div style="height: 100px;">
                                    {!! $row->deskripsi !!}
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
