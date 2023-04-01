@extends('web.face')

@section('content')
    <x-section title="sambutan kepala sekolah"></x-section>

    <div id="mission-section" class="ptb ptb-xs-60">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="block-title v-line mb-35 ">
                        <h2><span>Sambutan</span>  Kepala Sekolah</h2>
                        <p class="italic"> {{ $data->nama }} </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="about-block clearfix">
                        <div class="fl width-15per box-shadow mt-15 mb-xs-15"> <img style="width: 200px;
                        height: 250px;" class="img-responsive"
                                src="{{ asset('fotosekolah/' . $data->foto) }}" alt="Photo"> </div>
                        <div class="text-box pt-45 pb-15 pl-70 pl-xs-0 width-75per fl">
                            <div class="box-title">
                                <h3>Assalamu'alaikum wr.wb. </h3>
                            </div>
                            <div class="text-content">
                                {!! $data->deskripsi !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
