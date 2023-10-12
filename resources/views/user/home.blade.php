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
                                    <form action="#" method="POST" id="demo-form2" data-parsley-validate
                                        class="form-horizontal form-label-left" enctype="multipart/form-data">
                                        @csrf
                                        {{-- <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"> --}}
                                        <input type="hidden" name="product_id" value="{{ $data->id }}">
                                        <input type="hidden" name="qty" value="1">
                                        <input type="hidden" name="subtotal" value="{{ $data->price }}">
                                        <button href="#" class="btn btn-default add2cart">Add to
                                            cart</button>
                                    </form>
                                    {{-- <a href="#" class="btn btn-default add2cart" onclick="event.preventDefault(); document.getElementById('add-cart').submit();">Add to cart</a> --}}
                                    {{-- <form id="add-cart" action="#" method="POST" class="d-none">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <input type="hidden" name="product_id" value="{{$data->id}}">
                    <input type="hidden" name="qty" value="1">
                    <input type="hidden" name="subtotal" value="{{$data->price}}">
                </form> --}}
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
