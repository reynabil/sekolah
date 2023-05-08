    <footer>
        <div class="top_footer_info__block ptb-20">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="single_info__block">
                            <i class="fa fa-phone"></i>
                            <h4>(0343) 421380<span>Admin SMKN 1 Pasuruan, 8am-7pm</span></h4>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="single_info__block">
                            <i class="fa fa-envelope-o"></i>
                            <h4>smk1pasuruan@yahoo.com <span>Admin SMKN 1 Pasuruan, 8am-7pm</span></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main_footer__block pb-0 pt-60">
            <div class="container">
                <div class="row">
                    <div class="col-md-3" style="padding-top: 100px">
                        <div class="footer_box__block">
                            <a href="#" class="footer__block-logo"><img
                                    src="{{ asset('education/theembazaar.com/tf/educate/assets/images/logosmk.ico') }}"
                                    alt=""></a>
                            <h4>SMKN 1 PASURUAN</h4>
                            <p>Jalan Veteran, Bugul Lor, Panggungrejo, Bugul Lor, Panggungrejo, Kota Pasuruan, Jawa
                                Timur
                                67122</p>
                        </div>
                    </div>
                    <div class="col-md-3" style="margin-top: 100px">
                        <div class="footer_box__block">
                            <h4>Media Sosial Kita</h4>
                            <ul>
                                @foreach ($sosmed as $item)
                                <li><a style="margin-left: 5px"
                                        href="{{ $item->link }}">{{ $item->name }}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3" style="margin-top: 100px">
                        <div class="footer_box__block">
                            <h4>Seputar Sekolah</h4>
                            <ul>
                                @foreach ($berita->take(3) as $row)
                                    <li><a href="/selengkapnya/{{ $row->id }}">{{ $row->judul }}</a></li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3" style="padding-top: 100px">
                        <div class="footer_box__block address-box">
                            <h4>Kontak info</h4>
                            <ul>
                                <li> <i class="fa fa-phone"></i>
                                    <p>(0343) 421380</p>
                                </li>
                                <li> <i class="fa fa-envelope-o"></i>
                                    <p>smk1pasuruan@yahoo.com</p>
                                </li>
                                <li> <i class="fa fa-map-marker"></i>
                                    <p>Jl. Veteran, Bugul Lor, Kec. Panggungrejo, Kota Pasuruan, Jawa Timur 67122</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="copyriight_block ptb-20 mt-20">
                    <div class="row">
                        <div class="col-sm-6">
                        </div>
                        <div class="col-sm-6 text-right">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
