@extends('layouts.admin')
@section('content_admin')
<div class="order-tabs">
    <div class="order-tabs__container">
        <h3 class="order-tabs__title">Order Details</h3>
        <nav class="order-tabs__nav">
            <div class="order-tabs__nav-prev">
                <a class="order-tabs__arrow order-tabs__arrow--prev" href="#">
                    <svg class="icon-icon-chevron">
                        <use xlink:href="#icon-chevron"></use>
                    </svg>
                </a>
            </div>
            <div class="order-tabs__nav-next">
                <a class="order-tabs__arrow order-tabs__arrow--next" href="#">
                    <svg class="icon-icon-chevron">
                        <use xlink:href="#icon-chevron"></use>
                    </svg>
                </a>
            </div>
            <div class="order-tabs__list-wrapper swiper-container">
                <div class="order-tabs__list swiper-wrapper">
                    <div class="order-tabs__item swiper-slide">
                        <a class="order-tabs__link" href="order-details.html">
                            <svg class="icon-icon-details">
                                <use xlink:href="#icon-details"></use>
                            </svg>Details</a>
                    </div>
                    <div class="order-tabs__item swiper-slide">
                        <a class="order-tabs__link" href="order-invoice.html">
                            <svg class="icon-icon-invoice">
                                <use xlink:href="#icon-invoice"></use>
                            </svg>Invoice</a>
                    </div>
                    <div class="order-tabs__item swiper-slide">
                        <a class="order-tabs__link" href="order-status.html">
                            <svg class="icon-icon-status">
                                <use xlink:href="#icon-status"></use>
                            </svg>Status</a>
                    </div>
                    <div class="order-tabs__item swiper-slide">
                        <a class="order-tabs__link" href="order-history.html">
                            <svg class="icon-icon-back-time">
                                <use xlink:href="#icon-back-time"></use>
                            </svg>History</a>
                    </div>
                    <div class="order-tabs__item swiper-slide">
                        <a class="order-tabs__link" href="order-notes.html">
                            <svg class="icon-icon-task-notes">
                                <use xlink:href="#icon-task-notes"></use>
                            </svg>Notes</a>
                    </div>
                    <div class="order-tabs__item swiper-slide">
                        <a class="order-tabs__link order-tabs__link--active" href="order-messages.html">
                            <svg class="icon-icon-chat-messages">
                                <use xlink:href="#icon-chat-messages"></use>
                            </svg>Messages</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>

<main class="page-content page-content--order-header">
    <div class="container">
        <div class="page-header">
            <h3 class="page-header__subtitle d-lg-none">Order Details</h3>
            <h1 class="page-header__title">Orders <span class="text-grey">#790841</span></h1>
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
                                    href="orders.html"><span>Orders</span>
                                    <svg class="icon-icon-keyboard-right breadcrumbs__arrow">
                                        <use xlink:href="#icon-keyboard-right"></use>
                                    </svg></a>
                            </li>
                            <li class="breadcrumbs__item active"><span class="breadcrumbs__link">Messages</span>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="page-tools__right">
                <div class="page-tools__right-row">
                    <div class="page-tools__right-item"><a class="button-icon" href="#"><span class="button-icon__icon">
                                <svg class="icon-icon-print">
                                    <use xlink:href="#icon-print"></use>
                                </svg></span></a>
                    </div>
                    <div class="page-tools__right-item">
                        <button class="button-icon" type="button"><span class="button-icon__icon">
                                <svg class="icon-icon-trash">
                                    <use xlink:href="#icon-trash"></use>
                                </svg></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-order">
            <div class="card__wrapper">
                <div class="card__container">
                    <div class="order-messages">
                        <div class="order-messages__content scrollbar-thin" data-simplebar>
                            <div class="order-message">
                                <div class="order-message__avatar color-orange"><span
                                        class="order-message__avatar-text">FB</span><span
                                        class="badge-signal badge-signal--green"></span>
                                    <img src="img/content/humans/item-1.jpg" alt="#" />
                                </div>
                                <div class="order-message__header">
                                    <h5 class="order-message__title"><span>Felecia Burke</span></h5>
                                    <div class="order-message__date">
                                        <time datetime="2001-05-15 19:00">30 min ago</time>
                                    </div>
                                    <div class="order-message__label"><span class="label label--primary">Customer</span>
                                    </div>
                                </div>
                                <div class="order-message__text-wrapper">
                                    <p class="order-message__text">Hello! Don't send my Order #790841, I'll pick it up
                                        tomorrow.</p>
                                </div>
                            </div>
                            <div class="order-message order-message--outline">
                                <div class="order-message__avatar color-red"><span
                                        class="order-message__avatar-text">AF</span><span
                                        class="badge-signal badge-signal--green"></span>
                                    <img src="img/content/humans/item-5.jpg" alt="#" />
                                </div>
                                <div class="order-message__header">
                                    <h5 class="order-message__title"><span>Allan Fernandez</span></h5>
                                    <div class="order-message__date">
                                        <time datetime="2001-05-15 19:00">28 min ago</time>
                                    </div>
                                    <div class="order-message__label"><span class="label label--primary">Manager</span>
                                    </div>
                                </div>
                                <div class="order-message__text-wrapper">
                                    <p class="order-message__text">Hello! Well, your order will be waiting for you.
                                        Thank you.</p>
                                </div>
                            </div>
                            <div class="order-messages__divider">New Messages</div>
                            <div class="order-message">
                                <div class="order-message__avatar color-orange"><span
                                        class="order-message__avatar-text">FB</span><span
                                        class="badge-signal badge-signal--green"></span>
                                    <img src="img/content/humans/item-1.jpg" alt="#" />
                                </div>
                                <div class="order-message__header">
                                    <h5 class="order-message__title"><span>Felecia Burke</span></h5>
                                    <div class="order-message__date">
                                        <time datetime="2001-05-15 19:00">1 min ago</time>
                                    </div>
                                    <div class="order-message__label"><span class="label label--primary">Customer</span>
                                    </div>
                                </div>
                                <div class="order-message__text-wrapper">
                                    <p class="order-message__text">Thank you! Your store is the best!
                                        <img src="img/content/emoji-happy.svg" alt="#" />
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="order-messages__input-group input-group">
                            <input class="order-messages__input input" type="text" placeholder="Write a Message...">
                            <div class="order-messages__input-append">
                                <button class="order-messages__input-button" type="button">
                                    <svg class="icon-icon-attachment">
                                        <use xlink:href="#icon-attachment"></use>
                                    </svg>
                                </button>
                                <button class="order-messages__input-button" type="button">
                                    <svg class="icon-icon-emoji">
                                        <use xlink:href="#icon-emoji"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
</div>
<a class="btn-scroll-page btn-scroll-page--down" href="#">
    <svg class="icon-icon-chevron">
        <use xlink:href="#icon-chevron"></use>
    </svg>
</a>
@endsection
