@extends('user.layouts.template')
@section('link')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
@endsection
@section('content')
    <div class="container">
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
            <!-- BEGIN CONTENT -->
            <div class="col-md-12 col-sm-12">
                <h1>Shopping cart</h1>
                <div class="goods-page">
                    <div class="goods-data clearfix">
                        <div class="table-wrapper-responsive">
                            <table summary="Shopping cart">
                                <tr>
                                    <th class="goods-page-image">Image</th>
                                    <th class="goods-page-description">Description</th>
                                    <th class="goods-page-quantity">Quantity</th>
                                    <th class="goods-page-price">Unit price</th>
                                    <th class="goods-page-total" colspan="2">Total</th>
                                </tr>
                                @php
                                    $sub = 0;
                                @endphp
                                @foreach ($carts as $data)
                                    {{-- <form id="update-{{ $data->id }}"
                                        action="{{ route('user.cart.update', ['cart' => $data->id]) }}" method="POST"
                                        id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                                        @csrf @method('PATCH') --}}
                                    <tr data-id="{{ $data->id }}" id>
                                        <td class="goods-page-image">
                                            @php
                                                $photo = explode(',', $data->product->photo);
                                            @endphp
                                            <a href="javascript:;"><img src="{{ asset('images/product/' . $photo[0]) }}"
                                                    alt="Berry Lace Dress"></a>
                                        </td>
                                        <td class="goods-page-description">
                                            <h3><a href="javascript:;">{{ $data->product->title }}</a></h3>
                                            <p><strong>{{ $data->product->unit }}</strong>:
                                                {{ $data->unit_variant }}</p>
                                        </td>
                                        <td data-th="qty">
                                            <input type="number" value="{{ $data->qty }}" name="qty"
                                                class="form-control quantity update-cart" style="width: 5em" />
                                        </td>
                                        <td class="goods-page-price">
                                            <strong class="price-unit">@currency($data->product->price)</strong>
                                        </td>
                                        <td class="goods-page-total">
                                            <strong class="price-total">@currency($data->product->price * $data->qty)</strong>
                                        </td>
                                        <td class="del-goods-col">
                                            <a class="del-goods" href="#"
                                                onclick="event.preventDefault(); document.getElementById('delate-{{ $data->id }}').submit();">&nbsp;</a>
                                            <form id="delate-{{ $data->id }}"
                                                action="{{ route('user.cart.destroy', ['cart' => $data->id]) }}"
                                                method="post">
                                                @csrf @method('DELETE')
                                            </form>
                                        </td>
                                    </tr>
                                    @php
                                        $sub += $data->qty * $data->product->price;
                                    @endphp
                                @endforeach
                            </table>
                        </div>

                        <div class="shopping-total">
                            <ul>
                                <li>
                                    <em>Sub total</em>
                                    <strong class="price">@currency($sub)</strong>
                                </li>
                                <li>
                                    <em>Shipping cost</em>
                                    <strong class="price">@currency(15000)</strong>
                                </li>
                                <li class="shopping-total-price">
                                    <em>Total</em>
                                    <strong class="price">@currency($sub + 15000)</strong>
                                </li>
                            </ul>
                        </div>
                    </div>
                    {{-- <button class="btn btn-default" type="submit">Continue shopping <i class="fa fa-shopping-cart"></i></button> --}}
                    <a href="/" class="btn btn-default" rel="noopener noreferrer">Continue
                        shopping <i class="fa fa-shopping-cart"></i></a>
                    <a class="btn btn-primary" href="#"
                        onclick="event.preventDefault(); document.getElementById('transaction.store').submit();">Checkout <i
                            class="fa fa-check"></i></a>
                    <form id="transaction.store" action="#" method="POST">
                        @csrf
                        <input type="hidden" name="total" value="{{ $sub + 15000 }}">
                    </form>
                    {{-- <button class="btn btn-primary" type="submit">Checkout <i class="fa fa-check"></i></button> --}}
                </div>
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
        <!-- END SIMILAR PRODUCTS -->
    </div>
@endsection
{{-- @section('script')
<script>
    $(".quantity").bind('keyup mouseup changed', function () {
        // alert("changed");
        $('.price-total').html($('.quantity').val() * $('.price-unit').html())
        console.log($('.quantity').val() * $('.price-unit').html())
    });
</script>
@endsection --}}
