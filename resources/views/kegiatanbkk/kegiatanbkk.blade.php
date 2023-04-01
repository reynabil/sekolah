@extends('web.face')

@section('content')
    <x-section1 title="Kegiatan BKK"></x-section1>
    <div id="story-section" class="ptb ptb-xs-60 gray-bg">
        <div class="container">
            <div class="row ">
                <div class="col-sm-12">
                    <div class="block-title v-line mb-35">
                        <h2><span>Kegiatan</span> BKK</h2>
                        <p class="italic"> Kegiatan BKK SMKN 1 Pasuruan </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="ui-timline-container">
                        <div class="ui-timeline">
                            <div class="tl-item">
                                <div class="tl-body">
                                    <div class="tl-entry">
                                        <div class="tl-caption"> <a href="javascript:;"
                                                class="btn btn-primary btn-block">Kegiatan BKK</a> </div>
                                    </div>
                                </div>
                            </div>
                            @foreach ($data as $item)
                                <div class="tl-item {{ $loop->even ? 'alt' : '' }}">
                                    <div class="tl-body">
                                        <div class="tl-entry">
                                            <div class="tl-time"></div>

                                            <div class="tl-icon btn-icon-round btn-icon btn-icon-thin btn-info"> <i
                                                class="fa-solid fa-calendar-days"></i> </div>
                                            <div class="tl-content">
                                               <a href="/selengkapnyabkk/{{ $item->id }}"><h4 class="tl-tile text-primary">{{ $item->judul }}</h4></a>
                                                <p>Tanggal Terbit : {{ $item->created_at}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
