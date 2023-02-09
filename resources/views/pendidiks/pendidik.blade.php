@extends('web.face')

@section('content')
    <section class="inner-intro bg-img light-color overlay-before parallax-background"
        style="background-image: url('{{ asset('education/theembazaar.com/tf/educate/assets/images/testsmk2.jpg') }}')">
        <div class="container">
            <div class="row title">
                <h1 data-title="history"><span>Data Pendidik</span></h1>
            </div>
        </div>
    </section>
    <div class=" padding ptb-xs-60">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!--Team Section-->
                    <section id="team" class="team-section">

                        <div class="container">
                            <div class="row text-center pb-40">
                                <div class="col-sm-12">
                                    <div class="heading-box ">
                                        <h2><span>Data</span> Pendidik</h2>
                                        <span class="b-line"></span>
                                    </div>
                                </div>
                            </div>

                            {{-- <section>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            {!! $dataTable->table() !!}
                                        </div>

                                    </div>
                                </div>
                            </section>
                            {!! $dataTable->scripts() !!} --}}
                            <div class="row text-center " style="">
                                @foreach ($data as $row)
                                    <div class="col-sm-3 mb-xs-30 " style="">
                                        <div class="box-hover img-scale ">
                                            <figure class="img-circle">
                                                <img src="{{ asset('fotosekolah/' . $row->foto) }}" class="img-circle"
                                                    alt=""
                                                    style="width: 300px;
                                            height: 260px;">
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

                                {{-- <div class="col-sm-3 mb-xs-30">
                                    <div class="box-hover img-scale">
                                        <figure class="img-circle">
                                            <img src="{{ asset('education/theembazaar.com/tf/educate/assets/images/kepsek.jpg') }}"
                                                class="img-circle" alt=""
                                                style="width: 300px;
                                            height: 260px;">
                                        </figure>

                                        <div class="team-block bg__none dark-color ">
                                            <div style="height: 120px; position: relative">
                                                <strong>Hj. Inul Qomariyah, SPd.</strong>
                                                <div class="margin-top: 20px;"
                                                    style="position: absolute; bottom: 0px; left: 50%; transform: translateX(-50%);">
                                                    <span>Produktif Pemasaran</span>
                                                    <p><span>Pembina Tk. I / IV/b</span></p>
                                                </div>
                                            </div>
                                            <hr class="small-divider border-white">
                                        </div>

                                    </div>
                                </div>
                                <div class="col-sm-3 mb-xs-30">
                                    <div class="box-hover img-scale">
                                        <figure class="img-circle">
                                            <img src="{{ asset('education/theembazaar.com/tf/educate/assets/images/kepsek.jpg') }}"
                                                class="img-circle" alt=""
                                                style="width: 300px;
                                            height: 260px;">
                                        </figure>

                                        <div class="team-block bg__none dark-color">
                                            <strong>Agustini Riyatmiyati, S.Pd, M.Pd.</strong>
                                            <div style="padding-top: 20px" class="pt-20">
                                                <span>Produktif Pemasaran</span>
                                                <p><span>Pembina Tk. I / IV/b</span></p>
                                            </div>
                                            <hr class="small-divider border-white">
                                        </div>
                                    </div>
                                    <div class="col-sm-3 mb-xs-30 ">
                                        <div class="box-hover img-scale">
                                            <figure class="img-circle">
                                                <img src="{{ asset('education/theembazaar.com/tf/educate/assets/images/kepsek.jpg') }}"
                                                    class="img-circle"
                                                    style="width: 300px;
                                                height: 260px;"
                                                    alt="">
                                            </figure>

                                            <div class="team-block bg__none dark-color">
                                                <strong>Sri Handayani, S.Pd</strong>
                                                <span>Produktif Akuntansi</span>
                                                <p><span>Pembina Tk. I / IV/b</span></p>
                                                <hr class="small-divider border-white">

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row text-center">
                                    <div class="col-sm-3 mb-xs-30">
                                        <div class="box-hover img-scale">
                                            <figure class="img-circle">
                                                <img src="{{ asset('education/theembazaar.com/tf/educate/assets/images/team/team1.jpg') }}"
                                                    class="img-circle" alt="">
                                            </figure>

                                            <div class="team-block bg__none dark-color">
                                                <strong>Tommy Woodhouse</strong>
                                                <span>Senior Lecturer</span>
                                                <hr class="small-divider border-white">
                                                <ul class="social-icons">
                                                    <li>
                                                        <a href="#"><i class="fa fa-facebook"
                                                                aria-hidden="true"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-twitter"
                                                                aria-hidden="true"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-instagram"
                                                                aria-hidden="true"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-linkedin"
                                                                aria-hidden="true"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-sm-3 mb-xs-30">
                                        <div class="box-hover img-scale">
                                            <figure class="img-circle">
                                                <img src="{{ asset('education/theembazaar.com/tf/educate/assets/images/team/team2.jpg') }}"
                                                    class="img-circle" alt="">
                                            </figure>

                                            <div class="team-block bg__none dark-color">
                                                <strong>Danny Burton</strong>
                                                <span>Senior Lecturer</span>
                                                <hr class="small-divider border-white">
                                                <ul class="social-icons">
                                                    <li>
                                                        <a href="#"><i class="fa fa-facebook"
                                                                aria-hidden="true"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-twitter"
                                                                aria-hidden="true"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-instagram"
                                                                aria-hidden="true"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-linkedin"
                                                                aria-hidden="true"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-skype"
                                                                aria-hidden="true"></i></a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-sm-3 mb-xs-30">
                                        <div class="box-hover img-scale">
                                            <figure class="img-circle">
                                                <img src="{{ asset('education/theembazaar.com/tf/educate/assets/images/team/team3.jpg') }}"
                                                    class="img-circle" alt="">
                                            </figure>

                                            <div class="team-block bg__none dark-color">
                                                <strong>Melody Clark</strong>
                                                <span>Senior Lecturer</span>
                                                <hr class="small-divider border-white">
                                                <ul class="social-icons">
                                                    <li>
                                                        <a href="#"><i class="fa fa-facebook"
                                                                aria-hidden="true"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-twitter"
                                                                aria-hidden="true"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-instagram"
                                                                aria-hidden="true"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-linkedin"
                                                                aria-hidden="true"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-skype"
                                                                aria-hidden="true"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 mb-xs-30">
                                        <div class="box-hover img-scale">
                                            <figure class="img-circle">
                                                <img src="{{ asset('education/theembazaar.com/tf/educate/assets/images/team/team4.jpg') }}"
                                                    class="img-circle" alt="">
                                            </figure>

                                            <div class="team-block bg__none dark-color">
                                                <strong>Elizabeth Jones</strong>
                                                <span>Senior Lecturer</span>
                                                <hr class="small-divider border-white">
                                                <ul class="social-icons">
                                                    <li>
                                                        <a href="#"><i class="fa fa-facebook"
                                                                aria-hidden="true"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-twitter"
                                                                aria-hidden="true"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-instagram"
                                                                aria-hidden="true"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-linkedin"
                                                                aria-hidden="true"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-skype"
                                                                aria-hidden="true"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row text-center">
                                    <div class="col-sm-3 mb-xs-30">
                                        <div class="box-hover img-scale">
                                            <figure class="img-circle">
                                                <img src="{{ asset('education/theembazaar.com/tf/educate/') }}assets/images/team/team1.jpg"
                                                    class="img-circle" alt="">
                                            </figure>

                                            <div class="team-block bg__none dark-color">
                                                <strong>Tommy Woodhouse</strong>
                                                <span>Senior Lecturer</span>
                                                <hr class="small-divider border-white">
                                                <ul class="social-icons">
                                                    <li>
                                                        <a href="#"><i class="fa fa-facebook"
                                                                aria-hidden="true"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-twitter"
                                                                aria-hidden="true"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-instagram"
                                                                aria-hidden="true"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-linkedin"
                                                                aria-hidden="true"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-skype"
                                                                aria-hidden="true"></i></a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-sm-3 mb-xs-30">
                                        <div class="box-hover img-scale">
                                            <figure class="img-circle">
                                                <img src="{{ asset('education/theembazaar.com/tf/educate/') }}assets/images/team/team2.jpg"
                                                    class="img-circle" alt="">
                                            </figure>

                                            <div class="team-block bg__none dark-color">
                                                <strong>Danny Burton</strong>
                                                <span>Senior Lecturer</span>
                                                <hr class="small-divider border-white">
                                                <ul class="social-icons">
                                                    <li>
                                                        <a href="#"><i class="fa fa-facebook"
                                                                aria-hidden="true"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-twitter"
                                                                aria-hidden="true"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-instagram"
                                                                aria-hidden="true"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-linkedin"
                                                                aria-hidden="true"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-skype"
                                                                aria-hidden="true"></i></a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-sm-3 mb-xs-30">
                                        <div class="box-hover img-scale">
                                            <figure class="img-circle">
                                                <img src="{{ asset('education/theembazaar.com/tf/educate/') }}assets/images/team/team3.jpg"
                                                    class="img-circle" alt="">
                                            </figure>

                                            <div class="team-block bg__none dark-color">
                                                <strong>Melody Clark</strong>
                                                <span>Senior Lecturer</span>
                                                <hr class="small-divider border-white">
                                                <ul class="social-icons">
                                                    <li>
                                                        <a href="#"><i class="fa fa-facebook"
                                                                aria-hidden="true"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-twitter"
                                                                aria-hidden="true"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-instagram"
                                                                aria-hidden="true"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-linkedin"
                                                                aria-hidden="true"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-skype"
                                                                aria-hidden="true"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 mb-xs-30">
                                        <div class="box-hover img-scale">
                                            <figure class="img-circle">
                                                <img src="{{ asset('education/theembazaar.com/tf/educate/') }}assets/images/team/team4.jpg"
                                                    class="img-circle" alt="">
                                            </figure>

                                            <div class="team-block bg__none dark-color">
                                                <strong>Elizabeth Jones</strong>
                                                <span>Senior Lecturer</span>
                                                <hr class="small-divider border-white">
                                                <ul class="social-icons">
                                                    <li>
                                                        <a href="#"><i class="fa fa-facebook"
                                                                aria-hidden="true"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-twitter"
                                                                aria-hidden="true"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-instagram"
                                                                aria-hidden="true"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-linkedin"
                                                                aria-hidden="true"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-skype"
                                                                aria-hidden="true"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}


                            </div>

                    </section>
                    <!--Team Section End-->
                </div>
            </div>
        </div>
    </div>
@endsection
