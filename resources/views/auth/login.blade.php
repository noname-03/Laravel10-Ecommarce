<!DOCTYPE html>
<html lang="en" data-topbar-color="dark">

<head>
    <meta charset="utf-8" />
    <title>Shop Now | Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('admin') }}/assets/images/logoMall.png">

    <!-- Theme Config Js -->
    <script src="{{ asset('admin') }}/assets/js/head.js"></script>

    <!-- Bootstrap css -->
    <link href="{{ asset('admin') }}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- App css -->
    <link href="{{ asset('admin') }}/assets/css/app.min.css" rel="stylesheet" type="text/css" />

    <!-- Icons css -->
    <link href="{{ asset('admin') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
</head>

<body class="authentication-bg authentication-bg-pattern">

    <div class="account-pages mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-4">
                    <div class="card bg-pattern">

                        <div class="card-body p-4">

                            <div class="text-center w-75 m-auto">
                                <div class="auth-brand">
                                    <a href="/" class="logo logo-dark text-center">
                                        <span class="logo-lg">
                                            <h2>Shop Now</h2>
                                        </span>
                                    </a>

                                    <a href="/" class="logo logo-light text-center">
                                        <span class="logo-lg">
                                            <h2>Shop Now</h2>
                                        </span>
                                    </a>
                                </div>
                                <p class="text-muted mb-4 mt-3">Masukan alamat email dan password untuk akses panel
                                    admin.</p>
                                @if (session('error'))
                                    <div class="alert alert-danger">
                                        {{ session('error') }}
                                    </div>
                                @endif
                            </div>

                            <form action="{{ route('login') }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="emailaddress" class="form-label">Email address</label>
                                    <input class="form-control @error('email') is-invalid @enderror" type="email"
                                        id="emailaddress" required placeholder="Enter your email" name="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <div class="input-group input-group-merge">
                                        <input type="password" id="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            placeholder="Enter your password" name="password">
                                        <div class="input-group-text" data-password="false">
                                            <span class="password-eye"></span>
                                        </div>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="text-center d-grid">
                                    <button class="btn btn-primary" type="submit"> Log In </button>
                                </div>

                            </form>


                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->

                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <p class="text-white-50">Belum mempunyai akun? <a href="{{ route('register') }}"
                                    class="text-white ms-1"><b>Registrasi</b></a></p>
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->

                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->


    <footer class="footer footer-alt">
        2023
    </footer>


    <!-- Vendor js -->
    <script src="{{ asset('admin') }}/assets/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="{{ asset('admin') }}/assets/js/app.min.js"></script>s
    <!-- Authentication js -->
    <script src="{{ asset('admin') }}/assets/js/pages/authentication.init.js"></script>

</body>

</html>
