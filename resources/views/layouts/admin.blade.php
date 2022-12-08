<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link href="./img/favicon.png" rel="apple-touch-icon">
    <link href="./img/favicon.png" rel="icon">
    <title>Cheffemi Admin</title>
    <link href="../../../css2?family=Work+Sans:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/plugins/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/Linearicons/Font/demo-files/demo.css') }}">
    <link rel="stylesheet" href="{{ asset('/plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/plugins/owl-carousel/assets/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('/plugins/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/plugins/summernote/summernote-bs4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/plugins/apexcharts-bundle/dist/apexcharts.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/adminstyle.css') }}">
</head>

<body>
    <main class="ps-main">
        <div class="ps-main__sidebar">
            <div class="ps-sidebar">
                <div class="ps-sidebar__top">
                    <div class="ps-block--user-wellcome">
                        <div class="ps-block__left"><img src="img/user/admin.jpg" alt=""></div>
                        <div class="ps-block__right">
                            <p>Hello,<a href="#">{{ Auth::user()->name }}</a></p>
                        </div>
                        <div class="ps-block__action">
                          <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            this.closest('form').submit();">
                              <i {{ __('Log Out') }} class="icon-exit"></i>
                            </a>
                          </form>
                        </div>
                    </div>
                    <div class="ps-block--earning-count"><small>Earning</small>
                        <h3>$12,560.55</h3>
                    </div>
                </div>
                <div class="ps-sidebar__content">
                    <div class="ps-sidebar__center">
                        <ul class="menu">
                            <li class="@if (request()->is('/dashboard')) active @endif">
                              <a href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')"><i class="icon-home"></i>{{ __('Dashboard') }}
                              </a>
                            </li>
                            <li class="@if (request()->is('/products')) @endif active">
                              <a href="{{ route('products') }}" :active="request()->routeIs('products')"><i class="icon-database"></i>{{ __('Products') }}
                              </a>
                            </li>
                            <li class="@if (request()->is('/orders')) @endif active">
                              <a href="{{ route('order') }}" :active="request()->routeIs('order')"><i class="icon-bag2"></i>{{ __('Order') }}
                              </a>
                            </li>
                            <li class="@if (request()->is('/customer')) @endif active">
                              <a href="{{ route('customer') }}" :active="request()->routeIs('customer')"><i class="icon-users2"></i>{{ __('Customer') }}
                              </a>
                            </li>
                            <li class="@if (request()->is('/coupon')) @endif active">
                              <a href="{{ route('coupon') }}" :active="request()->routeIs('coupon')"><i class="icon-percent-circle"></i>{{ __('Coupon') }}
                              </a>
                            </li>
                            <li class="@if (request()->is('/categories')) @endif active">
                              <a href="{{ route('categories') }}" :active="request()->routeIs('categories')"><i class="icon-papers"></i>{{ __('Categories') }}
                              </a>
                            </li>
                            <li class="@if (request()->is('/setting')) @endif active">
                              <a href="{{ route('setting') }}" :active="request()->routeIs('setting')"><i class="icon-cog"></i>{{ __('Setting') }}
                              </a>
                            </li>
                        </ul>
                    </div>
                    <div class="ps-sidebar__footer">
                        <div class="ps-copyright"><img src="/img/logo.png" alt="">
                            <p>&copy;2022 Cheffemi - simplify lives. <br> All rights reversed.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @yield('main-container')
        @stack('modals')

        @livewireScripts
    </main>

<script src="{{ asset('/plugins/jquery.min.js') }}"></script>
<script src="{{ asset('/plugins/popper.min.js') }}"></script>
<script src="{{ asset('/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/plugins/jquery.matchHeight-min.js') }}"></script>
<script src="{{ asset('/plugins/select2/dist/js/select2.full.min.js') }}"></script>
<script src="{{ asset('/plugins/summernote/summernote-bs4.min.js') }}"></script>
<script src="{{ asset('/plugins/apexcharts-bundle/dist/apexcharts.min.js') }}"></script>
<script src="{{ asset('/js1/chart.js') }}"></script>
<!-- custom code-->
<script src="{{ asset('/js1/admin-main.js') }}"></script>