@extends('layouts.general')

@section('content')
    <div class="blog-body content-area-4 padding-top-20 padding-bottom-100 padding-sm-top-50 padding-sm-bottom-50">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Blog 1 start -->
                    <div class="blog-1 blog-big">
                        <div class="detail">
                            <h1 class="hadding-title">
                                Вакансии компании
                            </h1>
                            <div class="requirement-list padding-bottom-50">
                                <ul>
                                    <li><i class="fas fa-angle-right padding-right-10 margin-tb-10"></i>Разнорабочие</li>
                                    <li><i class="fas fa-angle-right padding-right-10 margin-tb-10"></i>Водители</li>
                                    <li><i class="fas fa-angle-right padding-right-10 margin-tb-10"></i>Операторы крана</li>
                                </ul>
                                <h5 class="mt-4 text-primary">
                                    По вопросам трудоустройства обращаться по телефону:
                                    {{ config('data.phone') }}
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
