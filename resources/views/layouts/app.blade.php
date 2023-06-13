<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <h2 class="text-center">SPTV20 Healthy Lifestyle</h2>
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
        @foreach($user as $el1)
        <li>
        <span class="badge badge-light align-right">{{$el1->money}}€</span>
        </li>
        @endforeach
    </ul>

</head>
<body>
    @yield('content')
</body>
<!-- FOOTER -->
<footer class="container">
    <p>&copy; SPTV20 Leonti Mishin 2023 &middot; <button type="button" class="badge badge-success" data-toggle="modal" data-target="#staticBackdrop">
      info
    </button></p>

<!-- Модальное окно -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">About us</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="h2">Leonti Mishin SPTV20</div>
        <div class="h6">Mail: leonti.gold@gmail.com</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Ок</button>
      </div>
    </div>
  </div>
</div>
  </footer>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</html>
