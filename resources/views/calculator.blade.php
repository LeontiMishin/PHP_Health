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

                    <!-- <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label for="basic-url">Выбрать пол:</label> -->
                    <!-- <select class="custom-select" id="inputGroupSelect02">
                        <option selected name="man" id="man">Мужской</option>
                        <option value="1" name="women" id="women">Женский</option> -->
                        <!-- <label class="btn btn-secondary active" ></label>
                        <input type="radio" name="man" id="man" value="man" autocomplete="off" checked> Active

                        <label class="btn btn-secondary active" for="women">Женщина</label>
                        <input type="radio" name="women" id="women" value="women">
                    </div> -->

                    <!-- <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label for="basic-url">Выбрать пол:</label>
                        <label class="btn btn-secondary">
                            <input type="radio" name="man" id="man" autocomplete="off" checked> Мужчина
                        </label>
                    </div>

                        <label class="btn btn-secondary">
                            <input type="radio" name="women" id="women" autocomplete="off"> Женщина
                        </label> -->



                        <label for="basic-url">Выбрать пол (Man, Women):</label>
                        <input selected name="gender" id="gender"></input>


                    <label for="basic-url">Уровень физической нагрузки:</label>
                    <!-- <select class="custom-select" id="inputGroupSelect03"> -->
                        <input selected name="activity" id="activity"></input>
                        <option selected name="easy" id="easy">1-2 раза (Easy)</option>
                        <option value="1" name="medium" id="medium">2-3 раза (Medium)</option>
                        <option value="2" name="hard" id="hard">3-4 раза (Hard)</option>
                    <!-- </select> -->

                    <button type="submit" class="btn btn-success">Отправить</button>
                </form>
            </div>

            <div class=" form-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <form class="card">
                    <h1>Результат:</h1>
                    <!-- <h2></h2>
                    <h5>При таких введенных данных рекомендовано потребление 3500 ккал/день</h5>
                    <h2></h2>
                    <h5>Рекомендации:</h5>
                    <h5>-Пакет Кardio</h5>
                    <h5>-Пакет тренировок Gym</h5> -->
                </form>
            </div>
        </div>
    </div>
@endsection
