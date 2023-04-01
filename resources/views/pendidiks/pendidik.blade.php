@extends('web.face')

@section('content')
    <x-section1 title="Data Pendidik"></x-section1>
    <div class=" padding ptb-xs-60">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!--Team Section-->
                    <section id="team" class="team-section">

                        <div class="container">
                            <div class="row ">
                                <div class="col-sm-12">
                                    <div class="block-title v-line mb-35">
                                        <h2><span>Data </span> Pendidik</h2>
                                        <p class="italic"> Data Pendidik SMKN 1 Pasuruan </p>
                                        <hr>
                                    </div>
                                </div>
                            </div>

                            <div class="row text-center " style="">
                                @if (count($data) > 0)
                                    @foreach ($data as $row)
                                        <div class="col-sm-3 mb-xs-30 " style="">
                                            <div class="box-hover img-scale ">
                                                <figure class="img-circle">
                                                    <img src="{{ asset('fotosekolah/' . $row->foto) }}" class="img-circle"
                                                        alt=""
                                                        style="width: 150px;
                                        height: 150px;">
                                                </figure>

                                                <div class="team-block bg__none dark-color ">
                                                    <div style=" height: 120px; position: relative">
                                                        <strong>{{ $row->nama }}</strong>
                                                        <div class="margin-top: 20px;"
                                                            style="position: absolute; bottom: 0px; left: 50%; transform: translateX(-50%);">
                                                            <span>{{ $row->tugas }}</span>
                                                            <p><span>{{ $row->pangkat_gol }}</span></p>
                                                        </div>
                                                    </div>
                                                    <hr class="small-divider border-white">
                                                </div>
                                            </div>
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
                            {{ $data->links() }}


                    </section>
                    <!--Team Section End-->
                </div>
            </div>

        </div>
    </div>
@endsection
