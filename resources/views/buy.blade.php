@extends('layouts.app')
@section('content')
<div class="alert alert-success" role="alert">
  <h4 class="alert-heading text-center">Покупка Training</h4>
</div>

<div class="container-fluid">
        <div class="row">
            <div class="text-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <form method="post" action="{{ route('contact-form') }}" class="card">
                @csrf
                    <label for="basic-url">Пакет тренировок:</label>
                    <div class="input-group mb-3">
                        <input type="text" name="weight" id="weight" class="form-control" aria-describedby="basic-addon1">
                    </div>

                    <label for="basic-url">Email:</label>
                    <div class="input-group mb-3">
                        <input type="text" name="height" id="height" class="form-control" aria-describedby="basic-addon1">
                    </div>

                    <label for="basic-url">Подтвердите пароль:</label>
                    <div class="input-group mb-3">
                        <input type="text" name="age" id="age" class="form-control" aria-describedby="basic-addon1">
                    </div>

                    <button type="submit" class="btn btn-success">Отправить</button>
                </form>
            </div>



            <div class=" form-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <form class="card">
                    <h2>Пакеты тренировок:</h2>
                    @foreach($card as $el1)
                    <h4>{{$el1->header}}, {{$el1->price}}</h4>
                    @endforeach


                    @foreach($user as $el1)
                    <h2>Остаток на счёте: {{$el1->money}}€</h2>
                    @endforeach
                </form>
            </div>
        </div>
    </div>
@endsection
