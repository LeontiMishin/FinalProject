<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Login AdminPanel</title>
    <style>
    html, body {
        height: 100%;
        margin: 0;
        overflow-x: hidden;
    }
    @media (max-width: 576px) {
    .card {
        margin: 10px;
        padding: 10px;
    }

    .container{
        padding: 5px;
    }

    .row {
    min-height: 100vh;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    }

    .card {
        overflow: hidden;
    }

    .form-control {
        font-size: 12px;
    }
}
    body {
      background-color: #dfe8f7;
    }

    .card {
      background-color: rgba(255, 255, 255, 0.8);
    }
    .navbar {
        background-color: rgba(255, 255, 255, 0.5);
        backdrop-filter: blur(10px);
    }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="">Nutikas Parkimine</a>
        <div class="d-flex">
            <a class="btn btn-outline-success" href="/">Login</a>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row min-vh-100 justify-content-center align-items-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Admin Panel</h5>
                    <ul>
                        @foreach ($errors->all() as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    <form action="{{ route('login') }}" method="post" class="needs-validation" novalidate>
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Username</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            <div class="invalid-feedback">
                                Пожалуйста, введите адрес электронной почты.
                            </div>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required autocomplete="current-password">
                            <div class="invalid-feedback">
                                Пожалуйста, введите пароль.
                            </div>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-check mb-6">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember">
                            <label class="form-check-label" for="remember">
                                Remember me
                            </label>
                        </div>
                        <a class="btn btn-primary" aria-current="page" href="/adminPanel/news">Login</a>
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                Забыли пароль?
                            </a>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script>
(function () {
  'use strict'

  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>
</body>
</html>
