<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Health Calculator</title>
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link active" href="/">Main</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/calculator">Calculator</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/registration">Registration</a>
        </li>
    </ul>
</head>
<body>
    <!-- <h1>Calculator</h1>

    @if(isset($result))
        <p>You {{ $result }}!</p>
    @endif

    <form method="POST" action="{{ route('health.calculator') }}">
        @csrf
        <label for="rock">Rock</label>
        <input type="radio" name="choice" id="rock" value="rock">
        <label for="paper">Paper</label>
        <input type="radio" name="choice" id="paper" value="paper">
        <label for="scissors">Scissors</label>
        <input type="radio" name="choice" id="scissors" value="scissors">
        <button type="submit">Play</button>
    </form> -->

    <!-- <form method="POST" action="{{ route('health.calculator') }}" class="card">
        <label for="basic-url">Вес:</label>
        <div class="input-group mb-3">
            <input type="text" name="choice" id="weight" class="form-control" aria-describedby="basic-addon1">
        </div>

        <label for="basic-url">Рост:</label>
        <div class="input-group mb-3">
            <input type="text" name="choice" id="height" class="form-control" aria-describedby="basic-addon1">
        </div>

        <label for="basic-url">Возраст:</label>
        <div class="input-group mb-3">
            <input type="text" name="choice" id="age" class="form-control" aria-describedby="basic-addon1">
        </div>

        <label for="basic-url">Выбрать пол:</label>
        <select class="custom-select" id="inputGroupSelect02">
            <option selected name="choice" id="men">Мужской</option>
            <option value="1" name="choice" id="women">Женский</option>
        </select>
        <button type="submit">Go</button>
    </form> -->


    <div class="container-fluid">
        <div class="row">
            <div class="text-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <form method="POST" action="{{ route('health.calculator') }}" class="card">
                    <label for="basic-url">Вес:</label>
                    <div class="input-group mb-3">
                        <input type="text" name="choice" id="weight" class="form-control" aria-describedby="basic-addon1">
                    </div>

                    <label for="basic-url">Рост:</label>
                    <div class="input-group mb-3">
                        <input type="text" name="choice" id="height" class="form-control" aria-describedby="basic-addon1">
                    </div>

                    <label for="basic-url">Возраст:</label>
                    <div class="input-group mb-3">
                        <input type="text" name="choice" id="age" class="form-control" aria-describedby="basic-addon1">
                    </div>

                    <label for="basic-url">Выбрать пол:</label>
                    <select class="custom-select" id="inputGroupSelect02">
                        <option selected name="choice" id="men">Мужской</option>
                        <option value="1" name="choice" id="women">Женский</option>
                    </select>

                    <label for="basic-url">Уровень физической нагрузки:</label>
                    <select class="custom-select" id="inputGroupSelect03">
                        <option selected name="choice" id="men">1-2 раза (Easy)</option>
                        <option value="1" name="choice" id="women">2-3 раза (Medium)</option>
                        <option value="1" name="choice" id="women">3-4 раза (Hard)</option>
                    </select>

                    <button type="submit">Go</button>
                </form>
            </div>

            <div class=" form-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <form class="card">
                    <h1>Результат:</h1>
                    <h2></h2>
                    <h5>При таких введенных данных рекомендовано потребление 3500 ккал/день</h5>
                    <h2></h2>
                    <h5>Рекомендации:</h5>
                    <h5>-Пакет Кardio</h5>
                    <h5>-Пакет тренировок Gym</h5>
                </form>
            </div>
        </div>
    </div>




</body>
</html>
