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
                        <a class="order-tabs__link order-tabs__link--active" href="order-history.html">
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
                        <a class="order-tabs__link" href="order-messages.html">
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
                            <li class="breadcrumbs__item active"><span class="breadcrumbs__link">History</span>
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
        <div class="order-history">
            <div class="scrollbar-thin scrollbar-visible" data-simplebar>
                <table class="table table--lines">
                    <colgroup>
                        <col class="colgroup-1">
                        <col class="colgroup-2">
                        <col class="colgroup-3">
                    </colgroup>
                    <thead class="table__header">
                        <tr class="table__header-row">
                            <th><span>Type</span>
                            </th>
                            <th><span>Date</span>
                            </th>
                            <th><span>Description</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="table__row">
                            <td class="table__td">
                                <div class="d-flex align-items-center">
                                    <svg class="icon-icon-clipboard table__icon">
                                        <use xlink:href="#icon-clipboard"></use>
                                    </svg><span>Order</span>
                                </div>
                            </td>
                            <td class="table__td text-grey">
                                <div class="d-flex align-items-center">
                                    <svg class="icon-icon-clock table__icon">
                                        <use xlink:href="#icon-clock"></use>
                                    </svg><span class="text-nowrap">12.07.2018 08:00</span>
                                </div>
                            </td>
                            <td class="table__td">
                                <div class="mw-280">The order was validated.</div>
                            </td>
                        </tr>
                        <tr class="table__row">
                            <td class="table__td">
                                <div class="d-flex align-items-center">
                                    <svg class="icon-icon-cart table__icon">
                                        <use xlink:href="#icon-cart"></use>
                                    </svg><span>Cart</span>
                                </div>
                            </td>
                            <td class="table__td text-grey">
                                <div class="d-flex align-items-center">
                                    <svg class="icon-icon-clock table__icon">
                                        <use xlink:href="#icon-clock"></use>
                                    </svg><span class="text-nowrap">12.07.2018 08:10</span>
                                </div>
                            </td>
                            <td class="table__td">
                                <div class="mw-280">Product <b class="font-weight-medium">MacBook Pro 15” (Mid 2018)</b>
                                    added to the cart.</div>
                            </td>
                        </tr>
                        <tr class="table__row">
                            <td class="table__td">
                                <div class="d-flex align-items-center">
                                    <svg class="icon-icon-cart table__icon">
                                        <use xlink:href="#icon-cart"></use>
                                    </svg><span>Cart</span>
                                </div>
                            </td>
                            <td class="table__td text-grey">
                                <div class="d-flex align-items-center">
                                    <svg class="icon-icon-clock table__icon">
                                        <use xlink:href="#icon-clock"></use>
                                    </svg><span class="text-nowrap">12.07.2018 08:15</span>
                                </div>
                            </td>
                            <td class="table__td">
                                <div class="mw-280">Product <b class="font-weight-medium">Apple Watch Series 4</b> added
                                    to the cart.</div>
                            </td>
                        </tr>
                        <tr class="table__row">
                            <td class="table__td">
                                <div class="d-flex align-items-center">
                                    <svg class="icon-icon-clipboard table__icon">
                                        <use xlink:href="#icon-clipboard"></use>
                                    </svg><span>Order</span>
                                </div>
                            </td>
                            <td class="table__td text-grey">
                                <div class="d-flex align-items-center">
                                    <svg class="icon-icon-clock table__icon">
                                        <use xlink:href="#icon-clock"></use>
                                    </svg><span class="text-nowrap">12.07.2018 10:00</span>
                                </div>
                            </td>
                            <td class="table__td">
                                <div class="mw-280">The order was placed.</div>
                            </td>
                        </tr>
                        <tr class="table__row">
                            <td class="table__td">
                                <div class="d-flex align-items-center">
                                    <svg class="icon-icon-clipboard table__icon">
                                        <use xlink:href="#icon-clipboard"></use>
                                    </svg><span>Order</span>
                                </div>
                            </td>
                            <td class="table__td text-grey">
                                <div class="d-flex align-items-center">
                                    <svg class="icon-icon-clock table__icon">
                                        <use xlink:href="#icon-clock"></use>
                                    </svg><span class="text-nowrap">13.07.2018 08:00</span>
                                </div>
                            </td>
                            <td class="table__td">
                                <div class="mw-280">Payment transaction method: <b class="font-weight-medium">Credit
                                        Card</b>, type: <b class="font-weight-medium">sale</b>, amount: <b
                                        class="font-weight-medium">$2500</b>, status: <b
                                        class="font-weight-medium">Pending</b>
                                </div>
                            </td>
                        </tr>
                        <tr class="table__row">
                            <td class="table__td">
                                <div class="d-flex align-items-center">
                                    <svg class="icon-icon-clipboard table__icon">
                                        <use xlink:href="#icon-clipboard"></use>
                                    </svg><span>Order</span>
                                </div>
                            </td>
                            <td class="table__td text-grey">
                                <div class="d-flex align-items-center">
                                    <svg class="icon-icon-clock table__icon">
                                        <use xlink:href="#icon-clock"></use>
                                    </svg><span class="text-nowrap">13.07.2018 08:30</span>
                                </div>
                            </td>
                            <td class="table__td">
                                <div class="mw-280">Sent a notification to the client by e-mail.</div>
                            </td>
                        </tr>
                        <tr class="table__row">
                            <td class="table__td">
                                <div class="d-flex align-items-center">
                                    <svg class="icon-icon-clipboard table__icon">
                                        <use xlink:href="#icon-clipboard"></use>
                                    </svg><span>Order</span>
                                </div>
                            </td>
                            <td class="table__td text-grey">
                                <div class="d-flex align-items-center">
                                    <svg class="icon-icon-clock table__icon">
                                        <use xlink:href="#icon-clock"></use>
                                    </svg><span class="text-nowrap">14.07.2018 08:00</span>
                                </div>
                            </td>
                            <td class="table__td">
                                <div class="mw-280">Order delivered</div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection
