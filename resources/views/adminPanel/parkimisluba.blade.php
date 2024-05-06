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
    <h3>Парковочные талоны</h3>
    <div class="alert alert-info" role="alert">
        <h3>{{ $profile->full_name }}, Email: {{ $profile->email }}</h3>

    <div class="row row-cols-1 row-cols-md-3">
        @foreach($tickets as $ticket)
        <div class="col mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$ticket->title}}</h5>
                    <p class="card-text">
                        <strong>Номер:</strong> {{$ticket->number}}<br>
                        <strong>Номер машины:</strong> {{$ticket->carPlate}}<br>
                        <strong>Полное имя:</strong> {{$ticket->fullName}}<br>
                        <strong>Дата:</strong> {{$ticket->date}}
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <h3>Bob Methew, Email: bob@gmail.com</h3>
    <div class="row row-cols-1 row-cols-md-3">
        @foreach($tickets as $ticket)
        <div class="col mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$ticket->title}}</h5>
                    <p class="card-text">
                        <strong>Номер:</strong> {{$ticket->number}}<br>
                        <strong>Номер машины:</strong> {{$ticket->carPlate}}<br>
                        <strong>Полное имя:</strong> {{$ticket->fullName}}<br>
                        <strong>Дата:</strong> {{$ticket->date}}
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>





    <h3>Заявки</h3>
    <div class="alert alert-secondary" role="alert">
    <div class="row row-cols-1 row-cols-md-3">
        @foreach($statements as $statement)
        <div class="col mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$statement->fullName}}</h5>
                    <p class="card-text">
                        <strong>Регистрационный номер:</strong> {{$statement->regNumber}}<br>
                    </p>
                    <img src="{{$statement->signature}}" alt="Подпись" class="img-fluid">
                </div>
            </div>
        </div>
        @endforeach
    </div>
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
