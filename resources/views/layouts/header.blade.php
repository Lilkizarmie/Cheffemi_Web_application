<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- color of address bar in mobile browser -->
    <meta name="theme-color" content="#51A346">
    <!-- favicon  -->
    <link rel="shortcut icon" href="img/ui/favicon.png" type="image/x-icon">
    <!-- font awesome css -->
    <link rel="stylesheet" href="css/plugins/font-awesome.min.css">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/plugins/bootstrap.min.css">
    <!-- swiper css -->
    <link rel="stylesheet" href="css/plugins/swiper.min.css">
    <!-- datepicker css -->
    <link rel="stylesheet" href="css/plugins/datepicker.css">
    <!-- mapbox css -->
    <link href="css/plugins/mapbox-style.css" rel='stylesheet'>
    <!-- fancybox css -->
    <link rel="stylesheet" href="css/plugins/fancybox.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- page title -->
    <title>Cheffemi</title>
</head>

<body>
    <!-- app wrapper -->
    <div class="sb-app">
        <!-- preloader -->
        <div class="sb-preloader">
            <div class="sb-preloader-bg"></div>
            <div class="sb-preloader-body">
                <div class="sb-loading">
                    <div class="sb-percent"><span class="sb-preloader-number" data-count="101">00</span><span>%</span>
                    </div>
                </div>
                <div class="sb-loading-bar">
                    <div class="sb-bar"></div>
                </div>
            </div>
        </div>
        <!-- preloader end -->
        <!-- click effect -->
        <div class="sb-click-effect">
            
        </div>
        <!-- loader -->
        <div class="sb-load"></div>
        <!-- top bar -->
        <div class="sb-top-bar-frame">
            <div class="sb-top-bar-bg"></div>
            <div class="container">
                <div class="sb-top-bar">
                    <a href="/" class="sb-logo-frame">
                        <!-- logo img -->
                        <img src="img/ui/logo.png" alt="Starbelly">
                    </a>
                    <!-- menu -->
                    <div class="sb-right-side">
                        <nav id="sb-dynamic-menu" class="sb-menu-transition">
                            <ul class="sb-navigation">
                                <li class="@if (request()->is('/')) sb-active @endif">
                                    <a href="{{ url('/') }}">Home</a>
                                </li>
                                <li class="@if (request()->is('about')) sb-active @endif ">
                                    <a href="{{ url('/about') }}">About</a>
                                </li>
                                <li class="@if (request()->is('gallery')) sb-active @endif">
                                    <a href="{{ url('/gallery') }}">Gallery</a>
                                </li>
                                <li class="@if (request()->is('shop')) sb-active @endif">
                                    <a href="#">Shop</a>
                                    <ul>
                                        <li class="@if (request()->is('menu')) sb-active @endif">
                                          <a href="{{ url('/shop') }}">Shop</a>
                                        </li>
                                        <li class="@if (request()->is('menu')) sb-active @endif">
                                          <a href="{{ url('/menu') }}">Menu</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="@if (request()->is('blog')) sb-active @endif">
                                    <a href="{{ url('/blog') }}">Blog</a>
                                </li>
                                <li class="@if (request()->is('contact')) sb-active @endif">
                                    <a href="{{ url('/contact') }}">Contact</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="sb-buttons-frame">
                            <!-- button -->
                            <div class="sb-btn sb-btn-2 sb-btn-gray sb-btn-icon sb-m-0 sb-btn-cart">
                                <span class="sb-icon">
                                    <img src="img/ui/icons/cart.svg" alt="icon">
                                </span>
                                <i class="sb-cart-number">5</i>
                            </div>
                            <!-- button end -->
                            <!-- menu btn -->
                            <div class="sb-menu-btn"><span></span></div>
                            <!-- info btn -->
                            <div class="sb-info-btn"><span></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- info bar -->
            <div class="sb-info-bar">
                <div class="sb-infobar-content">
                    <div class="sb-ib-title-frame sb-mb-30">
                        <h4>Contact</h4><i class="fas fa-arrow-down"></i>
                    </div>
                    <ul class="sb-list sb-mb-30">
                        <li><b>Address:</b><span>Montréal, 1510 Rue Sauvé</span></li>
                        <li><b>Working hours:</b><span>09:00 - 23:00</span></li>
                        <li><b>Phone:</b><span>+02 (044) 756-X6-52</span></li>
                        <li><b>Email:</b><span>orders@cheffemi.com</span></li>
                    </ul>
                    <div class="sb-ib-title-frame sb-mb-30">
                        <h4>Instagram</h4><i class="fas fa-arrow-down"></i>
                    </div>
                    <ul class="sb-instagram sb-mb-30">
                        <li><a href="#."><img src="img/instagram/1.jpg" alt="instagram"></a></li>
                        <li><a href="#."><img src="img/instagram/2.jpg" alt="instagram"></a></li>
                        <li><a href="#."><img src="img/instagram/3.jpg" alt="instagram"></a></li>
                        <li><a href="#."><img src="img/instagram/4.jpg" alt="instagram"></a></li>
                        <li><a href="#."><img src="img/instagram/5.jpg" alt="instagram"></a></li>
                        <li><a href="#."><img src="img/instagram/6.jpg" alt="instagram"></a></li>
                    </ul>
                    <hr>
                    <div class="sb-ib-title-frame sb-mb-30">
                        <h4>Latest publications</h4><i class="fas fa-arrow-down"></i>
                    </div>
                    <a href="publication-1.html" class="sb-blog-card sb-blog-card-sm sb-mb-30">
                        <div class="sb-cover-frame">
                            <img src="img/blog/1.jpg" alt="cover">
                        </div>
                        <div class="sb-blog-card-descr">
                            <h5 class="sb-mb-5">Simple Homemade Tomato Soup</h5>
                            <p class="sb-text sb-text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Libero optio, sed expedita.</p>
                        </div>
                    </a>
                    <a href="publication-1.html" class="sb-blog-card sb-blog-card-sm sb-mb-30">
                        <div class="sb-cover-frame">
                            <img src="img/blog/2.jpg" alt="cover">
                        </div>
                        <div class="sb-blog-card-descr">
                            <h5 class="sb-mb-5">Thai Coconut Soup with Tofu and Rice</h5>
                            <p class="sb-text sb-text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Libero optio, sed expedita.</p>
                        </div>
                    </a>
                    <a href="publication-1.html" class="sb-blog-card sb-blog-card-sm sb-mb-30">
                        <div class="sb-cover-frame">
                            <img src="img/blog/3.jpg" alt="cover">
                        </div>
                        <div class="sb-blog-card-descr">
                            <h5 class="sb-mb-5">21 Things You Should Absolutely Be Buying at ALDI</h5>
                            <p class="sb-text sb-text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Libero optio, sed expedita.</p>
                        </div>
                    </a>
                </div>
                <div class="sb-info-bar-footer">
                    <ul class="sb-social">
                        <li><a href="#."><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#."><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#."><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#."><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- info bar end -->
            <!-- minicart -->
            <div class="sb-minicart">
                <div class="sb-minicart-content">
                    <div class="sb-ib-title-frame sb-mb-30">
                        <h4>Your order.</h4><i class="fas fa-arrow-down"></i>
                    </div>
                    <a href="product.html" class="sb-menu-item sb-menu-item-sm sb-mb-15">
                        <div class="sb-cover-frame">
                            <img src="img/menu/4.jpg" alt="product">
                        </div>
                        <div class="sb-card-tp">
                            <h4 class="sb-card-title">Saumon Gravlax</h4>
                            <div class="sb-price"><sub>$</sub> 9</div>
                        </div>
                    </a>
                    <a href="product.html" class="sb-menu-item sb-menu-item-sm sb-mb-15">
                        <div class="sb-cover-frame">
                            <img src="img/menu/1.jpg" alt="product">
                        </div>
                        <div class="sb-card-tp">
                            <h4 class="sb-card-title">Chevrefrit au miel</h4>
                            <div class="sb-price"><sub>$</sub> 14</div>
                        </div>
                    </a>
                    <a href="product.html" class="sb-menu-item sb-menu-item-sm sb-mb-15">
                        <div class="sb-cover-frame">
                            <img src="img/menu/2.jpg" alt="product">
                        </div>
                        <div class="sb-card-tp">
                            <h4 class="sb-card-title">Croustillant de poisson</h4>
                            <div class="sb-price"><sub>$</sub> 4</div>
                        </div>
                    </a>
                    <a href="product.html" class="sb-menu-item sb-menu-item-sm sb-mb-15">
                        <div class="sb-cover-frame">
                            <img src="img/menu/3.jpg" alt="product">
                        </div>
                        <div class="sb-card-tp">
                            <h4 class="sb-card-title">Stracciatella</h4>
                            <div class="sb-price"><sub>$</sub> 11</div>
                        </div>
                    </a>
                    <a href="product.html" class="sb-menu-item sb-menu-item-sm sb-mb-15">
                        <div class="sb-cover-frame">
                            <img src="img/menu/5.jpg" alt="product">
                        </div>
                        <div class="sb-card-tp">
                            <h4 class="sb-card-title">Carpaccio de daurade</h4>
                            <div class="sb-price"><sub>$</sub> 19</div>
                        </div>
                    </a>
                </div>
                <div class="sb-minicart-footer">
                    <!-- button -->
                    <a  href="{{ url('/cart') }}" class="sb-btn sb-btn-gray sb-btn-text">
                        <span>View order</span>
                    </a>
                    <!-- button end -->
                    <!-- button -->
                    <a href="{{ url('/checkout') }}" class="sb-btn sb-btn-text">
                        <span>Checkout</span>
                    </a>
                    <!-- button end -->
                </div>
            </div>
            <!-- minicart end -->
        </div>
        <!-- top bar end -->


