@extends('layouts.app')
@section('content')
<section class="page-title-area bg-image ptb--80" data-bg-image="img/bg/page_title_bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-title">Shop Left Sidebar</h1>
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="current"><span>Shop Left Sidebar</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb area End -->

<!-- Main Content Wrapper Start -->
<div class="main-content-wrapper">
    <div class="shop-page-wrapper ptb--80">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8 order-lg-2 mb-md--50">
                    <div class="shop-toolbar mb--50">
                        <div class="row align-items-center">
                            <div class="col-md-5 mb-sm--30 mb-xs--10">
                                <div class="shop-toolbar__left">
                                    <div class="product-ordering">
                                        <select class="product-ordering__select nice-select">
                                            <option value="0">Default Sorting</option>
                                            <option value="1">Relevance</option>
                                            <option value="2">Name, A to Z</option>
                                            <option value="3">Name, Z to A</option>
                                            <option value="4">Price, low to high</option>
                                            <option value="5">Price, high to low</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="shop-toolbar__right d-flex justify-content-md-end justify-content-start flex-sm-row flex-column">
                                    <p class="product-pages">Showing Result 08 Among 72</p>
                                    <div class="product-view-mode ml--50 ml-xs--0">
                                        <a class="active" href="#" data-target="grid">
                                            <img src="img/icons/grid.png" alt="Grid">
                                        </a>
                                        <a href="#" data-target="list">
                                            <img src="img/icons/list.png" alt="Grid">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="shop-products">
                        <div class="row">
                            <div class="col-xl-4 col-sm-6 mb--50">
                                <div class="ft-product">
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
                                <div class="ft-product-list">
                                    <div class="product-inner">
                                        <figure class="product-image">
                                            <a href="product-details.html">
                                                <img src="img/products/prod-04-270x300.jpg" alt="Products">
                                            </a>
                                            <div class="product-thumbnail-action">
                                                <a data-toggle="modal" data-target="#productModal" class="action-btn quick-view">
                                                    <i class="la la-eye"></i>
                                                </a>
                                            </div>
                                        </figure>
                                        <div class="product-info">
                                            <h3 class="product-title mb--25">
                                                <a href="product-details.html">Long Cartigen</a>
                                            </h3>
                                            <div class="ft-product-action-list mb--20">
                                                <div class="product-size mb--25">
                                                    <div class="product-size-swatch">
                                                        <span class="product-size-swatch-btn variation-btn">
                                                            XL
                                                        </span>
                                                        <span class="product-size-swatch-btn variation-btn">
                                                            L
                                                        </span>
                                                        <span class="product-size-swatch-btn variation-btn">
                                                            M
                                                        </span>
                                                        <span class="product-size-swatch-btn variation-btn">
                                                            S
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="product-color">
                                                    <div class="product-color-swatch">
                                                        <span class="product-color-swatch-btn variation-btn abbey">
                                                            Abbey
                                                        </span>
                                                        <span class="product-color-swatch-btn variation-btn blue">
                                                            Blue
                                                        </span>
                                                        <span class="product-color-swatch-btn variation-btn copper">
                                                            Copper
                                                        </span>
                                                        <span class="product-color-swatch-btn variation-btn old-rose">
                                                            Old Rose
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-price-wrapper mb--15 mb-sm--10">
                                                <span class="money">$80</span>
                                                <span class="money-separator">-</span>
                                                <span class="money">$200</span>
                                            </div>
                                            <p class="product-short-description mb--20">
                                                Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra
                                            </p>
                                            <div class="ft-product-action-list d-flex align-items-center">
                                                <a href="cart.html" class="btn btn-size-md">Add To Cart</a>
                                                <a href="wishlist.html" class="ml--20 action-btn">
                                                    <i class="la la-heart-o"></i>
                                                </a>
                                                <a href="wishlist.html" class="ml--20 action-btn">
                                                    <i class="la la-repeat"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6 mb--50">
                                <div class="ft-product">
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
                                <div class="ft-product-list">
                                    <div class="product-inner">
                                        <figure class="product-image">
                                            <a href="product-details.html">
                                                <img src="img/products/prod-01-270x300.jpg" alt="Products">
                                            </a>
                                            <div class="product-thumbnail-action">
                                                <a data-toggle="modal" data-target="#productModal" class="action-btn quick-view">
                                                    <i class="la la-eye"></i>
                                                </a>
                                            </div>
                                        </figure>
                                        <div class="product-info">
                                            <h3 class="product-title mb--25">
                                                <a href="product-details.html">Long Cartigen</a>
                                            </h3>
                                            <div class="ft-product-action-list mb--20">
                                                <div class="product-size mb--25">
                                                    <div class="product-size-swatch">
                                                        <span class="product-size-swatch-btn variation-btn">
                                                            XL
                                                        </span>
                                                        <span class="product-size-swatch-btn variation-btn">
                                                            L
                                                        </span>
                                                        <span class="product-size-swatch-btn variation-btn">
                                                            M
                                                        </span>
                                                        <span class="product-size-swatch-btn variation-btn">
                                                            S
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="product-color">
                                                    <div class="product-color-swatch">
                                                        <span class="product-color-swatch-btn variation-btn abbey">
                                                            Abbey
                                                        </span>
                                                        <span class="product-color-swatch-btn variation-btn blue">
                                                            Blue
                                                        </span>
                                                        <span class="product-color-swatch-btn variation-btn copper">
                                                            Copper
                                                        </span>
                                                        <span class="product-color-swatch-btn variation-btn old-rose">
                                                            Old Rose
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-price-wrapper mb--15 mb-sm--10">
                                                <span class="money">$80</span>
                                                <span class="money-separator">-</span>
                                                <span class="money">$200</span>
                                            </div>
                                            <p class="product-short-description mb--20">
                                                Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra
                                            </p>
                                            <div class="ft-product-action-list d-flex align-items-center">
                                                <a href="cart.html" class="btn btn-size-md">Add To Cart</a>
                                                <a href="wishlist.html" class="ml--20 action-btn">
                                                    <i class="la la-heart-o"></i>
                                                </a>
                                                <a href="wishlist.html" class="ml--20 action-btn">
                                                    <i class="la la-repeat"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6 mb--50">
                                <div class="ft-product">
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
                                <div class="ft-product-list">
                                    <div class="product-inner">
                                        <figure class="product-image">
                                            <a href="product-details.html">
                                                <img src="img/products/prod-02-270x300.jpg" alt="Products">
                                            </a>
                                            <div class="product-thumbnail-action">
                                                <a data-toggle="modal" data-target="#productModal" class="action-btn quick-view">
                                                    <i class="la la-eye"></i>
                                                </a>
                                            </div>
                                        </figure>
                                        <div class="product-info">
                                            <h3 class="product-title mb--25">
                                                <a href="product-details.html">Long Cartigen</a>
                                            </h3>
                                            <div class="ft-product-action-list mb--20">
                                                <div class="product-size mb--25">
                                                    <div class="product-size-swatch">
                                                        <span class="product-size-swatch-btn variation-btn">
                                                            XL
                                                        </span>
                                                        <span class="product-size-swatch-btn variation-btn">
                                                            L
                                                        </span>
                                                        <span class="product-size-swatch-btn variation-btn">
                                                            M
                                                        </span>
                                                        <span class="product-size-swatch-btn variation-btn">
                                                            S
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="product-color">
                                                    <div class="product-color-swatch">
                                                        <span class="product-color-swatch-btn variation-btn abbey">
                                                            Abbey
                                                        </span>
                                                        <span class="product-color-swatch-btn variation-btn blue">
                                                            Blue
                                                        </span>
                                                        <span class="product-color-swatch-btn variation-btn copper">
                                                            Copper
                                                        </span>
                                                        <span class="product-color-swatch-btn variation-btn old-rose">
                                                            Old Rose
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-price-wrapper mb--15 mb-sm--10">
                                                <span class="money">$80</span>
                                                <span class="money-separator">-</span>
                                                <span class="money">$200</span>
                                            </div>
                                            <p class="product-short-description mb--20">
                                                Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra
                                            </p>
                                            <div class="ft-product-action-list d-flex align-items-center">
                                                <a href="cart.html" class="btn btn-size-md">Add To Cart</a>
                                                <a href="wishlist.html" class="ml--20 action-btn">
                                                    <i class="la la-heart-o"></i>
                                                </a>
                                                <a href="wishlist.html" class="ml--20 action-btn">
                                                    <i class="la la-repeat"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6 mb--50">
                                <div class="ft-product">
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
                                <div class="ft-product-list">
                                    <div class="product-inner">
                                        <figure class="product-image">
                                            <a href="product-details.html">
                                                <img src="img/products/prod-03-270x300.jpg" alt="Products">
                                            </a>
                                            <div class="product-thumbnail-action">
                                                <a data-toggle="modal" data-target="#productModal" class="action-btn quick-view">
                                                    <i class="la la-eye"></i>
                                                </a>
                                            </div>
                                        </figure>
                                        <div class="product-info">
                                            <h3 class="product-title mb--25">
                                                <a href="product-details.html">Long Cartigen</a>
                                            </h3>
                                            <div class="ft-product-action-list mb--20">
                                                <div class="product-size mb--25">
                                                    <div class="product-size-swatch">
                                                        <span class="product-size-swatch-btn variation-btn">
                                                            XL
                                                        </span>
                                                        <span class="product-size-swatch-btn variation-btn">
                                                            L
                                                        </span>
                                                        <span class="product-size-swatch-btn variation-btn">
                                                            M
                                                        </span>
                                                        <span class="product-size-swatch-btn variation-btn">
                                                            S
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="product-color">
                                                    <div class="product-color-swatch">
                                                        <span class="product-color-swatch-btn variation-btn abbey">
                                                            Abbey
                                                        </span>
                                                        <span class="product-color-swatch-btn variation-btn blue">
                                                            Blue
                                                        </span>
                                                        <span class="product-color-swatch-btn variation-btn copper">
                                                            Copper
                                                        </span>
                                                        <span class="product-color-swatch-btn variation-btn old-rose">
                                                            Old Rose
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-price-wrapper mb--15 mb-sm--10">
                                                <span class="money">$80</span>
                                                <span class="money-separator">-</span>
                                                <span class="money">$200</span>
                                            </div>
                                            <p class="product-short-description mb--20">
                                                Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra
                                            </p>
                                            <div class="ft-product-action-list d-flex align-items-center">
                                                <a href="cart.html" class="btn btn-size-md">Add To Cart</a>
                                                <a href="wishlist.html" class="ml--20 action-btn">
                                                    <i class="la la-heart-o"></i>
                                                </a>
                                                <a href="wishlist.html" class="ml--20 action-btn">
                                                    <i class="la la-repeat"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6 mb--50">
                                <div class="ft-product">
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
                                <div class="ft-product-list">
                                    <div class="product-inner">
                                        <figure class="product-image">
                                            <a href="product-details.html">
                                                <img src="img/products/prod-05-270x300.jpg" alt="Products">
                                            </a>
                                            <div class="product-thumbnail-action">
                                                <a data-toggle="modal" data-target="#productModal" class="action-btn quick-view">
                                                    <i class="la la-eye"></i>
                                                </a>
                                            </div>
                                        </figure>
                                        <div class="product-info">
                                            <h3 class="product-title mb--25">
                                                <a href="product-details.html">Long Cartigen</a>
                                            </h3>
                                            <div class="ft-product-action-list mb--20">
                                                <div class="product-size mb--25">
                                                    <div class="product-size-swatch">
                                                        <span class="product-size-swatch-btn variation-btn">
                                                            XL
                                                        </span>
                                                        <span class="product-size-swatch-btn variation-btn">
                                                            L
                                                        </span>
                                                        <span class="product-size-swatch-btn variation-btn">
                                                            M
                                                        </span>
                                                        <span class="product-size-swatch-btn variation-btn">
                                                            S
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="product-color">
                                                    <div class="product-color-swatch">
                                                        <span class="product-color-swatch-btn variation-btn abbey">
                                                            Abbey
                                                        </span>
                                                        <span class="product-color-swatch-btn variation-btn blue">
                                                            Blue
                                                        </span>
                                                        <span class="product-color-swatch-btn variation-btn copper">
                                                            Copper
                                                        </span>
                                                        <span class="product-color-swatch-btn variation-btn old-rose">
                                                            Old Rose
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-price-wrapper mb--15 mb-sm--10">
                                                <span class="money">$80</span>
                                                <span class="money-separator">-</span>
                                                <span class="money">$200</span>
                                            </div>
                                            <p class="product-short-description mb--20">
                                                Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra
                                            </p>
                                            <div class="ft-product-action-list d-flex align-items-center">
                                                <a href="cart.html" class="btn btn-size-md">Add To Cart</a>
                                                <a href="wishlist.html" class="ml--20 action-btn">
                                                    <i class="la la-heart-o"></i>
                                                </a>
                                                <a href="wishlist.html" class="ml--20 action-btn">
                                                    <i class="la la-repeat"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6 mb--50">
                                <div class="ft-product">
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
                                <div class="ft-product-list">
                                    <div class="product-inner">
                                        <figure class="product-image">
                                            <a href="product-details.html">
                                                <img src="img/products/prod-06-270x300.jpg" alt="Products">
                                            </a>
                                            <div class="product-thumbnail-action">
                                                <a data-toggle="modal" data-target="#productModal" class="action-btn quick-view">
                                                    <i class="la la-eye"></i>
                                                </a>
                                            </div>
                                        </figure>
                                        <div class="product-info">
                                            <h3 class="product-title mb--25">
                                                <a href="product-details.html">Long Cartigen</a>
                                            </h3>
                                            <div class="ft-product-action-list mb--20">
                                                <div class="product-size mb--25">
                                                    <div class="product-size-swatch">
                                                        <span class="product-size-swatch-btn variation-btn">
                                                            XL
                                                        </span>
                                                        <span class="product-size-swatch-btn variation-btn">
                                                            L
                                                        </span>
                                                        <span class="product-size-swatch-btn variation-btn">
                                                            M
                                                        </span>
                                                        <span class="product-size-swatch-btn variation-btn">
                                                            S
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="product-color">
                                                    <div class="product-color-swatch">
                                                        <span class="product-color-swatch-btn variation-btn abbey">
                                                            Abbey
                                                        </span>
                                                        <span class="product-color-swatch-btn variation-btn blue">
                                                            Blue
                                                        </span>
                                                        <span class="product-color-swatch-btn variation-btn copper">
                                                            Copper
                                                        </span>
                                                        <span class="product-color-swatch-btn variation-btn old-rose">
                                                            Old Rose
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-price-wrapper mb--15 mb-sm--10">
                                                <span class="money">$80</span>
                                                <span class="money-separator">-</span>
                                                <span class="money">$200</span>
                                            </div>
                                            <p class="product-short-description mb--20">
                                                Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra
                                            </p>
                                            <div class="ft-product-action-list d-flex align-items-center">
                                                <a href="cart.html" class="btn btn-size-md">Add To Cart</a>
                                                <a href="wishlist.html" class="ml--20 action-btn">
                                                    <i class="la la-heart-o"></i>
                                                </a>
                                                <a href="wishlist.html" class="ml--20 action-btn">
                                                    <i class="la la-repeat"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6 mb--50">
                                <div class="ft-product">
                                    <div class="product-inner">
                                        <div class="product-image">
                                            <figure class="product-image--holder">
                                                <img src="img/products/prod-08-270x300.png" alt="Product">
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
                                <div class="ft-product-list">
                                    <div class="product-inner">
                                        <figure class="product-image">
                                            <a href="product-details.html">
                                                <img src="img/products/prod-08-270x300.png" alt="Products">
                                            </a>
                                            <div class="product-thumbnail-action">
                                                <a data-toggle="modal" data-target="#productModal" class="action-btn quick-view">
                                                    <i class="la la-eye"></i>
                                                </a>
                                            </div>
                                        </figure>
                                        <div class="product-info">
                                            <h3 class="product-title mb--25">
                                                <a href="product-details.html">Long Cartigen</a>
                                            </h3>
                                            <div class="ft-product-action-list mb--20">
                                                <div class="product-size mb--25">
                                                    <div class="product-size-swatch">
                                                        <span class="product-size-swatch-btn variation-btn">
                                                            XL
                                                        </span>
                                                        <span class="product-size-swatch-btn variation-btn">
                                                            L
                                                        </span>
                                                        <span class="product-size-swatch-btn variation-btn">
                                                            M
                                                        </span>
                                                        <span class="product-size-swatch-btn variation-btn">
                                                            S
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="product-color">
                                                    <div class="product-color-swatch">
                                                        <span class="product-color-swatch-btn variation-btn abbey">
                                                            Abbey
                                                        </span>
                                                        <span class="product-color-swatch-btn variation-btn blue">
                                                            Blue
                                                        </span>
                                                        <span class="product-color-swatch-btn variation-btn copper">
                                                            Copper
                                                        </span>
                                                        <span class="product-color-swatch-btn variation-btn old-rose">
                                                            Old Rose
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-price-wrapper mb--15 mb-sm--10">
                                                <span class="money">$80</span>
                                                <span class="money-separator">-</span>
                                                <span class="money">$200</span>
                                            </div>
                                            <p class="product-short-description mb--20">
                                                Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra
                                            </p>
                                            <div class="ft-product-action-list d-flex align-items-center">
                                                <a href="cart.html" class="btn btn-size-md">Add To Cart</a>
                                                <a href="wishlist.html" class="ml--20 action-btn">
                                                    <i class="la la-heart-o"></i>
                                                </a>
                                                <a href="wishlist.html" class="ml--20 action-btn">
                                                    <i class="la la-repeat"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6 mb--50">
                                <div class="ft-product">
                                    <div class="product-inner">
                                        <div class="product-image">
                                            <figure class="product-image--holder">
                                                <img src="img/products/prod-09-270x300.png" alt="Product">
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
                                <div class="ft-product-list">
                                    <div class="product-inner">
                                        <figure class="product-image">
                                            <a href="product-details.html">
                                                <img src="img/products/prod-09-270x300.png" alt="Products">
                                            </a>
                                            <div class="product-thumbnail-action">
                                                <a data-toggle="modal" data-target="#productModal" class="action-btn quick-view">
                                                    <i class="la la-eye"></i>
                                                </a>
                                            </div>
                                        </figure>
                                        <div class="product-info">
                                            <h3 class="product-title mb--25">
                                                <a href="product-details.html">Long Cartigen</a>
                                            </h3>
                                            <div class="ft-product-action-list mb--20">
                                                <div class="product-size mb--25">
                                                    <div class="product-size-swatch">
                                                        <span class="product-size-swatch-btn variation-btn">
                                                            XL
                                                        </span>
                                                        <span class="product-size-swatch-btn variation-btn">
                                                            L
                                                        </span>
                                                        <span class="product-size-swatch-btn variation-btn">
                                                            M
                                                        </span>
                                                        <span class="product-size-swatch-btn variation-btn">
                                                            S
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="product-color">
                                                    <div class="product-color-swatch">
                                                        <span class="product-color-swatch-btn variation-btn abbey">
                                                            Abbey
                                                        </span>
                                                        <span class="product-color-swatch-btn variation-btn blue">
                                                            Blue
                                                        </span>
                                                        <span class="product-color-swatch-btn variation-btn copper">
                                                            Copper
                                                        </span>
                                                        <span class="product-color-swatch-btn variation-btn old-rose">
                                                            Old Rose
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-price-wrapper mb--15 mb-sm--10">
                                                <span class="money">$80</span>
                                                <span class="money-separator">-</span>
                                                <span class="money">$200</span>
                                            </div>
                                            <p class="product-short-description mb--20">
                                                Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra
                                            </p>
                                            <div class="ft-product-action-list d-flex align-items-center">
                                                <a href="cart.html" class="btn btn-size-md">Add To Cart</a>
                                                <a href="wishlist.html" class="ml--20 action-btn">
                                                    <i class="la la-heart-o"></i>
                                                </a>
                                                <a href="wishlist.html" class="ml--20 action-btn">
                                                    <i class="la la-repeat"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6 mb--50">
                                <div class="ft-product">
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
                                <div class="ft-product-list">
                                    <div class="product-inner">
                                        <figure class="product-image">
                                            <a href="product-details.html">
                                                <img src="img/products/prod-10-270x300.png" alt="Products">
                                            </a>
                                            <div class="product-thumbnail-action">
                                                <a data-toggle="modal" data-target="#productModal" class="action-btn quick-view">
                                                    <i class="la la-eye"></i>
                                                </a>
                                            </div>
                                        </figure>
                                        <div class="product-info">
                                            <h3 class="product-title mb--25">
                                                <a href="product-details.html">Long Cartigen</a>
                                            </h3>
                                            <div class="ft-product-action-list mb--20">
                                                <div class="product-size mb--25">
                                                    <div class="product-size-swatch">
                                                        <span class="product-size-swatch-btn variation-btn">
                                                            XL
                                                        </span>
                                                        <span class="product-size-swatch-btn variation-btn">
                                                            L
                                                        </span>
                                                        <span class="product-size-swatch-btn variation-btn">
                                                            M
                                                        </span>
                                                        <span class="product-size-swatch-btn variation-btn">
                                                            S
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="product-color">
                                                    <div class="product-color-swatch">
                                                        <span class="product-color-swatch-btn variation-btn abbey">
                                                            Abbey
                                                        </span>
                                                        <span class="product-color-swatch-btn variation-btn blue">
                                                            Blue
                                                        </span>
                                                        <span class="product-color-swatch-btn variation-btn copper">
                                                            Copper
                                                        </span>
                                                        <span class="product-color-swatch-btn variation-btn old-rose">
                                                            Old Rose
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-price-wrapper mb--15 mb-sm--10">
                                                <span class="money">$80</span>
                                                <span class="money-separator">-</span>
                                                <span class="money">$200</span>
                                            </div>
                                            <p class="product-short-description mb--20">
                                                Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra
                                            </p>
                                            <div class="ft-product-action-list d-flex align-items-center">
                                                <a href="cart.html" class="btn btn-size-md">Add To Cart</a>
                                                <a href="wishlist.html" class="ml--20 action-btn">
                                                    <i class="la la-heart-o"></i>
                                                </a>
                                                <a href="wishlist.html" class="ml--20 action-btn">
                                                    <i class="la la-repeat"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <nav class="pagination-wrap">
                        <ul class="pagination">
                            <li><span class="page-number current">1</span></li>
                            <li><a href="#" class="page-number">2</a></li>
                            <li><span class="dot"></span></li>
                            <li><span class="dot"></span></li>
                            <li><span class="dot"></span></li>
                            <li><a href="#" class="page-number">16</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-xl-3 col-lg-4 order-lg-1">
                    <aside class="shop-sidebar">
                        <div class="shop-widget mb--40">
                            <h3 class="widget-title mb--25">Category</h3>
                            <ul class="widget-list category-list">
                                <li>
                                    <a href="shop.html">
                                        <span class="category-title">Winter Collection</span>
                                        <i class="fa fa-angle-double-right"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="shop.html">
                                        <span class="category-title">Women’s Clothes</span>
                                        <i class="fa fa-angle-double-right"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="shop.html">
                                        <span class="category-title">Men’s Clothes</span>
                                        <i class="fa fa-angle-double-right"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="shop.html">
                                        <span class="category-title">Kid’s Clothes</span>
                                        <i class="fa fa-angle-double-right"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="shop.html">
                                        <span class="category-title">Uncategorized</span>
                                        <i class="fa fa-angle-double-right"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="shop.html">
                                        <span class="category-title">Accessories</span>
                                        <i class="fa fa-angle-double-right"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="shop.html">
                                        <span class="category-title">New Arrival</span>
                                        <i class="fa fa-angle-double-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="shop-widget mb--40">
                            <h3 class="widget-title mb--30">Color</h3>
                            <div class="widget-color">
                                <a href="shop.html" class="red">Red</a>
                                <a href="shop.html" class="pink">Pink</a>
                                <a href="shop.html" class="black">black</a>
                                <a href="shop.html" class="brown">brown</a>
                                <a href="shop.html" class="blue">blue</a>
                                <a href="shop.html" class="cholate">cholate</a>
                                <a href="shop.html" class="copper">copper</a>
                                <a href="shop.html" class="gray">grey</a>
                            </div>
                        </div>
                        <div class="shop-widget mb--40">
                            <h3 class="widget-title mb--25">Price</h3>
                            <ul class="widget-list price-list">
                                <li>
                                    <a href="shop.html">
                                        <span>Low - Medium</span>
                                        <strong class="font-weight-medium">$10.00 - $45.00</strong>
                                    </a>
                                </li>
                                <li>
                                    <a href="shop.html">
                                        <span>Medium - High</span>
                                        <strong class="font-weight-medium">$45.00 - $60.00</strong>
                                    </a>
                                </li>
                                <li>
                                    <a href="shop.html">
                                        <span>High - Avobe</span>
                                        <strong class="font-weight-medium">$60.00 - $200</strong>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="shop-widget mb--40">
                            <h3 class="widget-title mb--25">Brand</h3>
                            <ul class="widget-list brand-list">
                                <li>
                                    <a href="shop.html">
                                        <span>Walmart</span>
                                        <strong class="color--red font-weight-medium">10</strong>
                                    </a>
                                </li>
                                <li>
                                    <a href="shop.html">
                                        <span>Yellow</span>
                                        <strong class="color--red font-weight-medium">50</strong>
                                    </a>
                                </li>
                                <li>
                                    <a href="shop.html">
                                        <span>H &amp; M</span>
                                        <strong class="color--red font-weight-medium">46</strong>
                                    </a>
                                </li>
                                <li>
                                    <a href="shop.html">
                                        <span>Black &amp; White</span>
                                        <strong class="color--red font-weight-medium">46</strong>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="shop-widget">
                            <h3 class="widget-title mb--25">Tag</h3>
                            <div class="tagcloud">
                                <a href="shop.html">Cloth</a>
                                <a href="shop.html">Blazer</a>
                                <a href="shop.html">Jacket</a>
                                <a href="shop.html">Polo Shirt</a>
                                <a href="shop.html">T-Shirt</a>
                                <a href="shop.html">Shoes</a>
                                <a href="shop.html">Pant</a>
                                <a href="shop.html">Party Dress</a>
                                <a href="shop.html">Coktail Dress</a>
                                <a href="shop.html">Sweater</a>
                                <a href="shop.html">Jeans</a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection