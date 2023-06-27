@extends('layouts.app')



@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-left">
                        <div class="row align-items-center">
                            <div class="col-md-11">Main page Settings</div>
                            <div class="col-md-1">
                                <a class="btn btn-primary bg-warning float-end" href="/account" role="button">Back</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            @csrf
                            @if (isset($mainpageset))
                                @foreach( $mainpageset as $info)
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">Content:</span>
                                        <textarea type="text" name="content" class="form-control"><?=$info->content?></textarea>


                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">Anchor:</span>
                                        <input type="text" name="link" class="form-control"
                                               value="<?=$info->link?>"> 	</div>
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


