
<ul class="nav">
    <li class="nav-item">
        <ul class="nav">

            @isset($footer)

                @foreach( $footer as $f)
                    <li class="nav-item">
                        <a class="btn btn-outline-secondary" role="button" href="<?= $f->link ?>"> <?= $f->svg ?></a>
                    </li>
                @endforeach
            @endisset
        </ul>
    </li>
</ul>
