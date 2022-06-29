<nav class="navbar navbar-expand-md navbar-light bg-light">
    <a class="navbar-brand" href="/">Главная</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="btn btn-light" href="{{ route('wallet.index') }}">Кошелек<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="btn btn-light" href="{{ route('transfer.index') }}">Переводы</a>
            </li>
        </ul>
        @if (Auth::check())
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="btn btn-light" href="{{ route('wallet.index') }}">{{ Auth::user()->name }}</a>
            </li>
            <li class="nav-item">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <input class="btn btn-light" type="submit" value="Выйти">
                </form>
            </li>
        </ul>
        @endif
    </div>
</nav>
