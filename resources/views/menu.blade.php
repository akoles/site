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
                    <a class="nav-link " href="/account"
                        {{--role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" v-pre--}}>
                        {{ Auth::user()->name }}
                    </a>
                {{--<ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="">Account</a></li>--}}
                {{--                                                <div class="dropdown-menu dropdown-menu-end"--}}
                {{--                                                     aria-labelledby="navbarDropdown">--}}
                {{--                                                <li><a class="nav-item" href="/logout">Log out</a></li>--}}
                {{--                                                <a class="nav-item-item" href="{{ route('logout') }}"--}}
                {{--                                                   onclick="event.preventDefault();--}}
                {{--                                                 document.getElementById('logout-form').submit();">--}}
                {{--                                                    {{ __('Logout') }}--}}
                {{--                                                </a>--}}
        </div>
</ul>
@endguest








