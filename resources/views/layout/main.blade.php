<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from gymove.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Jan 2023 02:22:18 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin - SMKN 1 PASURUAN</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('template/nabil/xhtml/images/logosmk.png') }}">
    <link href="{{ asset('template/nabil/xhtml/vendor/summernote/summernote.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('template/nabil/xhtml/vendor/chartist/css/chartist.min.css') }}">
    <link href="{{ asset('template/nabil/xhtml/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}"
        rel="stylesheet">
    <link href="{{ asset('template/nabil/xhtml/vendor/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('template/nabil/xhtml/css/style.css') }}" rel="stylesheet">
    <link
        href="{{ asset('template/nabil/xhtml/https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;family=Roboto:wght@100;300;400;500;700;900&amp;display=swap') }}"
        rel="stylesheet">
</head>

<body>
    <script src="https://cdn.tiny.cloud/1/z3vshivvjuw47heg0vg12ouq5rr8i7ckkxmmjadvrhgsynq8/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>

    <script>
        tinymce.init({
            selector: '#mytextarea'
        });
    </script>
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        @include('layout.header')
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Chat box start
        ***********************************-->
        <!--**********************************
            Chat box End
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                Dashboard
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="{{ asset('template/nabil/xhtml/javascript:void(0)') }}"
                                    role="button" data-toggle="dropdown">
                                    <img src="{{ (Auth::user()->foto) ? asset('fotosekolah/'. Auth::user()->foto ) : asset('fotosekolah/admin.png') }}" width="20"
                                        alt="" />
                                    <div class="header-info">
                                        <span class="text-black"><strong>{{ Auth::user()->name }}</strong></span>
                                        <p class="fs-12 mb-0">Super {{ Auth::user()->role }}</p>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="/profil" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <span class="ml-2">Profil </span>
                                    </a>
                                    <a href="/logout" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger"
                                            width="18" height="18" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                            <polyline points="16 17 21 12 16 7"></polyline>
                                            <line x1="21" y1="12" x2="9" y2="12">
                                            </line>
                                        </svg>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        @include('layout.sidebar')

        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        @yield('content')
        <!--**********************************
        Main wrapper end
    ***********************************-->

        <!--**********************************
        Scripts
    ***********************************-->
        <!-- Required vendors -->
        <script src="{{ asset('template/nabil/xhtml/vendor/global/global.min.js') }}"></script>
        <script src="{{ asset('template/nabil/xhtml/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
        <script src="{{ asset('template/nabil/xhtml/vendor/chart.js/Chart.bundle.min.js') }}"></script>
        <script src="{{ asset('template/nabil/xhtml/js/custom.min.js') }}"></script>
        <script src="{{ asset('template/nabil/xhtml/js/deznav-init.js') }}"></script>
        <script src="{{ asset('template/nabil/xhtml/vendor/owl-carousel/owl.carousel.js') }}"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <!-- Chart piety plugin files -->
        <script src="{{ asset('template/nabil/xhtml/vendor/peity/jquery.peity.min.js') }}"></script>

        <!-- Apex Chart -->
        <script src="{{ asset('template/nabil/xhtml/vendor/apexchart/apexchart.js') }}"></script>

        <!-- Dashboard 1 -->
        <script src="{{ asset('template/nabil/xhtml/js/dashboard/dashboard-1.js') }}"></script>
        <script src="{{ asset('template/nabil/xhtml/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('template/nabil/xhtml/js/plugins-init/datatables.init.js') }}"></script>

        <script src="{{ asset('template/nabil/xhtml/vendor/summernote/summernote.min.js') }}"></script>
        <!-- Summernote init -->
        <script src="{{ asset('template/nabil/xhtml/js/plugins-init/summernote-init.js') }}"></script>
        <script>
            function carouselReview() {
                /*  testimonial one function by = owl.carousel.js */
                jQuery('.testimonial-one').owlCarousel({
                    loop: true,
                    autoplay: true,
                    margin: 30,
                    nav: false,
                    dots: false,
                    left: true,
                    navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>',
                        '<i class="fa fa-chevron-right" aria-hidden="true"></i>'
                    ],
                    responsive: {
                        0: {
                            items: 1
                        },
                        484: {
                            items: 2
                        },
                        882: {
                            items: 3
                        },
                        1200: {
                            items: 2
                        },

                        1540: {
                            items: 3
                        },
                        1740: {
                            items: 4
                        }
                    }
                })
            }
            jQuery(window).on('load', function() {
                setTimeout(function() {
                    carouselReview();
                }, 1000);
            });
        </script>
        <script>
            $("#jp").change(function() {
                var jml = $(this).val();
                var harga = $("#jl").val();
                // alert(jml);
                let jl = parseInt(harga);
                let jp = parseInt(jml);
                var total = jl + jp;
                $("#jml").val(total);
            })
        </script>
</body>

<!-- Mirrored from gymove.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Jan 2023 02:22:40 GMT -->

</html>
