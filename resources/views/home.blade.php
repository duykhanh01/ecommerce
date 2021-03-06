@extends('layouts.app')

@section('content')
<main class="main-content-wrapper">
    <!-- Slider area Start -->
    <section class="homepage-slider mb--75 mb-md--55">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="element-carousel slick-right-bottom" data-slick-options='{
                                "slidesToShow": 1, 
                                "arrows": true,
                                "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "la la-arrow-left" },
                                "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "la la-arrow-right" }
                            }' data-slick-responsive='[{"breakpoint": 768, "settings": {"arrows": false}}]'>
                        <div class="item">
                            <div class="single-slide d-flex align-items-center bg-color" data-bg-color="#dbf3f2">
                                <div class="row align-items-center no-gutters w-100">
                                    <div class="col-xl-7 col-md-6 mb-sm--50">
                                        <figure data-animation="fadeInUp" data-duration=".3s" data-delay=".3s" class="plr--15">
                                            <img src="img/slider/slider-01-img-01.png" alt="Slider O1 image" class="mx-auto">
                                        </figure>
                                    </div>
                                    <div class="col-md-6 col-lg-5 offset-lg-1 offset-xl-0">
                                        <div class="slider-content">
                                            <div class="slider-content__text mb--40 mb-md--30">
                                                <p class="mb--15" data-animation="fadeInUp" data-duration=".3s" data-delay=".3s">#New Treand</p>
                                                <p class="mb--20" data-animation="fadeInUp" data-duration=".3s" data-delay=".3s">Enlight your world. Make yourself more bright.</p>
                                                <h1 class="heading__primary lh-pt7" data-animation="fadeInUp" data-duration=".3s" data-delay=".3s">Abotar Lighting</h1>
                                            </div>
                                            <div class="slider-content__btn">
                                                <a href="#" class="btn btn-outline btn-brw-2" data-animation="fadeInUp" data-duration=".3s" data-delay=".6s">Shop Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-slide d-flex align-items-center bg-color" data-bg-color="#dbf3f2">
                                <div class="row align-items-center no-gutters w-100">
                                    <div class="col-xl-6 col-md-6 mb-sm--50 order-md-2">
                                        <figure data-animation="fadeInUp" data-duration=".3s" data-delay=".3s" class="pl-15 pr--60">
                                            <img src="img/slider/slider-02-img-01.png" alt="Slider O1 image" class="mx-auto">
                                        </figure>
                                    </div>
                                    <div class="col-md-5 col-lg-5 offset-md-1 order-md-1">
                                        <div class="slider-content">
                                            <div class="slider-content__text border-color-2 mb--40 mb-md--30">
                                                <p class="mb--15" data-animation="fadeInUp" data-duration=".3s" data-delay=".3s">#New Treand</p>
                                                <p class="mb--20" data-animation="fadeInUp" data-duration=".3s" data-delay=".3s">Enlight your world. Make yourself more bright.</p>
                                                <h1 class="heading__primary lh-pt7" data-animation="fadeInUp" data-duration=".3s" data-delay=".3s">Abotar Lighting</h1>
                                            </div>
                                            <div class="slider-content__btn">
                                                <a href="#" class="btn btn-outline btn-brw-2 btn-brc-2" data-animation="fadeInUp" data-duration=".3s" data-delay=".6s">Shop Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Slider area End -->

    <!-- Top Sale Area Start -->
    <section class="top-sale-area mb--75 mb-md--55">
        <div class="container">
            <div class="row mb--35 mb-md--23">
                <div class="col-12 text-center">
                    <h2>This Week Top Sales</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="element-carousel" data-slick-options='{
                                "spaceBetween": 30,
                                "slidesToShow": 3
                            }' data-slick-responsive='[
                                {"breakpoint": 768, "settings": {"slidesToShow": 2}},
                                {"breakpoint": 480, "settings": {"slidesToShow": 1}}
                            ]'>
                        <div class="item">
                            <div class="ft-product">
                                <div class="product-inner">
                                    <div class="product-image">
                                        <figure class="product-image--holder">
                                            <img src="img/products/prod-01.jpg" alt="Product">
                                        </figure>
                                        <a href="product-details.html" class="product-overlay"></a>
                                        <div class="product-action">
                                            <a data-toggle="modal" data-target="#productModal" class="action-btn">
                                                <i class="la la-eye"></i>
                                            </a>
                                            <a href="wishlist.html" class="action-btn">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                            <a href="wishlist.html" class="action-btn">
                                                <i class="la la-repeat"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-info plr--20">
                                        <h3 class="product-title"><a href="product-details.html">Golden Easy Spot Chair.</a></h3>
                                        <div class="product-info-bottom">
                                            <div class="product-price-wrapper">
                                                <span class="money">$150</span>
                                            </div>
                                            <a href="cart.html" class="add-to-cart">
                                                <i class="la la-plus"></i>
                                                <span>Add To Cart</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ft-product">
                                <div class="product-inner">
                                    <div class="product-image">
                                        <figure class="product-image--holder">
                                            <img src="img/products/prod-02.jpg" alt="Product">
                                        </figure>
                                        <a href="product-details.html" class="product-overlay"></a>
                                        <div class="product-action">
                                            <a data-toggle="modal" data-target="#productModal" class="action-btn">
                                                <i class="la la-eye"></i>
                                            </a>
                                            <a href="wishlist.html" class="action-btn">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                            <a href="wishlist.html" class="action-btn">
                                                <i class="la la-repeat"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-info plr--20">
                                        <h3 class="product-title"><a href="product-details.html">Golden Easy Spot Chair.</a></h3>
                                        <div class="product-info-bottom">
                                            <div class="product-price-wrapper">
                                                <span class="money">$150</span>
                                            </div>
                                            <a href="cart.html" class="add-to-cart">
                                                <i class="la la-plus"></i>
                                                <span>Add To Cart</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ft-product">
                                <div class="product-inner">
                                    <div class="product-image">
                                        <figure class="product-image--holder">
                                            <img src="img/products/prod-03.jpg" alt="Product">
                                        </figure>
                                        <a href="product-details.html" class="product-overlay"></a>
                                        <div class="product-action">
                                            <a data-toggle="modal" data-target="#productModal" class="action-btn">
                                                <i class="la la-eye"></i>
                                            </a>
                                            <a href="wishlist.html" class="action-btn">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                            <a href="wishlist.html" class="action-btn">
                                                <i class="la la-repeat"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-info plr--20">
                                        <h3 class="product-title"><a href="product-details.html">Golden Easy Spot Chair.</a></h3>
                                        <div class="product-info-bottom">
                                            <div class="product-price-wrapper">
                                                <span class="money">$150</span>
                                            </div>
                                            <a href="cart.html" class="add-to-cart">
                                                <i class="la la-plus"></i>
                                                <span>Add To Cart</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Top Sale Area End -->

    <!-- Feature Product Area Start -->
    <section class="feature-product-area mb--75 mb-md--55">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="feature-product bg-color" data-bg-color="#d7fbf9">
                        <div class="feature-product__inner bg-color" data-bg-color="#e9fefd">
                            <div class="feature-product__info">
                                <p class="hastag">#New Style</p>
                                <h2 class="feature-product__title"><a href="product-details.html">Luxry soft</a></h2>
                                <a href="shop.html" class="feature-product__btn">Buy now</a>
                            </div>
                            <figure class="feature-product__image mb-sm--30">
                                <a href="product-details.html">
                                    <img src="img/products/feature-product-01.png" alt="Feature Product">
                                </a>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature Product Area End -->

    <!-- Product Tab Area Start -->
    <section class="product-tab-area mb--30 mb-md--10">
        <div class="container">
            <div class="row mb--28 mb-md--18 mb-sm--33">
                <div class="col-md-3 text-md-left text-center">
                    <h2>All Products</h2>
                </div>
                <div class="col-md-9">
                    <div class="tab-style-1">
                        <div class="nav nav-tabs justify-content-md-end justify-content-center" id="product-tab" role="tablist">
                            <a class="nav-item nav-link active" id="new-all-tab" data-toggle="tab" href="#new-all" role="tab" aria-controls="new-all" aria-selected="true">
                                <span class="nav-text">All</span>
                            </a>
                            <a class="nav-item nav-link" id="new-wooden-tab" data-toggle="tab" href="#new-wooden" role="tab" aria-controls="new-wooden" aria-selected="false">
                                <span class="nav-text">wooden</span>
                            </a>
                            <a class="nav-item nav-link" id="new-furnished-tab" data-toggle="tab" href="#new-furnished" role="tab" aria-controls="new-furnished" aria-selected="false">
                                <span class="nav-text">furnished</span>
                            </a>
                            <a class="nav-item nav-link" id="new-table-tab" data-toggle="tab" href="#new-table" role="tab" aria-controls="new-table" aria-selected="false">
                                <span class="nav-text">table</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="tab-content" id="product-tab-content">
                        <div class="tab-pane fade show active" id="new-all" role="tabpanel" aria-labelledby="new-all-tab">
                            <div class="row">
                                @foreach ($products as $pr)
                                <div class="col-lg-3 col-sm-6 mb--45">
                                    <div class="ft-product HTfadeInUp">
                                        <div class="product-inner">
                                            <div class="product-image">
                                                <figure class="product-image--holder">
                                                    <img src="img/products/prod-04-270x300.jpg" alt="Product">
                                                </figure>
                                                <a href="product-details.html" class="product-overlay"></a>
                                                <div class="product-action">
                                                    <a data-toggle="modal" data-target="#productModal" class="action-btn">
                                                        <i class="la la-eye"></i>
                                                    </a>
                                                    <a href="wishlist.html" class="action-btn">
                                                        <i class="la la-heart-o"></i>
                                                    </a>
                                                    <a href="wishlist.html" class="action-btn">
                                                        <i class="la la-repeat"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-category">
                                                    <a href="home/product-detail/{{$pr->id}}">Chair</a>
                                                </div>
                                                <h3 class="product-title"><a href="home/product-detail/{{$pr->id}}">{{$pr->pr_name}}</a></h3>
                                                <div class="product-info-bottom">
                                                    <div class="product-price-wrapper">
                                                        <span class="money">$150</span>
                                                    </div>
                                                    <a href="cart.html" class="add-to-cart pr--15">
                                                        <i class="la la-plus"></i>
                                                        <span>Add To Cart</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane fade" id="new-wooden" role="tabpanel" aria-labelledby="new-wooden-tab">
                            <div class="row">
                                <div class="col-lg-3 col-sm-6 mb--45">
                                    <div class="ft-product HTfadeInUp">
                                        <div class="product-inner">
                                            <div class="product-image">
                                                <figure class="product-image--holder">
                                                    <img src="img/products/prod-05-270x300.jpg" alt="Product">
                                                </figure>
                                                <a href="product-details.html" class="product-overlay"></a>
                                                <div class="product-action">
                                                    <a data-toggle="modal" data-target="#productModal" class="action-btn">
                                                        <i class="la la-eye"></i>
                                                    </a>
                                                    <a href="wishlist.html" class="action-btn">
                                                        <i class="la la-heart-o"></i>
                                                    </a>
                                                    <a href="wishlist.html" class="action-btn">
                                                        <i class="la la-repeat"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-category">
                                                    <a href="product-details.html">Chair</a>
                                                </div>
                                                <h3 class="product-title"><a href="product-details.html">Golden Easy Spot Chair.</a></h3>
                                                <div class="product-info-bottom">
                                                    <div class="product-price-wrapper">
                                                        <span class="money">$150</span>
                                                    </div>
                                                    <a href="cart.html" class="add-to-cart pr--15">
                                                        <i class="la la-plus"></i>
                                                        <span>Add To Cart</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 mb--45">
                                    <div class="ft-product HTfadeInUp">
                                        <div class="product-inner">
                                            <div class="product-image">
                                                <figure class="product-image--holder">
                                                    <img src="img/products/prod-01-270x300.jpg" alt="Product">
                                                </figure>
                                                <a href="product-details.html" class="product-overlay"></a>
                                                <div class="product-action">
                                                    <a data-toggle="modal" data-target="#productModal" class="action-btn">
                                                        <i class="la la-eye"></i>
                                                    </a>
                                                    <a href="wishlist.html" class="action-btn">
                                                        <i class="la la-heart-o"></i>
                                                    </a>
                                                    <a href="wishlist.html" class="action-btn">
                                                        <i class="la la-repeat"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-category">
                                                    <a href="product-details.html">Chair</a>
                                                </div>
                                                <h3 class="product-title"><a href="product-details.html">Golden Easy Spot Chair.</a></h3>
                                                <div class="product-info-bottom">
                                                    <div class="product-price-wrapper">
                                                        <span class="money">$150</span>
                                                    </div>
                                                    <a href="cart.html" class="add-to-cart pr--15">
                                                        <i class="la la-plus"></i>
                                                        <span>Add To Cart</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 mb--45">
                                    <div class="ft-product HTfadeInUp">
                                        <div class="product-inner">
                                            <div class="product-image">
                                                <figure class="product-image--holder">
                                                    <img src="img/products/prod-04-270x300.jpg" alt="Product">
                                                </figure>
                                                <a href="product-details.html" class="product-overlay"></a>
                                                <div class="product-action">
                                                    <a data-toggle="modal" data-target="#productModal" class="action-btn">
                                                        <i class="la la-eye"></i>
                                                    </a>
                                                    <a href="wishlist.html" class="action-btn">
                                                        <i class="la la-heart-o"></i>
                                                    </a>
                                                    <a href="wishlist.html" class="action-btn">
                                                        <i class="la la-repeat"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-category">
                                                    <a href="product-details.html">Chair</a>
                                                </div>
                                                <h3 class="product-title"><a href="product-details.html">Golden Easy Spot Chair.</a></h3>
                                                <div class="product-info-bottom">
                                                    <div class="product-price-wrapper">
                                                        <span class="money">$150</span>
                                                    </div>
                                                    <a href="cart.html" class="add-to-cart pr--15">
                                                        <i class="la la-plus"></i>
                                                        <span>Add To Cart</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 mb--45">
                                    <div class="ft-product HTfadeInUp">
                                        <div class="product-inner">
                                            <div class="product-image">
                                                <figure class="product-image--holder">
                                                    <img src="img/products/prod-06-270x300.jpg" alt="Product">
                                                </figure>
                                                <a href="product-details.html" class="product-overlay"></a>
                                                <div class="product-action">
                                                    <a data-toggle="modal" data-target="#productModal" class="action-btn">
                                                        <i class="la la-eye"></i>
                                                    </a>
                                                    <a href="wishlist.html" class="action-btn">
                                                        <i class="la la-heart-o"></i>
                                                    </a>
                                                    <a href="wishlist.html" class="action-btn">
                                                        <i class="la la-repeat"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-category">
                                                    <a href="product-details.html">Chair</a>
                                                </div>
                                                <h3 class="product-title"><a href="product-details.html">Golden Easy Spot Chair.</a></h3>
                                                <div class="product-info-bottom">
                                                    <div class="product-price-wrapper">
                                                        <span class="money">$150</span>
                                                    </div>
                                                    <a href="cart.html" class="add-to-cart pr--15">
                                                        <i class="la la-plus"></i>
                                                        <span>Add To Cart</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="new-furnished" role="tabpanel" aria-labelledby="new-furnished-tab">
                            <div class="row">
                                <div class="col-lg-3 col-sm-6 mb--45">
                                    <div class="ft-product HTfadeInUp">
                                        <div class="product-inner">
                                            <div class="product-image">
                                                <figure class="product-image--holder">
                                                    <img src="img/products/prod-02-270x300.jpg" alt="Product">
                                                </figure>
                                                <a href="product-details.html" class="product-overlay"></a>
                                                <div class="product-action">
                                                    <a data-toggle="modal" data-target="#productModal" class="action-btn">
                                                        <i class="la la-eye"></i>
                                                    </a>
                                                    <a href="wishlist.html" class="action-btn">
                                                        <i class="la la-heart-o"></i>
                                                    </a>
                                                    <a href="wishlist.html" class="action-btn">
                                                        <i class="la la-repeat"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-category">
                                                    <a href="product-details.html">Chair</a>
                                                </div>
                                                <h3 class="product-title"><a href="product-details.html">Golden Easy Spot Chair.</a></h3>
                                                <div class="product-info-bottom">
                                                    <div class="product-price-wrapper">
                                                        <span class="money">$150</span>
                                                    </div>
                                                    <a href="cart.html" class="add-to-cart pr--15">
                                                        <i class="la la-plus"></i>
                                                        <span>Add To Cart</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 mb--45">
                                    <div class="ft-product HTfadeInUp">
                                        <div class="product-inner">
                                            <div class="product-image">
                                                <figure class="product-image--holder">
                                                    <img src="img/products/prod-01-270x300.jpg" alt="Product">
                                                </figure>
                                                <a href="product-details.html" class="product-overlay"></a>
                                                <div class="product-action">
                                                    <a data-toggle="modal" data-target="#productModal" class="action-btn">
                                                        <i class="la la-eye"></i>
                                                    </a>
                                                    <a href="wishlist.html" class="action-btn">
                                                        <i class="la la-heart-o"></i>
                                                    </a>
                                                    <a href="wishlist.html" class="action-btn">
                                                        <i class="la la-repeat"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-category">
                                                    <a href="product-details.html">Chair</a>
                                                </div>
                                                <h3 class="product-title"><a href="product-details.html">Golden Easy Spot Chair.</a></h3>
                                                <div class="product-info-bottom">
                                                    <div class="product-price-wrapper">
                                                        <span class="money">$150</span>
                                                    </div>
                                                    <a href="cart.html" class="add-to-cart pr--15">
                                                        <i class="la la-plus"></i>
                                                        <span>Add To Cart</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 mb--45">
                                    <div class="ft-product HTfadeInUp">
                                        <div class="product-inner">
                                            <div class="product-image">
                                                <figure class="product-image--holder">
                                                    <img src="img/products/prod-05-270x300.jpg" alt="Product">
                                                </figure>
                                                <a href="product-details.html" class="product-overlay"></a>
                                                <div class="product-action">
                                                    <a data-toggle="modal" data-target="#productModal" class="action-btn">
                                                        <i class="la la-eye"></i>
                                                    </a>
                                                    <a href="wishlist.html" class="action-btn">
                                                        <i class="la la-heart-o"></i>
                                                    </a>
                                                    <a href="wishlist.html" class="action-btn">
                                                        <i class="la la-repeat"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-category">
                                                    <a href="product-details.html">Chair</a>
                                                </div>
                                                <h3 class="product-title"><a href="product-details.html">Golden Easy Spot Chair.</a></h3>
                                                <div class="product-info-bottom">
                                                    <div class="product-price-wrapper">
                                                        <span class="money">$150</span>
                                                    </div>
                                                    <a href="cart.html" class="add-to-cart pr--15">
                                                        <i class="la la-plus"></i>
                                                        <span>Add To Cart</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 mb--45">
                                    <div class="ft-product HTfadeInUp">
                                        <div class="product-inner">
                                            <div class="product-image">
                                                <figure class="product-image--holder">
                                                    <img src="img/products/prod-03-270x300.jpg" alt="Product">
                                                </figure>
                                                <a href="product-details.html" class="product-overlay"></a>
                                                <div class="product-action">
                                                    <a data-toggle="modal" data-target="#productModal" class="action-btn">
                                                        <i class="la la-eye"></i>
                                                    </a>
                                                    <a href="wishlist.html" class="action-btn">
                                                        <i class="la la-heart-o"></i>
                                                    </a>
                                                    <a href="wishlist.html" class="action-btn">
                                                        <i class="la la-repeat"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-category">
                                                    <a href="product-details.html">Chair</a>
                                                </div>
                                                <h3 class="product-title"><a href="product-details.html">Golden Easy Spot Chair.</a></h3>
                                                <div class="product-info-bottom">
                                                    <div class="product-price-wrapper">
                                                        <span class="money">$150</span>
                                                    </div>
                                                    <a href="cart.html" class="add-to-cart pr--15">
                                                        <i class="la la-plus"></i>
                                                        <span>Add To Cart</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="new-table" role="tabpanel" aria-labelledby="new-table-tab">
                            <div class="row">
                                <div class="col-lg-3 col-sm-6 mb--45">
                                    <div class="ft-product HTfadeInUp">
                                        <div class="product-inner">
                                            <div class="product-image">
                                                <figure class="product-image--holder">
                                                    <img src="img/products/prod-03-270x300.jpg" alt="Product">
                                                </figure>
                                                <a href="product-details.html" class="product-overlay"></a>
                                                <div class="product-action">
                                                    <a data-toggle="modal" data-target="#productModal" class="action-btn">
                                                        <i class="la la-eye"></i>
                                                    </a>
                                                    <a href="wishlist.html" class="action-btn">
                                                        <i class="la la-heart-o"></i>
                                                    </a>
                                                    <a href="wishlist.html" class="action-btn">
                                                        <i class="la la-repeat"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-category">
                                                    <a href="product-details.html">Chair</a>
                                                </div>
                                                <h3 class="product-title"><a href="product-details.html">Golden Easy Spot Chair.</a></h3>
                                                <div class="product-info-bottom">
                                                    <div class="product-price-wrapper">
                                                        <span class="money">$150</span>
                                                    </div>
                                                    <a href="cart.html" class="add-to-cart pr--15">
                                                        <i class="la la-plus"></i>
                                                        <span>Add To Cart</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 mb--45">
                                    <div class="ft-product HTfadeInUp">
                                        <div class="product-inner">
                                            <div class="product-image">
                                                <figure class="product-image--holder">
                                                    <img src="img/products/prod-10-270x300.png" alt="Product">
                                                </figure>
                                                <a href="product-details.html" class="product-overlay"></a>
                                                <div class="product-action">
                                                    <a data-toggle="modal" data-target="#productModal" class="action-btn">
                                                        <i class="la la-eye"></i>
                                                    </a>
                                                    <a href="wishlist.html" class="action-btn">
                                                        <i class="la la-heart-o"></i>
                                                    </a>
                                                    <a href="wishlist.html" class="action-btn">
                                                        <i class="la la-repeat"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-category">
                                                    <a href="product-details.html">Chair</a>
                                                </div>
                                                <h3 class="product-title"><a href="product-details.html">Golden Easy Spot Chair.</a></h3>
                                                <div class="product-info-bottom">
                                                    <div class="product-price-wrapper">
                                                        <span class="money">$150</span>
                                                    </div>
                                                    <a href="cart.html" class="add-to-cart pr--15">
                                                        <i class="la la-plus"></i>
                                                        <span>Add To Cart</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 mb--45">
                                    <div class="ft-product HTfadeInUp">
                                        <div class="product-inner">
                                            <div class="product-image">
                                                <figure class="product-image--holder">
                                                    <img src="img/products/prod-04-270x300.jpg" alt="Product">
                                                </figure>
                                                <a href="product-details.html" class="product-overlay"></a>
                                                <div class="product-action">
                                                    <a data-toggle="modal" data-target="#productModal" class="action-btn">
                                                        <i class="la la-eye"></i>
                                                    </a>
                                                    <a href="wishlist.html" class="action-btn">
                                                        <i class="la la-heart-o"></i>
                                                    </a>
                                                    <a href="wishlist.html" class="action-btn">
                                                        <i class="la la-repeat"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-category">
                                                    <a href="product-details.html">Chair</a>
                                                </div>
                                                <h3 class="product-title"><a href="product-details.html">Golden Easy Spot Chair.</a></h3>
                                                <div class="product-info-bottom">
                                                    <div class="product-price-wrapper">
                                                        <span class="money">$150</span>
                                                    </div>
                                                    <a href="cart.html" class="add-to-cart pr--15">
                                                        <i class="la la-plus"></i>
                                                        <span>Add To Cart</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 mb--45">
                                    <div class="ft-product HTfadeInUp">
                                        <div class="product-inner">
                                            <div class="product-image">
                                                <figure class="product-image--holder">
                                                    <img src="img/products/prod-03-270x300.jpg" alt="Product">
                                                </figure>
                                                <a href="product-details.html" class="product-overlay"></a>
                                                <div class="product-action">
                                                    <a data-toggle="modal" data-target="#productModal" class="action-btn">
                                                        <i class="la la-eye"></i>
                                                    </a>
                                                    <a href="wishlist.html" class="action-btn">
                                                        <i class="la la-heart-o"></i>
                                                    </a>
                                                    <a href="wishlist.html" class="action-btn">
                                                        <i class="la la-repeat"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-category">
                                                    <a href="product-details.html">Chair</a>
                                                </div>
                                                <h3 class="product-title"><a href="product-details.html">Golden Easy Spot Chair.</a></h3>
                                                <div class="product-info-bottom">
                                                    <div class="product-price-wrapper">
                                                        <span class="money">$150</span>
                                                    </div>
                                                    <a href="cart.html" class="add-to-cart pr--15">
                                                        <i class="la la-plus"></i>
                                                        <span>Add To Cart</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Tab Area End -->

    <!-- Brand Logo Area Start -->
    <div class="brand-logo-area mb--80 mb-md--60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="brand-log-wrapper bg-color ptb--75" data-bg-color="#e9fefd">
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
    </div>
    <!-- Brand Logo Area End -->

    <!-- Best Sale Product Area Start -->
    <section class="best-sale-product-area mb--75 mb-md--55">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="best-sale-product bg-color" data-bg-color="#f7f8f9">
                        <div class="best-sale-product__inner bg-color" data-bg-color="#ffffff">
                            <figure class="best-sale-product__img">
                                <a href="product-details.html">
                                    <img src="img/products/best-product-01.png" alt="Best Sale Product">
                                </a>
                            </figure>
                            <div class="best-sale-product__info">
                                <h2 class="best-sale-product__heading">
                                    <span class="best-sale-product__heading--main">Best Sale</span>
                                    <span class="best-sale-product__heading--sub">Get Best Discount</span>
                                </h2>
                                <p class="best-sale-product__desc">It is a long established fact that a reader will be distracted by the readable content</p>
                                <a href="shop.html" class="btn btn-outline btn-size-md btn-color-primary btn-shape-round btn-hover-2">Shop Now</a>
                            </div>
                        </div>
                        <figure class="best-sale-product__top-image">
                            <img src="img/others/1.png" alt="bg image">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Best Sale Product Area End -->

    <!-- Blog Area Start -->
    <section class="blog-area mb--70 mb-md--50">
        <div class="container">
            <div class="row mb--35 mb-md--23">
                <div class="col-12 text-center">
                    <h2>News &amp; Updates</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="element-carousel" data-slick-options='{
                                "spaceBetween": 30,
                                "slidesToShow": 3,
                                "slidesToScroll": 1
                            }' data-slick-responsive='[
                                {"breakpoint": 992, "settings": {"slidesToShow": 2}},
                                {"breakpoint": 768, "settings": {"slidesToShow": 1}}
                            ]'>
                        <div class="item">
                            <article class="blog">
                                <div class="blog__inner">
                                    <div class="blog__media">
                                        <figure class="image">
                                            <img src="img/blog/blog-01.jpg" alt="Blog" class="w-100">
                                            <a href="blog-details-image.html" class="item-overlay"></a>
                                        </figure>
                                    </div>
                                    <div class="blog__info">
                                        <h2 class="blog__title"><a href="blog-details-image.html">There are many variations of passages of Lorem.</a></h2>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="item">
                            <article class="blog">
                                <div class="blog__inner">
                                    <div class="blog__media">
                                        <figure class="image">
                                            <img src="img/blog/blog-02.jpg" alt="Blog" class="w-100">
                                            <a href="blog-details-image.html" class="item-overlay"></a>
                                        </figure>
                                    </div>
                                    <div class="blog__info">
                                        <h2 class="blog__title"><a href="blog-details-image.html">There are many variations of passages of Lorem.</a></h2>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="item">
                            <article class="blog">
                                <div class="blog__inner">
                                    <div class="blog__media">
                                        <figure class="image">
                                            <img src="img/blog/blog-03.jpg" alt="Blog" class="w-100">
                                            <a href="blog-details-image.html" class="item-overlay"></a>
                                        </figure>
                                    </div>
                                    <div class="blog__info">
                                        <h2 class="blog__title"><a href="blog-details-image.html">There are many variations of passages of Lorem.</a></h2>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade product-modal" id="productModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="la la-remove"></i></span>
                    </button>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="element-carousel slick-vertical-center" data-slick-options='{
                            "slidesToShow": 1,
                            "slidesToScroll": 1,
                            "arrows": true,
                            "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "la la-angle-double-left" },
                            "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "la la-angle-double-right" }
                        }'>
                                <div class="product-image">
                                    <div class="product-image--holder">
                                        <a href="product-details.html">
                                            <img src="img/products/prod-01.jpg" alt="Product Image" class="primary-image">
                                        </a>
                                    </div>
                                    <span class="product-badge sale">sale</span>
                                </div>
                                <div class="product-image">
                                    <div class="product-image--holder">
                                        <a href="product-details.html">
                                            <img src="img/products/prod-02.jpg" alt="Product Image" class="primary-image">
                                        </a>
                                    </div>
                                    <span class="product-badge sale">sale</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="modal-box product-summary">
                                <div class="product-navigation text-right mb--20">
                                    <a href="#" class="prev"><i class="la la-angle-double-left"></i></a>
                                    <a href="#" class="next"><i class="la la-angle-double-right"></i></a>
                                </div>
                                <div class="product-rating d-flex mb--20">
                                    <div class="star-rating star-three">
                                        <span>Rated <strong class="rating">5.00</strong> out of 5</span>
                                    </div>
                                </div>
                                <h3 class="product-title mb--20">Golden Easy Spot Chair.</h3>
                                <p class="product-short-description mb--25">Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra, in vehicula lacus scelerisque. Vestibulum ut sem laoreet, feugiat tellus at, hendrerit arcu.</p>
                                <div class="product-price-wrapper mb--25">
                                    <span class="money">$200.00</span>
                                    <span class="price-separator">-</span>
                                    <span class="money">$400.00</span>
                                </div>
                                <form action="#" class="variation-form mb--30">
                                    <div class="product-color-variations d-flex align-items-center mb--20">
                                        <p class="variation-label">Color:</p>
                                        <div class="product-color-variation variation-wrapper">
                                            <div class="variation">
                                                <a class="product-color-variation-btn red selected" data-toggle="tooltip" data-placement="top" title="Red">
                                                    <span class="product-color-variation-label">Red</span>
                                                </a>
                                            </div>
                                            <div class="variation">
                                                <a class="product-color-variation-btn black" data-toggle="tooltip" data-placement="top" title="Black">
                                                    <span class="product-color-variation-label">Black</span>
                                                </a>
                                            </div>
                                            <div class="variation">
                                                <a class="product-color-variation-btn pink" data-toggle="tooltip" data-placement="top" title="Pink">
                                                    <span class="product-color-variation-label">Pink</span>
                                                </a>
                                            </div>
                                            <div class="variation">
                                                <a class="product-color-variation-btn blue" data-toggle="tooltip" data-placement="top" title="Blue">
                                                    <span class="product-color-variation-label">Blue</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-size-variations d-flex align-items-center mb--15">
                                        <p class="variation-label">Size:</p>
                                        <div class="product-size-variation variation-wrapper">
                                            <div class="variation">
                                                <a class="product-size-variation-btn selected" data-toggle="tooltip" data-placement="top" title="S">
                                                    <span class="product-size-variation-label">S</span>
                                                </a>
                                            </div>
                                            <div class="variation">
                                                <a class="product-size-variation-btn" data-toggle="tooltip" data-placement="top" title="M">
                                                    <span class="product-size-variation-label">M</span>
                                                </a>
                                            </div>
                                            <div class="variation">
                                                <a class="product-size-variation-btn" data-toggle="tooltip" data-placement="top" title="L">
                                                    <span class="product-size-variation-label">L</span>
                                                </a>
                                            </div>
                                            <div class="variation">
                                                <a class="product-size-variation-btn" data-toggle="tooltip" data-placement="top" title="XL">
                                                    <span class="product-size-variation-label">XL</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="" class="reset_variations">Clear</a>
                                </form>
                                <div class="product-action d-flex flex-sm-row flex-column align-items-sm-center align-items-start mb--30">
                                    <div class="quantity-wrapper d-flex align-items-center mr--30 mr-xs--0 mb-xs--30">
                                        <label class="quantity-label" for="quick-qty">Quantity:</label>
                                        <div class="quantity">
                                            <input type="number" class="quantity-input" name="qty" id="quick-qty" value="1" min="1">
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-size-sm btn-shape-square" onclick="window.location.href='cart.html'">
                                        Add To Cart
                                    </button>
                                </div>
                                <div class="product-footer-meta">
                                    <p><span>Category:</span>
                                        <a href="shop.html">Full Sweater</a>,
                                        <a href="shop.html">SweatShirt</a>,
                                        <a href="shop.html">Jacket</a>,
                                        <a href="shop.html">Blazer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Qicuk View Modal End -->

    <!-- Global Overlay Start -->
    <div class="global-overlay"></div>
    <!-- Global Overlay End -->

    <!-- Global Overlay Start -->
    <a class="scroll-to-top" href=""><i class="la la-angle-double-up"></i></a>
    <!-- Blog Area End -->
</main>
@endsection