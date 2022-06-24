<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="btn btn-light" aria-current="page" href="/">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-light" href="{{ route('wallet.index') }}">Кошелек</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-light" href="{{ route('transfer.index') }}">Переводы</a>
                </li>
                @if (Auth::check())
                <li class="nav-item">
                    <a class="btn btn-light" href="#">{{ Auth::user()->name }}</a>
                </li>
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <input class="btn btn-light" type="submit" value="Выйти">
                    </form>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
