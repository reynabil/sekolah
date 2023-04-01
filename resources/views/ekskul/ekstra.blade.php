@extends('web.face')

@section('content')
    <x-section title="ekstrakurikuler"></x-section>


    <section class="latest__block padding ptb-xs-60">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="block-title v-line mb-35 ">
                        <h2><span>Ekstrakurikuler </span> Sekolah</h2>
                        <p class="italic"> Ekstrakurikuler SMKN 1 Pasuruan </p>
                    </div>
                </div>
            </div>
            <div class="row">
                @if (count($data) > 0)
                    @foreach ($data as $row)
                        <div class="col-md-4 mb-30">
                            <div class="img-scale">
                                <figure>
                                    <img src="{{ asset('fotoekskul/' . $row->foto) }}" alt="" style="height: 220px">
                                </figure>
                                <div class="latest__block-post">
                                    <div class="meta-post">

                                    </div>
                                    <h3 class="latest__block-title"><a
                                            href="/detail/{{ $row->id }}">{{ $row->judul }}</a>
                                    </h3>

                                    <div class="flat-link flat-arrow sm  ">
                                        <a href="/detail/{{ $row->id }}" class="more_btn__block">Selengkapnya <i
                                                class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="row mt-50 text-center">
                        <i style="margin-bottom: 5px;" class="fa-solid fa-file fa-3x"></i>
                        <p class="italic">Belum ada Data</p>
                    </div>
                @endif


            </div>
            {{ $data->links() }}
        </div>
    </section>
@endsection
