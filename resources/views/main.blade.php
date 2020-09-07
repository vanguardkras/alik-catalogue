@extends('layouts.general')

@section('content')

    {{--  SECTION Slider --}}
    <section class="bt-main-slider">
        <div class="bt-item-slide bt-slide-white backgrounds-bg-img"
             style="background-image: url('/image/slideshow/slide-1.jpg');">
            <div class="slide-captions">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 slide-caption">
                            <div class="main-title-box">
                                <h2 class="big-title">
                                    Общее строительство и услуги аренды спецтехники.<br>
                                    Отправка в регионы.
                                </h2>
                            </div>

                            <div class="para-content">
                                <p>
                                    Мы предоставляем услуги обустройства дворов, дорог, тротуаров, газонов, отмосток и
                                    т.д
                                </p>
                            </div>
                            <div class="btnwrp">
                                <a href="{{ route('contacts') }}" class="btb-button big rounded-3px">Напишите нам</a>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>

        <div class="bt-item-slide bt-slide-white backgrounds-bg-img"
             style="background-image: url('image/slideshow/slide-2.jpg');">
            <div class="slide-captions">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 slide-caption">
                            <div class="main-title-box">
                                <h2 class="big-title">
                                    Гарантируем качество и надежность
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- START WHAT WE DO --}}
    <div id="what-we-do" class="padding-top-90 padding-bottom-90 bg-gray padding-sm-bottom-50 padding-sm-top-50">
        <div class="container">

            <div class="row">
                <div class="service-block-two outer_animation col-md-6 col-sm-12 margin-sm-bottom-30">
                    <div class="inner-box wow fadeInLeft">
                        <div class="icon-box"><span class="icon"><i class="construct-excavator"></i></span></div>
                        <h5><a href="{{ route('machines_all') }}">Аренда спецтехники</a></h5>
                        <div class="text">
                            Аренда всех видов спецтехники (экскаваторы, краны, самосвалы, погрузчики и т.д.)
                        </div>
                        <a href="{{ route('machines_all') }}" class="service-box-link">Подробнее<i
                                class="ti-arrow-right"></i></a>
                    </div>
                </div>

                <div class="service-block-two outer_animation col-md-6 col-sm-12 margin-sm-bottom-30">
                    <div class="inner-box wow fadeInLeft">
                        <div class="icon-box"><span class="icon "><i class="construct-brick-wall"></i></span></div>
                        <h5><a href="{{ route('building') }}">Общее строительство</a></h5>
                        <div class="text">
                            Услуги общего строительства дворов, дорог, тротуаров, газонов, отмосток и т.д
                        </div>
                        <a href="{{ route('building') }}" class="service-box-link">Подробнее<i
                                class="ti-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- Why Choose Us --}}
    <section class="why-us-section padding-top-90 padding-bottom-50 padding-sm-top-50">
        <div class="container outer_animation">
            <div class="row wow fadeInUp clearfix">
                <div class="image-column margin-bottom-50 col-md-5">
                    <img src="{{ url('image/page/our-project-1.jpg') }}" alt="">
                </div>
                <!-- Content Column -->
                <div class="content-column margin-bottom-50 order-last col-lg-7 col-md-12 col-sm-12  margin-sm-0">
                    <div class="inner-column padding-left-20 padding-sm-0">
                        <div class="sec-title">
                            <h2>Вы найдете то, что ищите</h2>
                            <div class="text">
                                Если вам требуется спецтехника в аренду,
                                либо команда профессионалов по обустройству территорий
                            </div>
                        </div>
                        <div class="btn-box">
                            <a href="{{ route('contacts') }}" class="btb-button large rounded-3px">Свяжитесь с нами</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    {{--End Why Choose Us --}}

    {{-- MEET OUR ADVISOR --}}
    <section class="team-section padding-top-20 padding-bottom-90 padding-sm-top-50 padding-sm-bottom-50">
        <!-- Team Section -->
        <div class="sec-title centered margin-bottom-50">
            <h2>Спецтехника</h2>
        </div>

        <div class="container">
            <div class="row">
                @foreach($machines as $machine)
                    <div class="col-md-3 margin-bottom-50 margin-sm-bottom-30 wow fadeInUp">
                        <div class="team-member-list">
                            <div class="member">
                                <a href="{{ route('machines_category', ['category' => $machine['code']]) }}">
                                    <div class="inner">
                                        <div class="image">
                                            <div class="inner">
                                                <img
                                                    src="{{ url('image/machines_types/' . $machine['code'] . '.jpg') }}"
                                                    alt="{{ $machine['name'] }}">
                                            </div>
                                        </div>
                                        <div class="texts">
                                            <h4 class="name padding-bottom-5">{{ $machine['name'] }}</h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


    </section>
@endsection
