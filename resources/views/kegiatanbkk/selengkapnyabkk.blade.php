@extends('web.face')


@section('content')
    <x-section1 title="Kegiatan BKK"></x-section1>
    <!-- Intro Section -->
    <div class="faq ptb-80 ptb-xs-60">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="block-title v-line mb-35 ">
                        <h2><span>Kegiatan </span> BKK</h2>
                        <p class="italic"> Kegiatan BKK SMKN 1 Pasuruan </p>
                    </div>
                </div>
            </div>
            <h3><strong>{{ $data->judul }}</strong> </h3>
            <div>{!! $data->deskripsi !!}</div>
        </div>

    </div>
@endsection
