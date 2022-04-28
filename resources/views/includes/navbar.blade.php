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
                    <a class="nav-link" href="">Переводы</a>
                </li>
                <li class="nav-item">
                    @if (Auth::check())
                    <a class="nav-link" href="#">{{ Auth::user()->name }}</a>
                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav>
