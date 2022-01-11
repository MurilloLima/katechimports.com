<!--===================
     footer area start 
    ===================-->
<footer class="mt-30">
    <!-- Newslatter area start -->
    <div class="newsletter-group">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="newsletter-inner d-flex align-items-center">
                        <i class="fa fa-envelope-open-o"></i>
                        <div class="newsletter-title">
                            <h1 class="sign-title">Assine a nossa newsletter</h1>
                            <p>Receba atualizações por e-mail sobre nossa loja mais recente e ofertas especiais.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="newsletter-box">
                        <form id="mc-form" class="mc-form">
                            <input type="email" id="mc-email" class="email-box" placeholder="Digite seu e-mail"
                                name="EMAIL">
                            <button id="mc-submit" class="newsletter-btn" type="submit">Inscrever</button>
                        </form>
                        <!-- mailchimp-alerts Start -->
                        <div class="mailchimp-alerts text-centre">
                            <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                            <div class="mailchimp-success text-success"></div><!-- mailchimp-success end -->
                            <div class="mailchimp-error text-danger"></div><!-- mailchimp-error end -->
                        </div><!-- mailchimp-alerts end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Newslatter area End -->
    <!-- Footer Top Start -->
    <div class="footer-top mt-50 mb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="footer-single-widget">
                        <div class="footer-logo mb-40">
                            <a href="index.html"><img src="{{ asset('assets/site/images/logo/logo-dark.png') }}" width="200" alt=""></a>
                        </div>
                        <div class="widget-body">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis vero necessitatibus,
                                blanditiis explicabo enim aliquid libero eos ab, voluptate optio, unde eius. Molestias
                                molestiae odit minima quae, fuga autem quod.</p>
                            <div class="widget-address mt-30 mb-20">
                                <p><strong>Address:</strong> 123 Main Street, Anytown, CA 12345 USA.</p>
                                <p><strong>Number Phone:</strong> (800) 123 456 - (800) 123 456.</p>
                                <p><strong>Address Email:</strong> support@katechimports.com</p>
                            </div>
                        </div>
                        <div class="footer_social">
                            <ul class="d-flex">
                                <li><a class="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                <li><a class="twitter" href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                                <li><a class="youtube" href="#"><i class="zmdi zmdi-youtube"></i></a></li>
                                <li><a class="google" href="#"><i class="zmdi zmdi-google-plus"></i></a>
                                </li>
                                <li><a class="linkedin" href="#"><i class="zmdi zmdi-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-6">
                            <div class="widgets_container">
                                <h6>Informações</h6>
                                <div class="footer_menu">
                                    <ul>
                                        <li><a href="#">Sobre nós</a></li>
                                        <li><a href="#">Política de Privacidade</a></li>
                                        <li><a href="#">Termos e Condições</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-6">
                            <div class="widgets_container">
                                <h6>Minha conta</h6>
                                <div class="footer_menu">
                                    <ul>
                                        <li><a href="#">Meus Dados</a></li>
                                        <li><a href="#">Ordem de pedidos</a></li>
                                        <li><a href="#">Lista de Desejos</a></li>
                                        <li><a href="#">Newslatter</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-6">
                            <div class="widgets_container">
                                <h6>Encontre</h6>
                                <div class="footer_menu">
                                    <ul>
                                        @foreach ($departmentFooter as $item)
                                        <li><a href="#">{{$item->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-6">
                            <div class="widgets_container">
                                <h6>Atendimento ao Cliente</h6>
                                <div class="footer_menu">
                                    <ul>
                                        <li><a href="#">Site mapa</a></li>
                                        <li><a href="#">Contate-nos</a></li>
                                        <li><a href="#">Informação de entrega</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Top End -->
    <!-- Footer Bottom Start -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-12 col-12">
                    <div class="footer-bottom-content">
                        <div class="footer-copyright">
                            <p>© {{date('Y')}} Copyright <strong>Katech Imports</strong>. Todos os direitos reservados.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-12">
                    <div class="payment">
                        <a href="#">
                            <img src="assets/site/images/payment/footerend.png" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Bottom End -->
</footer>
<!--===================
     footer area end 
    ===================-->

<!-- Scroll To Top Start -->
<a class="scroll-to-top" href=""><i class="fa fa-angle-up"></i></a>
<!-- Scroll To Top End -->

<!-- modal area start-->
<div class="modal fade" id="modal_box" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class="zmdi zmdi-close"></i></span>
            </button>
            <div class="modal_body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="modal_tab">
                                <div class="tab-content product-details-large">
                                    <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                        <div class="modal_tab_img">
                                            <a href="#"><img
                                                    src="assets/site/images/product/product-details/product-details-1.jpg"
                                                    alt="" class="img-fluid"></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab2" role="tabpanel">
                                        <div class="modal_tab_img">
                                            <a href="#"><img
                                                    src="assets/site/images/product/product-details/product-details-2.jpg"
                                                    alt="" class="img-fluid"></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab3" role="tabpanel">
                                        <div class="modal_tab_img">
                                            <a href="#"><img
                                                    src="assets/site/images/product/product-details/product-details-3.jpg"
                                                    alt="" class="img-fluid"></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab4" role="tabpanel">
                                        <div class="modal_tab_img">
                                            <a href="#"><img
                                                    src="assets/site/images/product/product-details/product-details-4.jpg"
                                                    alt="" class="img-fluid"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal_tab_button">
                                    <ul class="nav product_navactive" role="tablist">
                                        <li>
                                            <a class="nav-link active" data-bs-toggle="tab" href="#tab1" role="tab"
                                                aria-controls="tab1" aria-selected="false"><img
                                                    src="assets/site/images/product/product-details/product-thumb-1.jpg"
                                                    alt="" class="img-fluid"></a>
                                        </li>
                                        <li>
                                            <a class="nav-link" data-bs-toggle="tab" href="#tab2" role="tab"
                                                aria-controls="tab2" aria-selected="false"><img
                                                    src="assets/site/images/product/product-details/product-thumb-2.jpg"
                                                    alt="" class="img-fluid"></a>
                                        </li>
                                        <li>
                                            <a class="nav-link button_three" data-bs-toggle="tab" href="#tab3"
                                                role="tab" aria-controls="tab3" aria-selected="false"><img
                                                    src="assets/site/images/product/product-details/product-thumb-3.jpg"
                                                    alt="" class="img-fluid"></a>
                                        </li>
                                        <li>
                                            <a class="nav-link" data-bs-toggle="tab" href="#tab4" role="tab"
                                                aria-controls="tab4" aria-selected="false"><img
                                                    src="assets/site/images/product/product-details/product-thumb-4.jpg"
                                                    alt="" class="img-fluid"></a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <!-- Product Summery Start -->
                            <div class="product-summery mt-50">
                                <div class="product-head">
                                    <h1 class="product-title">Porro quisquam eget feugiat pretium</h1>
                                </div>
                                <div class="price-box">
                                    <span class="regular-price">$30.00</span>
                                </div>
                                <div class="product-description">
                                    <p>Porro first 4K UHD Camcorder, the GX10 has a compact and portable design that
                                        delivers outstanding video quality with remarkable detail. With a combination of
                                        incredible features and functionality, the GX10 is the ideal camcorder for
                                        aspiring filmmakers.</p>
                                </div>
                                <div class="product-tax mb-20">
                                    <ul>
                                        <li><span><strong>Ex Tax :</strong>£60.24</span></li>
                                        <li><span><strong>Brands :</strong>Canon</span></li>
                                        <li><span><strong>Product Code :</strong>Digital</span></li>
                                        <li><span><strong>Reward Points :</strong>200</span></li>
                                        <li><span><strong>Availability :</strong>In Stock</span></li>
                                    </ul>
                                </div>
                                <div class="product-buttons grid_list">
                                    <div class="action-link">
                                        <a href="#" title="Add to compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        <button class="btn-secondary">Add To Cart</button>
                                        <a href="#" title="Add to wishlist"><i
                                                class="zmdi zmdi-favorite-outline zmdi-hc-fw"></i></a>
                                    </div>
                                </div>
                                <div class="product-meta">
                                    <div class="desc-content">
                                        <div class="social_sharing d-flex">
                                            <h5>share this post:</h5>
                                            <ul>
                                                <li><a href="#" title="facebook"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#" title="twitter"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#" title="pinterest"><i class="fa fa-pinterest"></i></a>
                                                </li>
                                                <li><a href="#" title="google+"><i class="fa fa-google-plus"></i></a>
                                                </li>
                                                <li><a href="#" title="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Product Summery End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- modal area end-->