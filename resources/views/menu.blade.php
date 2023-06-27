<ul class="navbar-nav ">
    <li class="nav-item">
        <ul class="navbar-nav ">
            @isset($data)
                @foreach($data as $menu)
                    <li class="nav-item active">
                        <a class="nav-link" href="<?=$menu->link?>"> <?= $menu->title ?></a>
                    </li>

                @endforeach
            @endisset
        </ul>

    </li>
    <li class="nav-item">
        <a class="nav-link" href="/home">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/Currencies">Currencies</a>
    </li>
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
            @endif
            <!-- Authentication Links -->
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link"
                           href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif
                @if (Route::has('register'))

                    <li class="nav-item">
                        <a class="nav-link"
                           href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>

                @endif
            @else
                <ul class="nav-item ">
                    <a class="nav-link " href="/account">
                        {{ Auth::user()->name }}
                    </a>

        </div>
</ul>
@endguest








