<!-- =================
    Header Area Start 
    =====================-->
<div class="header-area header-three">
    <!-- Header Top Start -->
    {{-- <div class="header-top full-border">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-12">
                    <div class="header-top-left">
                        <p><span>Customer Service: </span> (800) 123 456 789</p>
                    </div>
                </div>
                <div class="col-lg-8 col-12">
                    <div class="box-right">
                        <ul>
                            <li class="settings">
                                <a href="#">Compare (2)</a>
                            </li>
                            <li class="settings">
                                <a href="#" class="drop-toggle">
                                    <span>USD $</span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="box-dropdown drop-dropdown">
                                    <li><a href="#">EUR €</a></li>
                                    <li><a href="#">USD $</a></li>
                                </ul>
                            </li>
                            <li class="settings">
                                <a href="#" class="drop-toggle">
                                    <img src="assets/images/cuntry/1.jpg" alt="">
                                    English
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="box-dropdown drop-dropdown">
                                    <li>
                                        <a href="#"><img src="assets/images/cuntry/1.jpg" alt=""> English</a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="assets/images/cuntry/2.jpg" alt=""> Francis</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="settings">
                                <a href="#" class="drop-toggle">
                                    My Account
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="box-dropdown drop-dropdown">
                                    <li><a href="#">My Account</a></li>
                                    <li><a href="#">Checkout</a></li>
                                    <li><a href="#">Sign In</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Header Top End -->
    <!-- Header Middle Start -->
    <div class="header-middle space-40 sticker">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-6">
                    <div class="logo">
                        <a href="{{route('site.index')}}"><img
                                src="{{ asset('assets/site/images/logo/logo-white.png') }}" alt=""
                                class="img-fluid"></a>
                    </div>
                </div>
                <div class="col-lg-9 col-6">
                    <div class="header-middle-inner">
                        <!-- Main Menu Start -->
                        <div class="header-menu float-left add-sticky">
                            <div class="sticky-container">
                                <div class="logo">
                                    <a href="{{route('site.index')}}"><img
                                            src="{{ asset('assets/site/images/logo/logo-dark.png') }}" width="80" alt=""
                                            class="img-fluid"></a>
                                </div>
                                <nav class="main-menu">
                                    <ul>
                                        @foreach ($menu as $item)
                                        <li>
                                            <a href="{{ route('site.department', ['slug'=>$item->slug]) }}"
                                                style="text-transform: uppercase;">{{$item->name}}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- Main Menu End -->
                        @include('site.layouts.cart')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Middle End -->
    <!-- Header Bottom Start -->
    <div class="header-menu header-bottom-area theme-bg">
        <div class="offcanvas_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-10">
                    <!-- Category Menu Start -->
                    <div class="categoryes-menu-bar">
                        <div class="categoryes-menu-btn category-toggle">
                            <div class="float-left">
                                <i class="fa fa-angle-down"></i>
                            </div>
                            <div class="float-right">
                                <a href="#">TODOS DEPARTAMENTOS</a>
                            </div>
                        </div>
                        <nav class="categorye-menus category-dropdown">
                            <ul class="categories-expand">
                                @forelse ($departments as $item)
                                <li>
                                    <a href="{{ route('site.department', ['slug'=>$item->slug]) }}">{{$item->name}}</a>
                                </li>
                                @empty
                                <li>
                                    Nenhum departamento cadastrado!
                                </li>
                                @endforelse
                            </ul>
                        </nav>
                    </div>
                    <!-- Category Menu End -->
                </div>
                <div class="col-lg-9 col-6 d-none d-lg-flex">
                    <div class="search-container">
                        <form action="#">
                            <div class="search_box">
                                <input class="header-search" placeholder="O que você precisa hoje?" type="text">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-2 d-lg-none align-self-center">
                    <!-- ========================
                        Offcanvas Menu Area Start 
                        ===========================-->
                    <div class="offcanvas_menu">
                        <div class="canvas_open">
                            <a href="#"><i class="zmdi zmdi-menu"></i></a>
                        </div>
                        <div class="offcanvas_menu_wrapper">
                            <div class="canvas_close">
                                <a href="#"><i class="zmdi zmdi-close"></i></a>
                            </div>
                            <div class="welcome_text text-center mb-10">
                                <p><span>Customer Service: </span> (800) 123 456 789</p>
                            </div>
                            <div class="box-right text-center mb-20">
                                <ul>
                                    <li class="settings">
                                        <a href="#" class="drop-toggle">
                                            <span>USD $</span>
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="box-dropdown drop-dropdown">
                                            <li><a href="#">EUR €</a></li>
                                            <li><a href="#">USD $</a></li>
                                        </ul>
                                    </li>
                                    <li class="settings">
                                        <a href="#" class="drop-toggle">
                                            <img src="assets/images/cuntry/1.jpg" alt="">
                                            English
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="box-dropdown drop-dropdown">
                                            <li>
                                                <a href="#"><img src="assets/images/cuntry/1.jpg" alt="">
                                                    English</a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="assets/images/cuntry/2.jpg" alt="">
                                                    Francies</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="settings">
                                        <a href="compare.html">Compare (2)</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget-body">
                                <div class="widget-address text-center mb-20">
                                    <p><strong>ADDRESS</strong></p>
                                    <p>123 Main Street, Anytown <br> CA 12345 USA.</p>
                                    <p>(800) 123 456 - (800) 123 456.</p>
                                </div>
                            </div>
                            <div class="offcanvas-search-container mb-40">
                                <form action="#">
                                    <div class="search_box">
                                        <input placeholder="Search entire store here ..." type="text">
                                        <button type="submit">Search</button>
                                    </div>
                                </form>
                            </div>
                            <!-- Offcanvas Menu Start -->
                            <div class="offcanvas_menu_cover text-left">
                                <ul class="offcanvas_main_menu">
                                    <li class="menu-item-has-children active">
                                        <a href="#">Home</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{route('site.index')}}">Home 1</a></li>
                                            <li><a href="index-2.html">Home 2</a></li>
                                            <li><a href="index-3.html">Home 3</a></li>
                                            <li><a href="index-4.html">Home 4</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Shop</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item-has-children">
                                                <a href="#">Shop Layouts</a>
                                                <ul class="sub-menu">
                                                    <li><a href="shop.html">Shop</a></li>
                                                    <li><a href="shop-fullwidth.html">Full Width</a></li>
                                                    <li><a href="shop-fullwidth-list.html">Full Width list</a></li>
                                                    <li><a href="shop-right-sidebar.html">Right Sidebar </a></li>
                                                    <li><a href="shop-right-sidebar-list.html"> Right Sidebar list</a>
                                                    </li>
                                                    <li><a href="shop-list.html">List View</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="#">other Pages</a>
                                                <ul class="sub-menu">
                                                    <li><a href="shopping-cart.html">Cart</a></li>
                                                    <li><a href="wishlist.html">Wishlist</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                    <li><a href="my-account.html">My Account</a></li>
                                                    <li><a href="faq.html">FAQs</a></li>
                                                    <li><a href="404.html">Error 404</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="#">Product Types</a>
                                                <ul class="sub-menu">
                                                    <li><a href="product-details.html">Product details</a></li>
                                                    <li><a href="product-details-external.html">Product external</a>
                                                    </li>
                                                    <li><a href="product-details-grouped.html">Product grouped</a></li>
                                                    <li><a href="product-details-variable.html">Product variable</a>
                                                    </li>
                                                    <li><a href="product-details-bottomtab.html">Tab style - 1</a></li>
                                                    <li><a href="product-details-lefttab.html">Tab style - 2</a></li>
                                                    <li><a href="product-details-righttab.html">Tab style - 3</a></li>
                                                    <li><a href="product-details-stickyleft.html">Product sticky
                                                            left</a></li>
                                                    <li><a href="product-details-stickyright.html">Product sticky
                                                            right</a></li>
                                                    <li><a href="product-details-galleryleft.html">Product leftside
                                                            Gallery</a></li>
                                                    <li><a href="product-details-galleryright.html">Product rightside
                                                            Gallery</a></li>
                                                    <li><a href="product-details-sliderbox.html">Product Sliderbox</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">blog</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item-has-children">
                                                <a href="#">Blog Grid</a>
                                                <ul class="sub-menu">
                                                    <li><a href="blog-grid-right-sidebar.html">Right Sidebar</a></li>
                                                    <li><a href="blog-grid-left-sidebar.html">Left Sidebar</a></li>
                                                    <li><a href="blog-grid-fullwidth.html">Full Width</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="#">Blog List</a>
                                                <ul class="sub-menu">
                                                    <li><a href="blog-list-right-sidebar.html">Right Sidebar</a></li>
                                                    <li><a href="blog-list-left-sidebar.html">Left Sidebar</a></li>
                                                    <li><a href="blog-list-fullwidth.html">Full Width</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="#">Blog Single Post</a>
                                                <ul class="sub-menu">
                                                    <li><a href="blog-details.html">Right Sidebar</a></li>
                                                    <li><a href="blog-details-left-sidebar.html">Left Sidebar</a></li>
                                                    <li><a href="blog-details-fullwidth.html">Full Width</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="#">Standard Blog</a>
                                                <ul class="sub-menu">
                                                    <li><a href="blog-right-sidebar.html">Right Sidebar</a></li>
                                                    <li><a href="blog-left-sidebar.html">Left Sidebar</a></li>
                                                    <li><a href="blog-fullwidth.html">Full Width</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">pages </a>
                                        <ul class="sub-menu">
                                            <li><a href="">About Us</a></li>
                                            <li><a href="shop.html">Shop</a></li>
                                            <li><a href="product-details.html">Product</a></li>
                                            <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="compare.html">Compare</a></li>
                                            <li><a href="contact.html">Contact Us</a></li>
                                            <li><a href="faq.html">Frequently Question</a></li>
                                            <li><a href="my-account.html">My Account</a></li>
                                            <li><a href="login.html">Login</a></li>
                                            <li><a href="register.html">Register</a></li>
                                            <li><a href="404.html">404 Error</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="">about Us</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="contact.html"> Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Offcanvas Menu End -->
                            <div class="offcanvas_footer">
                                <span><a href="#"><i class="fa fa-envelope-o"></i>
                                        info@yourdomain.com</a></span>
                                <div class="footer_social">
                                    <ul class="d-flex">
                                        <li><a class="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                        <li><a class="twitter" href="#"><i class="zmdi zmdi-twitter"></i></a>
                                        </li>
                                        <li><a class="youtube" href="#"><i class="zmdi zmdi-youtube"></i></a>
                                        </li>
                                        <li><a class="google" href="#"><i class="zmdi zmdi-google-plus"></i></a></li>
                                        <li><a class="linkedin" href="#"><i class="zmdi zmdi-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========================
                        Offcanvas Menu Area End 
                        ===========================-->
                </div>
            </div>
        </div>
    </div>
    <!-- Header Bottom End  -->
</div>
<!-- =================
    Header Area  End 
    =====================-->