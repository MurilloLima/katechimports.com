@extends('site.layouts.app')
@section('title', 'Home')

@section('content')
<!--=====================
    slider area start
    =========================-->
<div class="slider_section mb-60">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            @foreach ($sliders as $item)
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{ url('storage/sliders/', $item->image_url) }}" alt="First slide">
            </div>
            @endforeach

        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<!--======================
        slider area End
    ==========================-->

<!-- ================
    Banner Area Start
    =====================-->
<div class="banner-area mt-20">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12 text-center">
                <div class="single-banner mt-30">
                    <a href="index-2.html#"><img src="assets/site/images/banner/banner1-1.png" alt=""
                            class="img-fluid"></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 text-center">
                <div class="single-banner mt-30">
                    <a href="index-2.html#"><img src="assets/site/images/banner/banner2-2.png" alt=""
                            class="img-fluid"></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 text-center">
                <div class="single-banner mt-30">
                    <a href="index-2.html#"><img src="assets/site/images/banner/banner3-3.png" alt=""
                            class="img-fluid"></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ================
    Banner Area End
    =====================-->

<!--=====================
    Home 2 Product Aera Start
    =========================-->
<div class="home2-product">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="product-details-home2 section-margin">
                    <div class="block-title">
                        <h6>Produtos em Destaque</h6>
                    </div>
                    <div class="product-carousel-home2 slick-custom slick-custom-default nav-top">
                        @foreach ($products1 as $item)
                        <div class="product-row">
                            <!-- Single-Product-Start -->
                            <div class="item-product">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{ url('storage/products/', $item->image_url) }}" alt=""
                                            class="img-fluid">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product-new">
                                            <span>Novo</span>
                                        </div>
                                    </div>
                                    <div class="action-link">
                                        <a class="quick-view same-link" href="index-2.html#" title="Quick view"
                                            data-bs-toggle="modal" data-bs-target="#modal_box"
                                            data-original-title="quick view"><i
                                                class="zmdi zmdi-eye zmdi-hc-fw"></i></a>
                                        <a class="compare-add same-link" href="compare.html" title="Add to compare"><i
                                                class="zmdi zmdi-refresh-alt"></i></a>
                                        <a class="wishlist-add same-link" href="wishlist.html"
                                            title="Add to wishlist"><i
                                                class="zmdi zmdi-favorite-outline zmdi-hc-fw"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-name">
                                        <a href="product-details.html">{{$item->name}} - {{$item->id}}</a>
                                    </div>
                                    <div class="rating">
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">R${{$item->price}}</span>
                                    </div>
                                    <div class="cart">
                                        <div class="add-to-cart">
                                            <a href="shopping-cart.html" title="Add to cart"><i
                                                    class="zmdi zmdi-shopping-cart-plus zmdi-hc-fw"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-Product-End -->
                        </div>
                        @endforeach

                    </div>
                </div>
                <div class="banner-area">
                    <div class="single-banner mt-30 text-center">
                        <a href="index-2.html#"><img src="assets/site/images/banner/banner2-4.png" alt=""
                                class="img-fluid"></a>
                    </div>
                </div>
                <div class="product-details-home2 mb-30 mt-50">
                    <div class="block-title">
                        <h6>Produtos mais Vendidos</h6>
                    </div>
                    <div class="product-carousel-home2 slick-custom slick-custom-default nav-top">
                        @foreach ($products2 as $item)
                        <div class="product-row">
                            <!-- Single-Product-Start -->
                            <div class="item-product">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{ url('storage/products/', $item->image_url) }}" alt=""
                                            class="img-fluid">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product-new">
                                            <span>Novo</span>
                                        </div>
                                    </div>
                                    <div class="action-link">
                                        <a class="quick-view same-link" href="index-2.html#" title="Quick view"
                                            data-bs-toggle="modal" data-bs-target="#modal_box"
                                            data-original-title="quick view"><i
                                                class="zmdi zmdi-eye zmdi-hc-fw"></i></a>
                                        <a class="compare-add same-link" href="compare.html" title="Add to compare"><i
                                                class="zmdi zmdi-refresh-alt"></i></a>
                                        <a class="wishlist-add same-link" href="wishlist.html"
                                            title="Add to wishlist"><i
                                                class="zmdi zmdi-favorite-outline zmdi-hc-fw"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-name">
                                        <a href="#">{{$item->name}}</a>
                                    </div>
                                    <div class="rating">
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">{{$item->price}}</span>
                                    </div>
                                    <div class="cart">
                                        <div class="add-to-cart">
                                            <a class="cart-plus" href="#" title="Add to cart"><i
                                                    class="zmdi zmdi-shopping-cart-plus zmdi-hc-fw"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-Product-End -->
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--======================
    Home 2 Product Area End
    ==========================-->
@endsection