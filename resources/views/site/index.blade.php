@extends('site.layouts.app')
@section('title', 'Home')

@section('content')
<!--=====================
    slider area start
    =========================-->
<div class="slider_section mb-60">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="slider_area slider-two slider-tools row">
                    <!-- Single Slider Start -->
                    <div class="single_slider hero-bg-1">
                        {{-- <div class="slider_content color_two">
                            <h5>The Hottest <br> Trend</h5>
                            <h2>Laptop <br> Tablets Outlet</h2>
                            <div class="pt-des">
                                <p><span>25%</span>Starting at <span>$340.00</span></p>
                            </div>
                            <a href="shop.html">Shop Now</a>
                        </div> --}}
                    </div>
                    <!-- Single Slider End -->
                    <!-- Single Slider Start -->
                    <div class="single_slider hero-bg-2">
                        {{-- <div class="slider_content color_two">
                            <h5>The Hottest <br> Trend</h5>
                            <h2>Cellphone <br> Smartphone Not 2</h2>
                            <div class="pt-des">
                                <p><span>35%</span>Starting at <span>$120.00</span></p>
                            </div>
                            <a href="shop.html">Shop Now</a>
                        </div> --}}
                    </div>
                    <!-- Single Slider End -->
                </div>
            </div>
        </div>
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
                    <a href="index-2.html#"><img src="assets/site/images/banner/banner1-1.png" alt="" class="img-fluid"></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 text-center">
                <div class="single-banner mt-30">
                    <a href="index-2.html#"><img src="assets/site/images/banner/banner2-2.png" alt="" class="img-fluid"></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 text-center">
                <div class="single-banner mt-30">
                    <a href="index-2.html#"><img src="assets/site/images/banner/banner3-3.png" alt="" class="img-fluid"></a>
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
            <div class="col-lg-3 mt-15">
                <!-- Product Offer Sidebar Start -->
                <div class="product-offer-slider slick-custom-default">
                    <div class="flash-single-item">
                        <div class="product-item">
                            <span class="offer-bar"><img src="assets/site/images/product/sale-offer.png" alt=""></span>
                            <div class="product-thumb">
                                <a href="product-details.html">
                                    <img src="assets/site/images/product/product-9.jpg" alt="" class="img-fluid">
                                </a>
                                <div class="box-label">
                                    <div class="label-product-discount">
                                        <span>-20%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-caption">
                                <div class="product-name mb-20">
                                    <a href="product-details.html">
                                        <h6>Natus erro at congue massa commodo sit dignissim</h6>
                                    </a>
                                </div>
                                <div class="rating">
                                    <span class="yellow"><i class="fa fa-star"></i></span>
                                    <span class="yellow"><i class="fa fa-star"></i></span>
                                    <span class="yellow"><i class="fa fa-star"></i></span>
                                    <span class="yellow"><i class="fa fa-star"></i></span>
                                    <span class="default-star"><i class="fa fa-star"></i></span>
                                </div>
                                <div class="price-box mt-15 mb-15">
                                    <span class="regular-price">$30.00</span>
                                    <span class="old-price"><del>$35.50</del></span>
                                </div>
                                <div class="product-pre-content mb-30">
                                    <p>The S-Series Full HD TCL Roku TV puts all your favorites in one place, seamless
                                        access to...</p>
                                </div>
                                <div class="countdown">
                                    <div class="box-countdown">
                                        <div class="title-countdown">
                                            <h6 class="mb-20">Hurry Up! Offer ends in:</h6>
                                        </div>
                                        <div data-countdown="2023/12/24">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flash-single-item">
                        <div class="product-item">
                            <span class="offer-bar"><img src="assets/site/images/product/sale-offer.png" alt=""></span>
                            <div class="product-thumb">
                                <a href="product-details.html">
                                    <img src="assets/site/images/product/product-12.jpg" alt="" class="img-fluid">
                                </a>
                                <div class="box-label">
                                    <div class="label-product-discount">
                                        <span>-20%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-caption">
                                <div class="product-name mb-20">
                                    <a href="product-details.html">
                                        <h6>Mirum est notare tellus eu nibh iaculis pretium</h6>
                                    </a>
                                </div>
                                <div class="rating">
                                    <span class="yellow"><i class="fa fa-star"></i></span>
                                    <span class="yellow"><i class="fa fa-star"></i></span>
                                    <span class="yellow"><i class="fa fa-star"></i></span>
                                    <span class="yellow"><i class="fa fa-star"></i></span>
                                    <span class="default-star"><i class="fa fa-star"></i></span>
                                </div>
                                <div class="price-box mt-15 mb-15">
                                    <span class="regular-price">$130.00</span>
                                    <span class="old-price"><del>$135.50</del></span>
                                </div>
                                <div class="product-pre-content mb-30">
                                    <p>The S-Series Full HD TCL Roku TV puts all your favorites in one place, seamless
                                        access to...</p>
                                </div>
                                <div class="countdown">
                                    <div class="box-countdown">
                                        <div class="title-countdown">
                                            <h6 class="mb-20">Hurry Up! Offer ends in:</h6>
                                        </div>
                                        <div data-countdown="2023/12/24">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product Offer Sidebar End -->
                <!-- Product List Sidebar Start -->
                <div class="product-list-slidebar mt-30">
                    <div class="block-title">
                        <h6>New Arrivals</h6>
                    </div>
                    <div class="feature-carousel slick-custom slick-custom-default nav-top">
                        <div class="product-list-content">
                            <div class="single-product-list mb-20">
                                <div class="product-list-image">
                                    <a href="product-details.html">
                                        <img src="assets/site/images/feature/feature-1.jpg" alt=""
                                            class="img-fluid block-one">
                                        <img src="assets/site/images/feature/feature-6.jpg" alt=""
                                            class="img-fluid block-two">
                                    </a>
                                </div>
                                <div class="product-caption">
                                    <div class="product-name">
                                        <a href="product-details.html">Natus erro at congue massa commodo sit
                                            dignissim</a>
                                    </div>
                                    <div class="rating">
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$30.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="single-product-list mb-20">
                                <div class="product-list-image">
                                    <a href="product-details.html">
                                        <img src="assets/site/images/feature/feature-2.jpg" alt=""
                                            class="img-fluid block-one">
                                        <img src="assets/site/images/feature/feature-5.jpg" alt=""
                                            class="img-fluid block-two">
                                    </a>
                                </div>
                                <div class="product-caption">
                                    <div class="product-name">
                                        <a href="product-details.html">Mirum est notare tellus eu nibh iaculis
                                            pretium</a>
                                    </div>
                                    <div class="rating">
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$32.67</span>
                                        <span class="old-price"><del>$35.50</del></span>
                                    </div>
                                </div>
                            </div>
                            <div class="single-product-list mb-20">
                                <div class="product-list-image">
                                    <a href="product-details.html">
                                        <img src="assets/site/images/feature/feature-13.jpg" alt=""
                                            class="img-fluid block-one">
                                        <img src="assets/site/images/feature/feature-12.jpg" alt=""
                                            class="img-fluid block-two">
                                    </a>
                                </div>
                                <div class="product-caption">
                                    <div class="product-name">
                                        <a href="product-details.html">Porro quisquam eget feugiat pretium sodales</a>
                                    </div>
                                    <div class="rating">
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$30.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="single-product-list">
                                <div class="product-list-image">
                                    <a href="product-details.html">
                                        <img src="assets/site/images/feature/feature-3.jpg" alt=""
                                            class="img-fluid block-one">
                                        <img src="assets/site/images/feature/feature-4.jpg" alt=""
                                            class="img-fluid block-two">
                                    </a>
                                </div>
                                <div class="product-caption">
                                    <div class="product-name">
                                        <a href="product-details.html">Natus erro at congue massa commodo sit
                                            dignissim</a>
                                    </div>
                                    <div class="rating">
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="default-star"><i class="fa fa-star"></i></span>
                                        <span class="default-star"><i class="fa fa-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$143.00</span>
                                        <span class="old-price"><del>$156.00</del></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-list-content">
                            <div class="single-product-list mb-20">
                                <div class="product-list-image">
                                    <a href="product-details.html">
                                        <img src="assets/site/images/feature/feature-1.jpg" alt=""
                                            class="img-fluid block-one">
                                        <img src="assets/site/images/feature/feature-6.jpg" alt=""
                                            class="img-fluid block-two">
                                    </a>
                                </div>
                                <div class="product-caption">
                                    <div class="product-name">
                                        <a href="product-details.html">Mirum est notare tellus eu nibh iaculis
                                            pretium</a>
                                    </div>
                                    <div class="rating">
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$30.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="single-product-list mb-20">
                                <div class="product-list-image">
                                    <a href="product-details.html">
                                        <img src="assets/site/images/feature/feature-4.jpg" alt=""
                                            class="img-fluid block-one">
                                        <img src="assets/site/images/feature/feature-6.jpg" alt=""
                                            class="img-fluid block-two">
                                    </a>
                                </div>
                                <div class="product-caption">
                                    <div class="product-name">
                                        <a href="product-details.html">Porro quisquam eget feugiat pretium sodales</a>
                                    </div>
                                    <div class="rating">
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$30.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="single-product-list mb-20">
                                <div class="product-list-image">
                                    <a href="product-details.html">
                                        <img src="assets/site/images/feature/feature-2.jpg" alt=""
                                            class="img-fluid block-one">
                                        <img src="assets/site/images/feature/feature-5.jpg" alt=""
                                            class="img-fluid block-two">
                                    </a>
                                </div>
                                <div class="product-caption">
                                    <div class="product-name">
                                        <a href="product-details.html">Natus erro at congue massa commodo sit
                                            dignissim</a>
                                    </div>
                                    <div class="rating">
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$32.67</span>
                                        <span class="old-price"><del>$35.50</del></span>
                                    </div>
                                </div>
                            </div>
                            <div class="single-product-list">
                                <div class="product-list-image">
                                    <a href="product-details.html">
                                        <img src="assets/site/images/feature/feature-3.jpg" alt=""
                                            class="img-fluid block-one">
                                        <img src="assets/site/images/feature/feature-4.jpg" alt=""
                                            class="img-fluid block-two">
                                    </a>
                                </div>
                                <div class="product-caption">
                                    <div class="product-name">
                                        <a href="product-details.html">Mirum est notare tellus eu nibh iaculis
                                            pretium</a>
                                    </div>
                                    <div class="rating">
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="default-star"><i class="fa fa-star"></i></span>
                                        <span class="default-star"><i class="fa fa-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$143.00</span>
                                        <span class="old-price"><del>$156.00</del></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product List Sidebar End -->
            </div>
            <div class="col-lg-9">
                <div class="product-details-home2 section-margin">
                    <div class="block-title">
                        <h6>Featured Products</h6>
                    </div>
                    <div class="product-carousel-home2 slick-custom slick-custom-default nav-top">
                        <div class="product-row">
                            <!-- Single-Product-Start -->
                            <div class="item-product double-product mb-20">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/site/images/product/product-1.jpg" alt="" class="img-fluid">
                                    </a>
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
                                        <a href="product-details.html">Natus erro at congue massa commodo sit
                                            dignissim</a>
                                    </div>
                                    <div class="rating">
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$30.00</span>
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
                            <!-- Single-Product-Start -->
                            <div class="item-product">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/site/images/product/product-8.jpg" alt="" class="img-fluid">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product-new">
                                            <span>New</span>
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
                                        <a href="product-details.html">Mirum est notare tellus eu nibh iaculis
                                            pretium</a>
                                    </div>
                                    <div class="rating">
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$30.00</span>
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
                        <div class="product-row">
                            <!-- Single-Product-Start -->
                            <div class="item-product double-product mb-20">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/site/images/product/product-2.jpg" alt="" class="img-fluid">
                                    </a>
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
                                        <a href="product-details.html">Porro quisquam eget feugiat pretium sodales</a>
                                    </div>
                                    <div class="rating">
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$32.67</span>
                                        <span class="old-price"><del>$35.50</del></span>
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
                            <!-- Single-Product-Start -->
                            <div class="item-product">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/site/images/product/product-9.jpg" alt="" class="img-fluid">
                                    </a>
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
                                        <a href="product-details.html">Natus erro at congue massa commodo sit
                                            dignissim</a>
                                    </div>
                                    <div class="rating">
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$32.67</span>
                                        <span class="old-price"><del>$35.50</del></span>
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
                        <div class="product-row">
                            <!-- Single-Product-Start -->
                            <div class="item-product double-product mb-20">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/site/images/product/product-3.jpg" alt="" class="img-fluid">
                                    </a>
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
                                        <a href="product-details.html">Mirum est notare tellus eu nibh iaculis
                                            pretium</a>
                                    </div>
                                    <div class="rating">
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$50.67</span>
                                        <span class="old-price"><del>$55.50</del></span>
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
                            <!-- Single-Product-Start -->
                            <div class="item-product">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/site/images/product/product-10.jpg" alt="" class="img-fluid">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product-new">
                                            <span>New</span>
                                        </div>
                                        <div class="label-product-discount">
                                            <span>-20%</span>
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
                                        <a href="product-details.html">Porro quisquam eget feugiat pretium sodales</a>
                                    </div>
                                    <div class="rating">
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$50.67</span>
                                        <span class="old-price"><del>$55.50</del></span>
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
                        <div class="product-row">
                            <!-- Single-Product-Start -->
                            <div class="item-product double-product mb-20">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/site/images/product/product-4.jpg" alt="" class="img-fluid">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product-new">
                                            <span>New</span>
                                        </div>
                                        <div class="label-product-discount">
                                            <span>-20%</span>
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
                                        <a href="product-details.html">Natus erro at congue massa commodo sit
                                            dignissim</a>
                                    </div>
                                    <div class="rating">
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$50.67</span>
                                        <span class="old-price"><del>$55.50</del></span>
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
                            <!-- Single-Product-Start -->
                            <div class="item-product">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/site/images/product/product-11.jpg" alt="" class="img-fluid">
                                    </a>
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
                                        <a href="product-details.html">Mirum est notare tellus eu nibh iaculis
                                            pretium</a>
                                    </div>
                                    <div class="rating">
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$50.67</span>
                                        <span class="old-price"><del>$55.50</del></span>
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
                        <div class="product-row">
                            <!-- Single-Product-Start -->
                            <div class="item-product double-product mb-20">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/site/images/product/product-5.jpg" alt="" class="img-fluid">
                                    </a>
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
                                        <a href="product-details.html">Porro quisquam eget feugiat pretium sodales</a>
                                    </div>
                                    <div class="rating">
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$50.67</span>
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
                            <!-- Single-Product-Start -->
                            <div class="item-product">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/site/images/product/product-12.jpg" alt="" class="img-fluid">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product-new">
                                            <span>New</span>
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
                                        <a href="product-details.html">Natus erro at congue massa commodo sit
                                            dignissim</a>
                                    </div>
                                    <div class="rating">
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$50.67</span>
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
                    </div>
                </div>
                <div class="banner-area">
                    <div class="single-banner mt-30">
                        <a href="index-2.html#"><img src="assets/site/images/banner/banner2-4.png" alt=""
                                class="img-fluid"></a>
                    </div>
                </div>
                <div class="product-details-home2 mb-30 mt-50">
                    <div class="block-title">
                        <h6>Bestseller Products</h6>
                    </div>
                    <div class="product-carousel-home2 slick-custom slick-custom-default nav-top">
                        <div class="product-row">
                            <!-- Single-Product-Start -->
                            <div class="item-product">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/site/images/product/product-11.jpg" alt="" class="img-fluid">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product-new">
                                            <span>New</span>
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
                                        <a href="product-details.html">Natus erro at congue massa commodo sit
                                            dignissim</a>
                                    </div>
                                    <div class="rating">
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$30.00</span>
                                    </div>
                                    <div class="cart">
                                        <div class="add-to-cart">
                                            <a class="cart-plus" href="shopping-cart.html" title="Add to cart"><i
                                                    class="zmdi zmdi-shopping-cart-plus zmdi-hc-fw"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-Product-End -->
                        </div>
                        <div class="product-row">
                            <!-- Single-Product-Start -->
                            <div class="item-product">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/site/images/product/product-2.jpg" alt="" class="img-fluid">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product-new">
                                            <span>New</span>
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
                                        <a href="product-details.html">Mirum est notare tellus eu nibh iaculis
                                            pretium</a>
                                    </div>
                                    <div class="rating">
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$30.00</span>
                                    </div>
                                    <div class="cart">
                                        <div class="add-to-cart">
                                            <a class="cart-plus" href="shopping-cart.html" title="Add to cart"><i
                                                    class="zmdi zmdi-shopping-cart-plus zmdi-hc-fw"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-Product-End -->
                        </div>
                        <div class="product-row">
                            <!-- Single-Product-Start -->
                            <div class="item-product">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/site/images/product/product-8.jpg" alt="" class="img-fluid">
                                    </a>
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
                                        <a href="index-2.html#">Porro quisquam eget feugiat pretium sodales</a>
                                    </div>
                                    <div class="rating">
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$50.67</span>
                                        <span class="old-price"><del>$55.50</del></span>
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
                        <div class="product-row">
                            <!-- Single-Product-Start -->
                            <div class="item-product">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/site/images/product/product-3.jpg" alt="" class="img-fluid">
                                    </a>
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
                                        <a href="index-2.html#">Porro quisquam eget feugiat pretium sodales</a>
                                    </div>
                                    <div class="rating">
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$50.67</span>
                                        <span class="old-price"><del>$55.50</del></span>
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
                        <div class="product-row">
                            <!-- Single-Product-Start -->
                            <div class="item-product">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/site/images/product/product-8.jpg" alt="" class="img-fluid">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product-new">
                                            <span>New</span>
                                        </div>
                                        <div class="label-product-discount">
                                            <span>-20%</span>
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
                                        <a href="product-details.html">Natus erro at congue massa commodo sit
                                            dignissim</a>
                                    </div>
                                    <div class="rating">
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$50.67</span>
                                        <span class="old-price"><del>$55.50</del></span>
                                    </div>
                                    <div class="cart">
                                        <div class="add-to-cart">
                                            <a href="https://template.hasthemes.com/circleshop/circleshop/shoppint-cart.html"
                                                title="Add to cart"><i
                                                    class="zmdi zmdi-shopping-cart-plus zmdi-hc-fw"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-Product-End -->
                        </div>
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