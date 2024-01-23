@extends('ecommerce.layouts.app')
@section('content')

    <div class="product-details-area pt-100px pb-100px">
        <div class="container">
            <div class="shop-list-wrapper">
                <div class="row mb-5">
                    <div class=" col-md-12 col-lg-12 col-xl-12 ">
                        <h3>{{ $bundle->name }}</h3>
                    </div>
                </div>
                @foreach($bundle->products as $product)
                    <div class="row mb-5">

                        <div class="col-md-2 col-lg-2 col-xl-2">
                            <div class="product">
                                <div class="thumb">
                                    <a href="single-product.html" class="image">
                                        <img src="{{ substr($product->image_path, 6) }}"
                                             alt="Product" height="150px" width="140px" style="object-fit: contain"/>
                                        <img class="hover-image"
                                             src="{{ substr($product->image_path, 6) }}"
                                             alt="Product" height="150px" width="140px" style="object-fit: contain"/>
                                    </a>
                                    <span class="badges">
                                                                <span class="new">New</span>
                                                            </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-lg-7 col-xl-8">
                            <div class="content-desc-wrap">
                                <div class="content">

                                    <h5 class="title"><a href="{{ route('product', $product) }}">
                                            {{ $product->title }}
                                        </a></h5>
                                    <p>{{ $product->description }}</p>
                                </div>
                                <div class="box-inner">
                                                            <span class="price">
                                                                <span class="new"> BDT {{ $product->unit_price  }}</span>
                                                            </span>


                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="row">
                    <div class="col-lg-12">
                        <div class="cart-shiping-update-wrapper">
                            <div class="cart-clear">
                                <a type="button">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
