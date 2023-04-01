@extends('web.face')

@section('content')
    <x-section title="PEndataan alumni"></x-section>
    <section class="ptb ptb-xs-60">
        <div class="container contact-form pt-80 pt-xs-60 mt-up">
            <div class="row">
                <div class="col-sm-12">
                    <h4>Form Pendataan Alumni</h4>
                    <p> Silahkan Isi disini jika kalian ingin di data </p>
                    <!-- Contact FORM -->
                    <form action="/insertbiodataalumni" method="post" enctype="multipart/form-data" class="contact-form mt-45" id="contact">
                        @csrf
                        <!-- IF MAIL SENT SUCCESSFULLY -->
                        <div id="success">
                            <div role="alert" class="alert alert-success"> <strong>Thanks</strong> for using our
                                template. Your message has been sent. </div>
                        </div>
                        <!-- END IF MAIL SENT SUCCESSFULLY -->
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-field">
                                    <input class="input-sm form-full" value="{{ old('nama_alumni') }}" id="name" type="text" name="nama_alumni"
                                        placeholder="Nama">
                                </div>
                                <div class="form-field">
                                    <input class="input-sm form-full" value="{{ old('alamat') }}" id="name" type="text" name="alamat"
                                        placeholder="Alamat">
                                </div>
                                <div class="form-field">
                                    <input class="input-sm form-full" value="{{ old('email') }}" id="email" type="text" name="email"
                                        placeholder="Email">
                                </div>
                                <div class="form-field">
                                    <input class="input-sm form-full" value="{{ old('no_telp') }}" id="sub" type="text" name="no_telp"
                                        placeholder="No Telp">
                                </div>

                            </div>
                            <div class="col-sm-6">
                                <div class="form-field">
                                    <textarea class="form-full" id="message" value="{{ old('testimoni') }}" rows="7" name="testimoni" placeholder="Testimoni"></textarea>
                                </div>
                            </div>
                            <div style="margin-top:25px;" class="col-sm-6">
                                <div class="form-field">
                                    <input class="input-sm form-full" id="sub" value="{{ old('tahunlulus') }}" type="text" name="tahunlulus"
                                        placeholder="Tahun Lulus">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-field">
                                    <input class="input-sm form-full" id="sub" value="{{ old('jurusan') }}" type="text" name="jurusan"
                                        placeholder="Jurusan">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-field">
                                    <input class="input-sm form-full" id="sub" value="{{ old('pekerjaan') }}" type="text" name="pekerjaan"
                                        placeholder="Pekerjaan">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-field">
                                    <input class="input-sm form-full" id="sub" value="{{ old('pendidikan') }}" type="text" name="pendidikan"
                                        placeholder="Pendidikan">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-field">
                                    <input class="input-sm form-full" id="sub" value="{{ old('pengalaman') }}" type="text" name="pengalaman"
                                        placeholder="Pengalaman">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-field">
                                    <input class="input-sm form-full" id="sub" type="text" value="{{ old('penghargaan') }}" name="penghargaan"
                                        placeholder="Penghargaan/Prestasi">
                                </div>
                            </div>

                            <div class="col-sm-12 mt-30">
                                <button class="btn-text" type="submit" id="submit" name="button"> Kirim
                                </button>
                            </div>
                        </div>
                    </form>
                    <!-- END Contact FORM -->
                </div>
            </div>
        </div>
    </section>
@endsection
