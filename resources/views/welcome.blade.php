@extends('layouts.app')
@section('content')
<title>Main</title>

<div class="row">
@foreach($data as $el)
    <div class="col-sm-4">
        <div class="card mb-3" style="max-width: 500px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img class="card-img-top" src="{{$el->img}}" alt="img">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"> {{ $el->header }} </h5>
                        <h3 class="card-text text-center"> {{ $el->price }}</h3>
                        <a href="" id="{{ $el->id }}" class="badge badge-success">buy</a>
                        <p class="card-text"><small class="text-muted">{{ $el->created_at }}</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
</div>
@endsection
