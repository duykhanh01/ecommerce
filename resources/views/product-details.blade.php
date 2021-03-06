@extends('layouts.app')
@section('content')
<p class="d-none" id ="user-id" user_id ={{$user_id}}></p>
<section class="page-title-area bg-image ptb--80" data-bg-image="/img/bg/page_title_bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-title">Product Details</h1>
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="current"><span>Product Details</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb area End -->

<!-- Main Content Wrapper Start -->
<div class="main-content-wrapper">
    <div class="page-content-inner pt--80 pt-md--60">
        <div class="container">
            <div class="row no-gutters mb--80 mb-md--57">
                <div class="col-lg-7 product-main-image">
                    <div class="product-image">
                        <div class="product-gallery vertical-slide-nav">
                            <div class="product-gallery__large-image mb-sm--30">
                                <div class="product-gallery__wrapper">
                                    <div class="element-carousel main-slider image-popup" data-slick-options='{
                                                "slidesToShow": 1,
                                                "slidesToScroll": 1,
                                                "infinite": true,
                                                "arrows": false, 
                                                "asNavFor": ".nav-slider"
                                            }'>
                                        @foreach ($imgs as $img)
                                            <figure class="product-gallery__image zoom">
                                                <img src="/files/{{$img->img_name}}" alt="Product">
                                                <span class="product-badge sale">Sale</span>
                                                <div class="product-gallery__actions">
                                                    <button class="action-btn btn-zoom-popup"><i class="la la-eye"></i></button>
                                                    <a href="https://www.youtube.com/watch?v=Rp19QD2XIGM" class="action-btn video-popup"><i class="la la-play"></i></a>
                                                </div>
                                            </figure>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="product-gallery__nav-image">
                                <div class="element-carousel nav-slider product-slide-nav slick-center-bottom" data-slick-options='{
                                            "spaceBetween": 10,
                                            "slidesToShow": 3,
                                            "slidesToScroll": 1,
                                            "vertical": true,
                                            "swipe": true,
                                            "verticalSwiping": true,
                                            "infinite": true,
                                            "focusOnSelect": true,
                                            "asNavFor": ".main-slider",
                                            "arrows": true, 
                                            "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "la la-angle-up" },
                                            "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "la la-angle-down" }
                                        }' data-slick-responsive='[
                                            {
                                                "breakpoint":1200, 
                                                "settings": {
                                                    "slidesToShow": 2
                                                } 
                                            },
                                            {
                                                "breakpoint":992, 
                                                "settings": {
                                                    "slidesToShow": 3
                                                } 
                                            },
                                            {
                                                "breakpoint":767, 
                                                "settings": {
                                                    "slidesToShow": 4,
                                                    "vertical": false
                                                } 
                                            },
                                            {
                                                "breakpoint":575, 
                                                "settings": {
                                                    "slidesToShow": 3,
                                                    "vertical": false
                                                } 
                                            },
                                            {
                                                "breakpoint":480, 
                                                "settings": {
                                                    "slidesToShow": 2,
                                                    "vertical": false
                                                } 
                                            }
                                        ]'>
                                    @foreach ($imgs as $img)
                                        <figure class="product-gallery__nav-image--single">
                                            <img src="/files/{{$img->img_name}}" alt="Products">
                                        </figure>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-4 offset-xl-1 col-lg-5 product-main-details mt-md--50">
                    <div class="product-summary pl-lg--30 pl-md--0">
                        <h3 class="product-title mb--20" id="id-product" id-pr='{{$product->id}}'>{{$product->pr_name}}</h3>
                        <div class="product-rating d-flex mb--20">
                            <div class="star-rating star-four">
                                <span>Rated <strong class="rating">5.00</strong> out of 5</span>
                            </div>
                        </div>
                        
                        <div class="product-price-wrapper mb--25">
                            <span class="money" style='text-decoration: line-through;'>${{$product->pr_price}}</span>
                            <span class="price-separator">  </span>
                            <span class="money">${{$product->pr_price-$product->pr_price*$product->pr_discount/100}}</span>
                            <span class="price-separator mb-2 p-1" style="margin-left: 15px; background-color: red; color:white;border-radius:10px; font-size:15px;">Gi???m {{$product->pr_discount}}%</span>
                        </div>
                        <form action="#" class="variation-form mb--20">
                            @csrf
                            <div class="product-size-variations d-flex align-items-center mb--15">
                                <p class="variation-label">Color:</p>
                                <div class="product-size-variation variation-wrapper">
                                    @foreach($colors as $color)
                                    <div class="variation">
                                        <a class="product-size-variation-btn product-select-color" id-color ='{{$color->id}}' data-toggle="tooltip" data-placement="top">
                                            <span class="product-size-variation-label">{{$color->color_name}}</span>
                                        </a>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="product-size-variations d-flex align-items-center mb--15">
                                <p class="variation-label">Size:</p>
                                <div class="product-size-variation variation-wrapper">
                                    @foreach($sizes as $size)
                                    <div class="variation">
                                        <a class="product-size-variation-btn product-select-size" id-size = '{{$size->id}}' data-toggle="tooltip" data-placement="top">
                                            <span class="product-size-variation-label">{{$size->size_name}}</span>
                                        </a>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <a href="" class="reset_variations">Clear</a>
                        </form>
                        <div class="product-action d-flex flex-sm-row align-items-sm-center flex-column align-items-start mb--30">
                            <div class="quantity-wrapper d-flex align-items-center mr--30 mr-xs--0 mb-xs--30">
                                <label class="quantity-label" for="qty">Quantity:</label>
                                <div class="quantity">
                                    <input type="number" class="quantity-input" name="qty" id="qty" value="1" min="1">
                                </div>
                            </div>
                            <button type="button" id="add-to-cart" class="btn btn-shape-square btn-size-sm">
                                Add To Cart
                            </button>
                        </div>
                        <div class="product-footer-meta">
                            <p><span>Category:</span>
                            @foreach($categories as $category)
                                <a href="shop.html">{{$category->cate_name}}</a>,
                            @endforeach
                            </p>
                        </div>
                        <div class="product-footer-meta">
                            <p><span>Tag:</span>
                            @foreach($tags as $tag)
                                <a href="shop.html">{{$tag->tag_name}}</a>,
                            @endforeach
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="information-shop">
                
            </div>
            <div class="row justify-content-center mb--77 mb-md--57">
                <div class="col-12">
                    <div class="tab-style-2">
                        <div class="nav nav-tabs mb--35 mb-sm--25" id="product-tab" role="tablist">
                            <a class="nav-link active" id="nav-description-tab" data-toggle="tab" href="#nav-description" role="tab" aria-selected="true">
                                <span>Description</span>
                            </a>
                            <a class="nav-link" id="nav-info-tab" data-toggle="tab" href="#nav-info" role="tab" aria-selected="true">
                                <span>Additional Information</span>
                            </a>
                            <a class="nav-link" id="nav-reviews-tab" data-toggle="tab" href="#nav-reviews" role="tab" aria-selected="true">
                                <span>Reviews(1)</span>
                            </a>
                        </div>
                        <div class="tab-content" id="product-tabContent">
                            <div class="tab-pane fade show active" id="nav-description" role="tabpanel" aria-labelledby="nav-description-tab">
                                <div class="product-description">
                                    <p>Lorem ipsum dolor sit amet, consec do eiusmod tincididunt ut labore et dolore magna aliqua. Ut enim ad minim veniaLo ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla paExcepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. iatis unde omnis iste natus error sit voluptatem accusantium </p>

                                    <p>Lorem ipsum dolor sit amet, consec do eiusmod tincididunt ut labore et dolore magna aliqua. Ut enim ad minim veniaLo ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>

                                    <h5 class="product-description__heading">Characteristics :</h5>
                                    <ul>
                                        <li><i class="la la-arrow-right"></i><span>Rsit amet, consectetur adipisicing elit, sed do eiusmod tempor inc.</span></li>
                                        <li><i class="la la-arrow-right"></i><span>sunt in culpa qui officia deserunt mollit anim id est laborum. </span></li>
                                        <li><i class="la la-arrow-right"></i><span>Lorem ipsum dolor sit amet, consec do eiusmod tincididu. </span></li>
                                    </ul>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-info" role="tabpanel" aria-labelledby="nav-info-tab">
                                <div class="table-content table-responsive">
                                    <table class="table shop_attributes">
                                        <tbody>
                                            <tr>
                                                <th>Weight</th>
                                                <td>57 kg</td>
                                            </tr>
                                            <tr>
                                                <th>Dimensions</th>
                                                <td>160 ?? 152 ?? 110 cm</td>
                                            </tr>
                                            <tr>
                                                <th>Color</th>
                                                <td>
                                                    <a href="shop.html">Black</a>,
                                                    <a href="shop.html">Gray</a>,
                                                    <a href="shop.html">Red</a>,
                                                    <a href="shop.html">Violet</a>,
                                                    <a href="shop.html">Yellow</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-reviews" role="tabpanel" aria-labelledby="nav-reviews-tab">
                                <div class="product-reviews">
                                    <h3 class="review__title">1 review for Black Blazer</h3>
                                    <ul class="review__list">
                                        <li class="review__item">
                                            <div class="review__container">
                                                <img src="/img/others/comment-1.jpg" alt="Review Avatar" class="review__avatar">
                                                <div class="review__text">
                                                    <div class="d-flex flex-sm-row flex-column justify-content-between">
                                                        <div class="review__meta">
                                                            <strong class="review__author">John Snow </strong>
                                                            <span class="review__dash">-</span>
                                                            <span class="review__published-date">November 20, 2018</span>
                                                        </div>
                                                        <div class="product-rating">
                                                            <div class="star-rating star-five">
                                                                <span>Rated <strong class="rating">5.00</strong> out of 5</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="review__description">Aliquam egestas libero ac turpis pharetra, in vehicula lacus scelerisque. Vestibulum ut sem laoreet, feugiat tellus at, hendrerit arcu.</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="review-form-wrapper">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <span class="reply-title">Add a review</span>
                                                <form action="#" class="form pr--30">
                                                    @csrf
                                                    <div class="form-notes mb--20">
                                                        <p>Your email address will not be published. Required fields are marked <span class="required">*</span></p>
                                                    </div>
                                                    <div class="form__group mb--10 pb--1">
                                                        <label class="form__label d-block">Your Ratings</label>
                                                        <div class="rating">
                                                            <span><i class="la la-star"></i></span>
                                                            <span><i class="la la-star"></i></span>
                                                            <span><i class="la la-star"></i></span>
                                                            <span><i class="la la-star"></i></span>
                                                            <span><i class="la la-star"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="form__group mb--10">
                                                        <label class="form__label d-block" for="email">Your Review<span class="required">*</span></label>
                                                        <textarea name="review" id="review" class="form__input form__input--textarea"></textarea>
                                                    </div>
                                                    <div class="form__group mb--20">
                                                        <label class="form__label d-block" for="name">Name<span class="required">*</span></label>
                                                        <input type="text" name="name" id="name" class="form__input">
                                                    </div>
                                                    <div class="form__group mb--20">
                                                        <label class="form__label d-block" for="email">Email<span class="required">*</span></label>
                                                        <input type="email" name="email" id="email" class="form__input">
                                                    </div>
                                                    <div class="form__group">
                                                        <div class="form-row">
                                                            <div class="col-12">
                                                                <input type="submit" value="Submit Now" class="btn btn-size-md">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb--75 mb-md--55">
                <div class="col-12">
                    <div class="element-carousel slick-vertical-center" data-slick-options='{
                                "spaceBetween": 30,
                                "slidesToShow": 4,
                                "slidesToScroll": 1,
                                "arrows": true,
                                "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "la la-angle-double-left" },
                                "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "la la-angle-double-right" }
                            }' data-slick-responsive='[
                                {"breakpoint":1199, "settings": {
                                    "slidesToShow": 3
                                }},
                                {"breakpoint":991, "settings": {
                                    "slidesToShow": 2
                                }},
                                {"breakpoint":575, "settings": {
                                    "slidesToShow": 1
                                }}
                            ]'>
                        <div class="item">
                            <div class="ft-product">
                                <div class="product-inner">
                                    <div class="product-image">
                                        <figure class="product-image--holder">
                                            <img src="/img/products/prod-04-270x300.jpg" alt="Product">
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
                        <div class="item">
                            <div class="ft-product">
                                <div class="product-inner">
                                    <div class="product-image">
                                        <figure class="product-image--holder">
                                            <img src="/img/products/prod-01-270x300.jpg" alt="Product">
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
                        <div class="item">
                            <div class="ft-product">
                                <div class="product-inner">
                                    <div class="product-image">
                                        <figure class="product-image--holder">
                                            <img src="/img/products/prod-02-270x300.jpg" alt="Product">
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
                        <div class="item">
                            <div class="ft-product">
                                <div class="product-inner">
                                    <div class="product-image">
                                        <figure class="product-image--holder">
                                            <img src="/img/products/prod-03-270x300.jpg" alt="Product">
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

@endsection