@extends('layouts.app')
@section('content')
<title>Main</title>

@foreach($data as $el)
    <div class="row">
    <div class="col-sm-4">
        <div class="card mb-3" style="max-width: 500px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src=".../public/storage/1.jpg" alt="jpg">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"> {{ $el->header }} </h5>
                        <h3 class="card-text text-center"> {{ $el->price }}</h3>
                        <a href="#" class="badge badge-success">buy</a>
                        <p class="card-text"><small class="text-muted">{{ $el->created_at }}</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endforeach
<!-- <div class="col-sm-4">
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="..." alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Kardio Train</h5>
                    <h3 class="card-text text-center"> 3.00$</h3>
                    <a href="#" class="badge badge-success">buy</a>
                    <p class="card-text"><small class="text-muted">Последнее обновление: час назад</small></p>
                </div>
            </div>
        </div>
    </div>
</div>
  <div class="col-sm-4">
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="..." alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Strength</h5>
                    <h3 class="card-text text-center"> 2.40$</h3>
                    <a href="#" class="badge badge-success">buy</a>
                    <p class="card-text"><small class="text-muted">Последнее обновление: час назад</small></p>
                </div>
            </div>
        </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="..." alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Endurance Set</h5>
                    <h3 class="card-text text-center"> 8.00$</h3>
                    <a href="#" class="badge badge-success">buy</a>
                    <p class="card-text"><small class="text-muted">Последнее обновление: час назад</small></p>
                </div>
            </div>
        </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="..." alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Force Train</h5>
                    <h3 class="card-text text-center"> 3.00$</h3>
                    <a href="#" class="badge badge-success">buy</a>
                    <p class="card-text"><small class="text-muted">Последнее обновление: час назад</small></p>
                </div>
            </div>
        </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="..." alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Run</h5>
                    <h3 class="card-text text-center"> 2.85$</h3>
                    <a href="#" class="badge badge-success">buy</a>
                    <p class="card-text"><small class="text-muted">Последнее обновление: час назад</small></p>
                </div>
            </div>
        </div>
    </div>
  </div>
</div> -->
@endsection
