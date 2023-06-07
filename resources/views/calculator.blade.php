@extends('layouts.app')
@section('content')
    <title>Health Calculator</title>

    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

    @endif


    <div class="container-fluid">
        <div class="row">
            <div class="text-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <form method="post" action="{{ route('contact-form') }}" class="card">
                @csrf
                    <label for="basic-url">Вес:</label>
                    <div class="input-group mb-3">
                        <input type="text" name="weight" id="weight" class="form-control" aria-describedby="basic-addon1">
                    </div>

                    <label for="basic-url">Рост:</label>
                    <div class="input-group mb-3">
                        <input type="text" name="height" id="height" class="form-control" aria-describedby="basic-addon1">
                    </div>

                    <label for="basic-url">Возраст:</label>
                    <div class="input-group mb-3">
                        <input type="text" name="age" id="age" class="form-control" aria-describedby="basic-addon1">
                    </div>

                    <label for="basic-url">Выбрать пол (man, women):</label>
                    <input selected name="gender" id="gender"></input>


                    <label for="basic-url">Уровень физической нагрузки:</label>
                        <input selected name="activity" id="activity"></input>
                        <option selected id="easy">1-2 раза (easy)</option>
                        <option value="1" id="medium">2-3 раза (medium)</option>
                        <option value="2" id="hard">3-4 раза (hard)</option>

                    <button type="submit" class="btn btn-success">Отправить</button>
                </form>
            </div>

            <div class=" form-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <form class="card">
                    <h2>Данные (User):</h2>

                    @foreach($data as $el)
                        <div class="alert alert-info">
                            <h4>Result: {{ $el->result }} kcal</h4>
                            <p>Weight: {{ $el->weight }}, height: {{ $el->height }}, age:{{ $el->age }}, gender: {{ $el->gender }}, activity: {{ $el->activity }}</p>
                            <p><small>{{ $el->created_at}}</small></p>
                            <!-- <a href="#" class="badge badge-danger"><small>delete</small></a> -->
                        </div>
                    @endforeach

                    <h2>Рекомендации:</h2>
                    <br>
                    <a href="/">-Пакет Кardio</a>
                    <br>
                    <a href="/">-Пакет тренировок Gym</a>
                    <br>
                </form>
            </div>
        </div>
    </div>
@endsection
