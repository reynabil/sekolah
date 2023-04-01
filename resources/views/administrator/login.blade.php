<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from preschool.dreamguystech.com/laravel/template/public/login by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Feb 2023 03:39:09 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
    <title>Login Admin - SMKN 1 Pasuruan</title>

    <link rel="shortcut icon" href="{{ asset('fotosekolah/logosmk.ico') }}" />

    <link rel="stylesheet" href="{{ asset('login/assets/plugins/bootstrap/css/bootstrap.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('login/assets/plugins/fontawesome/css/fontawesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('login/assets/plugins/fontawesome/css/all.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('login/assets/plugins/feather/feather.css') }}" />

    <link href="{{ asset('login/assets/plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&amp;display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('login/assets/css/bootstrap-datetimepicker.min.css') }}" />

    <link href="{{ asset('login/assets/plugins/summernote/summernote-lite.css') }}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="{{ asset('login/assets/plugins/datatables/css/jquery.dataTables.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('login/assets/plugins/icons/ionic/ionicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('login/assets/plugins/icons/flags/flags.css') }}" />
    <link rel="stylesheet" href="{{ asset('login/assets/plugins/icons/material/materialdesignicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('login/assets/plugins/icons/pe7/pe-icon-7.css') }}" />
    <link rel="stylesheet" href="{{ asset('login/assets/plugins/icons/simpleline/simple-line-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('login/assets/plugins/icons/themify/themify.css') }}" />
    <link rel="stylesheet" href="{{ asset('login/assets/plugins/icons/typicons/typicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('login/assets/plugins/icons/weather/weathericons.css') }}" />

    <link rel="stylesheet" href="{{ asset('login/assets/css/app.css') }}" />
</head>

<body>
    <div class="main-wrapper login-body">
        <div class="login-wrapper">
            <div class="container">
                <div class="loginbox">
                    <div class="login-left">
                        <img class="img-fluid" style="margin-bottom: 100px;"
                            src="{{ asset('fotosekolah/logosmk.ico') }}" alt="Logo" />
                    </div>
                    <div class="login-right">
                        <div class="login-right-wrap">
                            <h1 class="mb-4">Selamat Datang</h1>

                            <form method="POST" action="/loginproses">
                                @csrf
                                <div class="form-group">
                                    <label>Email<span class="login-danger">*</span></label>
                                    <input value="{{ old('email') }}" type="email" placeholder="Email"
                                        id="Email" class="form-control" name="email" />
                                    <span class="profile-views"><i class="fas fa-user-circle"></i></span>
                                    <div class="text-danger pt-2"></div>
                                </div>

                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group pass-group">
                                    <label>Password <span class="login-danger">*</span></label>
                                    <input value="{{ old('password') }}" type="password" placeholder="Password"
                                        id="password" class="form-control pass-input" name="password" />
                                    <span class="profile-views feather-eye toggle-password"></span>
                                    <div class="text-danger pt-2"></div>
                                </div>

                                @error('password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <button class="btn btn-primary btn-block" type="submit">
                                        Login
                                    </button>
                                </div>
                            </form>

                            <div class="login-or">
                                <span class="or-line"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('login/assets/plugins/jquery/jquery.min.js') }}"></script>

    <script src="{{ asset('login/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('login/assets/plugins/feather/feather.min.js') }}"></script>

    <script src="{{ asset('login/assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('login/assets/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('login/assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>

    <script src="{{ asset('login/assets/plugins/select2/select2.min.js') }}"></script>

    <script src="{{ asset('login/assets/js/bootstrap-datetimepicker.min.js') }}"></script>

    <script src="{{ asset('login/assets/plugins/summernote/summernote-lite.min.js') }}"></script>

    <script src="{{ asset('login/assets/plugins/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('login/assets/plugins/datatables/js/datatables.min.js') }}"></script>

    <script src="{{ asset('login/assets/js/app.min.js') }}"></script>
</body>

<!-- Mirrored from preschool.dreamguystech.com/laravel/template/public/login by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Feb 2023 03:39:11 GMT -->

</html>
