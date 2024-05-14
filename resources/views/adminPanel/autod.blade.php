<!doctype html>
<html lang="ee">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            height: 3rem;
            line-height: 3rem;
            background-color: #f5f5f5;
            text-align: center;
        }
    </style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/adminPanel/news">Новости</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/adminPanel/parkimisluba">Парковочные талоны</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/adminPanel/autod">Машины-User</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/adminPanel/users">Список пользователей</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-4">
    <h3>Машины пользователя - Leonti Mishin</h3>
    <div class="row">
        @foreach($cars as $car)
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$car->name}}</h5>
                    <p class="card-text">VIN: {{$car->vin}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="container mt-4">
    <h3>Машины пользователя - Bob Methew</h3>
    <div class="row">
        @foreach($cars as $car)
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$car->name}}</h5>
                    <p class="card-text">VIN: {{$car->vin}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p>© SPTV20 Leonti Mishin </p>
    </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
