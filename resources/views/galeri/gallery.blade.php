@extends('web.face')

@section('content')
    <x-section1 title="Galeri"></x-section1>

    <section id="work" class="padding">
        <div class="container">
            <!-- work Filter -->

            <div class="block-title v-line mb-35 ">
                <h2><span>Galeri </span> Sekolah</h2>
                <p class="italic"> Galeri Sekolah SMKN 1 Pasuruan </p>
            </div>
            <!-- End work Filter -->
            <div class="row container-grid nf-col-3">
                @if (count($data) > 0)
                    @foreach ($data as $item)
                        <div class="nf-item branding coffee spacing">
                            <div class="item-box">
                                <a> <img style="width: 430px;
                        height: 250px;" alt="1"
                                        src="{{ asset('fotogaleri/' . $item->foto) }}" class="item-container">
                                </a>
                                <div class="link-zoom">
                                    <a href="{{ asset('fotogaleri/' . $item->foto) }}" class="fancylight popup-btn"
                                        data-fancybox-group="light"> <i class="fa fa-search-plus"></i> </a>
                                </div>

                            </div>
                            <h4 style="text-align: center" class="">{{ $item->judul }}</h4>
                        </div>
                    @endforeach
                @else
                <div class="row mt-50 text-center">
                    <i style="margin-bottom: 5px;"
                        class="fa-solid fa-file fa-3x"></i>
                    <p class="italic">Belum ada Data</p>
                </div>
                @endif


            </div>

        </div>

    </section>
@endsection
