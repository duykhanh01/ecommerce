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
                        <a class="order-tabs__link order-tabs__link--active" href="order-status.html">
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
                            <li class="breadcrumbs__item active"><span class="breadcrumbs__link">Status</span>
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
        <div class="card card-order order-status">
            <div class="card__wrapper">
                <div class="card-order__product scrollbar-thin scrollbar-visible" data-simplebar>
                    <table class="table table--lines table--groups table--striped">
                        <colgroup>
                            <col width="33%">
                            <col width="33%">
                            <col width="33%">
                        </colgroup>
                        <thead class="table__header">
                            <tr>
                                <th class="text-center"><span>Date Added</span>
                                </th>
                                <th class="text-center"><span>Status</span>
                                </th>
                                <th class="text-center"><span>Customer Notified</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="table__row">
                                <td class="table__td text-center">12.07.2018 10:00 PM</td>
                                <td class="table__td text-center">
                                    <div class="d-inline-block text-nowrap"><span
                                            class="marker-item color-blue"></span><span>Pending</span>
                                    </div>
                                </td>
                                <td class="table__td text-center">Yes</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <form class="order-status__form" method="GET">
                    <div class="card__container">
                        <div class="row gutter-bottom-xl">
                            <div class="col-12">
                                <div class="order-status__form-group form-group form-group--inline">
                                    <label class="form-label">Order Status:</label>
                                    <div class="input-group input-group--append">
                                        <select class="input js-input-select input--fluid" data-placeholder="">
                                            <option value="1" selected="selected">Pending
                                            </option>
                                            <option value="2">Complete
                                            </option>
                                            <option value="3">Processing
                                            </option>
                                        </select><span class="input-group__arrow">
                                            <svg class="icon-icon-keyboard-down">
                                                <use xlink:href="#icon-keyboard-down"></use>
                                            </svg></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="order-status__checkboxes row gutter-bottom-xl no-gutters">
                                    <div class="order-status__checkbox-column col-12 col-sm-auto">
                                        <div class="form-group form-group--inline">
                                            <label class="form-label">Notify Customer:</label>
                                            <div class="input-group">
                                                <label class="checkbox-toggle is-active">
                                                    <input type="checkbox" checked><span
                                                        class="checkbox-toggle__range"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order-status__checkbox-column col-12 col-sm-auto">
                                        <div class="form-group form-group--inline">
                                            <label class="form-label">Append Comments:</label>
                                            <div class="input-group">
                                                <label class="checkbox-toggle">
                                                    <input type="checkbox"><span class="checkbox-toggle__range"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="order-status__form-group form-group form-group--inline">
                                    <label class="form-label">Comment:</label>
                                    <div class="input-group">
                                        <textarea class="input" rows="8" placeholder="Write a Comment..."></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="order-status__submit">
                            <div class="row row--md justify-content-center">
                                <div class="col-auto">
                                    <button class="button button--primary" type="submit"><span class="button__text">Add
                                            Order History</span>
                                    </button>
                                </div>
                                <div class="col-auto"><a class="button button--secondary" href="orders.html"><span
                                            class="button__text">Cancel</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection
