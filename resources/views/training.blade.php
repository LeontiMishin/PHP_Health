@extends('layouts.app')
@section('content')
<title>Training</title>
<h2 class="text-center">Purchased training packages:</h2>

<div class="row">
    @foreach($data as $el)
        @if( $el->id == 1)
            <div class="col-sm-4">
                <div class="card mb-3" style="max-width: 500px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img class="card-img-top" src="{{$el->img}}" alt="img">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title"> {{ $el->header }} </h3>
                                <h5 class="card-text"> {{ $el->body }} </h5>
                                <a href="/cardAll" id="{{ $el->id }}" class="badge badge-success">Open</a>
                                <p class="card-text"><small class="text-muted">{{ $el->created_at }}</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endforeach
</div>
@endsection
