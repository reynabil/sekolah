@extends('web.face')


@section('content')
    <!-- Intro Section -->
    <x-section title="Detail Ekstrakurikuler"></x-section>
    <!-- Intro Section -->
    <section class="course-section__block padding ptb-xs-60">
        <div class="container">
            <div class="row">
                <div class="col-sm-9 mb-30">
                    <div class="course__details_block">
                        <div class="course__figure_img">
                            <img src="{{ asset('fotoekskul/' . $cari->foto) }}" alt="" style="width: 800px;
                            height: 400px;";>
                        </div>
                        <div class="course__text_details mt-40">
                            <h1 class="mb-20">{{ $cari->judul }}</h1>
                            <p>{!! $cari->deskripsi !!}</p>
                        </div>
                    </div>

                </div>
                <!--Sidebar-->

                <div class="col-sm-3 mt-sm-60">
                    <div class="sidebar-widget">
                        <h4>Ekskul lainyya</h4>
                        @foreach ($each as $row)
                            <ul class="categories">
                                <li><a href="/detail/{{ $row->id }}"><i class="fa fa-chevron-right"></i>{{ $row->judul }}</a></li>
                        @endforeach
                    </div>
                </div>
                <!--Sidebar-->

            </div>

        </div>
    </section>
@endsection
