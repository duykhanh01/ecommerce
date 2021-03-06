@extends('layouts.app')
@section('content')
<section class="page-title-area bg-image ptb--80" data-bg-image="img/bg/page_title_bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-title">Track Order</h1>
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="current"><span>Track Order</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb area End -->

<!-- Main Content Wrapper Start -->
<div class="main-content-wrapper">
    <div class="page-content-inner pt--75 pb--80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <p class="heading-color mb--30 text-center">To track your order please enter your Order ID in the box below and press the "Track" button. This was given to you on your receipt and in the confirmation email you should have received.</p>
                    <form class="form form--track" action="#">
                        <div class="form__group mb--30">
                            <label for="order_id" class="form__label">Order ID</label>
                            <input type="text" name="order_id" id="order_id" class="form__input" placeholder="Found in your order confirmation email.">
                        </div>
                        <div class="form__group mb--30">
                            <label for="billing_email" class="form__label">Billing email</label>
                            <input type="text" name="billing_email" id="billing_email" class="form__input" placeholder="Email you used during checkout.">
                        </div>
                        <div class="form__group text-center">
                            <input type="submit" value="Track Order" class="btn btn-size-sm">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection