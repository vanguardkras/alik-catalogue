@extends('layouts.general')

@section('content')
    <section class="recent-project-area padding-top-80 padding-bottom-100 padding-sm-top-50 padding-sm-bottom-50">
        <div class="container">
            <h1>{{ $category->name }}</h1>
            <div class="small">Цены на сайте даны примерно</div>
            <div class="row mt-3">
                @foreach ($machines as $machine)
                    <div class="col-md-4 margin-bottom-30">
                        <div class="bt-main-item construction">
                            <div class="bt-gallery-box style-3">
                                <div class="image">
                                    <img src="{{ asset('storage/' . $machine->image) }}"
                                         alt="{{ $machine->name }}"
                                    >
                                </div>
                                <div class="texts">
                                    <span class="categorie">{{ $machine->price ? 'Цена: ' . $machine->price . ' руб' : 'Индивидуальный расчет' }}</span>
                                    <h3 class="title">
                                        {{ $machine->name }}
                                    </h3>
                                </div>
                                <a href="{{ route('machine', ['id' => $machine->id]) }}" class="gallery-btn">Перейти<i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
