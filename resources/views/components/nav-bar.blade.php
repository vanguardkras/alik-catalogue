<nav class="main-menu navbar-expand-md navbar-light">
    <div class="navbar-header">
        <!-- Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navmobileshow" aria-controls="navmobileshow" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="icon fas fa-align-right"></span>
        </button>
    </div>

    <div class="collapse navbar-collapse clearfix" id="navmobileshow">
        <ul class="navigation clearfix">
            <li class="{{ request()->is('/') ? 'current' : '' }}"><a href="{{ route('main') }}">Главная</a></li>
            <li class="dropdown {{ request()->is('machine*') ? 'current' : '' }}"><a href="{{ route('machines_all') }}">Спецтехника</a>
                <ul>
                    @foreach ($categories as $machine)
                        <li>
                            <a href="{{ route('machines_category', ['category' => $machine['code']]) }}">
                                {{ $machine['name'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </li>
            <li class="{{ request()->is('building') ? 'current' : '' }}"><a href="{{ route('building') }}">Строительство</a></li>
            <li class="{{ request()->is('about') ? 'current' : '' }}"><a href="{{ route('about') }}">О нас</a></li>
            <li class="{{ request()->is('vacancies') ? 'current' : '' }}"><a href="{{ route('vacancies') }}">Вакансии</a></li>
            <li class="{{ request()->is('contacts') ? 'current' : '' }}"><a href="{{ route('contacts') }}">Контакты</a></li>
        </ul>
    </div>
</nav>
