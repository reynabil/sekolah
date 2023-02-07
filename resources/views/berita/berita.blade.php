@extends('web.face')

@section('content')
    <section class="inner-intro bg-img light-color overlay-before parallax-background"
        style="background-image: url('{{ asset('education/theembazaar.com/tf/educate/assets/images/testsmk2.jpg') }}')">
        <div class="container">
            <div class="row title">
                <h1 data-title="history"><span>Berita Seputar Sekolah</span></h1>
            </div>
        </div>
    </section>
    <section class="course-section__block padding ptb-xs-60">
        <div class="container">
            <div class="row pb-30">
                <div class="col-sm-6 mb-20">
                    <h2>Berita Seputar Sekolah</h2>

                </div>
                <div class="col-sm-6 mb-20 text-right text-xs-left">
                </div>
            </div>

            <div class="row pb-30">
                @foreach ($data as $row)
                    <div class="col-md-3 col-sm-6 mb-30">
                        <div class="courses-block img-scale">
                            <figure class="img__block">
                                <img style="height: 200px" class="img-responsive"
                                    src="{{ asset('fotosekolah/' . $row->foto) }}" alt="courses">
                            </figure>
                            <div class="courses-content__block">
                                <div class="class_time"> <i
                                        class="fa fa-clock-o">{{ $row->created_at->format('d-m-y') }}</i></div>
                                <h4 class="item-title"><a href="#">{{ $row->judul }}</a></h4>
                                <p class="ellipsis">{{ $row->deskripsi }}
                                </p>
                                <a href="/selengkapnya/{{ $row->id }}" class="more_btn__block mt-0">Selengkapnya <i
                                        class="fa fa-angle-right"></i></a>
                                <ul class="courses-info">
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
@endsection
