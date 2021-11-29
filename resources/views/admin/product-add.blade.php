@extends('layouts.admin')
@section('content_admin')
@endsection
<main class="page-content">
    <div class="container">
        <div class="page-header">
            <h1 class="page-header__title">Add Product</h1>
        </div>
        <div class="page-tools">
            <div class="page-tools__breadcrumbs">
                <div class="breadcrumbs">
                    <div class="breadcrumbs__container">
                        <ol class="breadcrumbs__list">
                            <li class="breadcrumbs__item">
                                <a class="breadcrumbs__link" href="index.html">
                                    <svg class="icon-icon-home breadcrumbs__icon">
                                        <use xlink:href="#icon-home"></use>
                                    </svg>
                                    <svg class="icon-icon-keyboard-right breadcrumbs__arrow">
                                        <use xlink:href="#icon-keyboard-right"></use>
                                    </svg>
                                </a>
                            </li>
                            <li class="breadcrumbs__item disabled"><a class="breadcrumbs__link"
                                    href="#"><span>E-commerce</span>
                                    <svg class="icon-icon-keyboard-right breadcrumbs__arrow">
                                        <use xlink:href="#icon-keyboard-right"></use>
                                    </svg></a>
                            </li>
                            <li class="breadcrumbs__item"><a class="breadcrumbs__link"
                                    href="products.html"><span>Products</span>
                                    <svg class="icon-icon-keyboard-right breadcrumbs__arrow">
                                        <use xlink:href="#icon-keyboard-right"></use>
                                    </svg></a>
                            </li>
                            <li class="breadcrumbs__item active"><span class="breadcrumbs__link">Add Product</span>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="card add-product card--content-center">
            <div class="card__wrapper">
                <div class="card__container">
                    <form class="add-product__form">
                        <div class="add-product__row">
                            <div class="add-product__slider" id="addProductSlider">
                                <div class="add-product__thumbs">
                                    <div class="add-product__thumbs-slider swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="add-product__thumb swiper-slide">
                                                <img class="add-product__thumb-image swiper-lazy"
                                                    src="img/content/product/thumb-1.jpg"
                                                    srcset="img/content/product/thumb-1.jpg 2x" alt="#">
                                                <div class="add-product__lazy-preloader swiper-lazy-preloader"></div>
                                            </div>
                                            <div class="add-product__thumb swiper-slide">
                                                <img class="add-product__thumb-image swiper-lazy"
                                                    src="img/content/product/thumb-2.jpg"
                                                    srcset="img/content/product/thumb-2.jpg 2x" alt="#">
                                                <div class="add-product__lazy-preloader swiper-lazy-preloader"></div>
                                            </div>
                                            <div class="add-product__thumb swiper-slide">
                                                <img class="add-product__thumb-image swiper-lazy"
                                                    src="img/content/product/thumb-3.jpg"
                                                    srcset="img/content/product/thumb-3.jpg 2x" alt="#">
                                                <div class="add-product__lazy-preloader swiper-lazy-preloader"></div>
                                            </div>
                                            <div class="add-product__thumb swiper-slide">
                                                <img class="add-product__thumb-image swiper-lazy"
                                                    src="img/content/product/thumb-4.jpg"
                                                    srcset="img/content/product/thumb-4.jpg 2x" alt="#">
                                                <div class="add-product__lazy-preloader swiper-lazy-preloader"></div>
                                            </div>
                                            <div class="add-product__thumb swiper-slide">
                                                <div class="add-product__lazy-preloader swiper-lazy-preloader"></div>
                                            </div>
                                            <div class="add-product__thumb swiper-slide">
                                                <div class="add-product__lazy-preloader swiper-lazy-preloader"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="add-product__thumbs-prev">
                                        <a class="add-product__thumbs-arrow add-product__thumbs-arrow--prev" href="#">
                                            <svg class="icon-icon-chevron">
                                                <use xlink:href="#icon-chevron"></use>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="add-product__thumbs-next">
                                        <a class="add-product__thumbs-arrow add-product__thumbs-arrow--next" href="#">
                                            <svg class="icon-icon-chevron">
                                                <use xlink:href="#icon-chevron"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="add-product__gallery">
                                    <div class="add-product__gallery-slider swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="add-product__gallery-slide swiper-slide">
                                                <img class="add-product__gallery-image swiper-lazy"
                                                    src="img/content/product/item-1.jpg"
                                                    srcset="img/content/product/item-1.jpg 2x" alt="#">
                                                <div class="add-product__lazy-preloader swiper-lazy-preloader"></div>
                                            </div>
                                            <div class="add-product__gallery-slide swiper-slide">
                                                <img class="add-product__gallery-image swiper-lazy"
                                                    src="img/content/product/item-2.jpg"
                                                    srcset="img/content/product/item-2.jpg 2x" alt="#">
                                                <div class="add-product__lazy-preloader swiper-lazy-preloader"></div>
                                            </div>
                                            <div class="add-product__gallery-slide swiper-slide">
                                                <img class="add-product__gallery-image swiper-lazy"
                                                    src="img/content/product/item-3.jpg"
                                                    srcset="img/content/product/item-3.jpg 2x" alt="#">
                                                <div class="add-product__lazy-preloader swiper-lazy-preloader"></div>
                                            </div>
                                            <div class="add-product__gallery-slide swiper-slide">
                                                <img class="add-product__gallery-image swiper-lazy"
                                                    src="img/content/product/item-4.jpg"
                                                    srcset="img/content/product/item-4.jpg 2x" alt="#">
                                                <div class="add-product__lazy-preloader swiper-lazy-preloader"></div>
                                            </div>
                                            <div class="add-product__gallery-slide swiper-slide">
                                                <div class="add-product__lazy-preloader swiper-lazy-preloader"></div>
                                            </div>
                                            <div class="add-product__gallery-slide swiper-slide">
                                                <div class="add-product__lazy-preloader swiper-lazy-preloader"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="add-product__right">
                                <div class="row row--md">
                                    <div class="col-12 form-group form-group--lg">
                                        <label class="form-label">Product Name</label>
                                        <div class="input-group">
                                            <input class="input" type="text" placeholder="" value="Apple Watch Series 4"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group form-group--lg">
                                        <label class="form-label">Description</label>
                                        <div class="input-editor">
                                            <div class="js-description-editor">Fundamentally redesigned and
                                                reengineered. The largest Apple Watch display yet. Built-in electrical
                                                heart sensor. New Digital Crown with haptic feedback. Low and high heart
                                                rate notifications. Fall detection
                                                and Emergency SOS.</div>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group form-group--lg">
                                        <label class="form-label">Category</label>
                                        <div class="input-group input-group--append">
                                            <select class="input js-input-select input--fluid" data-placeholder="">
                                                <option value="1" selected="selected">MacBook
                                                </option>
                                                <option value="2">Apple Watch
                                                </option>
                                                <option value="3">AirPods
                                                </option>
                                                <option value="4">iPhone
                                                </option>
                                                <option value="5">IPad
                                                </option>
                                            </select><span class="input-group__arrow">
                                                <svg class="icon-icon-keyboard-down">
                                                    <use xlink:href="#icon-keyboard-down"></use>
                                                </svg></span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 form-group form-group--lg">
                                        <label class="form-label">Price</label>
                                        <div class="input-group input-group--prepend">
                                            <div class="input-group__prepend"><span class="input-group__symbol">$</span>
                                            </div>
                                            <input class="input" type="number" min="0" max="999999999" placeholder=""
                                                value="399" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 form-group form-group--lg">
                                        <label class="form-label">Discount</label>
                                        <div class="input-group input-group--prepend">
                                            <div class="input-group__prepend"><span class="input-group__symbol">%</span>
                                            </div>
                                            <input class="input" type="number" min="0" max="100" placeholder=""
                                                value="10" required>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group form-group--lg">
                                        <label class="form-label">Tags</label>
                                        <select class="input js-input-tags" multiple="multiple" data-placeholder="">
                                            <option value="1" selected="selected">Smartwatch</option>
                                            <option value="2" selected="selected">Apple</option>
                                            <option value="3">MacBook</option>
                                            <option value="4" selected="selected">Apple Watch</option>
                                            <option value="5">AirPods</option>
                                            <option value="6">iPhone</option>
                                            <option value="7">IPad</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="add-product__submit">
                                    <div class="modal__footer-button">
                                        <button class="button button--primary button--block" data-dismiss="modal"
                                            data-modal="#addProductSuccess"><span class="button__text">Create</span>
                                        </button>
                                    </div>
                                    <div class="modal__footer-button"><a class="button button--secondary button--block"
                                            href="products.html"><span class="button__text">Cancel</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<div class="modal modal-compact modal-success" id="addProductSuccess">
    <div class="modal__overlay" data-dismiss="modal"></div>
    <div class="modal__wrap">
        <div class="modal__window">
            <div class="modal__content">
                <div class="modal__body">
                    <div class="modal__container">
                        <img class="modal-success__icon" src="img/content/checked-success.svg" alt="#">
                        <h4 class="modal-success__title">Product was added</h4>
                    </div>
                </div>
                <div class="modal-compact__buttons">
                    <div class="modal-compact__button-item">
                        <button class="modal-compact__button button" data-dismiss="modal" data-modal="#addProduct"><span
                                class="button__text">Add new product</span>
                        </button>
                    </div>
                    <div class="modal-compact__button-item">
                        <button class="modal-compact__button button" data-dismiss="modal"><span
                                class="button__text">Close</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
