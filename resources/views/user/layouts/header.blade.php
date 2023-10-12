<div class="header">
    <div class="container">
        <a class="site-logo" href="/"><img src="{{ asset('user') }}/assets/corporate/img/logos/logo-shop-red.png"
                alt="Metronic Shop UI" width="150" height="65"></a>

        <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

        <!-- BEGIN NAVIGATION -->
        <div class="header-navigation">
            <ul>
                <li><a href="/">Beranda</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                        Kategori

                    </a>

                    <!-- BEGIN DROPDOWN MENU -->
                    <ul class="dropdown-menu">
                        @foreach ($categories as $data)
                            <li><a href="#">{{ $data->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                    <!-- END DROPDOWN MENU -->
                </li>
                <li><a href="#">Keranjang</a></li>
            </ul>
        </div>
        <!-- END NAVIGATION -->
    </div>
</div>
