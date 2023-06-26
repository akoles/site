@extends('layouts.app')



@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-left">
                        <div class="row align-items-center">
                            <div class="col-md-11"> Title Settings</div>
                            <div class="col-md-1">
                                <a class="btn btn-primary bg-warning float-end" href="/account" role="button">Back</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            @csrf
                            @if (isset($title))
                                @foreach( $title as $d)
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">Tiltle:</span>
                                        <input type="text" name="title" class="form-control"
                                               value="<?=$d->title?>">
                                    </div>
                                @endforeach
                            @endif
                            <div class="d-grid gap-2">
                                <input type="submit" class="btn bg-info" value="Send">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

