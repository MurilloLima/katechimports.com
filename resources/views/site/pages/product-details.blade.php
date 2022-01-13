@extends('site.layouts.app')
@section('title', $data->name)

@section('content')
<!--=====================
    Breadcrumb Aera Start
    =========================-->
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li>
                            <h1><a href="{{ route('site.index') }}">Home</a></h1>
                        </li>
                        <li>Produto Detalhes</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--=====================
    Breadcrumb Aera End
    =========================-->

<!-- ========================
    Product Details Area Start 
    ===========================-->
<div class="product-area product-details-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-12 mt-50">
                <!-- Product Zoom Image start -->
                <div class="product-slider-container arrow-center text-center">
                    @foreach ($data->galeries as $item)
                    <div class="product-item">
                        <a href="{{ asset('storage/products/' . $item->image) }}">
                            <img src="{{ asset('storage/products/' . $item->image) }}" class="img-fluid" alt="" /></a>
                    </div>
                    @endforeach
                </div>
                <!-- Product Zoom Image End -->
                <!-- Product Thumb Zoom Image Start -->
                <div class="product-details-thumbnail arrow-center text-center">
                    @foreach ($data->galeries as $item)
                    <div class="product-item-thumb">
                        <img src="{{ asset('storage/products/' . $item->image) }}" width="100" height="100"
                            class="img-fluid" alt="" />
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-7 col-12 mt-45">
                <!-- Product Summery Start -->
                <div class="product-summery position-relative">
                    <div class="product-head">
                        <h1 class="product-title">{{$data->name}}</h1>
                    </div>
                    <div class="rating-meta d-flex">
                        <div class="rating">
                            <span class="yellow"><i class="fa fa-star"></i></span>
                            <span class="yellow"><i class="fa fa-star"></i></span>
                            <span class="yellow"><i class="fa fa-star"></i></span>
                            <span class="yellow"><i class="fa fa-star"></i></span>
                            <span class="yellow"><i class="fa fa-star"></i></span>
                        </div>
                        {{-- <ul class="meta d-flex">
                            <li>
                                <a href="#"><i class="fa fa-commenting-o"></i>Read
                                    reviews(3)</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-edit"></i>Write a review</a>
                            </li>
                        </ul> --}}
                    </div>
                    <div class="price-box">
                        <span class="regular-price">{{number_format($data->price, 2, ',', '.')}}</span>
                    </div>
                    <div class="product-description">
                        <p>{!!str_limit($data->descryption, 300)!!}</p>
                    </div>

                    <div class="product-packeges">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="label"><span>Quantidade</span></td>
                                    <td class="value">
                                        <div class="product-quantity">
                                            <span class="qty-btn minus"><i class="fa fa-angle-down"></i></span>
                                            <input type="text" class="input-qty" value="1">
                                            <span class="qty-btn plus"><i class="fa fa-angle-up"></i></span>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="product-buttons grid_list">
                        <div class="action-link">
                            {{-- <a class="quick-view same-link" href="product-details-bottomtab.html#"
                                title="Quick view" data-bs-toggle="modal" data-bs-target="#modal_box"
                                data-original-title="quick view"><i class="zmdi zmdi-eye zmdi-hc-fw"></i></a> --}}
                            <button class="btn-secondary">Comprar</button>
                            {{-- <a class="wishlist-add same-link" href="wishlist.html" title="Add to wishlist"><i
                                    class="zmdi zmdi-favorite-outline zmdi-hc-fw"></i></a> --}}
                        </div>
                    </div>
                    <div class="product-meta">
                        <div class="desc-content">
                            <div class="social_sharing d-flex">
                                <h5>Compartilhar:</h5>
                                <ul>
                                    <li><a href="product-details-bottomtab.html#" title="facebook"><i
                                                class="fa fa-facebook"></i></a></li>
                                    <li><a href="product-details-bottomtab.html#" title="Instagram"><i
                                                class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product Summery End -->
            </div>
        </div>
        <div class="row mt-40">
            <div class="col-lg-3 col-sm-3 col-md-2">
                <!-- Product Description Tab Start -->
                <div class="product-desc-tab">
                    <ul class="nav flex-column" role="tablist">
                        <li><a class="active" href="product-details-bottomtab.html#description" role="tab"
                                data-bs-toggle="tab" aria-selected="false">Descrição</a></li>
                        <li><a href="product-details-bottomtab.html#sheet" role="tab" data-bs-toggle="tab"
                                aria-selected="false">Ficha técnica</a></li>
                        {{-- <li><a href="product-details-bottomtab.html#reviews" role="tab" data-bs-toggle="tab"
                                aria-selected="true">Reviews</a></li> --}}
                    </ul>
                </div>
                <!-- Product Description Tab End -->
            </div>
            <div class="col-lg-9 col-sm-9 col-md-10">
                <div class="product-desc-tab-content">
                    <!-- Start Single Content -->
                    <div role="tabpanel" id="description" class="product_tab_content fade active show">
                        <div class="product_description_wrap mt-20">
                            <div class="product_desc">
                                {!!$data->descryption!!}
                            </div>
                        </div>
                    </div>
                    <!-- End Single Content -->
                    <!-- Start Single Content -->
                    <div role="tabpanel" id="sheet" class="product_tab_content fade">
                        <div class="pro__feature mt-20">
                            {!!$data->datasheet!!}
                        </div>
                    </div>
                    <!-- End Single Content -->
                    <!-- Start Single Content -->
                    {{-- <div role="tabpanel" id="reviews" class="product_tab_content fade">
                        <div class="review_address_inner mt-20">
                            <!-- Start Single Review -->
                            <div class="pro_review">
                                <div class="review_thumb">
                                    <img src="assets/images/blog/comment/comment-3.jpg" alt="review images">
                                </div>
                                <div class="review_details">
                                    <div class="review_info">
                                        <a class="last-title" href="product-details-bottomtab.html#">Gerald Barnes</a>
                                        <div class="rating">
                                            <span class="yellow"><i class="fa fa-star"></i></span>
                                            <span class="yellow"><i class="fa fa-star"></i></span>
                                            <span class="yellow"><i class="fa fa-star"></i></span>
                                            <span class="yellow"><i class="fa fa-star"></i></span>
                                            <span class="yellow"><i class="fa fa-star"></i></span>
                                        </div>
                                        <div class="rating_send">
                                            <a href="product-details-bottomtab.html#"><i
                                                    class="zmdi zmdi-mail-reply"></i></a>
                                            <a href="product-details-bottomtab.html#"><i
                                                    class="zmdi zmdi-close"></i></a>
                                        </div>
                                    </div>
                                    <div class="review_date">
                                        <span>27 Jun, 2016 at 2:30pm</span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas
                                        elese ifend. Phasellus a felis at estei to bibendum feugiat ut eget eni Praesent
                                        et messages in con sectetur posuere dolor non.</p>
                                </div>
                            </div>
                            <!-- End Single Review -->
                            <!-- Start Single Review -->
                            <div class="pro_review pro-second">
                                <div class="review_thumb">
                                    <img src="assets/images/blog/comment/comment-3.jpg" alt="review images">
                                </div>
                                <div class="review_details">
                                    <div class="review_info">
                                        <a class="last-title" href="product-details-bottomtab.html#">Gerald Barnes</a>
                                        <div class="rating">
                                            <span class="yellow"><i class="fa fa-star"></i></span>
                                            <span class="yellow"><i class="fa fa-star"></i></span>
                                            <span class="yellow"><i class="fa fa-star"></i></span>
                                            <span class="yellow"><i class="fa fa-star"></i></span>
                                            <span class="yellow"><i class="fa fa-star"></i></span>
                                        </div>
                                        <div class="rating_send">
                                            <a href="product-details-bottomtab.html#"><i
                                                    class="zmdi zmdi-mail-reply"></i></a>
                                            <a href="product-details-bottomtab.html#"><i
                                                    class="zmdi zmdi-close"></i></a>
                                        </div>
                                    </div>
                                    <div class="review_date">
                                        <span>27 Jun, 2016 at 2:30pm</span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas
                                        elese ifend. Phasellus a felis at estei to bibendum feugiat ut eget eni Praesent
                                        et messages in con sectetur posuere dolor non.</p>
                                </div>
                            </div>
                            <!-- End Single Review -->
                        </div>
                        <!-- Start RAting Area -->
                        <div class="rating_wrap mt-20">
                            <h4 class="last-title">Your Rating</h4>
                            <div class="rating_list mt-20">
                                <!-- Start Single List -->
                                <div class="rating">
                                    <span class="yellow"><i class="fa fa-star"></i></span>
                                    <span class="yellow"><i class="fa fa-star"></i></span>
                                    <span class="yellow"><i class="fa fa-star"></i></span>
                                    <span class="yellow"><i class="fa fa-star"></i></span>
                                    <span class="yellow"><i class="fa fa-star"></i></span>
                                </div>
                                <div class="rating">
                                    <span class="yellow"><i class="fa fa-star"></i></span>
                                    <span class="yellow"><i class="fa fa-star"></i></span>
                                    <span class="yellow"><i class="fa fa-star"></i></span>
                                    <span class="yellow"><i class="fa fa-star"></i></span>
                                    <span class="yellow"><i class="fa fa-star"></i></span>
                                </div>
                                <!-- End Single List -->
                            </div>
                        </div>
                        <!-- End RAting Area -->
                        <div class="comments_form">
                            <h3>Leave a Reply </h3>
                            <p>Your email address will not be published. Required fields are marked *</p>
                            <form action="product-details-bottomtab.html#">
                                <div class="row">
                                    <div class="col-12">
                                        <label for="review_comment">Comment </label>
                                        <textarea name="comment" id="review_comment" spellcheck="false"
                                            data-gramm="false"></textarea>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <label for="author">Name</label>
                                        <input id="author" type="text">

                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <label for="email">Email </label>
                                        <input id="email" type="text">
                                    </div>
                                </div>
                                <button class="button" type="submit">Post Comment</button>
                            </form>
                        </div>
                    </div> --}}
                    <!-- End Single Content -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="product-details-home2 mt-45 mb-15">
                    <div class="block-title">
                        <h6>Produtos relacionados</h6>
                    </div>
                    <div class="product-carousel-home2 slick-custom slick-custom-default nav-top">
                        <div class="product-row">
                            @foreach ($related as $item)
                            <!-- Single-Product-Start -->
                            <div class="item-product">
                                <div class="product-thumb">
                                    <a href="{{ route('site.product-details', ['slug'=>$item->slug]) }}">
                                        <img src="{{ url('storage/products/', $data->image_url) }}"
                                            alt="{{$data->name}}" class="img-fluid">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product-new">
                                            <span>Novo</span>
                                        </div>
                                    </div>
                                    {{-- <div class="action-link">
                                        <a class="quick-view same-link" href="product-details-bottomtab.html#"
                                            title="Quick view" data-bs-toggle="modal" data-bs-target="#modal_box"
                                            data-original-title="quick view"><i
                                                class="zmdi zmdi-eye zmdi-hc-fw"></i></a>
                                        <a class="compare-add same-link" href="compare.html" title="Add to compare"><i
                                                class="zmdi zmdi-refresh-alt"></i></a>
                                        <a class="wishlist-add same-link" href="wishlist.html"
                                            title="Add to wishlist"><i
                                                class="zmdi zmdi-favorite-outline zmdi-hc-fw"></i></a>
                                    </div> --}}
                                </div>
                                <div class="product-caption">
                                    <div class="product-name">
                                        <a href="{{ route('site.product-details', ['slug'=>$item->slug]) }}">
                                            {{$item->name}}
                                        </a>
                                    </div>
                                    <div class="rating">
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">{{number_format($item->price, 2, ',', '.')}}</span>
                                    </div>
                                    <div class="cart">
                                        <div class="add-to-cart">
                                            <a href="#" title="Adicionar ao carrinho"><i
                                                    class="zmdi zmdi-shopping-cart-plus zmdi-hc-fw"></i></a>
                                            <a href="#" title="Comprar agora"><i
                                                    class="zmdi zmdi-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-Product-End -->
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ========================
    Product Details Area End 
    ===========================-->

@endsection