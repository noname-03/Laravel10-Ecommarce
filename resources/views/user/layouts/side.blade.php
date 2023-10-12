<div class="sidebar col-md-3 col-sm-5">
    <ul class="list-group margin-bottom-25 sidebar-menu">
        @foreach ($categories as $data)
            <li class="list-group-item clearfix"><a href="{{ route('category.show', $data->id) }}"><i
                        class="fa fa-angle-right"></i>{{ $data->name }}</a>
            </li>
        @endforeach
    </ul>

    <div class="sidebar-products clearfix">
        <h2>Bestsellers</h2>
        @foreach ($products as $data)
            <div class="item">
                <a href="{{ route('product.show', $data->id) }}"><img src="{{ asset('/images/product/' . $data->photo) }}"
                        alt="{{ asset('/images/product/' . $data->photo) }}}"></a>
                <h3><a href="{{ route('product.show', $data->id) }}">{{ $data->title }}</a></h3>
                <div class="price">@currency($data->price)</div>
            </div>
        @endforeach
    </div>
</div>
