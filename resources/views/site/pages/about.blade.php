@extends('site.layouts.app')
@section('title', 'Sobre')

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
                            <h1><a href="index.html">Home</a></h1>
                        </li>
                        <li>Sobre</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--=====================
    Breadcrumb Aera End
    =========================-->

<!-- ================
    About Area Start
    =====================-->
<div class="about-area mt-45 mb-35">
    <div class="container">
        <div class="row">
            <div class="offset-lg-2 col-lg-8 text-center">
                <div class="about-head">
                    <h3 class="mb-20">Seja bem vindo a Katech Imports!</h3>
                    <p>
                        A KATECH IMPORTS nasceu em abril de 2020 com a missão de se tornar referência
                        no varejo e-commerce do país. Voltada a oferecer o melhor em tecnologia, informática, telefonia
                        e acessórios das maiores marcas do mercado.
                    </p>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6 mt-40 text-center">
                <div class="about-img">
                    <img src="{{ asset('assets/site/images/about/about-1.jpg') }}" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6 mt-20 text-center">
                <div class="about-content">
                    <h3 class="last-title mb-20">O que nós fazemos?</h3>
                    <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum
                        formas humanitatis per seacula quarta decima et quinta decima.Mirum est notare quam littera
                        gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula
                        quarta decima et quinta decima.</p>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6 mt-40 order-lg-2 text-center">
                <div class="about-img">
                    <img src="{{ asset('assets/site/images/about/about-2.jpg') }}" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6 mt-20 text-center order-lg-1">
                <div class="about-content">
                    <h3 class="last-title mb-20">Missão</h3>
                    <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum
                        formas humanitatis per seacula quarta decima et quinta decima.Mirum est notare quam littera
                        gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula
                        quarta decima et quinta decima.</p>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6 mt-40 text-center">
                <div class="about-img">
                    <img src="{{ asset('assets/site/images/about/about-3.jpg') }}" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6 mt-20 text-center">
                <div class="about-content">
                    <h3 class="last-title mb-20">História</h3>
                    <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum
                        formas humanitatis per seacula quarta decima et quinta decima.Mirum est notare quam littera
                        gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula
                        quarta decima et quinta decima.</p>
                </div>
            </div>
        </div>
        <div class="row mt-45">
            <!-- Testimonial Area Start -->
            <div class="offset-lg-2 col-lg-8">
                <div class="block-title">
                    <h6>O que nossos clientes dizem </h6>
                </div>
                <div class="testimonial-carousel slick-custom pt-20 nav-top">
                    <div class="single_testimonial text-center">
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel
                            illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui
                            blandit praesent luptatum zzril delenit augue duis dolore te feuga</p>
                        <img src="{{ asset('assets/site/images/testimonial/testimonial-1.png') }}" alt="" class="img-fluid">
                        <span class="name">Marcos Paulo</span>
                        <span class="job_title">Engenheiro</span>
                        <div class="rating">
                            <span class="yellow"><i class="fa fa-star"></i></span>
                            <span class="yellow"><i class="fa fa-star"></i></span>
                            <span class="yellow"><i class="fa fa-star"></i></span>
                            <span class="yellow"><i class="fa fa-star"></i></span>
                            <span class="yellow"><i class="fa fa-star"></i></span>
                        </div>
                    </div>
                    <div class="single_testimonial text-center">
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel
                            illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui
                            blandit praesent luptatum zzril delenit augue duis dolore te feuga</p>
                        <img src="{{ asset('assets/site/images/testimonial/testimonial-2.jpg') }}" alt="" class="img-fluid">
                        <span class="name">Alex Lima</span>
                        <span class="job_title">Biologo</span>
                        <div class="rating">
                            <span class="yellow"><i class="fa fa-star"></i></span>
                            <span class="yellow"><i class="fa fa-star"></i></span>
                            <span class="yellow"><i class="fa fa-star"></i></span>
                            <span class="yellow"><i class="fa fa-star"></i></span>
                            <span class="yellow"><i class="fa fa-star"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonial Area End -->
        </div>
        <div class="row mt-40 pb-15">
            <div class="col-lg-12 text-center">
                <!-- Brand Logo Area Start -->
                <div class="brand-logo">
                    <div class="single-brand">
                        <a href="about.html#">
                            <img src="{{ asset('assets/site/images/brand/3.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                    <div class="single-brand">
                        <a href="about.html#">
                            <img src="{{ asset('assets/site/images/brand/2.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                    <div class="single-brand">
                        <a href="about.html#">
                            <img src="{{ asset('assets/site/images/brand/1.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                    <div class="single-brand">
                        <a href="about.html#">
                            <img src="{{ asset('assets/site/images/brand/4.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                    <div class="single-brand">
                        <a href="about.html#">
                            <img src="{{ asset('assets/site/images/brand/5.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                    <div class="single-brand">
                        <a href="about.html#">
                            <img src="{{ asset('assets/site/images/brand/6.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                    <div class="single-brand">
                        <a href="about.html#">
                            <img src="{{ asset('assets/site/images/brand/1.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                    <div class="single-brand">
                        <a href="about.html#">
                            <img src="{{ asset('assets/site/images/brand/3.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                    <div class="single-brand">
                        <a href="about.html#">
                            <img src="{{ asset('assets/site/images/brand/4.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ================
    About Area Start
    =====================-->
@endsection