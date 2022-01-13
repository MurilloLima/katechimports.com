@extends('site.layouts.app')
@section('title', 'Departemanto')

@section('content')
@include('sweetalert::alert')
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li>
                            <h1><a href="index.html">Home</a></h1>
                        </li>
                        <li>{{$department->name}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="shop-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <aside class="sidebar-widget mt-50">
                    <div class="shop-sidebar-category">
                        <div class="sidebar-title">
                            <h4 class="title-shop">Home</h4>
                        </div>
                        <ul class="sidebar-category-expand">
                            @foreach ($menu as $item)
                            <li class="menu-item-has-children">
                                <a href="{{ route('site.department', ['slug'=>$data->slug]) }}">{{$data->name}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- Shop Banner Start -->
                    <div class="single-banner text-center mt-50 mb-30">
                        <a href="#"><img src="assets/images/banner/shop-banner-2.jpg" alt="" class="img-fluid"></a>
                    </div>
                    <!-- Shop Banner End -->
                </aside>
            </div>
            <div class="col-lg-9 order-first order-lg-last">
                <!-- Shop Banner Start -->
                <div class="single-banner mt-50 mb-50">
                    <a href="#"><img src="{{ asset('assets/site/images/banner/shop-banner-1.jpg') }}" alt=""
                            class="img-fluid"></a>
                </div>
                <!-- Shop Banner End -->
                <!-- Shop Toolbar Start -->
                <div class="toolbar-shop mb-50">
                    <div class="shop_toolbar_btn">
                        <button data-role="grid_3" class="btn-grid-3 active"></button>
                        <button data-role="grid_list" class="btn-list"></button>
                    </div>
                </div>
                <!-- Shop Toolbar End -->
                <!-- Shop Wrapper Start -->
                <div class="row shop-wrapper grid_3">
                    @foreach ($data as $item)
                    <div class="mb-20 col-md-4 col-sm-6">
                        <!-- Single-Product-Start -->
                        <div class="item-product pt-0">
                            <div class="product-thumb">
                                <a href="{{ route('site.product-details', ['slug'=>$item->slug]) }}">
                                    <img src="{{ url('storage/products/', $item->image_url) }}" alt=""
                                        class="img-fluid">
                                </a>
                                <div class="box-label">
                                    <div class="label-product-new">
                                        <span>Novo</span>
                                    </div>
                                </div>
                                {{-- <div class="action-link">
                                    <a class="quick-view same-link" href="shop-list.html#" title="Quick view"
                                        data-bs-toggle="modal" data-bs-target="#modal_box"
                                        data-original-title="quick view"><i class="zmdi zmdi-eye zmdi-hc-fw"></i></a>
                                    <a class="compare-add same-link" href="compare.html" title="Add to compare"><i
                                            class="zmdi zmdi-refresh-alt"></i></a>
                                    <a class="wishlist-add same-link" href="wishlist.html" title="Add to wishlist"><i
                                            class="zmdi zmdi-favorite-outline zmdi-hc-fw"></i></a>
                                </div> --}}
                            </div>
                            <div class="product-caption">
                                <div class="product-name">
                                    <a
                                        href="{{ route('site.product-details', ['slug'=>$item->slug]) }}">{{$item->name}}</a>
                                </div>
                                <div class="rating">
                                    <span class="yellow"><i class="fa fa-star"></i></span>
                                    <span class="yellow"><i class="fa fa-star"></i></span>
                                    <span class="yellow"><i class="fa fa-star"></i></span>
                                    <span class="yellow"><i class="fa fa-star"></i></span>
                                    <span class="yellow"><i class="fa fa-star"></i></span>
                                </div>
                                <div class="price-box">
                                    <span class="regular-price">R$ {{number_format($item->price, 2, ',',
                                        '.')}}</span>
                                    <span class="old-price"><del>R$ {{number_format($item->cost_price, 2, ',',
                                            '.')}}</del></span>
                                </div>
                                <div class="cart">
                                    <div class="add-to-cart">
                                        <a href="#" title="Adicionar ao carrinho"><i
                                                class="zmdi zmdi-shopping-cart-plus zmdi-hc-fw"></i></a>
                                        <a href="#" title="Comprar agora"><i class="zmdi zmdi-shopping-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-list-caption align-items-center" style="padding-left: 10px;">
                                <div class="product-name">
                                    <a
                                        href="{{ route('site.product-details', ['slug'=>$item->slug]) }}">{{$item->name}}</a>
                                </div>
                                <div class="rating">
                                    <span class="yellow"><i class="fa fa-star"></i></span>
                                    <span class="yellow"><i class="fa fa-star"></i></span>
                                    <span class="yellow"><i class="fa fa-star"></i></span>
                                    <span class="yellow"><i class="fa fa-star"></i></span>
                                    <span class="yellow"><i class="fa fa-star"></i></span>
                                </div>
                                <div class="price-box">
                                    <span class="regular-price">R$ {{number_format($item->price, 2, ',',
                                        '.')}}</span>
                                </div>
                                <p>{!!str_limit($item->descryption, 300)!!}</p>

                                {{-- <div class="action-link">
                                    <a class="quick-view same-link" href="shop-list.html#" title="Quick view"
                                        data-bs-toggle="modal" data-bs-target="#modal_box"
                                        data-original-title="quick view"><i class="zmdi zmdi-eye zmdi-hc-fw"></i></a>
                                    <a class="compare-add same-link" href="compare.html" title="Add to compare"><i
                                            class="zmdi zmdi-refresh-alt"></i></a>
                                    <a class="wishlist-add same-link" href="wishlist.html" title="Add to wishlist"><i
                                            class="zmdi zmdi-favorite-outline zmdi-hc-fw"></i></a>
                                </div> --}}
                                <div class="cart-list-button">
                                    <a href="#" class="cart-btn">Comprar agora</a>
                                </div>
                            </div>
                        </div>
                        <!-- Single-Product-End -->
                    </div>
                    @endforeach
                </div>
                <!-- Shop Wrapper End -->
                <!-- Shop Toolbar Start -->
                {{$data->links('site.pagination.paginate')}}
                
                <!-- Shop Toolbar End -->
            </div>
        </div>
    </div>
</div>
@endsection