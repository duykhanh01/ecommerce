<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->

    <!-- style css -->
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="/img/icon.png">
    <link rel="apple-touch-icon" href="/img/icon.png">

    <!-- ************************* CSS Files ************************* -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/vendor.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/guess.css') }}" rel="stylesheet">

</head>

<body>
    <div id="app">
        <div class="ft-preloader active">
            <div class="ft-preloader-inner h-100 d-flex align-items-center justify-content-center">
                <div class="ft-child ft-bounce1"></div>
                <div class="ft-child ft-bounce2"></div>
                <div class="ft-child ft-bounce3"></div>
            </div>
        </div>
        <!-- Preloader End -->

        <!-- Main Wrapper Start -->
        <div class="wrapper">
            <!-- Header Start -->
            <header class="header">
                <div class="header__inner fixed-header">
                    <div class="header__main">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12">
                                    <div class="header__main-inner">
                                        <div class="header__main-left">
                                            <div class="logo">
                                                <a href="index.html" class="logo--normal">
                                                    <img src="/img/logo/logo.png" alt="Logo">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="header__main-center">
                                            <nav class="main-navigation text-center d-none d-lg-block">
                                                <ul class="mainmenu">
                                                    <li class="mainmenu__item menu-item-has-children">
                                                        <a href="index.html" class="mainmenu__link">
                                                            <span class="mm-text">Home</span>
                                                        </a>
                                                        <ul class="sub-menu">
                                                            <li>
                                                                <a href="index.html">
                                                                    <span class="mm-text">Home One</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="index-02.html">
                                                                    <span class="mm-text">Home Two</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="mainmenu__item menu-item-has-children megamenu-holder">
                                                        <a href="shop.html" class="mainmenu__link">
                                                            <span class="mm-text">Shop</span>
                                                        </a>
                                                        <ul class="megamenu">
                                                            <li>
                                                                <a class="megamenu-title" href="#">
                                                                    <span class="mm-text">Shop Grid</span>
                                                                </a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="shop-fullwidth.html">
                                                                            <span class="mm-text">Full Width</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop.html">
                                                                            <span class="mm-text">Left Sidebar</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-right-sidebar.html">
                                                                            <span class="mm-text">Right Sidebar</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-three-columns.html">
                                                                            <span class="mm-text">Three Columns</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-four-columns.html">
                                                                            <span class="mm-text">Four Columns</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a class="megamenu-title" href="#">
                                                                    <span class="mm-text">Shop List</span>
                                                                </a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="shop-list.html">
                                                                            <span class="mm-text">Full Width</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-list-sidebar.html">
                                                                            <span class="mm-text">Left Sidebar</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-list-right-sidebar.html">
                                                                            <span class="mm-text">Right Sidebar</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a class="megamenu-title" href="#">
                                                                    <span class="mm-text">Product Details</span>
                                                                </a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="product-details.html">
                                                                            <span class="mm-text">Tab Style 1</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="product-details-tab-style-2.html">
                                                                            <span class="mm-text">Tab Style 2</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="product-details-tab-style-3.html">
                                                                            <span class="mm-text">Tab Style 3</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="product-details-gallery-left.html">
                                                                            <span class="mm-text">Gallery Left</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="product-details-gallery-right.html">
                                                                            <span class="mm-text">Gallery Right</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="product-details-sticky-left.html">
                                                                            <span class="mm-text">Sticky Left</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a class="megamenu-title" href="#">
                                                                    <span class="mm-text">Product Details</span>
                                                                </a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="product-details-sticky-right.html">
                                                                            <span class="mm-text">Sticky Right</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="product-details-slider-box.html">
                                                                            <span class="mm-text">Slider Box</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="product-details-slider-full-width.html">
                                                                            <span class="mm-text">Slider Box Full Width</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="product-details-affiliate.html">
                                                                            <span class="mm-text">Affiliate Proudct</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="product-details-variable.html">
                                                                            <span class="mm-text">Variable Proudct</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="product-details-group.html">
                                                                            <span class="mm-text">Group Product</span>
                                                                        </a>
                                                                    </li>

                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="mainmenu__item menu-item-has-children">
                                                        <a href="blog.html" class="mainmenu__link">
                                                            <span class="mm-text">Blog</span>
                                                        </a>
                                                        <ul class="sub-menu">
                                                            <li class="menu-item-has-children">
                                                                <a href="#">
                                                                    <span class="mm-text">Blog Grid</span>
                                                                </a>
                                                                <ul class="sub-menu">
                                                                    <li>
                                                                        <a href="blog-left-sidebar.html">
                                                                            <span class="mm-text">Left Sidebar</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="blog.html">
                                                                            <span class="mm-text">Right Sidebar</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="blog-01-column.html">
                                                                            <span class="mm-text">One Column</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="blog-02-columns.html">
                                                                            <span class="mm-text">Two Columns</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="blog-03-columns.html">
                                                                            <span class="mm-text">Three Columns</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="menu-item-has-children">
                                                                <a href=""><span class="mm-text">Blog Details</span></a>
                                                                <ul class="sub-menu">
                                                                    <li>
                                                                        <a href="blog-details-image.html">
                                                                            <span class="mm-text">Image Post</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="blog-details-audio.html">
                                                                            <span class="mm-text">Audio Post</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="blog-details-video.html">
                                                                            <span class="mm-text">Video Post</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="blog-details-gallery.html">
                                                                            <span class="mm-text">Gallery Post</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="mainmenu__item menu-item-has-children">
                                                        <a href="#" class="mainmenu__link">
                                                            <span class="mm-text">Pages</span>
                                                        </a>
                                                        <ul class="sub-menu">
                                                            <li>
                                                                <a href="my-account.html">
                                                                    <span class="mm-text">My Account</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="checkout.html">
                                                                    <span class="mm-text">Checkout</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="cart.html">
                                                                    <span class="mm-text">Cart</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="compare.html">
                                                                    <span class="mm-text">Compare</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="order-tracking.html">
                                                                    <span class="mm-text">Track Order</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="wishlist.html">
                                                                    <span class="mm-text">Wishlist</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="mainmenu__item">
                                                        <a href="contact-us.html" class="mainmenu__link">
                                                            <span class="mm-text">Contact Us</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                        <div class="header__main-right">
                                            <div class="header-toolbar-wrap">
                                                <div class="header-toolbar">
                                                    <div class="header-toolbar__item header-toolbar--search-btn">
                                                        <a href="#searchForm" class="header-toolbar__btn toolbar-btn">
                                                            <i class="la la-search"></i>
                                                        </a>
                                                    </div>
                                                    <div class="header-toolbar__item header-toolbar--minicart-btn mr-3">
                                                        <a href="#miniCart" class="header-toolbar__btn toolbar-btn">
                                                            <i class="la la-shopping-cart"></i>
                                                            <span>01</span>
                                                        </a>
                                                    </div>
                                                    
                                                    <div class="dropdown">
                                                        <img src="/img/avt/avtdefault.png" class="img-fluid rounded-circle" style="width:50px; height:50px" alt="" class="rounded-circle dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item font-user" href="#">Trang cá nhân</a>
                                                            <a class="dropdown-item font-user" href="{{route('logout')}}">Đăng xuất</a>
                                                        </div>
                                                    </div>
                                                    <div class="header-toolbar__item d-block d-lg-none">
                                                        <a href="#offcanvasMenu" class="header-toolbar__btn toolbar-btn menu-btn">
                                                            <div class="hamburger-icon">
                                                                <span></span>
                                                                <span></span>
                                                                <span></span>
                                                                <span></span>
                                                                <span></span>
                                                                <span></span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <main class="py-4">
                @yield('content')
            </main>
            <footer class="footer bg-color" data-bg-color="#f4f8fa">
                <div class="footer-top">
                    <div class="container-fluid">
                        <div class="row border-bottom pt--70 pb--70">
                            <div class="col-lg-3 col-sm-6 offset-md-1 offset-lg-0 mb-md--45">
                                <div class="footer-widget">
                                    <div class="textwidget">
                                        <figure class="footer-logo mb--30">
                                            <img src="/img/logo/logo.png" alt="Logo">
                                        </figure>
                                        <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-3 offset-lg-1 offset-sm-2 mb-md--45">
                                <div class="footer-widget">
                                    <h3 class="widget-title mb--35 mb-sm--20">Company</h3>
                                    <div class="footer-widget">
                                        <ul class="footer-menu">
                                            <li><a href="index.html">About Us</a></li>
                                            <li><a href="blog.html">Blogs</a></li>
                                            <li><a href="#">Careers</a></li>
                                            <li><a href="contact-us.html">Contact</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-4 offset-md-1 offset-lg-0 mb-xs--45">
                                <div class="footer-widget">
                                    <h3 class="widget-title mb--35 mb-sm--20">Product</h3>
                                    <div class="footer-widget">
                                        <ul class="footer-menu">
                                            <li><a href="#">Pricing</a></li>
                                            <li><a href="#">Features</a></li>
                                            <li><a href="#">Customers</a></li>
                                            <li><a href="#">Demos</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-4 mb-xs--45">
                                <div class="footer-widget">
                                    <h3 class="widget-title mb--35 mb-sm--20">Helps</h3>
                                    <div class="footer-widget">
                                        <ul class="footer-menu">
                                            <li><a href="#">Introduction</a></li>
                                            <li><a href="#">Feedback</a></li>
                                            <li><a href="#">Referals</a></li>
                                            <li><a href="#">Network Status</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-4">
                                <div class="footer-widget">
                                    <h3 class="widget-title mb--35 mb-sm--20">Social Network</h3>
                                    <div class="footer-widget">
                                        <ul class="footer-menu">
                                            <li><a href="#">Facebook</a></li>
                                            <li><a href="#">Twitter</a></li>
                                            <li><a href="#">Linkedin</a></li>
                                            <li><a href="#">Google +</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-middle ptb--40">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-11">
                                <div class="footer-widget">
                                    <div class="taglist">
                                        <span>Tags:</span>
                                        <a href="#">Minimal eCommerce</a>
                                        <a href="#">Marketing</a>
                                        <a href="#">User Exprience</a>
                                        <a href="#">Ali Express</a>
                                        <a href="#">Web</a>
                                        <a href="#">Digital Expo</a>
                                        <a href="#">Web Search</a>
                                        <a href="#">Affiliate</a>
                                        <a href="#">UCWeb</a>
                                        <a href="#">Support</a>
                                        <a href="#">Template</a>
                                        <a href="#">Best Queality</a>
                                        <a href="#">Mobile</a>
                                        <a href="#">24 Support</a>
                                        <a href="#">Ali Express</a>
                                        <a href="#">Web</a>
                                        <a href="#">Laptop</a>
                                        <a href="#">Web Search</a>
                                        <a href="#">Affiliate</a>
                                        <a href="#">Photoshop</a>
                                        <a href="#">Support</a>
                                        <a href="#">Template</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="container-fluid">
                        <div class="row border-top ptb--20">
                            <div class="col-12 text-center">
                                <p class="copyright-text">Beck &copy; 2019 all rights reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- Footer End-->

            <!-- OffCanvas Menu Start -->
            <div class="offcanvas-menu-wrapper" id="offcanvasMenu">
                <div class="offcanvas-menu-inner">
                    <a href="" class="btn-close">
                        <i class="la la-remove"></i>
                    </a>
                    <nav class="offcanvas-navigation">
                        <ul class="offcanvas-menu">
                            <li class="menu-item-has-children active">
                                <a href="#">Home</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="index.html">Homepage 01</a>
                                    </li>
                                    <li>
                                        <a href="index-02.html">Homepage 02</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="shop.html">Shop</a>
                                <ul class="sub-menu">
                                    <li class="menu-item-has-children">
                                        <a href="#">
                                            <span class="mm-text">Shop Grid</span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="shop-fullwidth.html">Full Width</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Left Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="shop-right-sidebar.html">Right Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="shop-three-columns.html">Three Columns</a>
                                            </li>
                                            <li>
                                                <a href="shop-four-columns.html">Four Columns</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Shop List</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="shop-list.html">Full Width</a>
                                            </li>
                                            <li>
                                                <a href="shop-list-sidebar.html">Left Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="shop-list-right-sidebar.html">Right Sidebar</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Product Details</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="product-details.html">Tab Style 1</a>
                                            </li>
                                            <li>
                                                <a href="product-details-tab-style-2.html">Tab Style 2</a>
                                            </li>
                                            <li>
                                                <a href="product-details-tab-style-3.html">Tab Style 3</a>
                                            </li>
                                            <li>
                                                <a href="product-details-gallery-left.html">Gallery Left</a>
                                            </li>
                                            <li>
                                                <a href="product-details-gallery-right.html">Gallery Right</a>
                                            </li>
                                            <li>
                                                <a href="product-details-sticky-left.html">Sticky Left</a>
                                            </li>
                                            <li>
                                                <a href="product-details-sticky-right.html">Sticky Right</a>
                                            </li>
                                            <li>
                                                <a href="product-details-slider-box.html">Slider Box</a>
                                            </li>
                                            <li>
                                                <a href="product-details-slider-full-width.html">Slider Box Full Width</a>
                                            </li>
                                            <li>
                                                <a href="product-details-affiliate.html">Affiliate Proudct</a>
                                            </li>
                                            <li>
                                                <a href="product-details-variable.html">Variable Proudct</a>
                                            </li>
                                            <li>
                                                <a href="product-details-group.html">Group Product</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="blog.html">Blog</a>
                                <ul class="sub-menu">
                                    <li class="menu-item-has-children">
                                        <a href="#">Blog</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="blog-left-sidebar.html">Blog Left Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="blog.html">Blog Right Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="blog-01-column.html">Blog 01 column</a>
                                            </li>
                                            <li>
                                                <a href="blog-02-columns.html">Blog 02 columns</a>
                                            </li>
                                            <li>
                                                <a href="blog-03-columns.html">Blog 03 columns</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Blog Details</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="blog-details-audio.html">Audio Blog Details</a>
                                            </li>
                                            <li>
                                                <a href="blog-details-gallery.html">Gallery Blog Details</a>
                                            </li>
                                            <li>
                                                <a href="blog-details-image.html">image Blog Details</a>
                                            </li>
                                            <li>
                                                <a href="blog-details-video.html">Video Blog Details</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Pages</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="my-account.html">My Account</a>
                                    </li>
                                    <li>
                                        <a href="checkout.html">Checkout</a>
                                    </li>
                                    <li>
                                        <a href="cart.html">Cart</a>
                                    </li>
                                    <li>
                                        <a href="compare.html">Compare</a>
                                    </li>
                                    <li>
                                        <a href="order-tracking.html">Track Order</a>
                                    </li>
                                    <li>
                                        <a href="wishlist.html">Wishlist</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="contact-us.html">Contact Us</a>
                            </li>
                        </ul>
                        <div class="site-info vertical">
                            <div class="site-info__item">
                                <a href="tel:+01223566678"><strong>+01 2235 666 78</strong></a>
                                <a href="mailto:Support@contixs.com">Support@furtrate.com</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- OffCanvas Menu End -->

            <!-- Mini Cart Start -->
            <aside class="mini-cart" id="miniCart">
                <div class="mini-cart-wrapper">
                    <div class="mini-cart__close">
                        <a href="#" class="btn-close"><i class="la la-remove"></i></a>
                    </div>
                    <div class="mini-cart-inner">
                        <h3 class="mini-cart__heading mb--45">Shopping Cart</h3>
                        <div class="mini-cart__content">
                            <ul class="mini-cart__list">
                                <li class="mini-cart__product">
                                    <a href="#" class="mini-cart__product-remove">
                                        <i class="la la-remove"></i>
                                    </a>
                                    <div class="mini-cart__product-image">
                                        <img src="/img/products/prod-01-100x100.jpg" alt="products">
                                    </div>
                                    <div class="mini-cart__product-content">
                                        <a class="mini-cart__product-title" href="product-details.html">Golden Easy Spot Chair.</a>
                                        <span class="mini-cart__product-quantity">1 x $49.00</span>
                                    </div>
                                </li>
                                <li class="mini-cart__product">
                                    <a href="#" class="mini-cart__product-remove">
                                        <i class="la la-remove"></i>
                                    </a>
                                    <div class="mini-cart__product-image">
                                        <img src="/img/products/prod-02-100x100.jpg" alt="products">
                                    </div>
                                    <div class="mini-cart__product-content">
                                        <a class="mini-cart__product-title" href="product-details.html">Golden Easy Spot Chair.</a>
                                        <span class="mini-cart__product-quantity">1 x $49.00</span>
                                    </div>
                                </li>
                                <li class="mini-cart__product">
                                    <a href="#" class="mini-cart__product-remove">
                                        <i class="la la-remove"></i>
                                    </a>
                                    <div class="mini-cart__product-image">
                                        <img src="/img/products/prod-03-100x100.jpg" alt="products">
                                    </div>
                                    <div class="mini-cart__product-content">
                                        <a class="mini-cart__product-title" href="product-details.html">Golden Easy Spot Chair.</a>
                                        <span class="mini-cart__product-quantity">1 x $49.00</span>
                                    </div>
                                </li>
                            </ul>
                            <div class="mini-cart__total">
                                <span>Subtotal</span>
                                <span class="ammount">$98.00</span>
                            </div>
                            <div class="mini-cart__buttons">
                                <a href="cart.html" class="btn btn-fullwidth btn-bg-primary mb--20">View Cart</a>
                                <a href="checkout.html" class="btn btn-fullwidth btn-bg-primary">Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
            <!-- Mini Cart End -->

            <!-- Searchform Popup Start -->
            <div class="searchform__popup" id="searchForm">
                <a href="#" class="btn-close"><i class="la la-remove"></i></a>
                <div class="searchform__body">
                    <p>Start typing and press Enter to search</p>
                    <form class="searchform">
                        <input type="text" name="popup-search" id="popup-search" class="searchform__input" placeholder="Search Entire Store...">
                        <button type="submit" class="searchform__submit"><i class="la la-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="/js/vendor.js"></script>

    <!-- Main JS -->
    <script src="/js/main.js"></script>
    <script src="/js/custom_home.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>