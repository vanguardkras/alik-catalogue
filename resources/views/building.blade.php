@extends('layouts.general')

@section('content')
    <div class="blog-body content-area-4 padding-top-20 padding-bottom-100 padding-sm-top-50 padding-sm-bottom-50">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Blog 1 start -->
                    <div class="blog-1 blog-big">
                        <div class="blog-photo">
                            <img src="{{ asset("image/service/main.jpg") }}" alt="blog-img" class="img-fluid">
                        </div>
                        <div class="detail">
                            <h1 class="hadding-title">
                                Услуги строительства и благоустройства
                            </h1>
                            <p>
                                Мы предоставляем услуги общего благоустройства дворов, дорог, тротуаров, газонов,
                                отмосток,
                                а также покраски и установки бардюров, укладка брусчатки, асфальта и чистки снега.
                            </p>
                            <p>Оказываем услуги более 15 лет.</p>
                            <p>
                                Вы можете увидеть примеры наших работ ниже, либо на странице
                                <a href="{{ config('data.instagram') }}">instagram</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @for ($i = 1; $i <= 10; $i++)
                    <div class="col-md-4 margin-bottom-30">
                        <div class="service-item clearfix">
                            <div class="thumb">
                                <img src="{{ asset("image/service/$i.jpg") }}" alt="image">
                            </div>
                        </div>
                    </div><!-- /.col-md-4 -->
                @endfor
            </div>
        </div>
    </div>
@endsection
