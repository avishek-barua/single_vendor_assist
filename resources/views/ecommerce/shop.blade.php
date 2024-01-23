@extends('ecommerce.layouts.app')
@section('content')
    <!-- Shop Page Start  -->
    <div class="shop-category-area pt-100px pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 order-lg-last col-md-12 order-md-first">
{{--                    <!-- Shop Top Area Start -->--}}
{{--                    <div class="desktop-tab">--}}
{{--                        <div class="shop-top-bar d-flex">--}}
{{--                            <!-- Left Side End -->--}}
{{--                            <div class="shop-tab nav">--}}
{{--                                <a class="active" href="#shop-grid" data-bs-toggle="tab">--}}
{{--                                    <i class="fa fa-th" aria-hidden="true"></i>--}}
{{--                                </a>--}}
{{--                                <a href="#shop-list" data-bs-toggle="tab">--}}
{{--                                    <i class="fa fa-list" aria-hidden="true"></i>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <!-- Right Side Start -->--}}
{{--                            <div class="select-shoing-wrap d-flex align-items-center">--}}
{{--                                <div class="shot-product">--}}
{{--                                    <p>Sort By:</p>--}}
{{--                                </div>--}}
{{--                                <div class="shop-select">--}}
{{--                                    <select class="shop-sort">--}}
{{--                                        <option data-display="Default">Default</option>--}}
{{--                                        <option value="1"> Name, A to Z</option>--}}
{{--                                        <option value="2"> Name, Z to A</option>--}}
{{--                                        <option value="3"> Price, low to high</option>--}}
{{--                                        <option value="4"> Price, high to low</option>--}}
{{--                                    </select>--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- Right Side End -->--}}
{{--                            <!-- Right Side Start -->--}}
{{--                            <div class="select-shoing-wrap d-flex align-items-center">--}}
{{--                                <div class="shot-product">--}}
{{--                                    <p>Show:</p>--}}
{{--                                </div>--}}
{{--                                <div class="shop-select show">--}}
{{--                                    <select class="shop-sort">--}}
{{--                                        <option data-display="12">12</option>--}}
{{--                                        <option value="1"> 12</option>--}}
{{--                                        <option value="2"> 10</option>--}}
{{--                                        <option value="3"> 25</option>--}}
{{--                                        <option value="4"> 20</option>--}}
{{--                                    </select>--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- Right Side End -->--}}
{{--                            <!-- Left Side start -->--}}
{{--                            <p class="compare-product">Product Compare <span>(0) </span></p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- Shop Top Area End -->--}}

{{--                    <!-- Mobile shop bar -->--}}
{{--                    <div class="shop-top-bar mobile-tab">--}}
{{--                        <!-- Left Side End -->--}}
{{--                        <div class="shop-tab nav d-flex justify-content-between">--}}
{{--                            <div class="shop-tab nav">--}}
{{--                                <a class="active" href="#shop-grid" data-bs-toggle="tab">--}}
{{--                                    <i class="fa fa-th" aria-hidden="true"></i>--}}
{{--                                </a>--}}
{{--                                <a href="#shop-list" data-bs-toggle="tab">--}}
{{--                                    <i class="fa fa-list" aria-hidden="true"></i>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <!-- Right Side Start -->--}}
{{--                            <div class="select-shoing-wrap d-flex align-items-center">--}}
{{--                                <div class="shot-product">--}}
{{--                                    <p>Sort By:</p>--}}
{{--                                </div>--}}
{{--                                <div class="shop-select">--}}
{{--                                    <select class="shop-sort">--}}
{{--                                        <option data-display="Default">Default</option>--}}
{{--                                        <option value="1"> Name, A to Z</option>--}}
{{--                                        <option value="2"> Name, Z to A</option>--}}
{{--                                        <option value="3"> Price, low to high</option>--}}
{{--                                        <option value="4"> Price, high to low</option>--}}
{{--                                    </select>--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- Right Side End -->--}}
{{--                        <!-- Right Side Start -->--}}
{{--                        <div class="select-shoing-wrap d-flex align-items-center justify-content-between">--}}
{{--                            <div class="select-shoing-wrap d-flex align-items-center">--}}
{{--                                <div class="shot-product">--}}
{{--                                    <p>Show:</p>--}}
{{--                                </div>--}}
{{--                                <div class="shop-select show">--}}
{{--                                    <select class="shop-sort">--}}
{{--                                        <option data-display="12">12</option>--}}
{{--                                        <option value="1"> 12</option>--}}
{{--                                        <option value="2"> 10</option>--}}
{{--                                        <option value="3"> 25</option>--}}
{{--                                        <option value="4"> 20</option>--}}
{{--                                    </select>--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- Right Side End -->--}}
{{--                            <!-- Left Side start -->--}}
{{--                            <p class="compare-product">Product Compare <span>(0) </span></p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- Mobile shop bar -->--}}

                    <!-- Shop Bottom Area Start -->
                    <div class="shop-bottom-area">

                        <!-- Tab Content Area Start -->
                        <div class="row">
                            <div class="col">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="shop-grid">
                                        <div class="row mb-n-30px">
                                            @foreach($products as $product)
                                                <div class="col-lg-4 col-xl-4 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                                    @include('ecommerce.components.product-card')

                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tab Content Area End -->

                        <!--  Pagination Area Start -->
                        <div class="pro-pagination-style text-center text-lg-end" data-aos="fade-up"
                             data-aos-delay="200">
                            <div class="pages">
                                <ul>
                                    <li class="li"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a>
                                    </li>
                                    <li class="li"><a class="page-link" href="#">1</a></li>
                                    <li class="li"><a class="page-link active" href="#">2</a></li>
                                    <li class="li"><a class="page-link" href="#">3</a></li>
                                    <li class="li"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--  Pagination Area End -->
                    </div>
                    <!-- Shop Bottom Area End -->
                </div>
                <!-- Sidebar Area Start -->
                <div class="col-lg-3 order-lg-first col-md-12 order-md-last">
                    <div class="shop-sidebar-wrap">
                        <!-- Sidebar single item -->
                        <div class="sidebar-widget">
                            <h4 class="sidebar-title">Categories</h4>
                            <div class="sidebar-widget-category">
                                <ul>
                                    @foreach($categories as $category)
                                    <li><a href="{{ route('shopByCategory', $category) }}" class="selected m-0" ><i class="fa fa-angle-right"></i> {{ $category->name }}
                                            <span>({{ $category->products()->count() }})</span> </a></li>
                                    @endforeach
                                        <li><a href="{{ route('bundleShop') }}" class="selected m-0" ><i class="fa fa-angle-right"></i> Packages
                                                <span>({{ $bundles->count() }})</span> </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Page End  -->
@endsection
