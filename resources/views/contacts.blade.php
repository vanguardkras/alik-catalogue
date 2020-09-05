@extends('layouts.general')

@section('content')
    <section class="contact-us-section padding-tb-20 padding-sm-tb-50">
        <div class="container">
            @if (session()->has('message_sent'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Сообщение успешно отправлено
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            <div class="row">
                <div class="col-md-12">
                    <div class="google-wrapper margin-bottom-50">
                        <iframe
                            src="https://yandex.ru/map-widget/v1/?um=constructor%3A148e37ac62e6860cc59c20320c3a1f237dfe183ba2da1163b35c3bbba2b0aeea&amp;source=constructor"
                            width="100%" height="565" frameborder="0"></iframe>
                    </div>
                </div>
            </div>

            <div class="row contactformbg">
                <div class="col-md-6">
                    <div class="contact-address">
                        <h3 class="contact-title">Контактная информация</h3>
                        <div class="single-contact-address padding-bottom-30">
                            <div class="icon">
                                <i class="ti-mobile"></i>
                            </div>
                            <div class="content">
                                <p>
                                    {{ config('data.phone') }} <br>
                                    {{ config('data.phone_2') }}
                                </p>

                            </div>
                        </div>
                        <div class="single-contact-address padding-bottom-30">
                            <div class="icon">
                                <i class="ti-email"></i>
                            </div>
                            <div class="content">
                                <p>
                                    <a href="mailto:{{ config('data.email') }}">{{ config('data.email') }}</a> <br>
                                    <a href="mailto:{{ config('data.email_2') }}">{{ config('data.email_2') }}</a>
                                </p>
                            </div>
                        </div>
                        <div class="single-contact-address padding-bottom-30">
                            <div class="icon">
                                <i class="ti-location-arrow"></i>
                            </div>
                            <div class="content">
                                <p>{{ config('data.address') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact-form-wrap">
                        <form method="post" id="contact-form" action="{{ route('message') }}">
                            @csrf
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="single-input-item">
                                        <label>
                                            <input type="email" name="email" placeholder="Email *" required="">
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="single-input-item">
                                        <label>
                                            <input type="text" name="phone" placeholder="Телефон">
                                        </label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="single-input-item">
                                        <label for="text" class="sr-only m-0"></label>
                                        <textarea name="text" id="text" cols="30" rows="7"
                                                  placeholder="Сообщение *" required=""></textarea>
                                    </div>

                                    <div class="single-input-item mb-0 mt-40">
                                        <button class="btb-button rounded-3px">
                                            Отправить
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
