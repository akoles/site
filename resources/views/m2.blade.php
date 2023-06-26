
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
        <li class="nav-item">
            <ul class="navbar-nav ">
                @isset($data)
                    @foreach($data as $menu)
                        <li class="nav-item active">
                            <a class="nav-link" href="<?=$menu->link?>"> <?= $menu->title ?></a>
                        </li>

            @endforeach
            @endisset
            @auth
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/Currencies">Currencies</a>
        </li>


        @if (session('status'))
            <li class="alert alert-success" role="radio">{{ session('status') }}</li>
        @endif

        <!-- Authentication Links -->
        @guest
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ ('Login') }}</a></li
            </ul>

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ ('Register') }}</a>
                </li>
            </ul>
        @else
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/account" role="button" >{{ Auth::user()->name }}</a>

                </li>
            </ul>


    </ul>
{{--<div class="dropdown-menu" aria-labelledby="navbarDropdown">
    <a class="dropdown-item" href="{{ route('logout') }}"
       onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>

    <form id="logout-form" action="{{ route('logout') }}"
          method="POST" class="d-none">
    </form></a>
 <div class="dropdown show">
 <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
     {{ Auth::user()->name }}</a>

 <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
     <a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>

     <form id="logout-form" action="{{ route('logout') }}"
           method="POST" class="d-none">
     </form></a>

<li class="nav-item">
    <a class="nav-link" href="#"
       role="button"
       aria-haspopup="true"
       aria-expanded="false" v-pre>
        {{ Auth::user()->name }}</a>

<li class="nav-item">
    <a href="{{ route('logout') }}"
       onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>

    <form id="logout-form" action="{{ route('logout') }}"
          method="POST" class="d-none">
    </form>
</li>
</li>


li class="nav-item">
                                            <a href="{{ route('login') }}"
                                               class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                                        </li>

                                        @if (Route::has('register'))
                                            <li class="nav-item">
                                                <a href="{{ route('register') }}"
                                                   class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                            </li>
                                    </ul>--}}



