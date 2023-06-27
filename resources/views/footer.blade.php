{{--<ul class="navbar-nav ">--}}
{{--    <li class="nav-item">--}}
{{--        <ul class="navbar-nav ">--}}

{{--        </ul>--}}
{{--    </li>--}}
{{--</ul>--}}

<ul class="nav">
    <li class="nav-item">
        <ul class="nav">

            @isset($footer)

                @foreach( $footer as $f)
                    <li class="nav-item">
                        <a class="btn btn-primary" role="button" href="<?= $f->link ?>"> <?= $f->svg ?></a>
                    </li>
                @endforeach
            @endisset
        </ul>
    </li>
</ul>
