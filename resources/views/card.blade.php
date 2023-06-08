<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link active" href="/">Main</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/calculatorAll">Calculator</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/training">Training</a>
        </li>
        <!-- <li class="nav-item">
            <a class="nav-link" href="/registration">Registration</a>
        </li> -->
    </ul>

</head>
<body>






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
            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-4" style="max-width: 200px;">
                    <img class="card-img-top" src="{{$el->img}}" alt="img">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h4 class="card-title text-center">{{$el->name}}</h4>
                        <br>
                        <h6 class="card-title text-center">{{$el->description}}</h6>
                    </div>
                    </div>
                </div>
            </div>
            @endforeach
            </div>
        </div>




</body>
</html>
