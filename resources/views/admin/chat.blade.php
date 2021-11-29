@extends('layouts.admin')
@section('content_admin')


<main class="page-content page-content--full">
    <div class="chat-grid">
        <div class="chat-users">
            <div class="chat-users__top">
                <form class="chat-users__search" method="GET">
                    <div class="input-group input-group--prepend">
                        <div class="input-group__prepend">
                            <svg class="icon-icon-search">
                                <use xlink:href="#icon-search"></use>
                            </svg>
                        </div>
                        <input class="input" type="text" placeholder="Search...">
                    </div>
                </form>
                <div class="chat-users__top-right">
                    <button class="chat-users__button-add-users button-icon button-icon--small"
                        data-toggle="users-add-list"><span class="button-icon__icon">
                            <svg class="icon-icon-plus">
                                <use xlink:href="#icon-plus"></use>
                            </svg></span><span class="button-icon__icon">
                            <svg class="icon-icon-chevron">
                                <use xlink:href="#icon-chevron"></use>
                            </svg></span>
                    </button>
                </div>
            </div>
            <div class="chat-users__add-content scrollbar-thin scrollbar-hidden" data-simplebar>
                <ul class="chat-users__list">
                    <li class="chat-users__list-header">B</li>
                    <li class="chat-users__list-item">
                        <a class="chat-users__item" href="#">
                            <div class="chat-users__item-avatar color-teal">
                                <div class="chat-users__item-avatar-text">BH</div>
                                <img src="img/content/humans/item-8.jpg" alt="#">
                            </div>
                            <div class="chat-users__item-right">
                                <h5 class="chat-users__item-name">Billy Hicks</h5>
                                <div class="text-sm text-grey">Hi there! I'm using chat</div>
                            </div>
                        </a>
                    </li>
                    <li class="chat-users__list-header">C</li>
                    <li class="chat-users__list-item">
                        <a class="chat-users__item" href="#">
                            <div class="chat-users__item-avatar color-green">
                                <div class="chat-users__item-avatar-text">CL</div>
                                <img src="img/content/humans/item-10.jpg" alt="#">
                            </div>
                            <div class="chat-users__item-right">
                                <h5 class="chat-users__item-name">Christine Lewis</h5>
                                <div class="text-sm text-grey">Hi there! I'm using chat</div>
                            </div>
                        </a>
                    </li>
                    <li class="chat-users__list-header">D</li>
                    <li class="chat-users__list-item">
                        <a class="chat-users__item" href="#">
                            <div class="chat-users__item-avatar color-teal">
                                <div class="chat-users__item-avatar-text">DP</div>
                                <img src="img/content/humans/item-5.jpg" alt="#">
                            </div>
                            <div class="chat-users__item-right">
                                <h5 class="chat-users__item-name">David Palmer</h5>
                                <div class="text-sm text-grey">Hi there! I'm using chat</div>
                            </div>
                        </a>
                    </li>
                    <li class="chat-users__list-header">E</li>
                    <li class="chat-users__list-item">
                        <a class="chat-users__item" href="#">
                            <div class="chat-users__item-avatar color-orange">
                                <div class="chat-users__item-avatar-text">ED</div>
                                <img src="img/content/humans/item-2.jpg" alt="#">
                            </div>
                            <div class="chat-users__item-right">
                                <h5 class="chat-users__item-name">Elaine Day</h5>
                                <div class="text-sm text-grey">Hi there! I'm using chat</div>
                            </div>
                        </a>
                    </li>
                    <li class="chat-users__list-header">F</li>
                    <li class="chat-users__list-item">
                        <a class="chat-users__item" href="#">
                            <div class="chat-users__item-avatar color-orange-dark">
                                <div class="chat-users__item-avatar-text">FB</div>
                                <img src="img/content/humans/item-1.jpg" alt="#">
                            </div>
                            <div class="chat-users__item-right">
                                <h5 class="chat-users__item-name">Felecia Burke</h5>
                                <div class="text-sm text-grey">Hi there! I'm using chat</div>
                            </div>
                        </a>
                    </li>
                    <li class="chat-users__list-header">J</li>
                    <li class="chat-users__list-item">
                        <a class="chat-users__item" href="#">
                            <div class="chat-users__item-avatar color-red">
                                <div class="chat-users__item-avatar-text">JB</div>
                                <img src="img/content/humans/item-4.jpg" alt="#">
                            </div>
                            <div class="chat-users__item-right">
                                <h5 class="chat-users__item-name">Joan Bates</h5>
                                <div class="text-sm text-grey">Hi there! I'm using chat</div>
                            </div>
                        </a>
                    </li>
                    <li class="chat-users__list-header">M</li>
                    <li class="chat-users__list-item">
                        <a class="chat-users__item" href="#">
                            <div class="chat-users__item-avatar color-green">
                                <div class="chat-users__item-avatar-text">MS</div>
                                <img src="img/content/humans/item-6.jpg" alt="#">
                            </div>
                            <div class="chat-users__item-right">
                                <h5 class="chat-users__item-name">Morris Stevens</h5>
                                <div class="text-sm text-grey">Hi there! I'm using chat</div>
                            </div>
                        </a>
                    </li>
                    <li class="chat-users__list-header">N</li>
                    <li class="chat-users__list-item">
                        <a class="chat-users__item" href="#">
                            <div class="chat-users__item-avatar color-red">
                                <div class="chat-users__item-avatar-text">NS</div>
                                <img src="img/content/humans/item-3.jpg" alt="#">
                            </div>
                            <div class="chat-users__item-right">
                                <h5 class="chat-users__item-name">Nora Stanley</h5>
                                <div class="text-sm text-grey">Hi there! I'm using chat</div>
                            </div>
                        </a>
                    </li>
                    <li class="chat-users__list-header">T</li>
                    <li class="chat-users__list-item">
                        <a class="chat-users__item" href="#">
                            <div class="chat-users__item-avatar color-orange-dark">
                                <div class="chat-users__item-avatar-text">TR</div>
                                <img src="img/content/humans/item-7.jpg" alt="#">
                            </div>
                            <div class="chat-users__item-right">
                                <h5 class="chat-users__item-name">Troy Russell</h5>
                                <div class="text-sm text-grey">Hi there! I'm using chat</div>
                            </div>
                        </a>
                    </li>
                    <li class="chat-users__list-header">W</li>
                    <li class="chat-users__list-item">
                        <a class="chat-users__item" href="#">
                            <div class="chat-users__item-avatar color-orange">
                                <div class="chat-users__item-avatar-text">WM</div>
                                <img src="img/content/humans/item-9.jpg" alt="#">
                            </div>
                            <div class="chat-users__item-right">
                                <h5 class="chat-users__item-name">Walter Miles</h5>
                                <div class="text-sm text-grey">Hi there! I'm using chat</div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="chat-users__content scrollbar-thin scrollbar-hidden" data-simplebar>
                <ul class="chat-users__list">
                    <li class="chat-users__list-item">
                        <a class="chat-users__item" href="#">
                            <div class="chat-users__item-avatar color-orange-dark">
                                <div class="chat-users__item-avatar-text">FB</div><span
                                    class="badge-signal badge-signal--green"></span>
                                <img src="img/content/humans/item-1.jpg" alt="#">
                            </div>
                            <div class="chat-users__item-right">
                                <h5 class="chat-users__item-name">Felecia Burke</h5>
                                <div class="chat-users__item-right-group"><span class="chat-users__item-time">1
                                        min</span>
                                </div>
                                <div class="chat-users__item-message">
                                    <div class="chat-users__item-badge"><span
                                            class="badge badge--small badge--red">5</span>
                                    </div>
                                    <p class="chat-users__item-text">The Arts play a large role in</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="chat-users__list-item">
                        <a class="chat-users__item active" href="#">
                            <div class="chat-users__item-avatar color-red">
                                <div class="chat-users__item-avatar-text">JB</div><span
                                    class="badge-signal badge-signal--green"></span>
                                <img src="img/content/humans/item-4.jpg" alt="#">
                            </div>
                            <div class="chat-users__item-right">
                                <h5 class="chat-users__item-name">Joan Bates</h5>
                                <div class="chat-users__item-right-group"><span class="chat-users__item-time">5
                                        min</span>
                                </div>
                                <div class="chat-users__item-message">
                                    <div class="chat-users__item-badge"><span
                                            class="badge badge--small badge--red">3</span>
                                    </div>
                                    <p class="chat-users__item-text">I am writing to introduce you to</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="chat-users__list-item">
                        <a class="chat-users__item" href="#">
                            <div class="chat-users__item-avatar color-teal">
                                <div class="chat-users__item-avatar-text">DP</div>
                                <img src="img/content/humans/item-5.jpg" alt="#">
                            </div>
                            <div class="chat-users__item-right">
                                <h5 class="chat-users__item-name">David Palmer</h5>
                                <div class="chat-users__item-right-group"><span class="chat-users__item-time">15
                                        min</span>
                                </div>
                                <div class="chat-users__item-message">
                                    <div class="chat-users__item-badge"><span
                                            class="badge badge--small badge--red">3</span>
                                    </div>
                                    <p class="chat-users__item-text">We use the Arts as a means of</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="chat-users__list-item">
                        <a class="chat-users__item" href="#">
                            <div class="chat-users__item-avatar color-orange">
                                <div class="chat-users__item-avatar-text">ED</div><span
                                    class="badge-signal badge-signal--green"></span>
                                <img src="img/content/humans/item-2.jpg" alt="#">
                            </div>
                            <div class="chat-users__item-right">
                                <h5 class="chat-users__item-name">Elaine Day</h5>
                                <div class="chat-users__item-right-group"><span class="chat-users__item-time">17
                                        min</span>
                                </div>
                                <div class="chat-users__item-message">
                                    <p class="chat-users__item-text">The arts allow us to be as specific or</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="chat-users__list-item">
                        <a class="chat-users__item" href="#">
                            <div class="chat-users__item-avatar color-green">
                                <div class="chat-users__item-avatar-text">MS</div>
                                <img src="img/content/humans/item-6.jpg" alt="#">
                            </div>
                            <div class="chat-users__item-right">
                                <h5 class="chat-users__item-name">Morris Stevens</h5>
                                <div class="chat-users__item-right-group"><span class="chat-users__item-time">30
                                        min</span>
                                </div>
                                <div class="chat-users__item-message">
                                    <p class="chat-users__item-text">From dance and music to abstract</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="chat-users__list-item">
                        <a class="chat-users__item" href="#">
                            <div class="chat-users__item-avatar color-orange-dark">
                                <div class="chat-users__item-avatar-text">TR</div><span
                                    class="badge-signal badge-signal--green"></span>
                                <img src="img/content/humans/item-7.jpg" alt="#">
                            </div>
                            <div class="chat-users__item-right">
                                <h5 class="chat-users__item-name">Troy Russell</h5>
                                <div class="chat-users__item-right-group"><span class="chat-users__item-time">40
                                        min</span>
                                </div>
                                <div class="chat-users__item-message">
                                    <div class="chat-users__item-badge"><span
                                            class="badge badge--small badge--red">4</span>
                                    </div>
                                    <p class="chat-users__item-text">The arts teach us how to</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="chat-users__list-item">
                        <a class="chat-users__item" href="#">
                            <div class="chat-users__item-avatar color-teal">
                                <div class="chat-users__item-avatar-text">BH</div><span
                                    class="badge-signal badge-signal--green"></span>
                                <img src="img/content/humans/item-8.jpg" alt="#">
                            </div>
                            <div class="chat-users__item-right">
                                <h5 class="chat-users__item-name">Billy Hicks</h5>
                                <div class="chat-users__item-right-group"><span class="chat-users__item-time">1
                                        hours</span>
                                </div>
                                <div class="chat-users__item-message">
                                    <p class="chat-users__item-text">Music, singing, dancing, poetry, and</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="chat-users__list-item">
                        <a class="chat-users__item" href="#">
                            <div class="chat-users__item-avatar color-red">
                                <div class="chat-users__item-avatar-text">NS</div><span
                                    class="badge-signal badge-signal--green"></span>
                                <img src="img/content/humans/item-3.jpg" alt="#">
                            </div>
                            <div class="chat-users__item-right">
                                <h5 class="chat-users__item-name">Nora Stanley</h5>
                                <div class="chat-users__item-right-group"><span class="chat-users__item-time">3
                                        hours</span>
                                </div>
                                <div class="chat-users__item-message">
                                    <p class="chat-users__item-text">Prepare us to adapt to and respect</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="chat-users__list-item">
                        <a class="chat-users__item" href="#">
                            <div class="chat-users__item-avatar color-orange">
                                <div class="chat-users__item-avatar-text">WM</div>
                                <img src="img/content/humans/item-9.jpg" alt="#">
                            </div>
                            <div class="chat-users__item-right">
                                <h5 class="chat-users__item-name">Walter Miles</h5>
                                <div class="chat-users__item-right-group"><span class="chat-users__item-time">1
                                        week</span>
                                </div>
                                <div class="chat-users__item-message">
                                    <p class="chat-users__item-text">Show us how to understand human</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="chat-users__list-item">
                        <a class="chat-users__item" href="#">
                            <div class="chat-users__item-avatar color-green">
                                <div class="chat-users__item-avatar-text">CL</div>
                                <img src="img/content/humans/item-10.jpg" alt="#">
                            </div>
                            <div class="chat-users__item-right">
                                <h5 class="chat-users__item-name">Christine Lewis</h5>
                                <div class="chat-users__item-right-group"><span class="chat-users__item-time">1
                                        week</span>
                                </div>
                                <div class="chat-users__item-message">
                                    <p class="chat-users__item-text">Music, singing, dancing, poetry, and</p>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="chat-details">
            <div class="chat-details__backdrop"></div>
            <div class="chat-details__top">
                <div class="chat-details__top-left">
                    <button class="chat-details__toggle toggle-sidebar toggle-sidebar--secondary" type="button">
                        <svg class="icon-icon-chevron">
                            <use xlink:href="#icon-chevron"></use>
                        </svg>
                    </button>
                    <a class="media-item media-item--medium" href="#">
                        <div class="media-item__icon color-red">
                            <div class="media-item__icon-text">JB</div><span
                                class="badge-signal badge-signal--green"></span>
                            <img class="media-item__thumb" src="img/content/humans/item-4.jpg" alt="#">
                        </div>
                        <div class="media-item__right">
                            <h5 class="media-item__title font-weight-medium">Joan Bates</h5>
                            <div class="text-sm text-grey">Active 1 min ago</div>
                        </div>
                    </a>
                </div>
                <div class="chat-details__top-right">
                    <div class="items-more position-relative">
                        <button class="items-more__button">
                            <svg class="icon-icon-more">
                                <use xlink:href="#icon-more"></use>
                            </svg>
                        </button>
                        <div class="dropdown-items dropdown-items--right">
                            <div class="dropdown-items__container">
                                <ul class="dropdown-items__list">
                                    <li class="dropdown-items__item"><a class="dropdown-items__link">Create a room</a>
                                    </li>
                                    <li class="dropdown-items__item"><a class="dropdown-items__link">Profile</a>
                                    </li>
                                    <li class="dropdown-items__item"><a class="dropdown-items__link">Archived</a>
                                    </li>
                                    <li class="dropdown-items__item"><a class="dropdown-items__link">Settings</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="chat-details__content scrollbar-thin scrollbar-hidden" data-simplebar>
                <div class="chat-message">
                    <div class="chat-message__content">
                        <a class="chat-message__icon color-teal" href="#">
                            <div class="chat-message__icon-text">DP</div>
                            <img src="img/content/humans/item-5.jpg" alt="#" />
                        </a>
                        <div class="chat-message__right">
                            <div class="chat-message__messages">
                                <div class="chat-message__message-group">
                                    <div class="chat-message__message-item">
                                        <p class="chat-message__item-text">Temporibus autem quibusdam et aut officiis
                                            debitis aut rerum necessitatibus saepe eveniet.
                                            <img src="img/content/emoji-happy.svg" alt="#" />
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="chat-message__bottom">
                        <div class="chat-message__time">1 min ago</div>
                        <div class="chat-message__files">
                        </div>
                    </div>
                </div>
                <div class="chat-message chat-message--answer">
                    <div class="chat-message__content">
                        <a class="chat-message__icon color-red" href="#">
                            <div class="chat-message__icon-text">JB</div>
                            <img src="img/content/humans/item-4.jpg" alt="#" />
                        </a>
                        <div class="chat-message__right">
                            <div class="chat-message__messages">
                                <div class="chat-message__message-group">
                                    <div class="chat-message__message-item">
                                        <p class="chat-message__item-text">Sed ut perspiciatis, qui in ea voluptate
                                            velit esse, quam nihil molestiae?</p>
                                    </div>
                                    <div class="chat-message__tools">
                                        <div class="items-more">
                                            <button class="items-more__button">
                                                <svg class="icon-icon-more">
                                                    <use xlink:href="#icon-more"></use>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="chat-message__tools-item">
                                            <button class="button-icon button-icon--grey"><span
                                                    class="button-icon__icon">
                                                    <svg class="icon-icon-drafts">
                                                        <use xlink:href="#icon-drafts"></use>
                                                    </svg></span>
                                            </button>
                                        </div>
                                        <div class="chat-message__tools-item">
                                            <button class="button-icon button-icon--grey"><span
                                                    class="button-icon__icon">
                                                    <svg class="icon-icon-trash">
                                                        <use xlink:href="#icon-trash"></use>
                                                    </svg></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="chat-message__bottom">
                        <div class="chat-message__time">2 min ago</div>
                        <div class="chat-message__files">
                            <div class="chat-message__files-items">
                                <div class="chat-message__file">
                                    <img src="img/content/message-file-1@2x.jpg" width="56" alt="#" />
                                </div>
                                <div class="chat-message__file">
                                    <img src="img/content/message-file-2@2x.jpg" width="56" alt="#" />
                                </div>
                                <div class="chat-message__file">
                                    <img src="img/content/message-file-3@2x.jpg" width="56" alt="#" />
                                </div>
                            </div>
                            <button class="button-add button-add--blue button-add--sm">+3</button>
                        </div>
                    </div>
                </div>
                <div class="chat-message">
                    <div class="chat-message__content">
                        <a class="chat-message__icon color-teal" href="#">
                            <div class="chat-message__icon-text">DP</div>
                            <img src="img/content/humans/item-5.jpg" alt="#" />
                        </a>
                        <div class="chat-message__right">
                            <div class="chat-message__messages">
                                <div class="chat-message__message-group">
                                    <div class="chat-message__message-item">
                                        <p class="chat-message__item-text">voluptatem sequi nesciunt neque porro
                                            obcaecati cupiditate. non provident similique sunt.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="chat-message__bottom">
                        <div class="chat-message__time">3 min ago</div>
                        <div class="chat-message__files">
                        </div>
                    </div>
                </div>
                <div class="chat-details__date">Today</div>
                <div class="chat-message chat-message--answer">
                    <div class="chat-message__content">
                        <a class="chat-message__icon color-red" href="#">
                            <div class="chat-message__icon-text">JB</div>
                            <img src="img/content/humans/item-4.jpg" alt="#" />
                        </a>
                        <div class="chat-message__right">
                            <div class="chat-message__messages">
                                <div class="chat-message__message-group">
                                    <div class="chat-message__message-item">
                                        <p class="chat-message__item-text">Excepteur sint occaecat cupidatat non
                                            proident, quia voluptas sit, aspernatur aut odit aut fugit.
                                            <img src="img/content/emoji/shocked.svg" alt="#" />
                                        </p>
                                    </div>
                                    <div class="chat-message__tools active">
                                        <div class="items-more">
                                            <button class="items-more__button">
                                                <svg class="icon-icon-more">
                                                    <use xlink:href="#icon-more"></use>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="chat-message__tools-item">
                                            <button class="button-icon button-icon--grey"><span
                                                    class="button-icon__icon">
                                                    <svg class="icon-icon-drafts">
                                                        <use xlink:href="#icon-drafts"></use>
                                                    </svg></span>
                                            </button>
                                        </div>
                                        <div class="chat-message__tools-item">
                                            <button class="button-icon button-icon--grey"><span
                                                    class="button-icon__icon">
                                                    <svg class="icon-icon-trash">
                                                        <use xlink:href="#icon-trash"></use>
                                                    </svg></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="chat-message__bottom">
                        <div class="chat-message__time">4 min ago</div>
                        <div class="chat-message__files">
                        </div>
                    </div>
                </div>
                <div class="chat-message">
                    <div class="chat-message__content">
                        <a class="chat-message__icon color-teal" href="#">
                            <div class="chat-message__icon-text">DP</div>
                            <img src="img/content/humans/item-5.jpg" alt="#" />
                        </a>
                        <div class="chat-message__right">
                            <div class="chat-message__messages">
                                <div class="chat-message__message-group">
                                    <div class="chat-message__message-item">
                                        <p class="chat-message__item-text">Itaque earum rerum hic tenetur a sapiente
                                            delectus quia voluptas sit, aspernatur aut odit aut fugit sed.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="chat-message__bottom">
                        <div class="chat-message__time">5 min ago</div>
                        <div class="chat-message__files">
                        </div>
                    </div>
                </div>
                <div class="chat-message chat-message--answer">
                    <div class="chat-message__content">
                        <a class="chat-message__icon color-red" href="#">
                            <div class="chat-message__icon-text">JB</div>
                            <img src="img/content/humans/item-4.jpg" alt="#" />
                        </a>
                        <div class="chat-message__right">
                            <div class="chat-message__messages">
                                <div class="chat-message__message-group">
                                    <div class="chat-message__message-item">
                                        <div class="media-file">
                                            <div class="media-file__icon">
                                                <img class="media-file__thumb" src="img/content/file-pdf.svg" alt="#" />
                                            </div>
                                            <div class="media-file__right">
                                                <div class="media-file__prepend">
                                                    <h5 class="media-file__title">Documentation.pdf</h5><span
                                                        class="text-sm text-grey">50 MB</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-message__tools">
                                        <div class="items-more">
                                            <button class="items-more__button">
                                                <svg class="icon-icon-more">
                                                    <use xlink:href="#icon-more"></use>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="chat-message__tools-item">
                                            <button class="button-icon button-icon--grey"><span
                                                    class="button-icon__icon">
                                                    <svg class="icon-icon-drafts">
                                                        <use xlink:href="#icon-drafts"></use>
                                                    </svg></span>
                                            </button>
                                        </div>
                                        <div class="chat-message__tools-item">
                                            <button class="button-icon button-icon--grey"><span
                                                    class="button-icon__icon">
                                                    <svg class="icon-icon-trash">
                                                        <use xlink:href="#icon-trash"></use>
                                                    </svg></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="chat-message__bottom">
                        <div class="chat-message__time">6 min ago</div>
                        <div class="chat-message__files">
                        </div>
                    </div>
                </div>
            </div>
            <div class="chat-details__bottom">
                <div class="chat-details__input-group input-group input-group--white">
                    <div class="chat-details__input-prepend">
                        <label class="button-icon button-icon--transparent">
                            <input type="file" multiple><span class="button-icon__icon">
                                <svg class="icon-icon-attachment">
                                    <use xlink:href="#icon-attachment"></use>
                                </svg></span>
                        </label>
                        <div class="chat-details__emoji position-relative">
                            <button class="button-icon button-icon--transparent" data-toggle="dropdown"><span
                                    class="button-icon__icon">
                                    <svg class="icon-icon-emoji">
                                        <use xlink:href="#icon-emoji"></use>
                                    </svg></span>
                            </button>
                            <div class="dropdown-emoji dropdown-menu dropdown-menu--up">
                                <div class="dropdown-emoji__content">
                                    <a class="dropdown-emoji__item" href="#" tabindex="0">
                                        <img class="dropdown-emoji__image" src="img/content/emoji/laughing.svg"
                                            alt="#" />
                                    </a>
                                    <a class="dropdown-emoji__item" href="#" tabindex="0">
                                        <img class="dropdown-emoji__image" src="img/content/emoji/happy-2.svg"
                                            alt="#" />
                                    </a>
                                    <a class="dropdown-emoji__item" href="#" tabindex="0">
                                        <img class="dropdown-emoji__image" src="img/content/emoji/crazy.svg" alt="#" />
                                    </a>
                                    <a class="dropdown-emoji__item" href="#" tabindex="0">
                                        <img class="dropdown-emoji__image" src="img/content/emoji/bad.svg" alt="#" />
                                    </a>
                                    <a class="dropdown-emoji__item" href="#" tabindex="0">
                                        <img class="dropdown-emoji__image" src="img/content/emoji/angry.svg" alt="#" />
                                    </a>
                                    <a class="dropdown-emoji__item" href="#" tabindex="0">
                                        <img class="dropdown-emoji__image" src="img/content/emoji/happy.svg" alt="#" />
                                    </a>
                                    <a class="dropdown-emoji__item" href="#" tabindex="0">
                                        <img class="dropdown-emoji__image" src="img/content/emoji/thinking.svg"
                                            alt="#" />
                                    </a>
                                    <a class="dropdown-emoji__item" href="#" tabindex="0">
                                        <img class="dropdown-emoji__image" src="img/content/emoji/sad.svg" alt="#" />
                                    </a>
                                    <a class="dropdown-emoji__item" href="#" tabindex="0">
                                        <img class="dropdown-emoji__image" src="img/content/emoji/pressure.svg"
                                            alt="#" />
                                    </a>
                                    <a class="dropdown-emoji__item" href="#" tabindex="0">
                                        <img class="dropdown-emoji__image" src="img/content/emoji/in-love.svg"
                                            alt="#" />
                                    </a>
                                    <a class="dropdown-emoji__item" href="#" tabindex="0">
                                        <img class="dropdown-emoji__image" src="img/content/emoji/nerd.svg" alt="#" />
                                    </a>
                                    <a class="dropdown-emoji__item" href="#" tabindex="0">
                                        <img class="dropdown-emoji__image" src="img/content/emoji/happy-3.svg"
                                            alt="#" />
                                    </a>
                                    <a class="dropdown-emoji__item" href="#" tabindex="0">
                                        <img class="dropdown-emoji__image" src="img/content/emoji/shocked.svg"
                                            alt="#" />
                                    </a>
                                    <a class="dropdown-emoji__item" href="#" tabindex="0">
                                        <img class="dropdown-emoji__image" src="img/content/emoji/wink.svg" alt="#" />
                                    </a>
                                    <a class="dropdown-emoji__item" href="#" tabindex="0">
                                        <img class="dropdown-emoji__image" src="img/content/emoji/sweating.svg"
                                            alt="#" />
                                    </a>
                                    <a class="dropdown-emoji__item" href="#" tabindex="0">
                                        <img class="dropdown-emoji__image" src="img/content/emoji/shocked-2.svg"
                                            alt="#" />
                                    </a>
                                    <a class="dropdown-emoji__item" href="#" tabindex="0">
                                        <img class="dropdown-emoji__image" src="img/content/emoji/shocked-3.svg"
                                            alt="#" />
                                    </a>
                                    <a class="dropdown-emoji__item" href="#" tabindex="0">
                                        <img class="dropdown-emoji__image" src="img/content/emoji/sad-2.svg" alt="#" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input class="chat-details__input input" type="text" placeholder="Write a Message...">
                </div>
                <div class="chat-details__bottom-right">
                    <button class="button-add button-add--blue"><span class="button-add__icon">
                            <svg class="icon-icon-send">
                                <use xlink:href="#icon-send"></use>
                            </svg></span><span class="button-add__text"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection