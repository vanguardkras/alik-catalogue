@extends('layouts.general')

@section('content')
    <div class="container margin-bottom-90">
        <h1>{{ $machine->name }}</h1>
        <h5>({{ $machine->category->name }})</h5>
        <div class="small">Цены на сайте даны примерно</div>
        <div class="row mt-3 margin-bottom-3">
            <div class="col-md-6">
                <div class="service-img margin-sm-bottom-30">
                    <img src="{{ asset('storage/' . $machine->image) }}" alt="{{ $machine->name }}">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="requirement-list">
                    <h5>Цена: {{ $machine->price }} руб</h5>
                    <ul>
                        @foreach ($machine->parameters as $parameter)
                            <li><i class="fas fa-angle-right padding-right-10 margin-tb-10"></i>
                                {{ $parameter->categoryParameter->name }}: {{ $parameter->value }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

        </div>

    </div>
@endsection
