<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('wallet.index') }}">Кошелек</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('transfer.index') }}">Переводы</a>
                </li>
                @if (Auth::check())
                <li class="nav-item">
                    <a class="nav-link" href="#">{{ Auth::user()->name }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}">
                        {{ __('Выйти') }}
                    </a>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                    </form>
{{--                    <form action="{{ route('logout') }}" method="POST">--}}
{{--                        @csrf--}}
{{--                        <input class="btn btn-light" type="submit" value="Выйти">--}}
{{--                    </form>--}}
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
