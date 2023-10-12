@extends('user.layouts.template')
@section('content')
    <div class="title-wrapper">
        <div class="container">
            <div class="container-inner">
                <h1><span>SHOP</span> NOW</h1>
                <em>Fashion is Just Click Away</em>
            </div>
        </div>
    </div>

    <div class="main">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="/">Beranda</a></li>
            </ul>
            <!-- BEGIN SIDEBAR & CONTENT -->
            <div class="row margin-bottom-40">
                <!-- BEGIN SIDEBAR -->
                @include('user.layouts.side')
                <!-- END SIDEBAR -->
                <!-- BEGIN CONTENT -->
                <div class="col-md-9 col-sm-7">
                    <!-- BEGIN PRODUCT LIST -->
                    <div class="row product-list">
                        @foreach ($products as $data)
                            <!-- PRODUCT ITEM START -->
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="product-item">
                                    <div class="pi-img-wrapper">
                                        <img src="{{ asset('/images/product/' . $data->photo) }}" class="img-responsive"
                                            alt="{{ asset('images/product') }}/{{ $data->photo }}">
                                        <div>
                                            <a href="{{ asset('/images/product/' . $data->photo) }}"
                                                class="btn btn-default fancybox-button">Zoom</a>
                                            {{-- <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a> --}}
                                        </div>
                                    </div>
                                    <h3><a href="{{ route('product.show', $data->id) }}">{{ $data->title }}</a>
                                    </h3>
                                    <div class="pi-price">@currency($data->price)</div>
                                    <div class="sticker sticker-new"></div>
                                </div>
                            </div>
                            <!-- PRODUCT ITEM END -->
                        @endforeach
                    </div>
                    <!-- END PRODUCT LIST -->
                    <!-- BEGIN PAGINATOR -->
                    <div class="row">
                        <div class="col-md-4 col-sm-4 items-info"></div>
                        <div class="col-md-8 col-sm-8">
                            {{ $products->links() }}
                        </div>
                    </div>
                    <!-- END PAGINATOR -->
                </div>
                <!-- END CONTENT -->
            </div>
            <!-- END SIDEBAR & CONTENT -->
        </div>
    </div>
@endsection
