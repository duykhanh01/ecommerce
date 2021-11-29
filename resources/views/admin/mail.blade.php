@extends('layouts.admin')
@section('content_admin')
<main class="page-content page-content--full">
    
    <div class="inbox-grid">
        <aside class="sidebar-panel scrollbar-thin" id="sidebarPanel" data-simplebar="data-simplebar">
            <div class="sidebar-panel__top">
                <button class="button button--primary" data-modal="#addMessage"><span
                        class="button__icon button__icon--left">
                        <svg class="icon-icon-task">
                            <use xlink:href="#icon-task"></use>
                        </svg></span><span class="button__text">Compose</span>
                </button>
            </div>
            <div class="sidebar-panel__content">
                <div class="sidebar-panel__nav">
                    <ul class="sidebar-panel__menu">
                        <li class="sidebar-panel__menu-item">
                            <a class="sidebar-panel__menu-link active" href="#">
                                <svg class="icon-icon-inbox">
                                    <use xlink:href="#icon-inbox"></use>
                                </svg><span class="sidebar-panel__menu-text">Inbox</span><span
                                    class="badge badge--red">20</span>
                            </a>
                        </li>
                        <li class="sidebar-panel__menu-item">
                            <a class="sidebar-panel__menu-link" href="#">
                                <svg class="icon-icon-send">
                                    <use xlink:href="#icon-send"></use>
                                </svg><span class="sidebar-panel__menu-text">Sent</span>
                            </a>
                        </li>
                        <li class="sidebar-panel__menu-item">
                            <a class="sidebar-panel__menu-link" href="#">
                                <svg class="icon-icon-drafts">
                                    <use xlink:href="#icon-drafts"></use>
                                </svg><span class="sidebar-panel__menu-text">Drafts</span><span
                                    class="badge badge--red">5</span>
                            </a>
                        </li>
                        <li class="sidebar-panel__menu-item">
                            <a class="sidebar-panel__menu-link" href="#">
                                <svg class="icon-icon-detail">
                                    <use xlink:href="#icon-detail"></use>
                                </svg><span class="sidebar-panel__menu-text">Important</span>
                            </a>
                        </li>
                        <li class="sidebar-panel__menu-item">
                            <a class="sidebar-panel__menu-link" href="#">
                                <svg class="icon-icon-star">
                                    <use xlink:href="#icon-star"></use>
                                </svg><span class="sidebar-panel__menu-text">Starred</span>
                            </a>
                        </li>
                        <li class="sidebar-panel__menu-item">
                            <a class="sidebar-panel__menu-link" href="#">
                                <svg class="icon-icon-trash">
                                    <use xlink:href="#icon-trash"></use>
                                </svg><span class="sidebar-panel__menu-text">Deleted</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="sidebar-panel__section">
                    <h3 class="sidebar-panel__section-title">Labels</h3>
                    <div class="sidebar-panel__labels">
                        <div class="sidebar-panel__labels-item"><span class="marker-item color-red"></span> Personal
                        </div>
                        <div class="sidebar-panel__labels-item"><span class="marker-item color-teal"></span> Clients
                        </div>
                        <div class="sidebar-panel__labels-item"><span class="marker-item color-green"></span> Events
                        </div>
                        <div class="sidebar-panel__labels-item"><span class="marker-item color-orange"></span> Social
                        </div>
                        <div class="sidebar-panel__labels-item"><span class="marker-item color-grey-light"></span> Work
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <div class="inbox-mails">
            <div class="inbox-mails__top">
                <button class="toggle-sidebar toggle-sidebar--secondary js-toggle-sidebar-panel" type="button"
                    data-toggle="#sidebarPanel">
                    <svg class="icon-icon-menu">
                        <use xlink:href="#icon-menu"></use>
                    </svg>
                </button>
                <button class="toggle-search toggle-search--module" type="button" data-search="#search0">
                    <svg class="icon-icon-search">
                        <use xlink:href="#icon-search"></use>
                    </svg>
                    <svg class="icon-icon-cross">
                        <use xlink:href="#icon-cross"></use>
                    </svg>
                </button>
                <form class="module-search" id="search0" method="GET">
                    <div class="input-group input-group--prepend">
                        <div class="input-group__prepend">
                            <svg class="icon-icon-search">
                                <use xlink:href="#icon-search"></use>
                            </svg>
                        </div>
                        <input class="input" type="text" placeholder="Search">
                    </div>
                </form>
                <div class="inbox-mails__sort"><span class="text-light-theme mr-1">Sort by:</span>
                    <button class="inbox-mails__sort-button text-dark-theme" type="button" data-toggle="dropdown"><span
                            class="inbox-mails__sort-text">Date</span><span class="inbox-mails__sort-arrow">
                            <svg class="icon-icon-arrow-down">
                                <use xlink:href="#icon-arrow-down"></use>
                            </svg></span>
                    </button>
                    <div class="dropdown-menu dropdown-menu--right js-dropdown-select"><a
                            class="dropdown-menu__item active" href="#" tabindex="0" data-value="Date"><span
                                class="marker-item"></span> Date</a><a class="dropdown-menu__item" href="#" tabindex="0"
                            data-value="Personal"><span class="marker-item color-red"></span> Personal</a>
                        <a class="dropdown-menu__item" href="#" tabindex="0" data-value="Clients"><span
                                class="marker-item color-teal"></span> Clients</a><a class="dropdown-menu__item active"
                            href="#" tabindex="0" data-value="Events"><span class="marker-item color-green"></span>
                            Events</a><a class="dropdown-menu__item" href="#" tabindex="0" data-value="Social"><span
                                class="marker-item color-orange"></span> Social</a><a class="dropdown-menu__item"
                            href="#" tabindex="0" data-value="Work"><span class="marker-item color-grey-light"></span>
                            Work</a>
                    </div>
                </div>
            </div>
            <div class="inbox-mails__content scrollbar-thin scrollbar-hidden" data-simplebar>
                <ul class="inbox-mails__list">
                    <li class="inbox-mails__list-item">
                        <a class="inbox-mails__item" href="#">
                            <div class="inbox-mails__item-avatar color-orange-dark">
                                <div class="inbox-mails__item-avatar-text">FB</div>
                                <img src="img/content/humans/item-1.jpg" alt="#">
                            </div>
                            <div class="inbox-mails__item-right">
                                <h5 class="inbox-mails__item-name"><span>Felecia Burke</span><span
                                        class="marker-item color-red"></span>
                                </h5>
                                <div class="inbox-mails__item-right-group"><span class="inbox-mails__item-attachment">
                                        <svg class="icon-icon-attachment">
                                            <use xlink:href="#icon-attachment"></use>
                                        </svg></span><span class="inbox-mails__item-time">20 min</span>
                                </div>
                                <div class="inbox-mails__item-message">
                                    <p class="inbox-mails__item-text">The Arts play a large role in the expression of
                                        inner thoughts and beauty in my life. The Arts play a large role in the
                                        expression of inner thoughts and beauty in my life</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="inbox-mails__list-item">
                        <a class="inbox-mails__item active" href="#">
                            <div class="inbox-mails__item-avatar color-red">
                                <div class="inbox-mails__item-avatar-text">JB</div>
                                <img src="img/content/humans/item-4.jpg" alt="#">
                            </div>
                            <div class="inbox-mails__item-right">
                                <h5 class="inbox-mails__item-name"><span>Joan Bates</span><span
                                        class="marker-item color-teal"></span>
                                </h5>
                                <div class="inbox-mails__item-right-group"><span class="inbox-mails__item-attachment">
                                        <svg class="icon-icon-attachment">
                                            <use xlink:href="#icon-attachment"></use>
                                        </svg></span><span class="inbox-mails__item-time">2 hours</span>
                                </div>
                                <div class="inbox-mails__item-message">
                                    <p class="inbox-mails__item-text">Hello, Mark!</p>
                                    <p class="inbox-mails__item-text">I am writing to introduce you to David Boyd</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="inbox-mails__list-item">
                        <a class="inbox-mails__item" href="#">
                            <div class="inbox-mails__item-avatar color-teal">
                                <div class="inbox-mails__item-avatar-text">DP</div>
                                <img src="img/content/humans/item-5.jpg" alt="#">
                            </div>
                            <div class="inbox-mails__item-right">
                                <h5 class="inbox-mails__item-name"><span>David Palmer</span>
                                </h5>
                                <div class="inbox-mails__item-right-group"><span class="inbox-mails__item-attachment">
                                        <svg class="icon-icon-attachment">
                                            <use xlink:href="#icon-attachment"></use>
                                        </svg></span><span class="inbox-mails__item-time">6 hours</span>
                                </div>
                                <div class="inbox-mails__item-message">
                                    <p class="inbox-mails__item-text">We use the Arts as a means of touching that part
                                        of us that we cannot reach with</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="inbox-mails__list-item">
                        <a class="inbox-mails__item" href="#">
                            <div class="inbox-mails__item-avatar color-orange">
                                <div class="inbox-mails__item-avatar-text">ED</div>
                                <img src="img/content/humans/item-2.jpg" alt="#">
                            </div>
                            <div class="inbox-mails__item-right">
                                <h5 class="inbox-mails__item-name"><span>Elaine Day</span>
                                </h5>
                                <div class="inbox-mails__item-right-group"><span class="inbox-mails__item-attachment">
                                        <svg class="icon-icon-attachment">
                                            <use xlink:href="#icon-attachment"></use>
                                        </svg></span><span class="inbox-mails__item-time">2 days</span>
                                </div>
                                <div class="inbox-mails__item-message">
                                    <p class="inbox-mails__item-text">The arts allow us to be as specific or as abstract
                                        as we please. It helps us become closer</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="inbox-mails__list-item">
                        <a class="inbox-mails__item" href="#">
                            <div class="inbox-mails__item-avatar color-green">
                                <div class="inbox-mails__item-avatar-text">MS</div>
                                <img src="img/content/humans/item-6.jpg" alt="#">
                            </div>
                            <div class="inbox-mails__item-right">
                                <h5 class="inbox-mails__item-name"><span>Morris Stevens</span>
                                </h5>
                                <div class="inbox-mails__item-right-group"><span class="inbox-mails__item-attachment">
                                        <svg class="icon-icon-attachment">
                                            <use xlink:href="#icon-attachment"></use>
                                        </svg></span><span class="inbox-mails__item-time">3 days</span>
                                </div>
                                <div class="inbox-mails__item-message">
                                    <p class="inbox-mails__item-text">From dance and music to abstract art our concept
                                        of life is shown through the various</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="inbox-mails__list-item">
                        <a class="inbox-mails__item" href="#">
                            <div class="inbox-mails__item-avatar color-orange-dark">
                                <div class="inbox-mails__item-avatar-text">TR</div>
                                <img src="img/content/humans/item-7.jpg" alt="#">
                            </div>
                            <div class="inbox-mails__item-right">
                                <h5 class="inbox-mails__item-name"><span>Troy Russell</span><span
                                        class="marker-item color-orange"></span>
                                </h5>
                                <div class="inbox-mails__item-right-group"><span class="inbox-mails__item-attachment">
                                        <svg class="icon-icon-attachment">
                                            <use xlink:href="#icon-attachment"></use>
                                        </svg></span><span class="inbox-mails__item-time">3 days</span>
                                </div>
                                <div class="inbox-mails__item-message">
                                    <p class="inbox-mails__item-text">The arts teach us how to communicate through
                                        creative expression</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="inbox-mails__list-item">
                        <a class="inbox-mails__item" href="#">
                            <div class="inbox-mails__item-avatar color-teal">
                                <div class="inbox-mails__item-avatar-text">BH</div>
                                <img src="img/content/humans/item-8.jpg" alt="#">
                            </div>
                            <div class="inbox-mails__item-right">
                                <h5 class="inbox-mails__item-name"><span>Billy Hicks</span>
                                </h5>
                                <div class="inbox-mails__item-right-group"><span class="inbox-mails__item-attachment">
                                        <svg class="icon-icon-attachment">
                                            <use xlink:href="#icon-attachment"></use>
                                        </svg></span><span class="inbox-mails__item-time">1 week</span>
                                </div>
                                <div class="inbox-mails__item-message">
                                    <p class="inbox-mails__item-text">Music, singing, dancing, poetry, and sketching are
                                        just a few of the different forms of</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="inbox-mails__list-item">
                        <a class="inbox-mails__item" href="#">
                            <div class="inbox-mails__item-avatar color-red">
                                <div class="inbox-mails__item-avatar-text">NS</div>
                                <img src="img/content/humans/item-3.jpg" alt="#">
                            </div>
                            <div class="inbox-mails__item-right">
                                <h5 class="inbox-mails__item-name"><span>Nora Stanley</span><span
                                        class="marker-item color-red"></span>
                                </h5>
                                <div class="inbox-mails__item-right-group"><span class="inbox-mails__item-attachment">
                                        <svg class="icon-icon-attachment">
                                            <use xlink:href="#icon-attachment"></use>
                                        </svg></span><span class="inbox-mails__item-time">3 week</span>
                                </div>
                                <div class="inbox-mails__item-message">
                                    <p class="inbox-mails__item-text">Prepare us to adapt to and respect the ways others
                                        think, work, and express themselves</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="inbox-mails__list-item">
                        <a class="inbox-mails__item" href="#">
                            <div class="inbox-mails__item-avatar color-orange">
                                <div class="inbox-mails__item-avatar-text">WM</div>
                                <img src="img/content/humans/item-9.jpg" alt="#">
                            </div>
                            <div class="inbox-mails__item-right">
                                <h5 class="inbox-mails__item-name"><span>Walter Miles</span>
                                </h5>
                                <div class="inbox-mails__item-right-group"><span class="inbox-mails__item-attachment">
                                        <svg class="icon-icon-attachment">
                                            <use xlink:href="#icon-attachment"></use>
                                        </svg></span><span class="inbox-mails__item-time">3 week</span>
                                </div>
                                <div class="inbox-mails__item-message">
                                    <p class="inbox-mails__item-text">Show us how to understand human experiences, past
                                        and present</p>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="inbox-details">
            <div class="inbox-details__top">
                <div class="inbox-details__top-left">
                    <button class="inbox-details__dismiss button-icon button-icon--grey" type="button"
                        data-dismiss><span class="button-icon__icon">
                            <svg class="icon-icon-chevron">
                                <use xlink:href="#icon-chevron"></use>
                            </svg></span>
                    </button>
                    <button class="button-icon button-icon--grey"><span class="button-icon__icon">
                            <svg class="icon-icon-reply-all">
                                <use xlink:href="#icon-reply-all"></use>
                            </svg></span>
                    </button>
                    <button class="button-icon button-icon--grey"><span class="button-icon__icon">
                            <svg class="icon-icon-reply">
                                <use xlink:href="#icon-reply"></use>
                            </svg></span>
                    </button>
                </div>
                <div class="inbox-details__top-center">
                    <div class="inbox-details__pagination">
                        <button class="button-icon button-icon--grey"><span class="button-icon__icon">
                                <svg class="icon-icon-keyboard-left">
                                    <use xlink:href="#icon-keyboard-left"></use>
                                </svg></span>
                        </button>
                        <div class="d-inline-flex align-items-center mx-2"><span>1</span><span
                                class="mx-1">of</span><span>200</span>
                        </div>
                        <button class="button-icon button-icon--grey"><span class="button-icon__icon">
                                <svg class="icon-icon-keyboard-right">
                                    <use xlink:href="#icon-keyboard-right"></use>
                                </svg></span>
                        </button>
                    </div>
                </div>
                <div class="inbox-details__top-right">
                    <div class="d-none d-sm-inline-flex">
                        <button class="button-icon button-icon--grey"><span class="button-icon__icon">
                                <svg class="icon-icon-flag">
                                    <use xlink:href="#icon-flag"></use>
                                </svg></span>
                        </button>
                    </div>
                    <div class="d-inline-flex">
                        <button class="button-icon button-icon--grey"><span class="button-icon__icon">
                                <svg class="icon-icon-print">
                                    <use xlink:href="#icon-print"></use>
                                </svg></span>
                        </button>
                    </div>
                    <div class="d-inline-flex">
                        <button class="button-icon button-icon--grey"><span class="button-icon__icon">
                                <svg class="icon-icon-trash">
                                    <use xlink:href="#icon-trash"></use>
                                </svg></span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="inbox-details__content scrollbar-thin scrollbar-hidden" data-simplebar>
                <div class="inbox-details__header">
                    <div class="media-item media-item--medium">
                        <div class="media-item__icon color-red">
                            <div class="media-item__icon-text">JB</div>
                            <img class="media-item__thumb" src="img/content/humans/item-4.jpg" alt="#">
                        </div>
                        <div class="media-item__right">
                            <h5 class="media-item__title">Joan Bates</h5><a class="text-sm text-blue"
                                href="mailto:#">david_boyd@mail.com</a>
                        </div>
                    </div>
                    <div class="text-nowrap text-sm text-grey">30 Nov 2019</div>
                </div>
                <pre class="inbox-details__text-message">Hello, Mark!

I am writing to introduce you to David Boyd. I know you've been looking hard for a candidate for that Creative Director position and I believe David Boyd ﬁts the position.

David Boyd and I worked together at Apple company, Where they were the senior Creative Director. They did a terriﬁc job there. David Boyd was responsible for completely restructuring both the public-facing and internal websites. They’d be a great ﬁt at Google company.

I've attached David Boyd resume and portfolio for your review. You can contact David Boyd at
<a class="text-blue" href="mailto">david_boyd@mail.com</a>

Thanks for any help you can give. <img src="img/content/emoji-happy.svg" alt="#">

Best regards,
Joan Bates</pre>
                <div class="inbox-details__files">
                    <div class="media-file">
                        <div class="media-file__icon">
                            <img class="media-file__thumb" src="img/content/file-pdf.svg" alt="#" />
                        </div>
                        <div class="media-file__right">
                            <div class="media-file__prepend">
                                <h5 class="media-file__title">Resume.pdf</h5><span class="text-sm text-grey">570
                                    KB</span>
                            </div>
                            <div class="media-file__append"><a class="button-icon button-icon--grey" href="#"><span
                                        class="button-icon__icon">
                                        <svg class="icon-icon-download">
                                            <use xlink:href="#icon-download"></use>
                                        </svg></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="media-file">
                        <div class="media-file__icon">
                            <img class="media-file__thumb" src="img/content/file-zip.svg" alt="#" />
                        </div>
                        <div class="media-file__right">
                            <div class="media-file__prepend">
                                <h5 class="media-file__title">Portfolio.zip</h5><span class="text-sm text-grey">250
                                    MB</span>
                            </div>
                            <div class="media-file__append"><a class="button-icon button-icon--grey" href="#"><span
                                        class="button-icon__icon">
                                        <svg class="icon-icon-download">
                                            <use xlink:href="#icon-download"></use>
                                        </svg></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="inbox-details__input">
                    <textarea class="input" rows="4" placeholder="Reply..."></textarea>
                </div>
            </div>
            <div class="inbox-details__bottom">
                <div class="row">
                    <div class="col-auto">
                        <label class="button-icon button-icon--transparent">
                            <input type="file" multiple><span class="button-icon__icon">
                                <svg class="icon-icon-attachment">
                                    <use xlink:href="#icon-attachment"></use>
                                </svg></span>
                        </label>
                        <button class="button-icon button-icon--transparent"><span class="button-icon__icon">
                                <svg class="icon-icon-emoji">
                                    <use xlink:href="#icon-emoji"></use>
                                </svg></span>
                        </button>
                    </div>
                    <div class="col-auto ml-auto">
                        <button class="button button--primary"><span class="button__icon button__icon--left">
                                <svg class="icon-icon-reply">
                                    <use xlink:href="#icon-reply"></use>
                                </svg></span><span class="button__text">Reply</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="backdrop-sidebar-panel"></div>
    </div>
</main>

<div class="inbox-add modal modal-compact scrollbar-thin" id="addMessage" data-simplebar>
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
                        <h2 class="modal__title">New Message</h2>
                    </div>
                </div>
                <div class="modal__body">
                    <div class="modal__container">
                        <form method="POST">
                            <div class="row">
                                <div class="col-12 form-group form-group--lg">
                                    <div class="row row--sm align-items-center justify-content-between">
                                        <div class="col-auto form-group form-group--inline form-group--label">
                                            <label class="form-label">To</label>
                                        </div>
                                        <div class="col-auto form-group form-group--inline form-group--label">
                                            <label class="form-label text-light-dark-theme">Show CC & BCC</label>
                                            <label class="checkbox-toggle">
                                                <input type="checkbox"><span class="checkbox-toggle__range"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <input class="input" type="text" value="Joan Bates" required>
                                    </div>
                                </div>
                                <div class="col-12 form-group form-group--lg">
                                    <label class="form-label form-label--sm">Subject</label>
                                    <div class="input-group">
                                        <input class="input" type="text" value="review" required>
                                    </div>
                                </div>
                                <div class="col-12 form-group form-group--lg">
                                    <label class="form-label form-label--sm">Message</label>
                                    <div class="input-editor">
                                        <div class="js-description-editor">Write a Text</div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row row--xs gutter-bottom-xs">
                                        <div class="col-12 col-sm-6">
                                            <div class="media-file media-file--full">
                                                <div class="media-file__icon">
                                                    <img class="media-file__thumb" src="img/content/file-pdf.svg"
                                                        alt="#" />
                                                </div>
                                                <div class="media-file__right">
                                                    <div class="media-file__prepend">
                                                        <h5 class="media-file__title">Resume.pdf</h5><span
                                                            class="text-sm text-grey">570 KB</span>
                                                    </div>
                                                    <div class="media-file__append"><a
                                                            class="button-icon button-icon--grey" href="#"><span
                                                                class="button-icon__icon">
                                                                <svg class="icon-icon-trash">
                                                                    <use xlink:href="#icon-trash"></use>
                                                                </svg></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="media-file media-file--full">
                                                <div class="media-file__icon">
                                                    <img class="media-file__thumb" src="img/content/file-unknown.svg"
                                                        alt="#" />
                                                </div>
                                                <div class="media-file__right">
                                                    <div class="media-file__prepend">
                                                        <h5 class="media-file__title">Resume.pdf</h5><span
                                                            class="text-sm text-grey">570 KB</span>
                                                    </div>
                                                    <div class="media-file__append"><a
                                                            class="button-icon button-icon--grey" href="#"><span
                                                                class="button-icon__icon">
                                                                <svg class="icon-icon-trash">
                                                                    <use xlink:href="#icon-trash"></use>
                                                                </svg></span></a>
                                                    </div>
                                                    <div class="media-file__upload">
                                                        <div class="media-file__upload-text">Uploading File... 40%</div>
                                                        <button class="media-file__upload-dismiss" type="button">
                                                            <svg class="icon-icon-cross">
                                                                <use xlink:href="#icon-cross"></use>
                                                            </svg>
                                                        </button>
                                                        <div class="media-file__progressbar">
                                                            <div class="media-file__progressbar-item"
                                                                style="width: 40%"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal__footer">
                    <div class="modal__container">
                        <div class="row">
                            <div class="col-auto">
                                <button class="button-icon button-icon--transparent"><span class="button-icon__icon">
                                        <svg class="icon-icon-attachment">
                                            <use xlink:href="#icon-attachment"></use>
                                        </svg></span>
                                </button>
                                <button class="button-icon button-icon--transparent"><span class="button-icon__icon">
                                        <svg class="icon-icon-emoji">
                                            <use xlink:href="#icon-emoji"></use>
                                        </svg></span>
                                </button>
                            </div>
                            <div class="col-auto ml-auto">
                                <button class="button button--primary" data-dismiss="modal"><span
                                        class="button__icon button__icon--left">
                                        <svg class="icon-icon-send">
                                            <use xlink:href="#icon-send"></use>
                                        </svg></span><span class="button__text">Send</span>
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
