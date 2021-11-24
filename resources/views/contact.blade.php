@extends('layouts.app')
@section('content')
<section class="page-title-area bg-image ptb--80" data-bg-image="img/bg/page_title_bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-title">Contact Us</h1>
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="current"><span>Contact Us</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb area End -->

<!-- Main Content Wrapper Start -->
<main class="main-content-wrapper">
    <div class="inner-page-content pt--75 pt-md--55">
        <!-- Contact Area Start -->
        <section class="contact-area mb--75 mb-md--55">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-5 mb-sm--30">
                        <div class="heading mb--32">
                            <h2>Get In Touch</h2>
                            <hr class="delimeter">
                        </div>
                        <div class="contact-info mb--20">
                            <p><i class="fa fa-map-marker"></i>221b Baker St, Marylebone <br>London NW1 6XE, UK</p>
                            <p><i class="fa fa-phone"></i> +1-202-242-8157</p>
                            <p><i class="fa fa-fax"></i> +1-202-501-1829</p>
                            <p><i class="fa fa-clock-o"></i> Mon – Fri : 9:00 – 18:00</p>
                        </div>
                        <div class="social">
                            <a href="https://www.facebook.com" class="social__link">
                                <i class="la la-facebook"></i>
                            </a>
                            <a href="https://www.twitter.com" class="social__link">
                                <i class="la la-twitter"></i>
                            </a>
                            <a href="https://www.plus.google.com" class="social__link">
                                <i class="la la-google-plus"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-7 offset-lg-1">
                        <div class="heading mb--40">
                            <h2>Contact Us</h2>
                            <hr class="delimeter">
                        </div>
                        <form action="mail.php" class="form" id="contact-form">
                            <input type="email" name="con_email" id="con_email" class="form__input mb--30" placeholder="Email*">
                            <input type="text" name="con_name" id="con_name" class="form__input mb--30" placeholder="Name*">
                            <textarea class="form__input form__input--textarea mb--30" placeholder="Message" id="con_message" name="con_message"></textarea>
                            <button type="submit" class="btn btn-shape-round form__submit">Send Request</button>
                            <div class="form__output"></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Area End -->

        <!-- Google Map Area Start -->
        <div class="google-map-area">
            <div id="google-map"></div>
        </div>
        <!-- Google Map Area End -->

        <!-- Brand Logo Area Start -->
        <div class="brand-logo-area bg-color ptb--75" data-bg-color="#e9fefd">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="element-carousel" data-slick-options='{
                                    "slidesToShow": 5,
                                    "autoplay": true
                                }' data-slick-responsive='[
                                    {"breakpoint": 1200, "settings": {"slidesToShow": 4}},
                                    {"breakpoint": 992, "settings": {"slidesToShow": 3}},
                                    {"breakpoint": 768, "settings": {"slidesToShow": 2}},
                                    {"breakpoint": 480, "settings": {"slidesToShow": 1}}
                                ]'>
                            <div class="item">
                                <figure>
                                    <img src="img/brand/brand-01.png" alt="Brand" class="mx-auto">
                                </figure>
                            </div>
                            <div class="item">
                                <figure>
                                    <img src="img/brand/brand-02.png" alt="Brand" class="mx-auto">
                                </figure>
                            </div>
                            <div class="item">
                                <figure>
                                    <img src="img/brand/brand-03.png" alt="Brand" class="mx-auto">
                                </figure>
                            </div>
                            <div class="item">
                                <figure>
                                    <img src="img/brand/brand-04.png" alt="Brand" class="mx-auto">
                                </figure>
                            </div>
                            <div class="item">
                                <figure>
                                    <img src="img/brand/brand-05.png" alt="Brand" class="mx-auto">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Brand Logo Area End -->
    </div>
</main>

@endsection