

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
                                <a class="order-tabs__link order-tabs__link--active" href="order-invoice.html">
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
                    <h1 class="page-header__title">Invoice <span class="text-grey">#10</span></h1>
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
                                    <li class="breadcrumbs__item disabled"><a class="breadcrumbs__link" href="#"><span>E-commerce</span>
                        <svg class="icon-icon-keyboard-right breadcrumbs__arrow">
                          <use xlink:href="#icon-keyboard-right"></use>
                        </svg></a>
                                    </li>
                                    <li class="breadcrumbs__item"><a class="breadcrumbs__link" href="orders.html"><span>Orders</span>
                        <svg class="icon-icon-keyboard-right breadcrumbs__arrow">
                          <use xlink:href="#icon-keyboard-right"></use>
                        </svg></a>
                                    </li>
                                    <li class="breadcrumbs__item active"><span class="breadcrumbs__link">Invoice</span>
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
                <div class="card card-order order-invoice">
                    <div class="card__wrapper">
                        <div class="card__container">
                            <div class="card__header">
                                <div class="row gutter-bottom-xs justify-content-between flex-grow-1">
                                    <div class="col">
                                        <h2 class="order-invoice__title"><b class="text-uppercase">Invoice</b> <br> #790841</h2>
                                        <div class="order-invoice__address"><span class="text-grey-dark">ARION INC.</span> 
                                            <br>Russell st. 50, Boston, MA, USA, 02199
                                            <br> <a href="#">+1 (070) 123-4567</a> 
                                            <br> <a href="#">info@arion.com</a> 
                                            <br> <a href="#">www.arion.com</a>
                                        </div>
                                    </div>
                                    <div class="order-invoice__header-right col-12 col-md-auto">
                                        <div class="card__date">Placed on 12.07.2018 10:00</div>
                                        <div class="order-invoice__logo"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-order__product card-order__invoice-table scrollbar-thin scrollbar-visible" data-simplebar>
                            <table class="table table--lines table--groups table--striped">
                                <colgroup>
                                    <col class="colgroup-1">
                                        <col class="colgroup-2">
                                            <col class="colgroup-3">
                                                <col>
                                </colgroup>
                                <thead class="table__header">
                                    <tr>
                                        <th><span class="text-nowrap">PRODUCT</span>
                                        </th>
                                        <th class="text-center"><span>PRICE</span>
                                        </th>
                                        <th class="text-center"><span>QUANTITY</span>
                                        </th>
                                        <th><span>TOTAL</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="table__row">
                                        <td class="table__td"><span class="text-light-theme">MacBook Pro 15” (Mid 2018)</span>
                                        </td>
                                        <td class="table__td text-center text-dark-theme">$2500</td>
                                        <td class="table__td text-center text-light-theme">10</td>
                                        <td class="table__td text-nowrap text-dark-theme">$25,000</td>
                                    </tr>
                                    <tr class="table__row">
                                        <td class="table__td"><span class="text-light-theme">MacBook Pro 15” (Mid 2018)</span>
                                        </td>
                                        <td class="table__td text-center text-dark-theme">$2500</td>
                                        <td class="table__td text-center text-light-theme">10</td>
                                        <td class="table__td text-nowrap text-dark-theme">$25,000</td>
                                    </tr>
                                    <tr class="table__row">
                                        <td class="table__td"><span class="text-light-theme">MacBook Pro 15” (Mid 2018)</span>
                                        </td>
                                        <td class="table__td text-center text-dark-theme">$2500</td>
                                        <td class="table__td text-center text-light-theme">10</td>
                                        <td class="table__td text-nowrap text-dark-theme">$25,000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-order__footer-total">
                            <div class="card__container">
                                <div class="row gutter-bottom-sm justify-content-end">
                                    <div class="col-auto">
                                        <ul class="card-order__total">
                                            <li class="card-order__total-item">
                                                <div class="card-order__total-title">Subtotal:</div>
                                                <div class="card-order__total-value">$75,000</div>
                                            </li>
                                            <li class="card-order__total-item">
                                                <div class="card-order__total-title">TAX(20%):</div>
                                                <div class="card-order__total-value">$90,000</div>
                                            </li>
                                            <li class="card-order__total-item">
                                                <div class="card-order__total-title">DISCOUNT:</div>
                                                <div class="card-order__total-value">10%</div>
                                            </li>
                                            <li class="card-order__total-item card-order__total-footer">
                                                <div class="card-order__total-title">total:</div>
                                                <div class="card-order__total-value">$81,000</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
  
    
@endsection

