<!doctype html>
<html lang="ee">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
        body {
            background-color: #ffffff; /* Белый фон */
        }
        .navbar {
            background-color: #e3f2fd;
        }
        .navbar-nav .nav-link {
            color: #000;
        }
        .navbar-nav .nav-link:hover {
            color: #007bff;
        }
        .navbar .right-side .logout-btn {
            background-color: #dc3545;
            color: #fff;
        }
        .navbar .right-side .logout-btn:hover {
            background-color: #c82333;
        }
        h3 {
            color: #343a40;
            text-align: center;
            margin-top: 20px;
        }
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
            margin-bottom: 20px;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .card-body {
            text-align: center;
        }
        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            height: 3rem;
            line-height: 3rem;
            background-color: #f5f5f5;
            color: #343a40;
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
        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/adminPanel/news">Uudised</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/adminPanel/parkimisluba">Parkimisload</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/adminPanel/autod">Autod-User</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/adminPanel/users">Kasutajate loend</a>
                </li>
            </ul>
            <form class="d-flex">
                <a href="/" class="btn btn-danger logout-btn" style="width: 85px;">Log Out</a>
            </form>
        </div>
    </div>
</nav>
<div class="container mt-4">
    <h3>Leonti Mishin</h3>
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
    <h3>Bob Methew</h3>
    <div class="row">
        @foreach($cars as $car)
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Ford Focus</h5>
                    <p class="card-text">VIN: W0VBE6EC1JG056558</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Kia Rio</h5>
                    <p class="card-text">VIN: KNADC517GP6818082</p>
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

