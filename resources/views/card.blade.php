@extends('layouts.app')
@section('content')

@foreach($data as $el)
    @if( $el->id == 1)
        <div class="card mb-3">
            <div class="card-body">
                <h3 class="card-title text-center">{{ $el->header }}</h3>
                <p class="card-text">{{ $el->text }}</p>
                <p class="card-text"><small class="text-muted">{{ $el->created_at }}</small></p>
            </div>
        </div>
    @endif
@endforeach
        <div class="card mb-3">
            <div class="card-body">
            @foreach($description as $el)
            <div class="card mb-3" >
                <div class="row no-gutters">
                    <div class="col-md-4">
                    <img class="card-img-top" src="" alt="img">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{$el->name}}</h5>
                    </div>
                    </div>
                </div>
            </div>
            @endforeach
            </div>
        </div>
@endsection
