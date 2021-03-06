@extends('layouts.app')

<!-- Header End -->

<!-- Breadcrumb area Start -->
@section('content')
<section class="page-title-area bg-image ptb--80" data-bg-image="img/bg/page_title_bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-title">Wishlist</h1>
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="current"><span>Wishlist</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb area End -->

<!-- Main Content Wrapper Start -->
<div class="main-content-wrapper">
    <div class="page-content-inner ptb--80 ptb-md--60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="table-content table-responsive">
                        <table class="table table-style-2 wishlist-table text-center">
                            <thead>
                                <tr>
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                    <th class="text-left">Product</th>
                                    <th>Stock Status</th>
                                    <th>Price</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="product-remove text-left"><a href=""><i class="la la-remove"></i></a></td>
                                    <td class="product-thumbnail text-left">
                                        <img src="img/products/prod-01-70x88.jpg" alt="Product Thumnail">
                                    </td>
                                    <td class="product-name text-left wide-column">
                                        <h3>
                                            <a href="product-details.html">Pinstripe slim-fit suit blazer</a>
                                        </h3>
                                    </td>
                                    <td class="product-stock">
                                        In Stock
                                    </td>
                                    <td class="product-price">
                                        <span class="product-price-wrapper">
                                            <span class="money">$49.00</span>
                                        </span>
                                    </td>
                                    <td class="product-action-btn">
                                        <a href="cart.html" class="btn btn-size-md">Add to cart</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="product-remove text-left"><a href=""><i class="la la-remove"></i></a></td>
                                    <td class="product-thumbnail text-left">
                                        <img src="img/products/prod-02-70x88.jpg" alt="Product Thumnail">
                                    </td>
                                    <td class="product-name text-left wide-column">
                                        <h3>
                                            <a href="product-details.html">Warm Shaker Solid Wood End Table</a>
                                        </h3>
                                    </td>
                                    <td class="product-stock">
                                        In Stock
                                    </td>
                                    <td class="product-price">
                                        <span class="product-price-wrapper">
                                            <span class="money">$49.00</span>
                                        </span>
                                    </td>
                                    <td class="product-action-btn">
                                        <a href="cart.html" class="btn btn-size-md">Add to cart</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="product-remove text-left"><a href=""><i class="la la-remove"></i></a></td>
                                    <td class="product-thumbnail text-left">
                                        <img src="img/products/prod-03-70x88.jpg" alt="Product Thumnail">
                                    </td>
                                    <td class="product-name text-left wide-column">
                                        <h3>
                                            <a href="product-details.html">Atlin Designs Mid Century Club Chair</a>
                                        </h3>
                                    </td>
                                    <td class="product-stock">
                                        In Stock
                                    </td>
                                    <td class="product-price">
                                        <span class="product-price-wrapper">
                                            <span class="money">$49.00</span>
                                        </span>
                                    </td>
                                    <td class="product-action-btn">
                                        <a href="cart.html" class="btn btn-size-md">Add to cart</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="product-remove text-left"><a href=""><i class="la la-remove"></i></a></td>
                                    <td class="product-thumbnail text-left">
                                        <img src="img/products/prod-04-70x88.jpg" alt="Product Thumnail">
                                    </td>
                                    <td class="product-name text-left wide-column">
                                        <h3>
                                            <a href="product-details.html">Contemporary 5-Light Large Chandelier</a>
                                        </h3>
                                    </td>
                                    <td class="product-stock">
                                        In Stock
                                    </td>
                                    <td class="product-price">
                                        <span class="product-price-wrapper">
                                            <span class="money">$49.00</span>
                                        </span>
                                    </td>
                                    <td class="product-action-btn">
                                        <a href="cart.html" class="btn btn-size-md">Add to cart</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection