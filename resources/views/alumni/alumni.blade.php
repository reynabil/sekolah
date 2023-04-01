@extends('web.face')
@section('content')
    <x-section1 title="Profil Alumni"></x-section1>
    <div class=" padding ptb-xs-60">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!--Team Section-->
                    <section id="team" class="team-section">

                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="block-title v-line mb-35 ">
                                        <h2><span>Profil </span> Alumni</h2>
                                        <p class="italic"> Profil Alumni SMKN 1 Pasuruan </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-80 text-center">
                                @if (count($data) > 0)
                                    @foreach ($data as $item)
                                        <div style="margin-bottom: 30px" class="col-sm-3 mb-xs-30">
                                            <div class="box-hover img-scale">
                                                <figure>
                                                    <img style="width: 420px;
                                            height: 240px;"
                                                        src="{{ asset('fotoalumni/' . $item->foto) }}" alt="">
                                                </figure>

                                                <div class="team-block">
                                                    <strong class="text-align:center">{{ $item->nama_alumni }}</strong>
                                                    <h4>{{ $item->pekerjaan }}</h4>
                                                    <hr class="small-divider border-white">
                                                    <ul class="social-icons">
                                                        <li>

                                                            <a style="color: whitesmoke;"
                                                                href="/detailalumni/{{ $item->id }}">
                                                                <p>Detail Alumni</p>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                <i style="margin-bottom: 5px;" class="fa-solid fa-file fa-3x"></i>
                                <p class="italic">Belum ada Data</p>
                                @endif




                            </div>
                            {{ $data->links() }}
                        </div>

                    </section>
                    <!--Team Section End-->
                </div>
            </div>
        </div>
    </div>
@endsection
