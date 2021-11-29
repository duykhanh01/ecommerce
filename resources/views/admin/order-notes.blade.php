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
                        <a class="order-tabs__link order-tabs__link--active" href="order-notes.html">
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
                            <li class="breadcrumbs__item active"><span class="breadcrumbs__link">Notes</span>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="page-tools__right">
                <div class="page-tools__right-row">
                    <div class="page-tools__right-item">
                        <button class="button-add button-add--blue" data-modal="#addNote"><span
                                class="button-add__icon">
                                <svg class="icon-icon-plus">
                                    <use xlink:href="#icon-plus"></use>
                                </svg></span><span class="button-add__text"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="order-notes">
            <div class="order-notes__top">
                <div class="order-notes__item">
                    <div class="order-note">
                        <div class="order-note__container">
                            <div class="order-note__top">
                                <div class="order-note__date">
                                    <time datetime="2018-07-12">12 June, 2018</time>
                                </div>
                                <div class="order-note__top-right">
                                    <a class="order-note__button-push" href="#">
                                        <svg class="icon-icon-pushpin">
                                            <use xlink:href="#icon-pushpin"></use>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="order-note__content">
                                <h3 class="order-note__title"><span>The title of a note</span></h3>
                                <div class="order-note__description">
                                    <p>Lorem ipsum dolor sit amet, ullamcous cididunt consectetur adipiscing elit, seds
                                        do et eiusmod tempor incididunt ut laborels dolore magnarels aliqua. Ut enim ad
                                        nesid utminim veniam, quis nostrud eiusmo exercitation
                                        ullamco labori is amco commodo consequat seds eiusmod.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="order-notes__item">
                    <div class="order-note">
                        <div class="order-note__container">
                            <div class="order-note__top">
                                <div class="order-note__date">
                                    <time datetime="2018-07-12">12 June, 2018</time>
                                </div>
                                <div class="order-note__top-right">
                                    <a class="order-note__button-push" href="#">
                                        <svg class="icon-icon-pushpin">
                                            <use xlink:href="#icon-pushpin"></use>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="order-note__content">
                                <h3 class="order-note__title"><span>The title of a note</span></h3>
                                <div class="order-note__description">
                                    <p>Lorem ipsum dolor sit amet, ullamcous cididunt consectetur adipiscing elit, seds
                                        do et eiusmod tempor incididunt ut laborels dolore magnarels aliqua. Ut enim ad
                                        nesid utminim veniam, quis nostrud eiusmo exercitation
                                        ullamco labori is amco commodo consequat seds eiusmod.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="order-notes__item">
                <div class="order-note">
                    <div class="order-note__container">
                        <div class="order-note__top">
                            <div class="order-note__date">
                                <time datetime="2018-07-12">12 June, 2018</time>
                            </div>
                            <div class="order-note__top-right">
                                <a class="order-note__button-push" href="#">
                                    <svg class="icon-icon-pushpin">
                                        <use xlink:href="#icon-pushpin"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="order-note__content">
                            <h3 class="order-note__title"><span>The title of a note 1</span></h3>
                            <div class="order-note__description">
                                <p>Lorem ipsum dolor sit amet, ullamcous cididunt consectetur adipiscing elit, seds do
                                    et eiusmod tempor incididunt ut laborels dolore magnarels aliqua. Ut enim ad nesid
                                    utminim veniam, quis nostrud eiusmo exercitation
                                    ullamco labori is amco commodo consequat seds eiusmod.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="order-notes__item">
                <div class="order-note">
                    <div class="order-note__container">
                        <div class="order-note__top">
                            <div class="order-note__date">
                                <time datetime="2018-07-12">12 June, 2018</time>
                            </div>
                            <div class="order-note__top-right">
                                <a class="order-note__button-push" href="#">
                                    <svg class="icon-icon-pushpin">
                                        <use xlink:href="#icon-pushpin"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="order-note__content">
                            <h3 class="order-note__title"><span>The title of a note 2</span></h3>
                            <div class="order-note__description">
                                <p>Lorem ipsum dolor sit amet, ullamcous cididunt consectetur adipiscing elit, seds do
                                    et eiusmod tempor incididunt ut laborels dolore magnarels aliqua. Ut enim ad nesid
                                    utminim veniam, quis nostrud eiusmo exercitation
                                    ullamco labori is amco commodo consequat seds eiusmod.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="order-notes__item">
                <div class="order-note">
                    <div class="order-note__container">
                        <div class="order-note__top">
                            <div class="order-note__date">
                                <time datetime="2018-07-12">12 June, 2018</time>
                            </div>
                            <div class="order-note__top-right">
                                <a class="order-note__button-push" href="#">
                                    <svg class="icon-icon-pushpin">
                                        <use xlink:href="#icon-pushpin"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="order-note__content">
                            <h3 class="order-note__title"><span>The title of a note 3</span></h3>
                            <div class="order-note__description">
                                <p>Lorem ipsum dolor sit amet, ullamcous cididunt consectetur adipiscing elit, seds do
                                    et eiusmod tempor incididunt ut laborels dolore magnarels aliqua. Ut enim ad nesid
                                    utminim veniam, quis nostrud eiusmo exercitation
                                    ullamco labori is amco commodo consequat seds eiusmod.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="order-notes__item">
                <div class="order-note">
                    <div class="order-note__container">
                        <div class="order-note__top">
                            <div class="order-note__date">
                                <time datetime="2018-07-12">12 June, 2018</time>
                            </div>
                            <div class="order-note__top-right">
                                <a class="order-note__button-push" href="#">
                                    <svg class="icon-icon-pushpin">
                                        <use xlink:href="#icon-pushpin"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="order-note__content">
                            <h3 class="order-note__title"><span>The title of a note 4</span></h3>
                            <div class="order-note__description">
                                <p>Lorem ipsum dolor sit amet, ullamcous cididunt consectetur adipiscing elit, seds do
                                    et eiusmod tempor incididunt ut laborels dolore magnarels aliqua. Ut enim ad nesid
                                    utminim veniam, quis nostrud eiusmo exercitation
                                    ullamco labori is amco commodo consequat seds eiusmod.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="order-notes__item">
                <div class="order-note">
                    <div class="order-note__container">
                        <div class="order-note__top">
                            <div class="order-note__date">
                                <time datetime="2018-07-12">12 June, 2018</time>
                            </div>
                            <div class="order-note__top-right">
                                <a class="order-note__button-push" href="#">
                                    <svg class="icon-icon-pushpin">
                                        <use xlink:href="#icon-pushpin"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="order-note__content">
                            <h3 class="order-note__title"><span>The title of a note 5</span></h3>
                            <div class="order-note__description">
                                <p>Lorem ipsum dolor sit amet, ullamcous cididunt consectetur adipiscing elit, seds do
                                    et eiusmod tempor incididunt ut laborels dolore magnarels aliqua. Ut enim ad nesid
                                    utminim veniam, quis nostrud eiusmo exercitation
                                    ullamco labori is amco commodo consequat seds eiusmod.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="order-notes__item">
                <div class="order-note">
                    <div class="order-note__container">
                        <div class="order-note__top">
                            <div class="order-note__date">
                                <time datetime="2018-07-12">12 June, 2018</time>
                            </div>
                            <div class="order-note__top-right">
                                <a class="order-note__button-push" href="#">
                                    <svg class="icon-icon-pushpin">
                                        <use xlink:href="#icon-pushpin"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="order-note__content">
                            <h3 class="order-note__title"><span>The title of a note 6</span></h3>
                            <div class="order-note__description">
                                <p>Lorem ipsum dolor sit amet, ullamcous cididunt consectetur adipiscing elit, seds do
                                    et eiusmod tempor incididunt ut laborels dolore magnarels aliqua. Ut enim ad nesid
                                    utminim veniam, quis nostrud eiusmo exercitation
                                    ullamco labori is amco commodo consequat seds eiusmod.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<div class="modal modal-compact scrollbar-thin" id="addNote" data-simplebar>
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
                        <h2 class="modal__title">Add Note</h2>
                    </div>
                </div>
                <div class="modal__body">
                    <div class="modal__container">
                        <form method="POST">
                            <div class="row">
                                <div class="col-12 form-group form-group--lg">
                                    <div class="input-group">
                                        <input class="input" type="text" placeholder="The title of a note" required>
                                    </div>
                                </div>
                                <div class="col-12 form-group form-group--lg mb-0">
                                    <div class="input-group">
                                        <textarea class="input" rows="8" placeholder="Write a Text" required></textarea>
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
                                        <svg class="icon-icon-plus">
                                            <use xlink:href="#icon-plus"></use>
                                        </svg></span><span class="button__text">Add Note</span>
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
