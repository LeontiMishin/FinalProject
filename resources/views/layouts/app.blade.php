<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
        .logo {
        margin-left: 30px; /* Отступ от левого края */
        border: 2px solid rgba(0, 0, 0, 0.1); /* Расстворенная рамка */
        }
    </style>
    <nav class="navbar navbar-expand-lg navbar-dark justify-content-center" style="background-color: #34558b;">
    <div style="display: flex; justify-content: space-between; align-items: center; width: 100%;">
        <a href="/main" style="margin-right: 15px;">
            <img src="http://127.0.0.1:8000/images/smartParking.png" class="rounded float-left logo" alt="logo" width="100" height="100" style="border: 3px solid black;">
        </a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link h2 text-white" aria-current="page" href="/login">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link h2 text-white" aria-current="page" href="/main">Main </a>
            </li>
            <li class="nav-item">
                <a class="nav-link h2 text-white" href="/e-parking">E-parking </a>
            </li>
            <li class="nav-item">
                <a class="nav-link h2 text-white" href="/tarkTee">Tark Tee </a>
            </li>
            <li class="nav-item">
                <a class="nav-link h2 text-white" href="/eventLog">Event log </a>
            </li>
        </ul>
        <a href="/profile">
            <img src="http://127.0.0.1:8000/images/profile.png" class="rounded float-left" alt="logo" width="85" height="80">
        </a>
    </div>
    </nav>
  </head>

  <body>
  @yield('content')
  </body>

  <footer class="container text-center">
    <p>© SPTV20 Leonti Mishin 2024 </p>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</html>
