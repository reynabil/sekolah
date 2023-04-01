@extends('web.face')

@section('content')
    <x-section1 title="Hubungi Kami"></x-section1>
    <!-- Intro Section -->
    <!-- Contact Section -->
    <section class="ptb ptb-xs-60">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <h2>Hubungi Kami</h2>
                    {{-- <p class="lead"> Nullam dictum felis eu pede mollis pretium leo eget bibendum sodales augue
                        velit cursus. tellus eget condimentum rhoncus sem quam semper libero. </p> --}}
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 contact pb-60 pt-30">
                    <div class="row text-center">
                        <div class="col-sm-4 pb-xs-30"> <i class="ion-android-call icon-circle pos-s"></i><a href="#"
                                class="mt-15 i-block">(0343) 421380</a> </div>
                        <div class="col-sm-4 pb-xs-30"> <i class="ion-ios-location icon-circle pos-s"></i>
                            <p class="mt-15">Jl. Veteran, Bugul Lor, Kec. Panggungrejo, Kota Pasuruan, Jawa Timur 67122</p>
                        </div>
                        <div class="col-sm-4 pb-xs-30"> <i class="ion-ios-email icon-circle pos-s"></i>
                            <p class="mt-15"> smk1pasuruan@yahoo.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Map Section -->
        <div class="map">
            <iframe class="iframe"
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15817.409348709281!2d112.9142809!3d-7.645208!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7c60c36bb4325%3A0x98bc4d9aa7c440c!2sVocational%20High%20School%201%20Pasuruan!5e0!3m2!1sen!2sid!4v1678160157680!5m2!1sen!2sid"
                width="100% " height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- Map Section -->
        <div class="container contact-form pt-80 pt-xs-60 mt-up">
            <div class="row">
                <div class="col-sm-12">
                    <h4>Tulis Pesan Kalian Disini</h4>

                    <form method="post" action="/insertpesan" class="contact-form mt-45" id="contact">
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
                                    <input class="input-sm form-full" id="name" type="text" name="nama"
                                        placeholder="Nama">
                                </div>
                                <div class="form-field">
                                    <input class="input-sm form-full" id="email" type="text" name="email"
                                        placeholder="Email">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-field">
                                    <textarea class="form-full" id="message" rows="7" name="pesan" placeholder="Tulis Pesan"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12 mt-30">
                                <button class="btn-text" type="submit" id="submit" name="button"> Kirim Pesan</button>
                            </div>
                        </div>
                    </form>
                    <!-- END Contact FORM -->
                </div>
            </div>
        </div>
    </section>
@endsection
