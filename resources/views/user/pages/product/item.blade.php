@extends('user.layouts.template')
@section('link')
    <link href="{{ asset('user') }}/assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('user') }}/assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
    <link href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('user') }}/assets/plugins/owl.carousel/assets/owl.carousel.css" rel="stylesheet">
    <link href="{{ asset('user') }}/assets/plugins/rateit/src/rateit.css" rel="stylesheet" type="text/css">
@endsection
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
                <li><a href="index.html">Home</a></li>
                <li><a href="">Store</a></li>
                <li class="active">Men category</li>
            </ul>
            <!-- BEGIN SIDEBAR & CONTENT -->
            <div class="row margin-bottom-40">
                <!-- BEGIN SIDEBAR -->
                @include('user.layouts.side')
                <!-- END SIDEBAR -->
                <!-- BEGIN CONTENT -->
                <div class="col-md-9 col-sm-7">
                    <div class="product-page">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="product-main-image">
                                    <img src="{{ asset('images/product/' . $id->photo[0]) }}" alt="{{ $id->title }}"
                                        class="img-responsive"
                                        data-BigImgsrc="{{ asset('images/product/' . $id->photo[0]) }}">
                                </div>
                                <div class="product-other-images">
                                    @foreach ($id->photo as $item)
                                        <a href="{{ asset('images/product/' . $item) }}" class="fancybox-button"
                                            rel="photos-lib"><img alt="Berry Lace Dress"
                                                src="{{ asset('images/product/' . $item) }}"></a>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <h1>{{ $id->title }}</h1>
                                <div class="price-availability-block clearfix">
                                    <div class="price">
                                        <strong>@currency($id->price)</strong>
                                        <em>@currency($id->price_retail)</em>
                                    </div>
                                    <div class="availability">
                                        Tersedia: <strong>{{ $id->qty }}</strong>
                                    </div>
                                </div>
                                <div class="description">
                                    <p>{{ $id->description }}</p>
                                </div>
                                <form action="{{ route('user.cart.store') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $id->id }}">
                                    <div class="product-page-options">
                                        <div class="pull-left">
                                            <label class="control-label">{{ $id->unit }}:</label>
                                            <select class="form-control input-sm" name="unit_variant">
                                                @php
                                                    $unitVariant = explode(',', $id->unit_variant);
                                                @endphp
                                                @foreach ($unitVariant as $item)
                                                    <option value="{{ $item }}">{{ $item }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="product-page-cart">
                                        <div class="product-quantity">
                                            <input id="product-quantity" type="text" value="1"
                                                class="form-control input-sm" name="qty">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Add to Cart</button>
                                    </div>
                                </form>

                            </div>

                            <div class="product-page-content">
                                <ul id="myTab" class="nav nav-tabs">
                                    <li class="active"><a href="#Description" data-toggle="tab">Description</a></li>
                                </ul>
                                <div id="myTabContent" class="tab-content">
                                    <div class="tab-pane fade in active" id="Description">
                                        <p>{{ $id->description }}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="sticker sticker-sale"></div>
                        </div>
                    </div>
                </div>
                <!-- END CONTENT -->
            </div>
            <!-- END SIDEBAR & CONTENT -->
        </div>
    </div>
@endsection
