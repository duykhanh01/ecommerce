
@extends('layouts.admin')
@section('content_admin')
<main class="page-content">
    <div class="container">
        <div class="page-header">
            <h1 class="page-header__title">Contacts <span class="text-grey">(50)</span></h1>
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
                            <li class="breadcrumbs__item active"><span class="breadcrumbs__link">Contacts</span>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="page-tools__right">
                <ul class="page-tools__right-row nav" role="tablist">
                    <li class="page-tools__right-item"><a class="button-icon" href="#tab-grid" data-toggle="tab"><span
                                class="button-icon__icon">
                                <svg class="icon-icon-grid">
                                    <use xlink:href="#icon-grid"></use>
                                </svg></span></a>
                    </li>
                    <li class="page-tools__right-item"><a class="button-icon active" href="#tab-list"
                            data-toggle="tab"><span class="button-icon__icon">
                                <svg class="icon-icon-list">
                                    <use xlink:href="#icon-list"></use>
                                </svg></span></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="toolbox">
            <div class="toolbox__row row gutter-bottom-xs">
                <div class="toolbox__left col-12 col-lg">
                    <div class="toolbox__left-row row row--xs gutter-bottom-xs">
                        <div class="form-group form-group--inline col-12 col-sm-auto">
                            <label class="form-label">Show</label>
                            <div class="input-group input-group--white input-group--append">
                                <input class="input input--select" type="text" value="10" size="1"
                                    data-toggle="dropdown" readonly><span class="input-group__arrow">
                                    <svg class="icon-icon-keyboard-down">
                                        <use xlink:href="#icon-keyboard-down"></use>
                                    </svg></span>
                                <div class="dropdown-menu dropdown-menu--right dropdown-menu--fluid js-dropdown-select">
                                    <a class="dropdown-menu__item active" href="#" tabindex="0" data-value="10">10</a><a
                                        class="dropdown-menu__item" href="#" tabindex="0" data-value="15">15</a><a
                                        class="dropdown-menu__item" href="#" tabindex="0" data-value="20">20</a>
                                    <a class="dropdown-menu__item" href="#" tabindex="0" data-value="25">25</a><a
                                        class="dropdown-menu__item" href="#" tabindex="0" data-value="50">50</a>
                                </div>
                            </div>
                        </div>
                        <div class="form-group form-group--inline col-12 col-sm-auto">
                            <div class="toolbox__status input-group input-group--white input-group--append">
                                <input class="input input--select" type="text" value="Newest" data-toggle="dropdown"
                                    readonly><span class="input-group__arrow">
                                    <svg class="icon-icon-keyboard-down">
                                        <use xlink:href="#icon-keyboard-down"></use>
                                    </svg></span>
                                <div class="dropdown-menu dropdown-menu--right dropdown-menu--fluid js-dropdown-select">
                                    <a class="dropdown-menu__item active" href="#" tabindex="0"
                                        data-value="Newest">Newest</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="toolbox__right col-12 col-lg-auto">
                    <div class="toolbox__right-row row row--xs flex-nowrap">
                        <div class="col col-lg-auto">
                            <form class="toolbox__search" method="GET">
                                <div class="input-group input-group--white input-group--prepend">
                                    <div class="input-group__prepend">
                                        <svg class="icon-icon-search">
                                            <use xlink:href="#icon-search"></use>
                                        </svg>
                                    </div>
                                    <input class="input" type="text" placeholder="Search Contacts">
                                </div>
                            </form>
                        </div>
                        <div class="col-auto ml-auto">
                            <button class="button-add button-add--blue" data-modal="#addContact"><span
                                    class="button-add__icon">
                                    <svg class="icon-icon-plus">
                                        <use xlink:href="#icon-plus"></use>
                                    </svg></span><span class="button-add__text"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="table-wrapper tab-content">
            <div class="tab-pane fade" id="tab-grid">
                <div class="table-wrapper__content table-collapse scrollbar-thin scrollbar-visible" data-simplebar>
                    <table class="table table--spaces">
                        <colgroup>
                            <col width="70px">
                            <col>
                            <col>
                            <col>
                            <col>
                            <col>
                        </colgroup>
                        <thead class="table__header">
                            <tr class="table__header-row">
                                <th>
                                    <div class="table__checkbox table__checkbox--all">
                                        <label class="checkbox">
                                            <input class="js-checkbox-all" type="checkbox"
                                                data-checkbox-all="product"><span class="checkbox__marker"><span
                                                    class="checkbox__marker-icon">
                                                    <svg class="icon-icon-checked">
                                                        <use xlink:href="#icon-checked"></use>
                                                    </svg></span></span>
                                        </label>
                                    </div>
                                </th>
                                <th class="table__th-sort mw-200"><span class="align-middle">Name</span><span
                                        class="sort sort--down"></span>
                                </th>
                                <th class="table__th-sort"><span class="align-middle">Email</span><span
                                        class="sort sort--down"></span>
                                </th>
                                <th class="table__th-sort"><span class="align-middle">Location</span><span
                                        class="sort sort--down"></span>
                                </th>
                                <th class="table__th-sort"><span class="align-middle">Phone</span><span
                                        class="sort sort--down"></span>
                                </th>
                                <th class="table__actions"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="table__row">
                                <td class="table__td">
                                    <div class="table__checkbox table__checkbox--all">
                                        <label class="checkbox">
                                            <input type="checkbox" data-checkbox="product"><span
                                                class="checkbox__marker"><span class="checkbox__marker-icon">
                                                    <svg class="icon-icon-checked">
                                                        <use xlink:href="#icon-checked"></use>
                                                    </svg></span></span>
                                        </label>
                                    </div>
                                </td>
                                <td class="table__td">
                                    <div class="media-item media-item--medium">
                                        <a class="media-item__icon color-red" href="customer-account.html">
                                            <div class="media-item__icon-text">FB</div>
                                            <img class="media-item__thumb" src="img/content/humans/item-1.jpg" alt="#">
                                        </a>
                                        <div class="media-item__right">
                                            <h5 class="media-item__title"><a href="customer-account.html">Felecia
                                                    Burke</a></h5>
                                            <div class="text-sm text-grey">Founder & CEO</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="table__td text-light-theme"><a href="mailto:#">example@mail.com</a>
                                </td>
                                <td class="table__td text-dark-theme">Hong Kong, China</td>
                                <td class="table__td text-light-theme text-nowrap"><a href="tel:#">+1 (070) 123-4567</a>
                                </td>
                                <td class="table__td table__actions">
                                    <div class="items-more">
                                        <button class="items-more__button">
                                            <svg class="icon-icon-more">
                                                <use xlink:href="#icon-more"></use>
                                            </svg>
                                        </button>
                                        <div class="dropdown-items dropdown-items--right">
                                            <div class="dropdown-items__container">
                                                <ul class="dropdown-items__list">
                                                    <li class="dropdown-items__item"><a class="dropdown-items__link"
                                                            href="order-details.html"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-view">
                                                                    <use xlink:href="#icon-view"></use>
                                                                </svg></span>Details</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a
                                                            class="dropdown-items__link"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-duplicate">
                                                                    <use xlink:href="#icon-duplicate"></use>
                                                                </svg></span>Duplicate</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a
                                                            class="dropdown-items__link"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-archive">
                                                                    <use xlink:href="#icon-archive"></use>
                                                                </svg></span>Archive</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a
                                                            class="dropdown-items__link"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-trash">
                                                                    <use xlink:href="#icon-trash"></use>
                                                                </svg></span>Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="table__space">
                                <td colspan="6"></td>
                            </tr>
                            <tr class="table__row">
                                <td class="table__td">
                                    <div class="table__checkbox table__checkbox--all">
                                        <label class="checkbox">
                                            <input type="checkbox" data-checkbox="product"><span
                                                class="checkbox__marker"><span class="checkbox__marker-icon">
                                                    <svg class="icon-icon-checked">
                                                        <use xlink:href="#icon-checked"></use>
                                                    </svg></span></span>
                                        </label>
                                    </div>
                                </td>
                                <td class="table__td">
                                    <div class="media-item media-item--medium">
                                        <a class="media-item__icon color-red" href="customer-account.html">
                                            <div class="media-item__icon-text">SH</div>
                                            <img class="media-item__thumb" src="img/content/humans/item-2.jpg" alt="#">
                                        </a>
                                        <div class="media-item__right">
                                            <h5 class="media-item__title"><a href="customer-account.html">Sophia
                                                    Hale</a></h5>
                                            <div class="text-sm text-grey">Manager</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="table__td text-light-theme"><a href="mailto:#">example@mail.com</a>
                                </td>
                                <td class="table__td text-dark-theme">Boston, USA</td>
                                <td class="table__td text-light-theme text-nowrap"><a href="tel:#">+1 (070) 123-4567</a>
                                </td>
                                <td class="table__td table__actions">
                                    <div class="items-more">
                                        <button class="items-more__button">
                                            <svg class="icon-icon-more">
                                                <use xlink:href="#icon-more"></use>
                                            </svg>
                                        </button>
                                        <div class="dropdown-items dropdown-items--right">
                                            <div class="dropdown-items__container">
                                                <ul class="dropdown-items__list">
                                                    <li class="dropdown-items__item"><a class="dropdown-items__link"
                                                            href="order-details.html"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-view">
                                                                    <use xlink:href="#icon-view"></use>
                                                                </svg></span>Details</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a
                                                            class="dropdown-items__link"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-duplicate">
                                                                    <use xlink:href="#icon-duplicate"></use>
                                                                </svg></span>Duplicate</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a
                                                            class="dropdown-items__link"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-archive">
                                                                    <use xlink:href="#icon-archive"></use>
                                                                </svg></span>Archive</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a
                                                            class="dropdown-items__link"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-trash">
                                                                    <use xlink:href="#icon-trash"></use>
                                                                </svg></span>Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="table__space">
                                <td colspan="6"></td>
                            </tr>
                            <tr class="table__row">
                                <td class="table__td">
                                    <div class="table__checkbox table__checkbox--all">
                                        <label class="checkbox">
                                            <input type="checkbox" data-checkbox="product"><span
                                                class="checkbox__marker"><span class="checkbox__marker-icon">
                                                    <svg class="icon-icon-checked">
                                                        <use xlink:href="#icon-checked"></use>
                                                    </svg></span></span>
                                        </label>
                                    </div>
                                </td>
                                <td class="table__td">
                                    <div class="media-item media-item--medium">
                                        <a class="media-item__icon color-red" href="customer-account.html">
                                            <div class="media-item__icon-text">PG</div>
                                            <img class="media-item__thumb" src="img/content/humans/item-3.jpg" alt="#">
                                        </a>
                                        <div class="media-item__right">
                                            <h5 class="media-item__title"><a href="customer-account.html">Pamela
                                                    Garza</a></h5>
                                            <div class="text-sm text-grey">Founder</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="table__td text-light-theme"><a href="mailto:#">example@mail.com</a>
                                </td>
                                <td class="table__td text-dark-theme">New York, USA</td>
                                <td class="table__td text-light-theme text-nowrap"><a href="tel:#">+1 (070) 123-4567</a>
                                </td>
                                <td class="table__td table__actions">
                                    <div class="items-more">
                                        <button class="items-more__button">
                                            <svg class="icon-icon-more">
                                                <use xlink:href="#icon-more"></use>
                                            </svg>
                                        </button>
                                        <div class="dropdown-items dropdown-items--right">
                                            <div class="dropdown-items__container">
                                                <ul class="dropdown-items__list">
                                                    <li class="dropdown-items__item"><a class="dropdown-items__link"
                                                            href="order-details.html"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-view">
                                                                    <use xlink:href="#icon-view"></use>
                                                                </svg></span>Details</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a
                                                            class="dropdown-items__link"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-duplicate">
                                                                    <use xlink:href="#icon-duplicate"></use>
                                                                </svg></span>Duplicate</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a
                                                            class="dropdown-items__link"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-archive">
                                                                    <use xlink:href="#icon-archive"></use>
                                                                </svg></span>Archive</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a
                                                            class="dropdown-items__link"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-trash">
                                                                    <use xlink:href="#icon-trash"></use>
                                                                </svg></span>Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="table__space">
                                <td colspan="6"></td>
                            </tr>
                            <tr class="table__row">
                                <td class="table__td">
                                    <div class="table__checkbox table__checkbox--all">
                                        <label class="checkbox">
                                            <input type="checkbox" data-checkbox="product"><span
                                                class="checkbox__marker"><span class="checkbox__marker-icon">
                                                    <svg class="icon-icon-checked">
                                                        <use xlink:href="#icon-checked"></use>
                                                    </svg></span></span>
                                        </label>
                                    </div>
                                </td>
                                <td class="table__td">
                                    <div class="media-item media-item--medium">
                                        <a class="media-item__icon color-red" href="customer-account.html">
                                            <div class="media-item__icon-text">AJ</div>
                                            <img class="media-item__thumb" src="img/content/humans/item-4.jpg" alt="#">
                                        </a>
                                        <div class="media-item__right">
                                            <h5 class="media-item__title"><a href="customer-account.html">Addison
                                                    James</a></h5>
                                            <div class="text-sm text-grey">Director</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="table__td text-light-theme"><a href="mailto:#">example@mail.com</a>
                                </td>
                                <td class="table__td text-dark-theme">Sydney, Australia</td>
                                <td class="table__td text-light-theme text-nowrap"><a href="tel:#">+1 (070) 123-4567</a>
                                </td>
                                <td class="table__td table__actions">
                                    <div class="items-more">
                                        <button class="items-more__button">
                                            <svg class="icon-icon-more">
                                                <use xlink:href="#icon-more"></use>
                                            </svg>
                                        </button>
                                        <div class="dropdown-items dropdown-items--right">
                                            <div class="dropdown-items__container">
                                                <ul class="dropdown-items__list">
                                                    <li class="dropdown-items__item"><a class="dropdown-items__link"
                                                            href="order-details.html"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-view">
                                                                    <use xlink:href="#icon-view"></use>
                                                                </svg></span>Details</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a
                                                            class="dropdown-items__link"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-duplicate">
                                                                    <use xlink:href="#icon-duplicate"></use>
                                                                </svg></span>Duplicate</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a
                                                            class="dropdown-items__link"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-archive">
                                                                    <use xlink:href="#icon-archive"></use>
                                                                </svg></span>Archive</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a
                                                            class="dropdown-items__link"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-trash">
                                                                    <use xlink:href="#icon-trash"></use>
                                                                </svg></span>Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="table__space">
                                <td colspan="6"></td>
                            </tr>
                            <tr class="table__row">
                                <td class="table__td">
                                    <div class="table__checkbox table__checkbox--all">
                                        <label class="checkbox">
                                            <input type="checkbox" data-checkbox="product"><span
                                                class="checkbox__marker"><span class="checkbox__marker-icon">
                                                    <svg class="icon-icon-checked">
                                                        <use xlink:href="#icon-checked"></use>
                                                    </svg></span></span>
                                        </label>
                                    </div>
                                </td>
                                <td class="table__td">
                                    <div class="media-item media-item--medium">
                                        <a class="media-item__icon color-red" href="customer-account.html">
                                            <div class="media-item__icon-text">JR</div>
                                            <img class="media-item__thumb" src="img/content/humans/item-5.jpg" alt="#">
                                        </a>
                                        <div class="media-item__right">
                                            <h5 class="media-item__title"><a href="customer-account.html">Jamie
                                                    Rhodes</a></h5>
                                            <div class="text-sm text-grey">Lead Developer</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="table__td text-light-theme"><a href="mailto:#">example@mail.com</a>
                                </td>
                                <td class="table__td text-dark-theme">Los Angeles, USA</td>
                                <td class="table__td text-light-theme text-nowrap"><a href="tel:#">+1 (070) 123-4567</a>
                                </td>
                                <td class="table__td table__actions">
                                    <div class="items-more">
                                        <button class="items-more__button">
                                            <svg class="icon-icon-more">
                                                <use xlink:href="#icon-more"></use>
                                            </svg>
                                        </button>
                                        <div class="dropdown-items dropdown-items--right">
                                            <div class="dropdown-items__container">
                                                <ul class="dropdown-items__list">
                                                    <li class="dropdown-items__item"><a class="dropdown-items__link"
                                                            href="order-details.html"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-view">
                                                                    <use xlink:href="#icon-view"></use>
                                                                </svg></span>Details</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a
                                                            class="dropdown-items__link"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-duplicate">
                                                                    <use xlink:href="#icon-duplicate"></use>
                                                                </svg></span>Duplicate</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a
                                                            class="dropdown-items__link"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-archive">
                                                                    <use xlink:href="#icon-archive"></use>
                                                                </svg></span>Archive</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a
                                                            class="dropdown-items__link"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-trash">
                                                                    <use xlink:href="#icon-trash"></use>
                                                                </svg></span>Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="table__space">
                                <td colspan="6"></td>
                            </tr>
                            <tr class="table__row">
                                <td class="table__td">
                                    <div class="table__checkbox table__checkbox--all">
                                        <label class="checkbox">
                                            <input type="checkbox" data-checkbox="product"><span
                                                class="checkbox__marker"><span class="checkbox__marker-icon">
                                                    <svg class="icon-icon-checked">
                                                        <use xlink:href="#icon-checked"></use>
                                                    </svg></span></span>
                                        </label>
                                    </div>
                                </td>
                                <td class="table__td">
                                    <div class="media-item media-item--medium">
                                        <a class="media-item__icon color-red" href="customer-account.html">
                                            <div class="media-item__icon-text">AJ</div>
                                            <img class="media-item__thumb" src="img/content/humans/item-6.jpg" alt="#">
                                        </a>
                                        <div class="media-item__right">
                                            <h5 class="media-item__title"><a href="customer-account.html">Addison
                                                    Jones</a></h5>
                                            <div class="text-sm text-grey">Product Manager</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="table__td text-light-theme"><a href="mailto:#">example@mail.com</a>
                                </td>
                                <td class="table__td text-dark-theme">Miami, USA</td>
                                <td class="table__td text-light-theme text-nowrap"><a href="tel:#">+1 (070) 123-4567</a>
                                </td>
                                <td class="table__td table__actions">
                                    <div class="items-more">
                                        <button class="items-more__button">
                                            <svg class="icon-icon-more">
                                                <use xlink:href="#icon-more"></use>
                                            </svg>
                                        </button>
                                        <div class="dropdown-items dropdown-items--right">
                                            <div class="dropdown-items__container">
                                                <ul class="dropdown-items__list">
                                                    <li class="dropdown-items__item"><a class="dropdown-items__link"
                                                            href="order-details.html"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-view">
                                                                    <use xlink:href="#icon-view"></use>
                                                                </svg></span>Details</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a
                                                            class="dropdown-items__link"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-duplicate">
                                                                    <use xlink:href="#icon-duplicate"></use>
                                                                </svg></span>Duplicate</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a
                                                            class="dropdown-items__link"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-archive">
                                                                    <use xlink:href="#icon-archive"></use>
                                                                </svg></span>Archive</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a
                                                            class="dropdown-items__link"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-trash">
                                                                    <use xlink:href="#icon-trash"></use>
                                                                </svg></span>Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="table__space">
                                <td colspan="6"></td>
                            </tr>
                            <tr class="table__row">
                                <td class="table__td">
                                    <div class="table__checkbox table__checkbox--all">
                                        <label class="checkbox">
                                            <input type="checkbox" data-checkbox="product"><span
                                                class="checkbox__marker"><span class="checkbox__marker-icon">
                                                    <svg class="icon-icon-checked">
                                                        <use xlink:href="#icon-checked"></use>
                                                    </svg></span></span>
                                        </label>
                                    </div>
                                </td>
                                <td class="table__td">
                                    <div class="media-item media-item--medium">
                                        <a class="media-item__icon color-red" href="customer-account.html">
                                            <div class="media-item__icon-text">AD</div>
                                            <img class="media-item__thumb" src="img/content/humans/item-7.jpg" alt="#">
                                        </a>
                                        <div class="media-item__right">
                                            <h5 class="media-item__title"><a href="customer-account.html">Allen Dunn</a>
                                            </h5>
                                            <div class="text-sm text-grey">Marketing Director</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="table__td text-light-theme"><a href="mailto:#">example@mail.com</a>
                                </td>
                                <td class="table__td text-dark-theme">Cape Town, South Africa</td>
                                <td class="table__td text-light-theme text-nowrap"><a href="tel:#">+1 (070) 123-4567</a>
                                </td>
                                <td class="table__td table__actions">
                                    <div class="items-more">
                                        <button class="items-more__button">
                                            <svg class="icon-icon-more">
                                                <use xlink:href="#icon-more"></use>
                                            </svg>
                                        </button>
                                        <div class="dropdown-items dropdown-items--right">
                                            <div class="dropdown-items__container">
                                                <ul class="dropdown-items__list">
                                                    <li class="dropdown-items__item"><a class="dropdown-items__link"
                                                            href="order-details.html"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-view">
                                                                    <use xlink:href="#icon-view"></use>
                                                                </svg></span>Details</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a
                                                            class="dropdown-items__link"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-duplicate">
                                                                    <use xlink:href="#icon-duplicate"></use>
                                                                </svg></span>Duplicate</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a
                                                            class="dropdown-items__link"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-archive">
                                                                    <use xlink:href="#icon-archive"></use>
                                                                </svg></span>Archive</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a
                                                            class="dropdown-items__link"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-trash">
                                                                    <use xlink:href="#icon-trash"></use>
                                                                </svg></span>Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="table__space">
                                <td colspan="6"></td>
                            </tr>
                            <tr class="table__row">
                                <td class="table__td">
                                    <div class="table__checkbox table__checkbox--all">
                                        <label class="checkbox">
                                            <input type="checkbox" data-checkbox="product"><span
                                                class="checkbox__marker"><span class="checkbox__marker-icon">
                                                    <svg class="icon-icon-checked">
                                                        <use xlink:href="#icon-checked"></use>
                                                    </svg></span></span>
                                        </label>
                                    </div>
                                </td>
                                <td class="table__td">
                                    <div class="media-item media-item--medium">
                                        <a class="media-item__icon color-red" href="customer-account.html">
                                            <div class="media-item__icon-text">JM</div>
                                            <img class="media-item__thumb" src="img/content/humans/item-8.jpg" alt="#">
                                        </a>
                                        <div class="media-item__right">
                                            <h5 class="media-item__title"><a href="customer-account.html">Jim Murphy</a>
                                            </h5>
                                            <div class="text-sm text-grey">Manager</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="table__td text-light-theme"><a href="mailto:#">example@mail.com</a>
                                </td>
                                <td class="table__td text-dark-theme">Los Angeles, USA</td>
                                <td class="table__td text-light-theme text-nowrap"><a href="tel:#">+1 (070) 123-4567</a>
                                </td>
                                <td class="table__td table__actions">
                                    <div class="items-more">
                                        <button class="items-more__button">
                                            <svg class="icon-icon-more">
                                                <use xlink:href="#icon-more"></use>
                                            </svg>
                                        </button>
                                        <div class="dropdown-items dropdown-items--right dropdown-items--up">
                                            <div class="dropdown-items__container">
                                                <ul class="dropdown-items__list">
                                                    <li class="dropdown-items__item"><a class="dropdown-items__link"
                                                            href="order-details.html"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-view">
                                                                    <use xlink:href="#icon-view"></use>
                                                                </svg></span>Details</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a
                                                            class="dropdown-items__link"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-duplicate">
                                                                    <use xlink:href="#icon-duplicate"></use>
                                                                </svg></span>Duplicate</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a
                                                            class="dropdown-items__link"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-archive">
                                                                    <use xlink:href="#icon-archive"></use>
                                                                </svg></span>Archive</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a
                                                            class="dropdown-items__link"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-trash">
                                                                    <use xlink:href="#icon-trash"></use>
                                                                </svg></span>Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="table__space">
                                <td colspan="6"></td>
                            </tr>
                            <tr class="table__row">
                                <td class="table__td">
                                    <div class="table__checkbox table__checkbox--all">
                                        <label class="checkbox">
                                            <input type="checkbox" data-checkbox="product"><span
                                                class="checkbox__marker"><span class="checkbox__marker-icon">
                                                    <svg class="icon-icon-checked">
                                                        <use xlink:href="#icon-checked"></use>
                                                    </svg></span></span>
                                        </label>
                                    </div>
                                </td>
                                <td class="table__td">
                                    <div class="media-item media-item--medium">
                                        <a class="media-item__icon color-red" href="customer-account.html">
                                            <div class="media-item__icon-text">LG</div>
                                            <img class="media-item__thumb" src="img/content/humans/item-9.jpg" alt="#">
                                        </a>
                                        <div class="media-item__right">
                                            <h5 class="media-item__title"><a href="customer-account.html">Lynn
                                                    George</a></h5>
                                            <div class="text-sm text-grey">Foundere</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="table__td text-light-theme"><a href="mailto:#">example@mail.com</a>
                                </td>
                                <td class="table__td text-dark-theme">Shanghai, China</td>
                                <td class="table__td text-light-theme text-nowrap"><a href="tel:#">+1 (070) 123-4567</a>
                                </td>
                                <td class="table__td table__actions">
                                    <div class="items-more">
                                        <button class="items-more__button">
                                            <svg class="icon-icon-more">
                                                <use xlink:href="#icon-more"></use>
                                            </svg>
                                        </button>
                                        <div class="dropdown-items dropdown-items--right dropdown-items--up">
                                            <div class="dropdown-items__container">
                                                <ul class="dropdown-items__list">
                                                    <li class="dropdown-items__item"><a class="dropdown-items__link"
                                                            href="order-details.html"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-view">
                                                                    <use xlink:href="#icon-view"></use>
                                                                </svg></span>Details</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a
                                                            class="dropdown-items__link"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-duplicate">
                                                                    <use xlink:href="#icon-duplicate"></use>
                                                                </svg></span>Duplicate</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a
                                                            class="dropdown-items__link"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-archive">
                                                                    <use xlink:href="#icon-archive"></use>
                                                                </svg></span>Archive</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a
                                                            class="dropdown-items__link"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-trash">
                                                                    <use xlink:href="#icon-trash"></use>
                                                                </svg></span>Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="table__space">
                                <td colspan="6"></td>
                            </tr>
                            <tr class="table__row">
                                <td class="table__td">
                                    <div class="table__checkbox table__checkbox--all">
                                        <label class="checkbox">
                                            <input type="checkbox" data-checkbox="product"><span
                                                class="checkbox__marker"><span class="checkbox__marker-icon">
                                                    <svg class="icon-icon-checked">
                                                        <use xlink:href="#icon-checked"></use>
                                                    </svg></span></span>
                                        </label>
                                    </div>
                                </td>
                                <td class="table__td">
                                    <div class="media-item media-item--medium">
                                        <a class="media-item__icon color-red" href="customer-account.html">
                                            <div class="media-item__icon-text">CL</div>
                                            <img class="media-item__thumb" src="img/content/humans/item-10.jpg" alt="#">
                                        </a>
                                        <div class="media-item__right">
                                            <h5 class="media-item__title"><a href="customer-account.html">Christine
                                                    Lewis</a></h5>
                                            <div class="text-sm text-grey">Manager</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="table__td text-light-theme"><a href="mailto:#">example@mail.com</a>
                                </td>
                                <td class="table__td text-dark-theme">Sydney, Australia</td>
                                <td class="table__td text-light-theme text-nowrap"><a href="tel:#">+1 (070) 123-4567</a>
                                </td>
                                <td class="table__td table__actions">
                                    <div class="items-more">
                                        <button class="items-more__button">
                                            <svg class="icon-icon-more">
                                                <use xlink:href="#icon-more"></use>
                                            </svg>
                                        </button>
                                        <div class="dropdown-items dropdown-items--right dropdown-items--up">
                                            <div class="dropdown-items__container">
                                                <ul class="dropdown-items__list">
                                                    <li class="dropdown-items__item"><a class="dropdown-items__link"
                                                            href="order-details.html"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-view">
                                                                    <use xlink:href="#icon-view"></use>
                                                                </svg></span>Details</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a
                                                            class="dropdown-items__link"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-duplicate">
                                                                    <use xlink:href="#icon-duplicate"></use>
                                                                </svg></span>Duplicate</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a
                                                            class="dropdown-items__link"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-archive">
                                                                    <use xlink:href="#icon-archive"></use>
                                                                </svg></span>Archive</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a
                                                            class="dropdown-items__link"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-trash">
                                                                    <use xlink:href="#icon-trash"></use>
                                                                </svg></span>Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade show active" id="tab-list">
                <div class="contacts-grid">
                    <div class="contact-card card">
                        <div class="card__wrapper">
                            <div class="card__container">
                                <div class="card__body">
                                    <div class="card__tools-more">
                                        <button class="items-more__button">
                                            <svg class="icon-icon-more">
                                                <use xlink:href="#icon-more"></use>
                                            </svg>
                                        </button>
                                        <div class="dropdown-items dropdown-items--right">
                                            <div class="dropdown-items__container">
                                                <ul class="dropdown-items__list">
                                                    <li class="dropdown-items__item"><a
                                                            class="dropdown-items__link"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-refresh">
                                                                    <use xlink:href="#icon-refresh"></use>
                                                                </svg></span>Refresh</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a
                                                            class="dropdown-items__link"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-settings">
                                                                    <use xlink:href="#icon-settings"></use>
                                                                </svg></span>Settings</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a
                                                            class="dropdown-items__link"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-download">
                                                                    <use xlink:href="#icon-download"></use>
                                                                </svg></span>Download</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a
                                                            class="dropdown-items__link"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-action">
                                                                    <use xlink:href="#icon-action"></use>
                                                                </svg></span>Action</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="contact-card__avatar">
                                        <svg viewBox="0 0 252 272" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g filter="url(#filter0_dd)">
                                                <path
                                                    d="M55 199H197V221C197 221 153.752 224 126 224C98.248 224 55 221 55 221V199Z"
                                                    fill="white"></path>
                                            </g>
                                            <g filter="url(#filter1_dd)">
                                                <path
                                                    d="M18.235 43.2287C19.2494 23.1848 35.1848 7.24941 55.2287 6.23501C76.8855 5.13899 104.551 4 126 4C147.449 4 175.114 5.13898 196.771 6.23501C216.815 7.24941 232.751 23.1848 233.765 43.2287C234.861 64.8855 236 92.5512 236 114C236 135.449 234.861 163.114 233.765 184.771C232.751 204.815 216.815 220.751 196.771 221.765C175.114 222.861 147.449 224 126 224C104.551 224 76.8855 222.861 55.2287 221.765C35.1848 220.751 19.2494 204.815 18.235 184.771C17.139 163.114 16 135.449 16 114C16 92.5512 17.139 64.8855 18.235 43.2287Z"
                                                    fill="url(#imagePattern0)"></path>
                                            </g>
                                            <defs>
                                                <filter id="filter0_dd" x="23" y="183" width="206" height="89"
                                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                                                    <feOffset dy="8" />
                                                    <feGaussianBlur stdDeviation="8" />
                                                    <feColorMatrix type="matrix"
                                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                                    <feBlend mode="normal" in2="BackgroundImageFix"
                                                        result="effect1_dropShadow" />
                                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                                                    <feOffset dy="16" />
                                                    <feGaussianBlur stdDeviation="16" />
                                                    <feColorMatrix type="matrix"
                                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                                    <feBlend mode="normal" in2="effect1_dropShadow"
                                                        result="effect2_dropShadow" />
                                                    <feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow"
                                                        result="shape" />
                                                </filter>
                                                <filter id="filter1_dd" x="0" y="0" width="252" height="252"
                                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                                                    <feOffset dy="12" />
                                                    <feGaussianBlur stdDeviation="8" />
                                                    <feColorMatrix type="matrix"
                                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.2 0" />
                                                    <feBlend mode="normal" in2="BackgroundImageFix"
                                                        result="effect1_dropShadow" />
                                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                                                    <feOffset dy="2" />
                                                    <feGaussianBlur stdDeviation="2" />
                                                    <feColorMatrix type="matrix"
                                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.05 0" />
                                                    <feBlend mode="normal" in2="effect1_dropShadow"
                                                        result="effect2_dropShadow" />
                                                    <feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow"
                                                        result="shape" />
                                                </filter>
                                                <pattern id="imagePattern0" patternContentUnits="objectBoundingBox"
                                                    width="1" height="1">
                                                    <use xlink:href="#avatarImage0" transform="scale(0.00142857)"></use>
                                                </pattern>
                                                <image id="avatarImage0" width="700" height="700"
                                                    xlink:href="img/content/humans-2/item-1.jpg"></image>
                                            </defs>
                                        </svg>
                                    </div>
                                    <h4 class="contact-card__title">Felecia Burke</h4>
                                    <div class="contact-card__label"><span class="label label--primary">Founder &amp;
                                            CEO</span>
                                    </div>
                                </div>
                                <div class="card__footer">
                                    <div class="card__container">
                                        <ul class="contact-card__address">
                                            <li>
                                                <div class="row row--xs justify-content-between">
                                                    <div class="contact-card__address-left col-auto">
                                                        <svg class="icon-icon-location">
                                                            <use xlink:href="#icon-location"></use>
                                                        </svg>Location:
                                                    </div>
                                                    <div class="col-auto text-light-theme">Hong Kong, China</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row row--xs justify-content-between">
                                                    <div class="contact-card__address-left col-auto">
                                                        <svg class="icon-icon-email">
                                                            <use xlink:href="#icon-email"></use>
                                                        </svg>Email:
                                                    </div>
                                                    <div class="col-auto text-light-theme"><a
                                                            href="mailto:#">example@mail.com</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row row--xs justify-content-between">
                                                    <div class="contact-card__address-left col-auto">
                                                        <svg class="icon-icon-phone">
                                                            <use xlink:href="#icon-phone"></use>
                                                        </svg>Phone:
                                                    </div>
                                                    <div class="col-auto text-light-theme"><a href="tel:#">+1 (070)
                                                            123-4567</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contact-card card">
                        <div class="card__wrapper">
                            <div class="card__container">
                                <div class="card__body">
                                    <div class="card__tools-more">
                                        <button class="items-more__button">
                                            <svg class="icon-icon-more">
                                                <use xlink:href="#icon-more"></use>
                                            </svg>
                                        </button>
                                        <div class="dropdown-items dropdown-items--right">
                                            <div class="dropdown-items__container">
                                                <ul class="dropdown-items__list">
                                                    <li class="dropdown-items__item"><a
                                                            class="dropdown-items__link"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-refresh">
                                                                    <use xlink:href="#icon-refresh"></use>
                                                                </svg></span>Refresh</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a
                                                            class="dropdown-items__link"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-settings">
                                                                    <use xlink:href="#icon-settings"></use>
                                                                </svg></span>Settings</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a
                                                            class="dropdown-items__link"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-download">
                                                                    <use xlink:href="#icon-download"></use>
                                                                </svg></span>Download</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a
                                                            class="dropdown-items__link"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-action">
                                                                    <use xlink:href="#icon-action"></use>
                                                                </svg></span>Action</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="contact-card__avatar">
                                        <svg viewBox="0 0 252 272" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g filter="url(#filter0_dd)">
                                                <path
                                                    d="M55 199H197V221C197 221 153.752 224 126 224C98.248 224 55 221 55 221V199Z"
                                                    fill="white"></path>
                                            </g>
                                            <g filter="url(#filter1_dd)">
                                                <path
                                                    d="M18.235 43.2287C19.2494 23.1848 35.1848 7.24941 55.2287 6.23501C76.8855 5.13899 104.551 4 126 4C147.449 4 175.114 5.13898 196.771 6.23501C216.815 7.24941 232.751 23.1848 233.765 43.2287C234.861 64.8855 236 92.5512 236 114C236 135.449 234.861 163.114 233.765 184.771C232.751 204.815 216.815 220.751 196.771 221.765C175.114 222.861 147.449 224 126 224C104.551 224 76.8855 222.861 55.2287 221.765C35.1848 220.751 19.2494 204.815 18.235 184.771C17.139 163.114 16 135.449 16 114C16 92.5512 17.139 64.8855 18.235 43.2287Z"
                                                    fill="url(#imagePattern1)"></path>
                                            </g>
                                            <defs>
                                                <pattern id="imagePattern1" patternContentUnits="objectBoundingBox"
                                                    width="1" height="1">
                                                    <use xlink:href="#avatarImage1" transform="scale(0.00142857)"></use>
                                                </pattern>
                                                <image id="avatarImage1" width="700" height="700"
                                                    xlink:href="img/content/humans-2/item-2.jpg"></image>
                                            </defs>
                                        </svg>
                                    </div>
                                    <h4 class="contact-card__title">Sophia Hale</h4>
                                    <div class="contact-card__label"><span class="label label--primary">Manager</span>
                                    </div>
                                </div>
                                <div class="card__footer">
                                    <div class="card__container">
                                        <ul class="contact-card__address">
                                            <li>
                                                <div class="row row--xs justify-content-between">
                                                    <div class="contact-card__address-left col-auto">
                                                        <svg class="icon-icon-location">
                                                            <use xlink:href="#icon-location"></use>
                                                        </svg>Location:
                                                    </div>
                                                    <div class="col-auto text-light-theme">Boston, USA</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row row--xs justify-content-between">
                                                    <div class="contact-card__address-left col-auto">
                                                        <svg class="icon-icon-email">
                                                            <use xlink:href="#icon-email"></use>
                                                        </svg>Email:
                                                    </div>
                                                    <div class="col-auto text-light-theme"><a
                                                            href="mailto:#">example@mail.com</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row row--xs justify-content-between">
                                                    <div class="contact-card__address-left col-auto">
                                                        <svg class="icon-icon-phone">
                                                            <use xlink:href="#icon-phone"></use>
                                                        </svg>Phone:
                                                    </div>
                                                    <div class="col-auto text-light-theme"><a href="tel:#">+1 (070)
                                                            123-4567</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contact-card card">
                        <div class="card__wrapper">
                            <div class="card__container">
                                <div class="card__body">
                                    <div class="card__tools-more">
                                        <button class="items-more__button">
                                            <svg class="icon-icon-more">
                                                <use xlink:href="#icon-more"></use>
                                            </svg>
                                        </button>
                                        <div class="dropdown-items dropdown-items--right">
                                            <div class="dropdown-items__container">
                                                <ul class="dropdown-items__list">
                                                    <li class="dropdown-items__item"><a
                                                            class="dropdown-items__link"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-refresh">
                                                                    <use xlink:href="#icon-refresh"></use>
                                                                </svg></span>Refresh</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a
                                                            class="dropdown-items__link"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-settings">
                                                                    <use xlink:href="#icon-settings"></use>
                                                                </svg></span>Settings</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a
                                                            class="dropdown-items__link"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-download">
                                                                    <use xlink:href="#icon-download"></use>
                                                                </svg></span>Download</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a
                                                            class="dropdown-items__link"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-action">
                                                                    <use xlink:href="#icon-action"></use>
                                                                </svg></span>Action</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="contact-card__avatar">
                                        <svg viewBox="0 0 252 272" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g filter="url(#filter0_dd)">
                                                <path
                                                    d="M55 199H197V221C197 221 153.752 224 126 224C98.248 224 55 221 55 221V199Z"
                                                    fill="white"></path>
                                            </g>
                                            <g filter="url(#filter1_dd)">
                                                <path
                                                    d="M18.235 43.2287C19.2494 23.1848 35.1848 7.24941 55.2287 6.23501C76.8855 5.13899 104.551 4 126 4C147.449 4 175.114 5.13898 196.771 6.23501C216.815 7.24941 232.751 23.1848 233.765 43.2287C234.861 64.8855 236 92.5512 236 114C236 135.449 234.861 163.114 233.765 184.771C232.751 204.815 216.815 220.751 196.771 221.765C175.114 222.861 147.449 224 126 224C104.551 224 76.8855 222.861 55.2287 221.765C35.1848 220.751 19.2494 204.815 18.235 184.771C17.139 163.114 16 135.449 16 114C16 92.5512 17.139 64.8855 18.235 43.2287Z"
                                                    fill="url(#imagePattern2)"></path>
                                            </g>
                                            <defs>
                                                <pattern id="imagePattern2" patternContentUnits="objectBoundingBox"
                                                    width="1" height="1">
                                                    <use xlink:href="#avatarImage2" transform="scale(0.00142857)"></use>
                                                </pattern>
                                                <image id="avatarImage2" width="700" height="700"
                                                    xlink:href="img/content/humans-2/item-3.jpg"></image>
                                            </defs>
                                        </svg>
                                    </div>
                                    <h4 class="contact-card__title">Pamela Garza</h4>
                                    <div class="contact-card__label"><span class="label label--primary">Founder</span>
                                    </div>
                                </div>
                                <div class="card__footer">
                                    <div class="card__container">
                                        <ul class="contact-card__address">
                                            <li>
                                                <div class="row row--xs justify-content-between">
                                                    <div class="contact-card__address-left col-auto">
                                                        <svg class="icon-icon-location">
                                                            <use xlink:href="#icon-location"></use>
                                                        </svg>Location:
                                                    </div>
                                                    <div class="col-auto text-light-theme">New York, USA</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row row--xs justify-content-between">
                                                    <div class="contact-card__address-left col-auto">
                                                        <svg class="icon-icon-email">
                                                            <use xlink:href="#icon-email"></use>
                                                        </svg>Email:
                                                    </div>
                                                    <div class="col-auto text-light-theme"><a
                                                            href="mailto:#">example@mail.com</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row row--xs justify-content-between">
                                                    <div class="contact-card__address-left col-auto">
                                                        <svg class="icon-icon-phone">
                                                            <use xlink:href="#icon-phone"></use>
                                                        </svg>Phone:
                                                    </div>
                                                    <div class="col-auto text-light-theme"><a href="tel:#">+1 (070)
                                                            123-4567</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contact-card card">
                        <div class="card__wrapper">
                            <div class="card__container">
                                <div class="card__body">
                                    <div class="card__tools-more">
                                        <button class="items-more__button">
                                            <svg class="icon-icon-more">
                                                <use xlink:href="#icon-more"></use>
                                            </svg>
                                        </button>
                                        <div class="dropdown-items dropdown-items--right">
                                            <div class="dropdown-items__container">
                                                <ul class="dropdown-items__list">
                                                    <li class="dropdown-items__item"><a
                                                            class="dropdown-items__link"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-refresh">
                                                                    <use xlink:href="#icon-refresh"></use>
                                                                </svg></span>Refresh</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a
                                                            class="dropdown-items__link"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-settings">
                                                                    <use xlink:href="#icon-settings"></use>
                                                                </svg></span>Settings</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a
                                                            class="dropdown-items__link"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-download">
                                                                    <use xlink:href="#icon-download"></use>
                                                                </svg></span>Download</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a
                                                            class="dropdown-items__link"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-action">
                                                                    <use xlink:href="#icon-action"></use>
                                                                </svg></span>Action</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="contact-card__avatar">
                                        <svg viewBox="0 0 252 272" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g filter="url(#filter0_dd)">
                                                <path
                                                    d="M55 199H197V221C197 221 153.752 224 126 224C98.248 224 55 221 55 221V199Z"
                                                    fill="white"></path>
                                            </g>
                                            <g filter="url(#filter1_dd)">
                                                <path
                                                    d="M18.235 43.2287C19.2494 23.1848 35.1848 7.24941 55.2287 6.23501C76.8855 5.13899 104.551 4 126 4C147.449 4 175.114 5.13898 196.771 6.23501C216.815 7.24941 232.751 23.1848 233.765 43.2287C234.861 64.8855 236 92.5512 236 114C236 135.449 234.861 163.114 233.765 184.771C232.751 204.815 216.815 220.751 196.771 221.765C175.114 222.861 147.449 224 126 224C104.551 224 76.8855 222.861 55.2287 221.765C35.1848 220.751 19.2494 204.815 18.235 184.771C17.139 163.114 16 135.449 16 114C16 92.5512 17.139 64.8855 18.235 43.2287Z"
                                                    fill="url(#imagePattern3)"></path>
                                            </g>
                                            <defs>
                                                <pattern id="imagePattern3" patternContentUnits="objectBoundingBox"
                                                    width="1" height="1">
                                                    <use xlink:href="#avatarImage3" transform="scale(0.00142857)"></use>
                                                </pattern>
                                                <image id="avatarImage3" width="700" height="700"
                                                    xlink:href="img/content/humans-2/item-4.jpg"></image>
                                            </defs>
                                        </svg>
                                    </div>
                                    <h4 class="contact-card__title">Addison James</h4>
                                    <div class="contact-card__label"><span class="label label--primary">Director</span>
                                    </div>
                                </div>
                                <div class="card__footer">
                                    <div class="card__container">
                                        <ul class="contact-card__address">
                                            <li>
                                                <div class="row row--xs justify-content-between">
                                                    <div class="contact-card__address-left col-auto">
                                                        <svg class="icon-icon-location">
                                                            <use xlink:href="#icon-location"></use>
                                                        </svg>Location:
                                                    </div>
                                                    <div class="col-auto text-light-theme">Sydney, Australia</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row row--xs justify-content-between">
                                                    <div class="contact-card__address-left col-auto">
                                                        <svg class="icon-icon-email">
                                                            <use xlink:href="#icon-email"></use>
                                                        </svg>Email:
                                                    </div>
                                                    <div class="col-auto text-light-theme"><a
                                                            href="mailto:#">example@mail.com</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row row--xs justify-content-between">
                                                    <div class="contact-card__address-left col-auto">
                                                        <svg class="icon-icon-phone">
                                                            <use xlink:href="#icon-phone"></use>
                                                        </svg>Phone:
                                                    </div>
                                                    <div class="col-auto text-light-theme"><a href="tel:#">+1 (070)
                                                            123-4567</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contact-card card">
                        <div class="card__wrapper">
                            <div class="card__container">
                                <div class="card__body">
                                    <div class="card__tools-more">
                                        <button class="items-more__button">
                                            <svg class="icon-icon-more">
                                                <use xlink:href="#icon-more"></use>
                                            </svg>
                                        </button>
                                        <div class="dropdown-items dropdown-items--right">
                                            <div class="dropdown-items__container">
                                                <ul class="dropdown-items__list">
                                                    <li class="dropdown-items__item"><a
                                                            class="dropdown-items__link"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-refresh">
                                                                    <use xlink:href="#icon-refresh"></use>
                                                                </svg></span>Refresh</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a
                                                            class="dropdown-items__link"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-settings">
                                                                    <use xlink:href="#icon-settings"></use>
                                                                </svg></span>Settings</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a
                                                            class="dropdown-items__link"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-download">
                                                                    <use xlink:href="#icon-download"></use>
                                                                </svg></span>Download</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a
                                                            class="dropdown-items__link"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-action">
                                                                    <use xlink:href="#icon-action"></use>
                                                                </svg></span>Action</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="contact-card__avatar">
                                        <svg viewBox="0 0 252 272" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g filter="url(#filter0_dd)">
                                                <path
                                                    d="M55 199H197V221C197 221 153.752 224 126 224C98.248 224 55 221 55 221V199Z"
                                                    fill="white"></path>
                                            </g>
                                            <g filter="url(#filter1_dd)">
                                                <path
                                                    d="M18.235 43.2287C19.2494 23.1848 35.1848 7.24941 55.2287 6.23501C76.8855 5.13899 104.551 4 126 4C147.449 4 175.114 5.13898 196.771 6.23501C216.815 7.24941 232.751 23.1848 233.765 43.2287C234.861 64.8855 236 92.5512 236 114C236 135.449 234.861 163.114 233.765 184.771C232.751 204.815 216.815 220.751 196.771 221.765C175.114 222.861 147.449 224 126 224C104.551 224 76.8855 222.861 55.2287 221.765C35.1848 220.751 19.2494 204.815 18.235 184.771C17.139 163.114 16 135.449 16 114C16 92.5512 17.139 64.8855 18.235 43.2287Z"
                                                    fill="url(#imagePattern4)"></path>
                                            </g>
                                            <defs>
                                                <pattern id="imagePattern4" patternContentUnits="objectBoundingBox"
                                                    width="1" height="1">
                                                    <use xlink:href="#avatarImage4" transform="scale(0.00142857)"></use>
                                                </pattern>
                                                <image id="avatarImage4" width="700" height="700"
                                                    xlink:href="img/content/humans-2/item-5.jpg"></image>
                                            </defs>
                                        </svg>
                                    </div>
                                    <h4 class="contact-card__title">Jamie Rhodes</h4>
                                    <div class="contact-card__label"><span class="label label--primary">Lead
                                            Developer</span>
                                    </div>
                                </div>
                                <div class="card__footer">
                                    <div class="card__container">
                                        <ul class="contact-card__address">
                                            <li>
                                                <div class="row row--xs justify-content-between">
                                                    <div class="contact-card__address-left col-auto">
                                                        <svg class="icon-icon-location">
                                                            <use xlink:href="#icon-location"></use>
                                                        </svg>Location:
                                                    </div>
                                                    <div class="col-auto text-light-theme">Los Angeles, USA</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row row--xs justify-content-between">
                                                    <div class="contact-card__address-left col-auto">
                                                        <svg class="icon-icon-email">
                                                            <use xlink:href="#icon-email"></use>
                                                        </svg>Email:
                                                    </div>
                                                    <div class="col-auto text-light-theme"><a
                                                            href="mailto:#">example@mail.com</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row row--xs justify-content-between">
                                                    <div class="contact-card__address-left col-auto">
                                                        <svg class="icon-icon-phone">
                                                            <use xlink:href="#icon-phone"></use>
                                                        </svg>Phone:
                                                    </div>
                                                    <div class="col-auto text-light-theme"><a href="tel:#">+1 (070)
                                                            123-4567</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contact-card card">
                        <div class="card__wrapper">
                            <div class="card__container">
                                <div class="card__body">
                                    <div class="card__tools-more">
                                        <button class="items-more__button">
                                            <svg class="icon-icon-more">
                                                <use xlink:href="#icon-more"></use>
                                            </svg>
                                        </button>
                                        <div class="dropdown-items dropdown-items--right">
                                            <div class="dropdown-items__container">
                                                <ul class="dropdown-items__list">
                                                    <li class="dropdown-items__item"><a
                                                            class="dropdown-items__link"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-refresh">
                                                                    <use xlink:href="#icon-refresh"></use>
                                                                </svg></span>Refresh</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a
                                                            class="dropdown-items__link"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-settings">
                                                                    <use xlink:href="#icon-settings"></use>
                                                                </svg></span>Settings</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a
                                                            class="dropdown-items__link"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-download">
                                                                    <use xlink:href="#icon-download"></use>
                                                                </svg></span>Download</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a
                                                            class="dropdown-items__link"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-action">
                                                                    <use xlink:href="#icon-action"></use>
                                                                </svg></span>Action</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="contact-card__avatar">
                                        <svg viewBox="0 0 252 272" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g filter="url(#filter0_dd)">
                                                <path
                                                    d="M55 199H197V221C197 221 153.752 224 126 224C98.248 224 55 221 55 221V199Z"
                                                    fill="white"></path>
                                            </g>
                                            <g filter="url(#filter1_dd)">
                                                <path
                                                    d="M18.235 43.2287C19.2494 23.1848 35.1848 7.24941 55.2287 6.23501C76.8855 5.13899 104.551 4 126 4C147.449 4 175.114 5.13898 196.771 6.23501C216.815 7.24941 232.751 23.1848 233.765 43.2287C234.861 64.8855 236 92.5512 236 114C236 135.449 234.861 163.114 233.765 184.771C232.751 204.815 216.815 220.751 196.771 221.765C175.114 222.861 147.449 224 126 224C104.551 224 76.8855 222.861 55.2287 221.765C35.1848 220.751 19.2494 204.815 18.235 184.771C17.139 163.114 16 135.449 16 114C16 92.5512 17.139 64.8855 18.235 43.2287Z"
                                                    fill="url(#imagePattern5)"></path>
                                            </g>
                                            <defs>
                                                <pattern id="imagePattern5" patternContentUnits="objectBoundingBox"
                                                    width="1" height="1">
                                                    <use xlink:href="#avatarImage5" transform="scale(0.00142857)"></use>
                                                </pattern>
                                                <image id="avatarImage5" width="700" height="700"
                                                    xlink:href="img/content/humans-2/item-6.jpg"></image>
                                            </defs>
                                        </svg>
                                    </div>
                                    <h4 class="contact-card__title">Addison Jones</h4>
                                    <div class="contact-card__label"><span class="label label--primary">Product
                                            Manager</span>
                                    </div>
                                </div>
                                <div class="card__footer">
                                    <div class="card__container">
                                        <ul class="contact-card__address">
                                            <li>
                                                <div class="row row--xs justify-content-between">
                                                    <div class="contact-card__address-left col-auto">
                                                        <svg class="icon-icon-location">
                                                            <use xlink:href="#icon-location"></use>
                                                        </svg>Location:
                                                    </div>
                                                    <div class="col-auto text-light-theme">Miami, USA</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row row--xs justify-content-between">
                                                    <div class="contact-card__address-left col-auto">
                                                        <svg class="icon-icon-email">
                                                            <use xlink:href="#icon-email"></use>
                                                        </svg>Email:
                                                    </div>
                                                    <div class="col-auto text-light-theme"><a
                                                            href="mailto:#">example@mail.com</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row row--xs justify-content-between">
                                                    <div class="contact-card__address-left col-auto">
                                                        <svg class="icon-icon-phone">
                                                            <use xlink:href="#icon-phone"></use>
                                                        </svg>Phone:
                                                    </div>
                                                    <div class="col-auto text-light-theme"><a href="tel:#">+1 (070)
                                                            123-4567</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contact-card card">
                        <div class="card__wrapper">
                            <div class="card__container">
                                <div class="card__body">
                                    <div class="card__tools-more">
                                        <button class="items-more__button">
                                            <svg class="icon-icon-more">
                                                <use xlink:href="#icon-more"></use>
                                            </svg>
                                        </button>
                                        <div class="dropdown-items dropdown-items--right">
                                            <div class="dropdown-items__container">
                                                <ul class="dropdown-items__list">
                                                    <li class="dropdown-items__item"><a
                                                            class="dropdown-items__link"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-refresh">
                                                                    <use xlink:href="#icon-refresh"></use>
                                                                </svg></span>Refresh</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a
                                                            class="dropdown-items__link"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-settings">
                                                                    <use xlink:href="#icon-settings"></use>
                                                                </svg></span>Settings</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a
                                                            class="dropdown-items__link"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-download">
                                                                    <use xlink:href="#icon-download"></use>
                                                                </svg></span>Download</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a
                                                            class="dropdown-items__link"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-action">
                                                                    <use xlink:href="#icon-action"></use>
                                                                </svg></span>Action</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="contact-card__avatar">
                                        <svg viewBox="0 0 252 272" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g filter="url(#filter0_dd)">
                                                <path
                                                    d="M55 199H197V221C197 221 153.752 224 126 224C98.248 224 55 221 55 221V199Z"
                                                    fill="white"></path>
                                            </g>
                                            <g filter="url(#filter1_dd)">
                                                <path
                                                    d="M18.235 43.2287C19.2494 23.1848 35.1848 7.24941 55.2287 6.23501C76.8855 5.13899 104.551 4 126 4C147.449 4 175.114 5.13898 196.771 6.23501C216.815 7.24941 232.751 23.1848 233.765 43.2287C234.861 64.8855 236 92.5512 236 114C236 135.449 234.861 163.114 233.765 184.771C232.751 204.815 216.815 220.751 196.771 221.765C175.114 222.861 147.449 224 126 224C104.551 224 76.8855 222.861 55.2287 221.765C35.1848 220.751 19.2494 204.815 18.235 184.771C17.139 163.114 16 135.449 16 114C16 92.5512 17.139 64.8855 18.235 43.2287Z"
                                                    fill="url(#imagePattern6)"></path>
                                            </g>
                                            <defs>
                                                <pattern id="imagePattern6" patternContentUnits="objectBoundingBox"
                                                    width="1" height="1">
                                                    <use xlink:href="#avatarImage6" transform="scale(0.00142857)"></use>
                                                </pattern>
                                                <image id="avatarImage6" width="700" height="700"
                                                    xlink:href="img/content/humans-2/item-7.jpg"></image>
                                            </defs>
                                        </svg>
                                    </div>
                                    <h4 class="contact-card__title">Allen Dunn</h4>
                                    <div class="contact-card__label"><span class="label label--primary">Marketing
                                            Director</span>
                                    </div>
                                </div>
                                <div class="card__footer">
                                    <div class="card__container">
                                        <ul class="contact-card__address">
                                            <li>
                                                <div class="row row--xs justify-content-between">
                                                    <div class="contact-card__address-left col-auto">
                                                        <svg class="icon-icon-location">
                                                            <use xlink:href="#icon-location"></use>
                                                        </svg>Location:
                                                    </div>
                                                    <div class="col-auto text-light-theme">Cape Town, South Africa</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row row--xs justify-content-between">
                                                    <div class="contact-card__address-left col-auto">
                                                        <svg class="icon-icon-email">
                                                            <use xlink:href="#icon-email"></use>
                                                        </svg>Email:
                                                    </div>
                                                    <div class="col-auto text-light-theme"><a
                                                            href="mailto:#">example@mail.com</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row row--xs justify-content-between">
                                                    <div class="contact-card__address-left col-auto">
                                                        <svg class="icon-icon-phone">
                                                            <use xlink:href="#icon-phone"></use>
                                                        </svg>Phone:
                                                    </div>
                                                    <div class="col-auto text-light-theme"><a href="tel:#">+1 (070)
                                                            123-4567</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contact-card card">
                        <div class="card__wrapper">
                            <div class="card__container">
                                <div class="card__body">
                                    <div class="card__tools-more">
                                        <button class="items-more__button">
                                            <svg class="icon-icon-more">
                                                <use xlink:href="#icon-more"></use>
                                            </svg>
                                        </button>
                                        <div class="dropdown-items dropdown-items--right">
                                            <div class="dropdown-items__container">
                                                <ul class="dropdown-items__list">
                                                    <li class="dropdown-items__item"><a
                                                            class="dropdown-items__link"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-refresh">
                                                                    <use xlink:href="#icon-refresh"></use>
                                                                </svg></span>Refresh</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a
                                                            class="dropdown-items__link"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-settings">
                                                                    <use xlink:href="#icon-settings"></use>
                                                                </svg></span>Settings</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a
                                                            class="dropdown-items__link"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-download">
                                                                    <use xlink:href="#icon-download"></use>
                                                                </svg></span>Download</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a
                                                            class="dropdown-items__link"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-action">
                                                                    <use xlink:href="#icon-action"></use>
                                                                </svg></span>Action</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="contact-card__avatar">
                                        <svg viewBox="0 0 252 272" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g filter="url(#filter0_dd)">
                                                <path
                                                    d="M55 199H197V221C197 221 153.752 224 126 224C98.248 224 55 221 55 221V199Z"
                                                    fill="white"></path>
                                            </g>
                                            <g filter="url(#filter1_dd)">
                                                <path
                                                    d="M18.235 43.2287C19.2494 23.1848 35.1848 7.24941 55.2287 6.23501C76.8855 5.13899 104.551 4 126 4C147.449 4 175.114 5.13898 196.771 6.23501C216.815 7.24941 232.751 23.1848 233.765 43.2287C234.861 64.8855 236 92.5512 236 114C236 135.449 234.861 163.114 233.765 184.771C232.751 204.815 216.815 220.751 196.771 221.765C175.114 222.861 147.449 224 126 224C104.551 224 76.8855 222.861 55.2287 221.765C35.1848 220.751 19.2494 204.815 18.235 184.771C17.139 163.114 16 135.449 16 114C16 92.5512 17.139 64.8855 18.235 43.2287Z"
                                                    fill="url(#imagePattern7)"></path>
                                            </g>
                                            <defs>
                                                <pattern id="imagePattern7" patternContentUnits="objectBoundingBox"
                                                    width="1" height="1">
                                                    <use xlink:href="#avatarImage7" transform="scale(0.00142857)"></use>
                                                </pattern>
                                                <image id="avatarImage7" width="700" height="700"
                                                    xlink:href="img/content/humans-2/item-8.jpg"></image>
                                            </defs>
                                        </svg>
                                    </div>
                                    <h4 class="contact-card__title">Jim Murphy</h4>
                                    <div class="contact-card__label"><span class="label label--primary">Manager</span>
                                    </div>
                                </div>
                                <div class="card__footer">
                                    <div class="card__container">
                                        <ul class="contact-card__address">
                                            <li>
                                                <div class="row row--xs justify-content-between">
                                                    <div class="contact-card__address-left col-auto">
                                                        <svg class="icon-icon-location">
                                                            <use xlink:href="#icon-location"></use>
                                                        </svg>Location:
                                                    </div>
                                                    <div class="col-auto text-light-theme">Los Angeles, USA</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row row--xs justify-content-between">
                                                    <div class="contact-card__address-left col-auto">
                                                        <svg class="icon-icon-email">
                                                            <use xlink:href="#icon-email"></use>
                                                        </svg>Email:
                                                    </div>
                                                    <div class="col-auto text-light-theme"><a
                                                            href="mailto:#">example@mail.com</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row row--xs justify-content-between">
                                                    <div class="contact-card__address-left col-auto">
                                                        <svg class="icon-icon-phone">
                                                            <use xlink:href="#icon-phone"></use>
                                                        </svg>Phone:
                                                    </div>
                                                    <div class="col-auto text-light-theme"><a href="tel:#">+1 (070)
                                                            123-4567</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contact-card card">
                        <div class="card__wrapper">
                            <div class="card__container">
                                <div class="card__body">
                                    <div class="card__tools-more">
                                        <button class="items-more__button">
                                            <svg class="icon-icon-more">
                                                <use xlink:href="#icon-more"></use>
                                            </svg>
                                        </button>
                                        <div class="dropdown-items dropdown-items--right">
                                            <div class="dropdown-items__container">
                                                <ul class="dropdown-items__list">
                                                    <li class="dropdown-items__item"><a
                                                            class="dropdown-items__link"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-refresh">
                                                                    <use xlink:href="#icon-refresh"></use>
                                                                </svg></span>Refresh</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a
                                                            class="dropdown-items__link"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-settings">
                                                                    <use xlink:href="#icon-settings"></use>
                                                                </svg></span>Settings</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a
                                                            class="dropdown-items__link"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-download">
                                                                    <use xlink:href="#icon-download"></use>
                                                                </svg></span>Download</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a
                                                            class="dropdown-items__link"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-action">
                                                                    <use xlink:href="#icon-action"></use>
                                                                </svg></span>Action</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="contact-card__avatar">
                                        <svg viewBox="0 0 252 272" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g filter="url(#filter0_dd)">
                                                <path
                                                    d="M55 199H197V221C197 221 153.752 224 126 224C98.248 224 55 221 55 221V199Z"
                                                    fill="white"></path>
                                            </g>
                                            <g filter="url(#filter1_dd)">
                                                <path
                                                    d="M18.235 43.2287C19.2494 23.1848 35.1848 7.24941 55.2287 6.23501C76.8855 5.13899 104.551 4 126 4C147.449 4 175.114 5.13898 196.771 6.23501C216.815 7.24941 232.751 23.1848 233.765 43.2287C234.861 64.8855 236 92.5512 236 114C236 135.449 234.861 163.114 233.765 184.771C232.751 204.815 216.815 220.751 196.771 221.765C175.114 222.861 147.449 224 126 224C104.551 224 76.8855 222.861 55.2287 221.765C35.1848 220.751 19.2494 204.815 18.235 184.771C17.139 163.114 16 135.449 16 114C16 92.5512 17.139 64.8855 18.235 43.2287Z"
                                                    fill="url(#imagePattern8)"></path>
                                            </g>
                                            <defs>
                                                <pattern id="imagePattern8" patternContentUnits="objectBoundingBox"
                                                    width="1" height="1">
                                                    <use xlink:href="#avatarImage8" transform="scale(0.00142857)"></use>
                                                </pattern>
                                                <image id="avatarImage8" width="700" height="700"
                                                    xlink:href="img/content/humans-2/item-9.jpg"></image>
                                            </defs>
                                        </svg>
                                    </div>
                                    <h4 class="contact-card__title">Lynn George</h4>
                                    <div class="contact-card__label"><span class="label label--primary">Foundere</span>
                                    </div>
                                </div>
                                <div class="card__footer">
                                    <div class="card__container">
                                        <ul class="contact-card__address">
                                            <li>
                                                <div class="row row--xs justify-content-between">
                                                    <div class="contact-card__address-left col-auto">
                                                        <svg class="icon-icon-location">
                                                            <use xlink:href="#icon-location"></use>
                                                        </svg>Location:
                                                    </div>
                                                    <div class="col-auto text-light-theme">Shanghai, China</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row row--xs justify-content-between">
                                                    <div class="contact-card__address-left col-auto">
                                                        <svg class="icon-icon-email">
                                                            <use xlink:href="#icon-email"></use>
                                                        </svg>Email:
                                                    </div>
                                                    <div class="col-auto text-light-theme"><a
                                                            href="mailto:#">example@mail.com</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row row--xs justify-content-between">
                                                    <div class="contact-card__address-left col-auto">
                                                        <svg class="icon-icon-phone">
                                                            <use xlink:href="#icon-phone"></use>
                                                        </svg>Phone:
                                                    </div>
                                                    <div class="col-auto text-light-theme"><a href="tel:#">+1 (070)
                                                            123-4567</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contact-card card">
                        <div class="card__wrapper">
                            <div class="card__container">
                                <div class="card__body">
                                    <div class="card__tools-more">
                                        <button class="items-more__button">
                                            <svg class="icon-icon-more">
                                                <use xlink:href="#icon-more"></use>
                                            </svg>
                                        </button>
                                        <div class="dropdown-items dropdown-items--right">
                                            <div class="dropdown-items__container">
                                                <ul class="dropdown-items__list">
                                                    <li class="dropdown-items__item"><a
                                                            class="dropdown-items__link"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-refresh">
                                                                    <use xlink:href="#icon-refresh"></use>
                                                                </svg></span>Refresh</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a
                                                            class="dropdown-items__link"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-settings">
                                                                    <use xlink:href="#icon-settings"></use>
                                                                </svg></span>Settings</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a
                                                            class="dropdown-items__link"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-download">
                                                                    <use xlink:href="#icon-download"></use>
                                                                </svg></span>Download</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a
                                                            class="dropdown-items__link"><span
                                                                class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-action">
                                                                    <use xlink:href="#icon-action"></use>
                                                                </svg></span>Action</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="contact-card__avatar">
                                        <svg viewBox="0 0 252 272" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g filter="url(#filter0_dd)">
                                                <path
                                                    d="M55 199H197V221C197 221 153.752 224 126 224C98.248 224 55 221 55 221V199Z"
                                                    fill="white"></path>
                                            </g>
                                            <g filter="url(#filter1_dd)">
                                                <path
                                                    d="M18.235 43.2287C19.2494 23.1848 35.1848 7.24941 55.2287 6.23501C76.8855 5.13899 104.551 4 126 4C147.449 4 175.114 5.13898 196.771 6.23501C216.815 7.24941 232.751 23.1848 233.765 43.2287C234.861 64.8855 236 92.5512 236 114C236 135.449 234.861 163.114 233.765 184.771C232.751 204.815 216.815 220.751 196.771 221.765C175.114 222.861 147.449 224 126 224C104.551 224 76.8855 222.861 55.2287 221.765C35.1848 220.751 19.2494 204.815 18.235 184.771C17.139 163.114 16 135.449 16 114C16 92.5512 17.139 64.8855 18.235 43.2287Z"
                                                    fill="url(#imagePattern9)"></path>
                                            </g>
                                            <defs>
                                                <pattern id="imagePattern9" patternContentUnits="objectBoundingBox"
                                                    width="1" height="1">
                                                    <use xlink:href="#avatarImage9" transform="scale(0.00142857)"></use>
                                                </pattern>
                                                <image id="avatarImage9" width="700" height="700"
                                                    xlink:href="img/content/humans-2/item-10.jpg"></image>
                                            </defs>
                                        </svg>
                                    </div>
                                    <h4 class="contact-card__title">Christine Lewis</h4>
                                    <div class="contact-card__label"><span class="label label--primary">Manager</span>
                                    </div>
                                </div>
                                <div class="card__footer">
                                    <div class="card__container">
                                        <ul class="contact-card__address">
                                            <li>
                                                <div class="row row--xs justify-content-between">
                                                    <div class="contact-card__address-left col-auto">
                                                        <svg class="icon-icon-location">
                                                            <use xlink:href="#icon-location"></use>
                                                        </svg>Location:
                                                    </div>
                                                    <div class="col-auto text-light-theme">Sydney, Australia</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row row--xs justify-content-between">
                                                    <div class="contact-card__address-left col-auto">
                                                        <svg class="icon-icon-email">
                                                            <use xlink:href="#icon-email"></use>
                                                        </svg>Email:
                                                    </div>
                                                    <div class="col-auto text-light-theme"><a
                                                            href="mailto:#">example@mail.com</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row row--xs justify-content-between">
                                                    <div class="contact-card__address-left col-auto">
                                                        <svg class="icon-icon-phone">
                                                            <use xlink:href="#icon-phone"></use>
                                                        </svg>Phone:
                                                    </div>
                                                    <div class="col-auto text-light-theme"><a href="tel:#">+1 (070)
                                                            123-4567</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-wrapper__footer">
                <div class="row">
                    <div class="table-wrapper__show-result col text-grey"><span
                            class="d-none d-sm-inline-block">Showing</span> 1 to 10 <span
                            class="d-none d-sm-inline-block">of 50 items</span>
                    </div>
                    <div class="table-wrapper__pagination col-auto">
                        <ol class="pagination">
                            <li class="pagination__item">
                                <a class="pagination__arrow pagination__arrow--prev" href="#">
                                    <svg class="icon-icon-keyboard-left">
                                        <use xlink:href="#icon-keyboard-left"></use>
                                    </svg>
                                </a>
                            </li>
                            <li class="pagination__item active"><a class="pagination__link" href="#">1</a>
                            </li>
                            <li class="pagination__item"><a class="pagination__link" href="#">2</a>
                            </li>
                            <li class="pagination__item"><a class="pagination__link" href="#">3</a>
                            </li>
                            <li class="pagination__item pagination__item--dots">...</li>
                            <li class="pagination__item"><a class="pagination__link" href="#">10</a>
                            </li>
                            <li class="pagination__item">
                                <a class="pagination__arrow pagination__arrow--next" href="#">
                                    <svg class="icon-icon-keyboard-right">
                                        <use xlink:href="#icon-keyboard-right"></use>
                                    </svg>
                                </a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<div class="modal modal--panel modal--sm modal--right" id="addContact">
    <div class="modal__overlay" data-dismiss="modal"></div>
    <div class="modal__wrap">
        <div class="modal__window scrollbar-thin" data-simplebar>
            <div class="modal__content">
                <div class="modal__header">
                    <div class="modal__container">
                        <h2 class="modal__title">New Contact</h2>
                    </div>
                </div>
                <div class="modal__body">
                    <div class="modal__container">
                        <form method="POST">
                            <div class="row row--md">
                                <div class="col-12 form-group form-group--lg">
                                    <label class="form-label form-label--sm">First Name</label>
                                    <div class="input-group">
                                        <input class="input" type="text" value="Felecia" required>
                                    </div>
                                </div>
                                <div class="col-12 form-group form-group--lg">
                                    <label class="form-label form-label--sm">Last Name</label>
                                    <div class="input-group">
                                        <input class="input" type="text" value="Burke" required>
                                    </div>
                                </div>
                                <div class="col-12 form-group form-group--lg">
                                    <label class="form-label form-label--sm">E-mail</label>
                                    <div class="input-group">
                                        <input class="input" type="email" value="example@mail.com" required>
                                    </div>
                                </div>
                                <div class="col-12 form-group form-group--lg">
                                    <label class="form-label form-label--sm">Phone Number</label>
                                    <div class="input-group">
                                        <input class="input js-phone-number" type="text" required>
                                    </div>
                                </div>
                                <div class="col-12 form-group form-group--lg">
                                    <label class="form-label form-label--sm">Job Title</label>
                                    <div class="input-group">
                                        <input class="input" type="text" value="Founder &amp; CEO" required>
                                    </div>
                                </div>
                                <div class="col-12 form-group form-group--lg">
                                    <label class="form-label form-label--sm">Address</label>
                                    <div class="input-group">
                                        <input class="input" type="text" value="Hong Kong, China" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label class="form-label form-label--sm">Date of Birth</label>
                                    <div class="row row--md">
                                        <div class="col-12 col-sm-4 form-group form-group--lg">
                                            <div class="input-group input-group--append">
                                                <select class="input js-input-select input--fluid" data-placeholder="">
                                                    <option value="1" selected="selected">1
                                                    </option>
                                                    <option value="2">2
                                                    </option>
                                                    <option value="3">3
                                                    </option>
                                                    <option value="4">4
                                                    </option>
                                                    <option value="5">5
                                                    </option>
                                                    <option value="6">6
                                                    </option>
                                                    <option value="7">7
                                                    </option>
                                                    <option value="8">8
                                                    </option>
                                                    <option value="9">9
                                                    </option>
                                                    <option value="10">10
                                                    </option>
                                                    <option value="11">11
                                                    </option>
                                                    <option value="12">12
                                                    </option>
                                                    <option value="13">13
                                                    </option>
                                                    <option value="14">14
                                                    </option>
                                                    <option value="15">15
                                                    </option>
                                                    <option value="16">16
                                                    </option>
                                                    <option value="17">17
                                                    </option>
                                                    <option value="18">18
                                                    </option>
                                                    <option value="19">19
                                                    </option>
                                                    <option value="20">20
                                                    </option>
                                                    <option value="21">21
                                                    </option>
                                                    <option value="22">22
                                                    </option>
                                                    <option value="23">23
                                                    </option>
                                                    <option value="24">24
                                                    </option>
                                                    <option value="25">25
                                                    </option>
                                                    <option value="26">26
                                                    </option>
                                                    <option value="27">27
                                                    </option>
                                                    <option value="28">28
                                                    </option>
                                                </select><span class="input-group__arrow">
                                                    <svg class="icon-icon-keyboard-down">
                                                        <use xlink:href="#icon-keyboard-down"></use>
                                                    </svg></span>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4 form-group form-group--lg">
                                            <div class="input-group input-group--append">
                                                <select class="input js-input-select input--fluid" data-placeholder="">
                                                    <option value="1" selected="selected">January
                                                    </option>
                                                    <option value="2">February
                                                    </option>
                                                    <option value="3">March
                                                    </option>
                                                    <option value="4">April
                                                    </option>
                                                    <option value="5">May
                                                    </option>
                                                    <option value="6">June
                                                    </option>
                                                    <option value="7">July
                                                    </option>
                                                    <option value="8">August
                                                    </option>
                                                    <option value="9">September
                                                    </option>
                                                    <option value="10">October
                                                    </option>
                                                    <option value="11">November
                                                    </option>
                                                    <option value="12">December
                                                    </option>
                                                </select><span class="input-group__arrow">
                                                    <svg class="icon-icon-keyboard-down">
                                                        <use xlink:href="#icon-keyboard-down"></use>
                                                    </svg></span>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4 form-group form-group--lg">
                                            <div class="input-group input-group--append">
                                                <select class="input js-input-select input--fluid" data-placeholder="">
                                                    <option value="1" selected="selected">1990
                                                    </option>
                                                    <option value="2">1991
                                                    </option>
                                                    <option value="3">1992
                                                    </option>
                                                    <option value="4">1993
                                                    </option>
                                                    <option value="5">1994
                                                    </option>
                                                </select><span class="input-group__arrow">
                                                    <svg class="icon-icon-keyboard-down">
                                                        <use xlink:href="#icon-keyboard-down"></use>
                                                    </svg></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 form-group form-group--lg mb-0">
                                    <label class="form-label form-label--sm">Notes</label>
                                    <div class="input-group">
                                        <textarea class="input"
                                            rows="6">Excepteur sint occaecat cupidatat non proident, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos.</textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal__footer">
                    <div class="modal__container">
                        <div class="modal__footer-buttons">
                            <div class="modal__footer-button">
                                <button class="button button--primary button--block" data-dismiss="modal"
                                    data-modal="#"><span class="button__icon button__icon--left">
                                        <svg class="icon-icon-plus">
                                            <use xlink:href="#icon-plus"></use>
                                        </svg></span><span class="button__text">Add Contact</span>
                                </button>
                            </div>
                            <div class="modal__footer-button">
                                <button class="button button--secondary button--block" data-dismiss="modal"><span
                                        class="button__text">Cancel</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
