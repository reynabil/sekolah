@extends('web.face')

@section('content')
    <x-section title="Kegiatan Sekolah"> </x-section>

    <!-- About Section End-->
    <!-- Story Section -->
    <div id="story-section" class="ptb ptb-xs-60 gray-bg">
        <div class="container">
            <div class="row ">
                <div class="col-sm-12">
                    <div class="block-title v-line mb-35">
                        <h2><span>Kegiatan</span> Sekolah</h2>
                        <p class="italic"> Kegiatan Sekolah dan PHBN SMKN 1 Pasuruan </p>
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
                                                class="btn btn-primary btn-block">Agenda Kegiatan</a> </div>
                                    </div>
                                </div>
                            </div>
                            @foreach ($data as $item)
                                <div class="tl-item {{ $loop->odd ? 'alt' : '' }}">
                                    <div class="tl-body">
                                        <div class="tl-entry">
                                            <div class="tl-time"> {{ $item->tanggal->format('d M Y') }} </div>
                                            <div class="tl-icon btn-icon-round btn-icon btn-icon-thin btn-info"> <i
                                                    class="fa-solid fa-calendar-days"></i> </div>
                                            <div class="tl-content">
                                                <h4 class="tl-tile text-primary"> {{ $item->kegiatan }} </h4>
                                                <p>{!! $item->keterangan !!}</p>
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
    <!-- Mission Section -->
@endsection
