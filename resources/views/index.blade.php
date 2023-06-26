@extends('layouts.app')

@section('content')
    @include('convertor')
    @if (isset($content))
        @foreach( $content as $d)
            <p><?=$d->content?></p>
        @endforeach
    @endif
@include('footer')
@endsection


