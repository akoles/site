@extends('layouts.app')
@section('content')
    @isset($convert)
        @foreach($convert as $k=>$v)


            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Currencies</th>
                    <th scope="col">Buy</th>
                    <th scope="col">Sale</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row"><a><?= $k ?></a></th>
                    <td>
                        <a><?= $v['buy'] ?></a></td>
                    <td><a><?= $v['sale'] ?></a></td>

                </tr>

                </tbody>
            </table>

        @endforeach
    @endisset
    @include('footer')
@endsection

