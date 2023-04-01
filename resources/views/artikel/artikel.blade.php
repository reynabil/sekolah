@extends('web.face')

@section('content')
    <x-section1 title="artikel"></x-section1>
    <section class="course-section__block padding ptb-xs-60">
        <div class="container">
            <div class="row ">
                <div class="col-sm-12">
                    <div class="block-title v-line mb-35">
                        <h2><span>Artikel</span> Seputar Sekolah</h2>
                        <p class="italic"> Artikel Seputar Sekolah SMKN 1 Pasuruan </p>
                    </div>
                </div>
            </div>

            <form method="GET" action="/artikel">
                <input style="height: 40px;
                margin-left: 5px;" type="text" name="keyword" />
                <button style="width: 50px;
                height: 40px;" class="btn btn-warning" type="submit"><i
                        class="fa-solid fa-magnifying-glass"></i></button>

            </form>

            <div class="row pb-30">
                @if (isset($data))
                    @if (count($data) > 0)
                        @foreach ($data as $row)
                            <div class="col-md-3 col-sm-6 mb-30">
                                <div class="courses-block img-scale">
                                    <figure class="img__block">
                                        <img style="height: 200px" class="img-responsive"
                                            src="{{ asset('fotoartikel/' . $row->foto) }}" alt="courses">
                                    </figure>
                                    <div style="height: 250px;" class="courses-content__block">
                                        <div class="class_time"> <i class="fa fa-clock-o">
                                                {{ $row->created_at }}</i></div>
                                        <h4 style="height: 70px;" class="item-title"><a
                                                href="#">{{ $row->judul }}</a>
                                        </h4>
                                        <div class="ellipsis">
                                            {!! $row->deskripsi !!}
                                        </div>

                                        <div style="">
                                            <a href="/detailartikel/{{ $row->id }}"
                                                class="more_btn__block mt-0">Selengkapnya
                                                <i class="fa fa-angle-right"></i></a>
                                            <ul class="courses-info">
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="row mt-80 text-center">
                            <i style="margin-bottom: 5px;" class="fa-solid fa-file fa-3x"></i>
                            <p class="italic">Belum ada Data</p>
                        </div>
                    @endif
                    {{ $data->links() }}
                @endif
            </div>

        </div>
    </section>
@endsection
