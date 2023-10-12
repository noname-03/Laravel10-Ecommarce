<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-topbar-color="dark">

<head>
    <meta charset="utf-8" />
    <title>Shop Now || @yield('title')</title>
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

    @stack('styles')
</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">


        <!-- ========== Menu ========== -->
        @include('admin.layouts.sidebar')
        <!-- ========== Left menu End ========== -->





        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">

            <!-- ========== Topbar Start ========== -->
            @include('admin.layouts.topbar')
            <!-- ========== Topbar End ========== -->

            <div class="content">

                <!-- Start Content-->
                @yield('content')
                <!-- container -->

            </div> <!-- content -->

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div>
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> © Shop Now
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->

    <!-- Vendor js -->
    <script src="{{ asset('admin') }}/assets/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="{{ asset('admin') }}/assets/js/app.min.js"></script>



    @stack('scripts')
</body>

</html>
