@extends('web.face')

@section('content')
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/autofill/2.5.2/js/dataTables.autoFill.min.js"></script>
    <script src="https://cdn.datatables.net/autofill/2.5.2/js/autoFill.bootstrap5.min.js"></script>
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
