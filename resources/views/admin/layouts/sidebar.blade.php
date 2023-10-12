<div class="app-menu">

    <!-- Brand Logo -->
    <div class="logo-box">
        <!-- Brand Logo Light -->
        <a href="{{ route('home') }}" class="logo-light">
            <img src="{{ asset('user') }}/assets/corporate/img/logos/logo-shop-red.png" alt="logo" width="100">
            {{-- <img src="assets/images/logo-sm.png" alt="small logo" class="logo-sm"> --}}
        </a>

        <!-- Brand Logo Dark -->
        <a href="{{ route('home') }}" class="logo-dark">
            <img src="{{ asset('user') }}/assets/corporate/img/logos/logo-shop-red.png" alt="logo" width="100">
            {{-- <img src="assets/images/logo-sm.png" alt="small logo" class="logo-sm"> --}}
        </a>
    </div>

    <!-- menu-left -->
    <div class="scrollbar">

        <!--- Menu -->
        <ul class="menu">

            <li class="menu-title">Menu</li>
            <li class="menu-item">
                <a href="{{ route('admin.dashboard') }}" class="menu-link">
                    <span class="menu-icon"><i data-feather="home"></i></span>
                    <span class="menu-text"> Dashboard </span>
                </a>
            </li>


            {{-- Data --}}
            <li class="menu-title">Data</li>

            <li class="menu-item">
                <a href="{{ route('admin.categoryProduct.index') }}" class="menu-link">
                    <span class="menu-icon"><i data-feather="shopping-bag"></i></span>
                    <span class="menu-text"> Kategori </span>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ route('admin.product.index') }}" class="menu-link">
                    <span class="menu-icon"><i data-feather="shopping-cart"></i></span>
                    <span class="menu-text"> Produk </span>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ route('admin.transaction.index') }}" class="menu-link">
                    <span class="menu-icon"><i data-feather="dollar-sign"></i></span>
                    <span class="menu-text"> Transaksi </span>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ route('admin.user.index') }}" class="menu-link">
                    <span class="menu-icon"><i data-feather="user"></i></span>
                    <span class="menu-text"> User </span>
                </a>
            </li>

        </ul>
        <!--- End Menu -->
        <div class="clearfix"></div>
    </div>
</div>
