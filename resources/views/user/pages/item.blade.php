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
                <li><a href="/">Home</a></li>
                <li class="active">{{ $id->title }}</li>
            </ul>
            <!-- BEGIN SIDEBAR & CONTENT -->
            <div class="row margin-bottom-40">
                <!-- BEGIN SIDEBAR -->
                @include('user.layouts.side')
                <!-- END SIDEBAR -->
                <!-- BEGIN CONTENT -->
                <form action="#" method="POST" id="demo-form2" data-parsley-validate
                    class="form-horizontal form-label-left" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $id->id }}">
                    <div class="col-md-9 col-sm-7">
                        <div class="product-page">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="product-main-image">
                                        <img src="{{ asset('images/product/' . $id->photo[0]) }}"
                                            alt="Cool green dress with red bell" class="img-responsive"
                                            data-BigImgsrc="{{ asset('images/product/' . $id->photo[0]) }}">
                                    </div>

                                    <div class="product-other-images">
                                        @foreach ($id->photo as $key => $item)
                                            <a href="{{ asset('images/product/' . $item) }}" class="fancybox-button"
                                                rel="photos-lib"><img alt="Berry Lace Dress"
                                                    src="{{ asset('images/product/' . $item) }}"></a>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <h1>{{ $id->name }}</h1>
                                    <div class="price-availability-block clearfix">
                                        <div class="price">
                                            <strong>@currency($id->price)</strong>
                                            <input type="hidden" name="subtotal" value="{{ $id->price }}">
                                            <em><span>@currency($id->price + 200000)</span></em>
                                        </div>
                                        <div class="availability">
                                            Availability: <strong>In Stock</strong>
                                        </div>
                                    </div>
                                    <div class="description">
                                        <p>{{ $id->description }}</p>
                                    </div>
                                </div>
                                <div class="product-page-cart">
                                    <div class="product-quantity">
                                        <input id="product-quantity" type="text" value="1" name="qty"
                                            class="form-control input-sm">
                                    </div>
                                    <button class="btn btn-primary" type="submit">Add to cart</button>
                                </div>
                </form>
            </div>

            <div class="product-page-content">
                <ul id="myTab" class="nav nav-tabs">
                    <li class="active"><a href="#Description" data-toggle="tab">Description</a></li>
                    <li><a href="#Information" data-toggle="tab">Information</a></li>
                    {{-- <li><a href="#Reviews" data-toggle="tab">Reviews (2)</a></li> --}}
                </ul>
                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade in active" id="Description">
                        <p>Shopnow menjual berbagai produk barang berkualitas mulai dari sneakers, clothing, jeans dan
                            barang kekinian lainnya.
                            Jika ingin lebih detail lagi, Anda juga bisa memilih barang dari tiap kategori produk dihalaman
                            utama.
                            Selamat berbelanja.</p>
                    </div>
                    <div class="tab-pane fade" id="Information">
                        <table class="datasheet">
                            <tr>
                                <th colspan="2">Additional features</th>
                            </tr>
                            <tr>
                                <td class="datasheet-features-type">Value 1</td>
                                <td>21 cm</td>
                            </tr>
                            <tr>
                                <td class="datasheet-features-type">Value 2</td>
                                <td>700 gr.</td>
                            </tr>
                            <tr>
                                <td class="datasheet-features-type">Value 3</td>
                                <td>10 person</td>
                            </tr>
                            <tr>
                                <td class="datasheet-features-type">Value 4</td>
                                <td>14 cm</td>
                            </tr>
                            <tr>
                                <td class="datasheet-features-type">Value 5</td>
                                <td>plastic</td>
                            </tr>
                        </table>
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
