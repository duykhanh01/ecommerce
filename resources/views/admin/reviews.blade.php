@extends('layouts.admin')
@section('content_admin')

<main class="page-content">
    <div class="container">
        <div class="page-header">
            <h1 class="page-header__title">Reviews</h1>
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
                            <li class="breadcrumbs__item active"><span class="breadcrumbs__link">Reviews</span>
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
                    <div class="page-tools__right-item"><a class="button-icon" href="#"><span class="button-icon__icon">
                                <svg class="icon-icon-import">
                                    <use xlink:href="#icon-import"></use>
                                </svg></span></a>
                    </div>
                </div>
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
                        <div class="form-group form-group--inline col col-sm-auto">
                            <div class="input-group input-group--white input-group--prepend input-group--append">
                                <div class="input-group__prepend">
                                    <svg class="icon-icon-calendar">
                                        <use xlink:href="#icon-calendar"></use>
                                    </svg>
                                </div>
                                <input class="input input--select" type="text" value="01.12.18 / 07.12.18"
                                    readonly><span class="input-group__arrow">
                                    <svg class="icon-icon-keyboard-down">
                                        <use xlink:href="#icon-keyboard-down"></use>
                                    </svg></span>
                            </div>
                        </div>
                        <div class="form-group form-group--inline col-12 col-sm-auto">
                            <div class="toolbox__status input-group input-group--white input-group--append">
                                <input class="input input--select" type="text" value="All status" data-toggle="dropdown"
                                    readonly><span class="input-group__arrow">
                                    <svg class="icon-icon-keyboard-down">
                                        <use xlink:href="#icon-keyboard-down"></use>
                                    </svg></span>
                                <div class="dropdown-menu dropdown-menu--right dropdown-menu--fluid js-dropdown-select">
                                    <a class="dropdown-menu__item active" href="#" tabindex="0"
                                        data-value="All status"><span class="marker-item"></span> All status</a>
                                    <a class="dropdown-menu__item" href="#" tabindex="0" data-value="Published"><span
                                            class="marker-item color-green"></span> Published</a><a
                                        class="dropdown-menu__item" href="#" tabindex="0" data-value="Pending"><span
                                            class="marker-item color-blue"></span> Pending</a>
                                </div>
                            </div>
                        </div>
                        <div class="form-group form-group--inline col-12 col-sm-auto">
                            <div class="toolbox__status input-group input-group--white input-group--append">
                                <input class="input input--select" type="text" value="Any rating" data-toggle="dropdown"
                                    readonly><span class="input-group__arrow">
                                    <svg class="icon-icon-keyboard-down">
                                        <use xlink:href="#icon-keyboard-down"></use>
                                    </svg></span>
                                <div class="dropdown-menu dropdown-menu--right dropdown-menu--fluid js-dropdown-select">
                                    <a class="dropdown-menu__item active" href="#" tabindex="0"
                                        data-value="Any rating">Any rating</a><a class="dropdown-menu__item" href="#"
                                        tabindex="0" data-value="1">1</a><a class="dropdown-menu__item" href="#"
                                        tabindex="0" data-value="2">2</a><a class="dropdown-menu__item" href="#"
                                        tabindex="0" data-value="3">3</a><a class="dropdown-menu__item" href="#"
                                        tabindex="0" data-value="4">4</a><a class="dropdown-menu__item" href="#"
                                        tabindex="0" data-value="5">5</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="toolbox__right col-12 col-lg-auto">
                    <div class="toolbox__right-row row row--xs flex-nowrap">
                        <div class="col-auto ml-auto">
                            <button class="button-add button-add--blue" data-modal="#addReview"><span
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
        <div class="table-wrapper">
            <div class="table-wrapper__content table-collapse scrollbar-thin scrollbar-visible" data-simplebar>
                <table class="table table--lines">
                    <colgroup>
                        <col width="90px">
                        <col width="190px">
                        <col width="150px">
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
                                        <input class="js-checkbox-all" type="checkbox" data-checkbox-all="product"><span
                                            class="checkbox__marker"><span class="checkbox__marker-icon">
                                                <svg class="icon-icon-checked">
                                                    <use xlink:href="#icon-checked"></use>
                                                </svg></span></span>
                                    </label>
                                </div>
                            </th>
                            <th class="mw-180"><span class="align-middle">Product</span>
                            </th>
                            <th class="mw-160"><span class="align-middle">Author</span>
                            </th>
                            <th><span class="align-middle">Review</span>
                            </th>
                            <th class="table__th-sort"><span class="align-middle">Rating</span><span
                                    class="sort sort--down"></span>
                            </th>
                            <th class="table__th-sort"><span class="align-middle">Date</span><span
                                    class="sort sort--down"></span>
                            </th>
                            <th class="table__th-sort"><span class="align-middle">Status</span><span
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
                            <td class="table__td"><span class="text-light-theme">Apple Watch Series 4</span>
                            </td>
                            <td class="table__td text-dark-theme">Sophia Hale</td>
                            <td class="table__td text-overflow maxw-260"><span class="text-light-theme">The Series 4 is
                                    a significant step</span>
                            </td>
                            <td class="table__td">
                                <div class="rating js-rating-stars" data-rating="5" data-readonly="true"></div>
                            </td>
                            <td class="table__td text-nowrap"><span class="text-light-theme">12.07.2018</span> <span
                                    class="text-dark-theme">10:00</span>
                            </td>
                            <td class="table__td">
                                <div class="table__status"><span class="table__status-icon color-green"></span>
                                    Published</div>
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
                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span
                                                            class="dropdown-items__link-icon">
                                                            <svg class="icon-icon-view">
                                                                <use xlink:href="#icon-view"></use>
                                                            </svg></span>Details</a>
                                                </li>
                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span
                                                            class="dropdown-items__link-icon">
                                                            <svg class="icon-icon-duplicate">
                                                                <use xlink:href="#icon-duplicate"></use>
                                                            </svg></span>Duplicate</a>
                                                </li>
                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span
                                                            class="dropdown-items__link-icon">
                                                            <svg class="icon-icon-archive">
                                                                <use xlink:href="#icon-archive"></use>
                                                            </svg></span>Archive</a>
                                                </li>
                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span
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
                            <td class="table__td"><span class="text-light-theme">Apple Watch Series 4</span>
                            </td>
                            <td class="table__td text-dark-theme">Pamela Garza</td>
                            <td class="table__td text-overflow maxw-260"><span class="text-light-theme">The Series 4 is
                                    a significant step</span>
                            </td>
                            <td class="table__td">
                                <div class="rating js-rating-stars" data-rating="5" data-readonly="true"></div>
                            </td>
                            <td class="table__td text-nowrap"><span class="text-light-theme">12.07.2018</span> <span
                                    class="text-dark-theme">10:00</span>
                            </td>
                            <td class="table__td">
                                <div class="table__status"><span class="table__status-icon color-green"></span>
                                    Published</div>
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
                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span
                                                            class="dropdown-items__link-icon">
                                                            <svg class="icon-icon-view">
                                                                <use xlink:href="#icon-view"></use>
                                                            </svg></span>Details</a>
                                                </li>
                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span
                                                            class="dropdown-items__link-icon">
                                                            <svg class="icon-icon-duplicate">
                                                                <use xlink:href="#icon-duplicate"></use>
                                                            </svg></span>Duplicate</a>
                                                </li>
                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span
                                                            class="dropdown-items__link-icon">
                                                            <svg class="icon-icon-archive">
                                                                <use xlink:href="#icon-archive"></use>
                                                            </svg></span>Archive</a>
                                                </li>
                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span
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
                            <td class="table__td"><span class="text-light-theme">Apple Watch Series 4</span>
                            </td>
                            <td class="table__td text-dark-theme">Addison James</td>
                            <td class="table__td text-overflow maxw-260"><span class="text-light-theme">The Series 4 is
                                    a significant step</span>
                            </td>
                            <td class="table__td">
                                <div class="rating js-rating-stars" data-rating="5" data-readonly="true"></div>
                            </td>
                            <td class="table__td text-nowrap"><span class="text-light-theme">12.07.2018</span> <span
                                    class="text-dark-theme">10:00</span>
                            </td>
                            <td class="table__td">
                                <div class="table__status"><span class="table__status-icon color-green"></span>
                                    Published</div>
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
                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span
                                                            class="dropdown-items__link-icon">
                                                            <svg class="icon-icon-view">
                                                                <use xlink:href="#icon-view"></use>
                                                            </svg></span>Details</a>
                                                </li>
                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span
                                                            class="dropdown-items__link-icon">
                                                            <svg class="icon-icon-duplicate">
                                                                <use xlink:href="#icon-duplicate"></use>
                                                            </svg></span>Duplicate</a>
                                                </li>
                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span
                                                            class="dropdown-items__link-icon">
                                                            <svg class="icon-icon-archive">
                                                                <use xlink:href="#icon-archive"></use>
                                                            </svg></span>Archive</a>
                                                </li>
                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span
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
                            <td class="table__td"><span class="text-light-theme">Apple Watch Series 4</span>
                            </td>
                            <td class="table__td text-dark-theme">Jamie Rhodes</td>
                            <td class="table__td text-overflow maxw-260"><span class="text-light-theme">The Series 4 is
                                    a significant step</span>
                            </td>
                            <td class="table__td">
                                <div class="rating js-rating-stars" data-rating="5" data-readonly="true"></div>
                            </td>
                            <td class="table__td text-nowrap"><span class="text-light-theme">12.07.2018</span> <span
                                    class="text-dark-theme">10:00</span>
                            </td>
                            <td class="table__td">
                                <div class="table__status"><span class="table__status-icon color-green"></span>
                                    Published</div>
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
                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span
                                                            class="dropdown-items__link-icon">
                                                            <svg class="icon-icon-view">
                                                                <use xlink:href="#icon-view"></use>
                                                            </svg></span>Details</a>
                                                </li>
                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span
                                                            class="dropdown-items__link-icon">
                                                            <svg class="icon-icon-duplicate">
                                                                <use xlink:href="#icon-duplicate"></use>
                                                            </svg></span>Duplicate</a>
                                                </li>
                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span
                                                            class="dropdown-items__link-icon">
                                                            <svg class="icon-icon-archive">
                                                                <use xlink:href="#icon-archive"></use>
                                                            </svg></span>Archive</a>
                                                </li>
                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span
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
                            <td class="table__td"><span class="text-light-theme">Apple Watch Series 4</span>
                            </td>
                            <td class="table__td text-dark-theme">Addison Jones</td>
                            <td class="table__td text-overflow maxw-260"><span class="text-light-theme">The Series 4 is
                                    a significant step</span>
                            </td>
                            <td class="table__td">
                                <div class="rating js-rating-stars" data-rating="5" data-readonly="true"></div>
                            </td>
                            <td class="table__td text-nowrap"><span class="text-light-theme">12.07.2018</span> <span
                                    class="text-dark-theme">10:00</span>
                            </td>
                            <td class="table__td">
                                <div class="table__status"><span class="table__status-icon color-green"></span>
                                    Published</div>
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
                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span
                                                            class="dropdown-items__link-icon">
                                                            <svg class="icon-icon-view">
                                                                <use xlink:href="#icon-view"></use>
                                                            </svg></span>Details</a>
                                                </li>
                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span
                                                            class="dropdown-items__link-icon">
                                                            <svg class="icon-icon-duplicate">
                                                                <use xlink:href="#icon-duplicate"></use>
                                                            </svg></span>Duplicate</a>
                                                </li>
                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span
                                                            class="dropdown-items__link-icon">
                                                            <svg class="icon-icon-archive">
                                                                <use xlink:href="#icon-archive"></use>
                                                            </svg></span>Archive</a>
                                                </li>
                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span
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
                            <td class="table__td"><span class="text-light-theme">Apple Watch Series 4</span>
                            </td>
                            <td class="table__td text-dark-theme">Allen Dunn</td>
                            <td class="table__td text-overflow maxw-260"><span class="text-light-theme">The Series 4 is
                                    a significant step</span>
                            </td>
                            <td class="table__td">
                                <div class="rating js-rating-stars" data-rating="5" data-readonly="true"></div>
                            </td>
                            <td class="table__td text-nowrap"><span class="text-light-theme">12.07.2018</span> <span
                                    class="text-dark-theme">10:00</span>
                            </td>
                            <td class="table__td">
                                <div class="table__status"><span class="table__status-icon color-green"></span>
                                    Published</div>
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
                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span
                                                            class="dropdown-items__link-icon">
                                                            <svg class="icon-icon-view">
                                                                <use xlink:href="#icon-view"></use>
                                                            </svg></span>Details</a>
                                                </li>
                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span
                                                            class="dropdown-items__link-icon">
                                                            <svg class="icon-icon-duplicate">
                                                                <use xlink:href="#icon-duplicate"></use>
                                                            </svg></span>Duplicate</a>
                                                </li>
                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span
                                                            class="dropdown-items__link-icon">
                                                            <svg class="icon-icon-archive">
                                                                <use xlink:href="#icon-archive"></use>
                                                            </svg></span>Archive</a>
                                                </li>
                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span
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
                            <td class="table__td"><span class="text-light-theme">Apple Watch Series 4</span>
                            </td>
                            <td class="table__td text-dark-theme">Jim Murphy</td>
                            <td class="table__td text-overflow maxw-260"><span class="text-light-theme">The Series 4 is
                                    a significant step</span>
                            </td>
                            <td class="table__td">
                                <div class="rating js-rating-stars" data-rating="4" data-readonly="true"></div>
                            </td>
                            <td class="table__td text-nowrap"><span class="text-light-theme">12.07.2018</span> <span
                                    class="text-dark-theme">10:00</span>
                            </td>
                            <td class="table__td">
                                <div class="table__status"><span class="table__status-icon color-blue"></span> Pending
                                </div>
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
                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span
                                                            class="dropdown-items__link-icon">
                                                            <svg class="icon-icon-view">
                                                                <use xlink:href="#icon-view"></use>
                                                            </svg></span>Details</a>
                                                </li>
                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span
                                                            class="dropdown-items__link-icon">
                                                            <svg class="icon-icon-duplicate">
                                                                <use xlink:href="#icon-duplicate"></use>
                                                            </svg></span>Duplicate</a>
                                                </li>
                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span
                                                            class="dropdown-items__link-icon">
                                                            <svg class="icon-icon-archive">
                                                                <use xlink:href="#icon-archive"></use>
                                                            </svg></span>Archive</a>
                                                </li>
                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span
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
                            <td class="table__td"><span class="text-light-theme">Apple Watch Series 4</span>
                            </td>
                            <td class="table__td text-dark-theme">Lynn George</td>
                            <td class="table__td text-overflow maxw-260"><span class="text-light-theme">The Series 4 is
                                    a significant step</span>
                            </td>
                            <td class="table__td">
                                <div class="rating js-rating-stars" data-rating="3" data-readonly="true"></div>
                            </td>
                            <td class="table__td text-nowrap"><span class="text-light-theme">12.07.2018</span> <span
                                    class="text-dark-theme">10:00</span>
                            </td>
                            <td class="table__td">
                                <div class="table__status"><span class="table__status-icon color-blue"></span> Pending
                                </div>
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
                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span
                                                            class="dropdown-items__link-icon">
                                                            <svg class="icon-icon-view">
                                                                <use xlink:href="#icon-view"></use>
                                                            </svg></span>Details</a>
                                                </li>
                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span
                                                            class="dropdown-items__link-icon">
                                                            <svg class="icon-icon-duplicate">
                                                                <use xlink:href="#icon-duplicate"></use>
                                                            </svg></span>Duplicate</a>
                                                </li>
                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span
                                                            class="dropdown-items__link-icon">
                                                            <svg class="icon-icon-archive">
                                                                <use xlink:href="#icon-archive"></use>
                                                            </svg></span>Archive</a>
                                                </li>
                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span
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
                            <td class="table__td"><span class="text-light-theme">Apple Watch Series 4</span>
                            </td>
                            <td class="table__td text-dark-theme">Christine Lewis</td>
                            <td class="table__td text-overflow maxw-260"><span class="text-light-theme">The Series 4 is
                                    a significant step</span>
                            </td>
                            <td class="table__td">
                                <div class="rating js-rating-stars" data-rating="2" data-readonly="true"></div>
                            </td>
                            <td class="table__td text-nowrap"><span class="text-light-theme">12.07.2018</span> <span
                                    class="text-dark-theme">10:00</span>
                            </td>
                            <td class="table__td">
                                <div class="table__status"><span class="table__status-icon color-green"></span>
                                    Published</div>
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
                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span
                                                            class="dropdown-items__link-icon">
                                                            <svg class="icon-icon-view">
                                                                <use xlink:href="#icon-view"></use>
                                                            </svg></span>Details</a>
                                                </li>
                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span
                                                            class="dropdown-items__link-icon">
                                                            <svg class="icon-icon-duplicate">
                                                                <use xlink:href="#icon-duplicate"></use>
                                                            </svg></span>Duplicate</a>
                                                </li>
                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span
                                                            class="dropdown-items__link-icon">
                                                            <svg class="icon-icon-archive">
                                                                <use xlink:href="#icon-archive"></use>
                                                            </svg></span>Archive</a>
                                                </li>
                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span
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
                            <td class="table__td"><span class="text-light-theme">Apple Watch Series 4</span>
                            </td>
                            <td class="table__td text-dark-theme">Victor Banks</td>
                            <td class="table__td text-overflow maxw-260"><span class="text-light-theme">The Series 4 is
                                    a significant step</span>
                            </td>
                            <td class="table__td">
                                <div class="rating js-rating-stars" data-rating="4" data-readonly="true"></div>
                            </td>
                            <td class="table__td text-nowrap"><span class="text-light-theme">12.07.2018</span> <span
                                    class="text-dark-theme">10:00</span>
                            </td>
                            <td class="table__td">
                                <div class="table__status"><span class="table__status-icon color-green"></span>
                                    Published</div>
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
                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span
                                                            class="dropdown-items__link-icon">
                                                            <svg class="icon-icon-view">
                                                                <use xlink:href="#icon-view"></use>
                                                            </svg></span>Details</a>
                                                </li>
                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span
                                                            class="dropdown-items__link-icon">
                                                            <svg class="icon-icon-duplicate">
                                                                <use xlink:href="#icon-duplicate"></use>
                                                            </svg></span>Duplicate</a>
                                                </li>
                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span
                                                            class="dropdown-items__link-icon">
                                                            <svg class="icon-icon-archive">
                                                                <use xlink:href="#icon-archive"></use>
                                                            </svg></span>Archive</a>
                                                </li>
                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span
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

<div class="modal modal-compact modal-add-review scrollbar-thin" id="addReview" data-simplebar>
    <div class="modal__overlay" data-dismiss="modal"></div>
    <div class="modal__wrap">
        <div class="modal__window">
            <div class="modal__content">
                <button class="modal__close" data-dismiss="modal">
                    <svg class="icon-icon-cross">
                        <use xlink:href="#icon-cross"></use>
                    </svg>
                </button>
                <div class="modal__header">
                    <div class="modal__container">
                        <h2 class="modal__title">Edit review</h2>
                    </div>
                </div>
                <div class="modal__body">
                    <div class="modal__container">
                        <form method="POST">
                            <div class="row">
                                <div class="col-12 form-group form-group--lg">
                                    <label class="form-label form-label--sm">Product</label>
                                    <div class="input-group">
                                        <input class="input" type="text" value="Apple Watch Series 4" required>
                                    </div>
                                </div>
                                <div class="col-12 form-group form-group--lg">
                                    <label class="form-label form-label--sm">Author</label>
                                    <div class="input-group">
                                        <input class="input" type="text" value="Sophia Hale" required>
                                    </div>
                                </div>
                                <div class="col-12 form-group form-group--lg">
                                    <label class="form-label form-label--sm">Text of review</label>
                                    <div class="input-group">
                                        <textarea class="input" rows="6" required></textarea>
                                    </div>
                                </div>
                                <div class="col-12 form-group form-group--lg">
                                    <label class="form-label form-label--sm">Rating</label>
                                    <div class="input-group">
                                        <div class="rating rating--md js-rating-stars" data-rating="5"></div>
                                    </div>
                                </div>
                                <div class="col-12 form-group form-group--lg mb-0">
                                    <label class="form-label form-label--sm">Status</label>
                                    <div class="input-group input-group--append">
                                        <select class="input js-input-select input--fluid" data-placeholder="">
                                            <option value="1" selected="selected">Published
                                            </option>
                                            <option value="2">Pending
                                            </option>
                                        </select><span class="input-group__arrow">
                                            <svg class="icon-icon-keyboard-down">
                                                <use xlink:href="#icon-keyboard-down"></use>
                                            </svg></span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal__footer">
                    <div class="modal__container">
                        <div class="modal__footer-buttons">
                            <div class="modal__footer-button"></div>
                            <div class="modal__footer-button">
                                <button class="button button--primary button--block" type="submit"
                                    data-dismiss="modal"><span class="button__icon button__icon--left">
                                        <svg class="icon-icon-save">
                                            <use xlink:href="#icon-save"></use>
                                        </svg></span><span class="button__text">Save</span>
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
