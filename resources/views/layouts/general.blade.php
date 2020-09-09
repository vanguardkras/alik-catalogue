<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ config('data.keywords') }}">
    <meta name="keywords" content="{{ config('data.keywords') }}">
    <!-- Title-->
    <title>{{ env('APP_NAME') }}</title>
    <!-- Favicon-->
    <link rel="icon" href="{{ url('image/favicon.jpg') }}" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" href="{{ url('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ url('/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('/css/animate.css') }}">
</head>
<body>
<!--Preloader-->
<div id="preloader">
    <div class="loader-container">
        <div class="spinner">
            <div class="rect1"></div>
            <div class="rect2"></div>
            <div class="rect3"></div>
            <div class="rect4"></div>
            <div class="rect5"></div>
        </div>
    </div>
</div>
<!--End Preloader-->

<!-- SECTION 0 NAV -->
<header class="main-header">
    <!--Header Top-->
    <div id="mosttop-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-12">
                    <ul class="mosttop-bar-info">
                        <li><i class="fas fa-phone"></i> Телефон: {{ config('data.phone') }}</li>
                        <li>
                            <i class="fa fa-envelope"></i>Email:
                            <a href="mailto:{{ config('data.email') }}">{{ config('data.email') }}
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 col-12">
                    <ul class="social-icons hidden-sm">
                        <li><a href="{{ config('data.instagram') }}"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!-- Header Middle -->
    <div class="bt_blank_nav"></div>
    <div class="header-middle bt_stick">
        <div class="inner-container">
            <div class="container clearfix">
                <div class="logo-middle">
                    <div class="logo">
                    <a href="/">
                        <i class="construct-excavator"></i>
                    </a>
                    </div>
                </div>

                <div class="nav-middle clearfix">
                    <x-nav-bar></x-nav-bar>
                </div>
            </div>
        </div>
    </div>
    <!--End Header Middle-->

</header>

@yield('content', '')

<!-- footer area start -->
<section class="contact-mail-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="newslater_wrapper">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 margin-sm-bottom-30">
                            <div class="newslater-footer padding-left-40 padding-right-20 padding-sm-0">
                                <h4>Свяжитесь с нами</h4>
                                <a href="{{ route('contacts') }}" class="btb-button dark large">Задать вопрос</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 margin-sm-bottom-30">
                            <div class="footer-contact-list">
                                <h4>Наши Контакты</h4>
                                <p>Телефон: {{ config('data.phone') }} <br>Email: {{ config('data.email') }}</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4">
                            <div class="footer-contact-list">
                                <h4>Мы в соцсетях</h4>
                                <div class="follow-icons">
                                    <a href="{{ config('data.instagram') }}"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="footer-area">
    <div class="footer-top padding-top-150 padding-bottom-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 margin-sm-bottom-30">
                    <div class="footer-widget widget">
                        <h4 class="widget-title">О нас</h4>
                        <div class="about_us_widget">
                            <p>
                                Мы работает на рынке более 15 лет. Наша команда гарантирует качество предоставляемых услуг.
                                Мы стремимся к тому, чтобы наши клиенты всегда оставались довольными, так как мы работаем на репутацию.
                            </p>
                            <ul class="footer-about-social">
                                <li><a href="{{ config('data.instagram') }}"><i class="fab fa-instagram"></i> </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 margin-sm-bottom-30">
                    <div class="footer-widget widget widget_nav_menu">
                        <h4 class="widget-title">Ссылки</h4>
                        <ul>
                            <li><a href="{{ route('main') }}">Главная</a></li>
                            <li><a href="{{ route('machines_all') }}">Спецтехника</a></li>
                            <li><a href="{{ route('building') }}">Строительство</a></li>
                            <li><a href="{{ route('about') }}">О нас</a></li>
                            <li><a href="{{ route('vacancies') }}">Вакансии</a></li>
                            <li><a href="{{ route('contacts') }}">Контакты</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 margin-sm-bottom-30">
                    <div class="footer-widget widget ">
                        <h4 class="widget-title">Контакты</h4>
                        <ul class="contact_info_list">
                            <li class="single-info-item">
                                <div class="icon">
                                    <i class="fa fa-home"></i>
                                </div>
                                <div class="details">
                                    {{ config('data.address') }}
                                </div>
                            </li>
                            <li class="single-info-item">
                                <div class="icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="details">
                                    {{ config('data.phone') }}<br>
                                    {{ config('data.phone_2') }}
                                </div>
                            </li>
                            <li class="single-info-item">
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="details">
                                    <a href="mailto:{{ config('data.email') }}">{{ config('data.email') }}</a><br>
                                    <a href="mailto:{{ config('data.email_2') }}">{{ config('data.email_2') }}</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer area end -->
<button class="scroll-totop "><i class="ti-angle-up"></i></button>
<script src="{{ url('js/jquery.js') }}"></script>
<script src="{{ url('js/popper.min.js') }}"></script>
<script src="{{ url('js/bootstrap.min.js') }}"></script>
<script src="{{ url('js/wow.min.js') }}"></script>
<script src="{{ url('js/slick.js') }}"></script>
<script src="{{ url('js/main.js') }}"></script>
</body>
</html>
