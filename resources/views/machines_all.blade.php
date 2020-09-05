@extends('layouts.general')

@section('content')
    <section class="recent-project-area padding-top-80 padding-bottom-100 padding-sm-top-50 padding-sm-bottom-50">
        <div class="container">
            <div class="row">
                @foreach ($categories as $category)
                    <div class="col-md-4 margin-bottom-30">
                        <div class="bt-main-item construction">
                            <div class="bt-gallery-box style-3">
                                <div class="image">
                                    <img src="{{ url('image/machines_types/' . $category['code'] . '.jpg') }}"
                                         alt="{{ $category['name'] }}"
                                    >
                                </div>
                                <div class="texts">
                                    <h3 class="title">
                                        {{ $category['name'] }}
                                    </h3>
                                </div>
                                <a href="{{ route('machines_category', ['category' => $category['code']]) }}" class="gallery-btn">Перейти<i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
