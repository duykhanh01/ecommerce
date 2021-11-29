
@extends('layouts.admin')
@section('content_admin')

<main class="page-content">
    <div class="container">
        <div class="page-header">
            <h1 class="page-header__title">Products</h1>
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
                            <li class="breadcrumbs__item active"><span class="breadcrumbs__link">Products</span>
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
                            <div class="input-group input-group--white input-group--append">
                                <select class="input js-input-select" data-placeholder="">
                                    <option value="1" selected="selected">All Categories
                                    </option>
                                    <option value="2">MacBook
                                    </option>
                                    <option value="3">Apple Watch
                                    </option>
                                    <option value="4">AirPods
                                    </option>
                                    <option value="5">iPhone
                                    </option>
                                    <option value="6">IPad
                                    </option>
                                </select><span class="input-group__arrow">
                                    <svg class="icon-icon-keyboard-down">
                                        <use xlink:href="#icon-keyboard-down"></use>
                                    </svg></span>
                            </div>
                        </div>
                        <div class="form-group form-group--inline col-12 col-sm-auto d-none d-sm-block">
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
                                        class="dropdown-menu__item" href="#" tabindex="0" data-value="Deleted"><span
                                            class="marker-item color-red"></span> Deleted</a>
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
                                    <input class="input" type="text" placeholder="Search product">
                                </div>
                            </form>
                        </div>
                        <div class="col-auto">
                            <button class="button-add button-add--blue" data-modal="#addProduct"><span
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
                        <col width="100px">
                        <col width="350px">
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
                            <th class="d-none d-lg-table-cell"><span>ID</span>
                            </th>
                            <th class="table__th-sort"><span class="align-middle">Product Name</span><span
                                    class="sort sort--down"></span>
                            </th>
                            <th class="table__th-sort"><span class="align-middle">Category</span><span
                                    class="sort sort--down"></span>
                            </th>
                            <th class="table__th-sort"><span class="align-middle">Price</span><span
                                    class="sort sort--down"></span>
                            </th>
                            <th class="table__th-sort d-none d-lg-table-cell"><span
                                    class="align-middle">Date</span><span class="sort sort--down"></span>
                            </th>
                            <th class="table__th-sort d-none d-sm-table-cell"><span
                                    class="align-middle">Status</span><span class="sort sort--down"></span>
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
                            <td class="d-none d-lg-table-cell table__td"><span class="text-grey">#790841</span>
                            </td>
                            <td class="table__td">MacBook Pro 15” (Mid 2018)</td>
                            <td class="table__td"><span class="text-grey">Notebook</span>
                            </td>
                            <td class="table__td"><span>$2500</span>
                            </td>
                            <td class="d-none d-lg-table-cell table__td"><span class="text-grey">12.07.2018</span>
                            </td>
                            <td class="d-none d-sm-table-cell table__td">
                                <div class="table__status"><span class="table__status-icon color-red"></span> Deleted
                                </div>
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
                            <td class="d-none d-lg-table-cell table__td"><span class="text-grey">#733829</span>
                            </td>
                            <td class="table__td">iPad Air</td>
                            <td class="table__td"><span class="text-grey">Tablet</span>
                            </td>
                            <td class="table__td"><span>$960</span>
                            </td>
                            <td class="d-none d-lg-table-cell table__td"><span class="text-grey">12.07.2020</span>
                            </td>
                            <td class="d-none d-sm-table-cell table__td">
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
                                        <input type="checkbox" data-checkbox="product" checked><span
                                            class="checkbox__marker"><span class="checkbox__marker-icon">
                                                <svg class="icon-icon-checked">
                                                    <use xlink:href="#icon-checked"></use>
                                                </svg></span></span>
                                    </label>
                                </div>
                            </td>
                            <td class="d-none d-lg-table-cell table__td"><span class="text-grey">#350245</span>
                            </td>
                            <td class="table__td">MacBook Pro 16” (Mid 2020)</td>
                            <td class="table__td"><span class="text-grey">Notebook</span>
                            </td>
                            <td class="table__td"><span>$4500</span>
                            </td>
                            <td class="d-none d-lg-table-cell table__td"><span class="text-grey">12.12.2020</span>
                            </td>
                            <td class="d-none d-sm-table-cell table__td">
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
                                        <input type="checkbox" data-checkbox="product" checked><span
                                            class="checkbox__marker"><span class="checkbox__marker-icon">
                                                <svg class="icon-icon-checked">
                                                    <use xlink:href="#icon-checked"></use>
                                                </svg></span></span>
                                    </label>
                                </div>
                            </td>
                            <td class="d-none d-lg-table-cell table__td"><span class="text-grey">#290261</span>
                            </td>
                            <td class="table__td">Apple Watch</td>
                            <td class="table__td"><span class="text-grey">Smart</span>
                            </td>
                            <td class="table__td"><span>$900</span>
                            </td>
                            <td class="d-none d-lg-table-cell table__td"><span class="text-grey">08.05.2020</span>
                            </td>
                            <td class="d-none d-sm-table-cell table__td">
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
                                        <input type="checkbox" data-checkbox="product" checked><span
                                            class="checkbox__marker"><span class="checkbox__marker-icon">
                                                <svg class="icon-icon-checked">
                                                    <use xlink:href="#icon-checked"></use>
                                                </svg></span></span>
                                    </label>
                                </div>
                            </td>
                            <td class="d-none d-lg-table-cell table__td"><span class="text-grey">#595841</span>
                            </td>
                            <td class="table__td">iPhone 12</td>
                            <td class="table__td"><span class="text-grey">Smart Phone</span>
                            </td>
                            <td class="table__td"><span>$1800</span>
                            </td>
                            <td class="d-none d-lg-table-cell table__td"><span class="text-grey">08.08.2020</span>
                            </td>
                            <td class="d-none d-sm-table-cell table__td">
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
                                        <input type="checkbox" data-checkbox="product" checked><span
                                            class="checkbox__marker"><span class="checkbox__marker-icon">
                                                <svg class="icon-icon-checked">
                                                    <use xlink:href="#icon-checked"></use>
                                                </svg></span></span>
                                    </label>
                                </div>
                            </td>
                            <td class="d-none d-lg-table-cell table__td"><span class="text-grey">#387339</span>
                            </td>
                            <td class="table__td">IPad Pro 12</td>
                            <td class="table__td"><span class="text-grey">Tablet</span>
                            </td>
                            <td class="table__td"><span>$1200</span>
                            </td>
                            <td class="d-none d-lg-table-cell table__td"><span class="text-grey">05.09.2020</span>
                            </td>
                            <td class="d-none d-sm-table-cell table__td">
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
                                        <input type="checkbox" data-checkbox="product" checked><span
                                            class="checkbox__marker"><span class="checkbox__marker-icon">
                                                <svg class="icon-icon-checked">
                                                    <use xlink:href="#icon-checked"></use>
                                                </svg></span></span>
                                    </label>
                                </div>
                            </td>
                            <td class="d-none d-lg-table-cell table__td"><span class="text-grey">#449276</span>
                            </td>
                            <td class="table__td">iMac Pro</td>
                            <td class="table__td"><span class="text-grey">Computer</span>
                            </td>
                            <td class="table__td"><span>$2800</span>
                            </td>
                            <td class="d-none d-lg-table-cell table__td"><span class="text-grey">25.12.2020</span>
                            </td>
                            <td class="d-none d-sm-table-cell table__td">
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
                            <td class="d-none d-lg-table-cell table__td"><span class="text-grey">#259476</span>
                            </td>
                            <td class="table__td">iPhone XR</td>
                            <td class="table__td"><span class="text-grey">Smart Phone</span>
                            </td>
                            <td class="table__td"><span>$890</span>
                            </td>
                            <td class="d-none d-lg-table-cell table__td"><span class="text-grey">18.06.2019</span>
                            </td>
                            <td class="d-none d-sm-table-cell table__td">
                                <div class="table__status"><span class="table__status-icon color-red"></span> Deleted
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
                            <td class="d-none d-lg-table-cell table__td"><span class="text-grey">#235538</span>
                            </td>
                            <td class="table__td">IPad Pro 10.5</td>
                            <td class="table__td"><span class="text-grey">Tablet</span>
                            </td>
                            <td class="table__td"><span>$1200</span>
                            </td>
                            <td class="d-none d-lg-table-cell table__td"><span class="text-grey">02.07.2019</span>
                            </td>
                            <td class="d-none d-sm-table-cell table__td">
                                <div class="table__status"><span class="table__status-icon color-red"></span> Deleted
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
                            <td class="d-none d-lg-table-cell table__td"><span class="text-grey">#833902</span>
                            </td>
                            <td class="table__td">iPhone X</td>
                            <td class="table__td"><span class="text-grey">Smart Phone</span>
                            </td>
                            <td class="table__td"><span>$850</span>
                            </td>
                            <td class="d-none d-lg-table-cell table__td"><span class="text-grey">28.10.2019</span>
                            </td>
                            <td class="d-none d-sm-table-cell table__td">
                                <div class="table__status"><span class="table__status-icon color-red"></span> Deleted
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

<div class="modal modal--panel modal--right" id="addProduct">
    <div class="modal__overlay" data-dismiss="modal"></div>
    <div class="modal__wrap">
        <div class="modal__window scrollbar-thin" data-simplebar>
            <div class="modal__content">
                <div class="modal__header">
                    <div class="modal__container">
                        <h2 class="modal__title">Add Product</h2>
                    </div>
                </div>
                <div class="modal__body">
                    <div class="modal__container">
                        <form method="POST">
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
                                        <div class="js-description-editor">Fundamentally redesigned and reengineered.
                                            The largest Apple Watch display yet. Built-in electrical heart sensor. New
                                            Digital Crown with haptic feedback. Low and high heart rate notifications.
                                            Fall detection
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
                                        <input class="input" type="number" min="0" max="100" placeholder="" value="10"
                                            required>
                                    </div>
                                </div>
                                <div class="col-12 form-group form-group--lg">
                                    <label class="form-label">Product Images</label>
                                    <div class="image-upload">
                                        <div class="image-upload__drop">
                                            <input class="image-upload__input" type="file" name="file_upload"
                                                multiple="multiple" accept="image/png, image/jpeg" />
                                            <div class="image-upload__drop-text">
                                                <svg class="icon-icon-upload">
                                                    <use xlink:href="#icon-upload"></use>
                                                </svg> <span>Drag and Drop or </span> <span
                                                    class="image-upload__drop-action text-blue">Browse</span> <span>to
                                                    upload</span>
                                            </div>
                                        </div>
                                        <ul class="image-upload__list">
                                            <li class="image-upload__item">
                                                <div class="image-upload__progress">
                                                    <div class="image-upload__progress-icon"></div>
                                                </div>
                                                <div class="image-upload__action-remove">
                                                    <svg class="icon-icon-cross">
                                                        <use xlink:href="#icon-cross"></use>
                                                    </svg>
                                                </div>
                                            </li>
                                            <li class="image-upload__item">
                                                <div class="image-upload__progress">
                                                    <div class="image-upload__progress-icon"></div>
                                                </div>
                                                <div class="image-upload__action-remove">
                                                    <svg class="icon-icon-cross">
                                                        <use xlink:href="#icon-cross"></use>
                                                    </svg>
                                                </div>
                                            </li>
                                            <li class="image-upload__item">
                                                <div class="image-upload__progress">
                                                    <div class="image-upload__progress-icon"></div>
                                                </div>
                                                <div class="image-upload__action-remove">
                                                    <svg class="icon-icon-cross">
                                                        <use xlink:href="#icon-cross"></use>
                                                    </svg>
                                                </div>
                                            </li>
                                            <li class="image-upload__item">
                                                <div class="image-upload__progress">
                                                    <div class="image-upload__progress-icon"></div>
                                                </div>
                                                <div class="image-upload__action-remove">
                                                    <svg class="icon-icon-cross">
                                                        <use xlink:href="#icon-cross"></use>
                                                    </svg>
                                                </div>
                                            </li>
                                            <li class="image-upload__item">
                                                <div class="image-upload__progress">
                                                    <div class="image-upload__progress-icon"></div>
                                                </div>
                                                <div class="image-upload__action-remove">
                                                    <svg class="icon-icon-cross">
                                                        <use xlink:href="#icon-cross"></use>
                                                    </svg>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 form-group form-group--lg mb-0">
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
                        </form>
                    </div>
                </div>
                <div class="modal__footer">
                    <div class="modal__container">
                        <div class="modal__footer-buttons">
                            <div class="modal__footer-button">
                                <button class="button button--primary button--block" data-dismiss="modal"
                                    data-modal="#addProductSuccess"><span class="button__text">Create</span>
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
<div class="modal modal-compact modal-success scrollbar-thin" id="addProductSuccess" data-simplebar>
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