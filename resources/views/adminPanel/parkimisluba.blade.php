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
        input[type="text"] {
        width: 100%;
        padding: 0.5rem;
        margin-bottom: 0.5rem;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
        box-sizing: border-box;
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
            <div class="right-side">
                <div class="profile-section">
                    <form>
                        <a href="/" type="submit" class="btn btn-danger logout-btn" style="width: 85px;">Log Out</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</nav>

<div class="container mt-4">
    <h3>Parkimisload</h3>
    <div class="alert alert-info" role="alert">
        <h3>{{ $profile->full_name }}, Email: {{ $profile->email }}</h3>

    <div class="row row-cols-1 row-cols-md-3">
        @foreach($tickets as $ticket)
        <div class="col mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$ticket->title}}</h5>
                    <p class="card-text">
                        <strong>Nr.:</strong> {{$ticket->number}}<br>
                        <strong>Auto number:</strong> {{$ticket->carPlate}}<br>
                        <strong>Täisnimi:</strong> {{$ticket->fullName}}<br>
                        <strong>Kuupäev:</strong> {{$ticket->date}}
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <h3>Bob Methew, Email: bob@gmail.com</h3>
    <div class="row row-cols-1 row-cols-md-3">
        <div class="col mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Parkimisluba</h5>
                    <p class="card-text">
                        <strong>Nr.:</strong> 13432<br>
                        <strong>Auto number:</strong> 564BTJ<br>
                        <strong>Täisnimi:</strong> Bob Methew<br>
                        <strong>Kuupäev:</strong> 2025-04-12
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>





    <h3>Avaldused</h3>
    <div class="alert alert-secondary" role="alert">
    <div class="row row-cols-1 row-cols-md-3">
        @foreach($statements as $statement)
        <div class="col mb-4" id="card_{{ $statement->id }}">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $statement->fullName }}</h5>
                    <p class="card-text">
                        <strong>Auto number:</strong> {{ $statement->regNumber }}<br>
                    </p>
                    <img src="{{ $statement->signature }}" alt="Подпись" class="img-fluid">
                </div>
                <div>
                    <strong>Title:</strong> <input id="title_{{ $statement->id }}" type="text" class="form-control" placeholder="Parkimisluba"><br>
                    <strong>Number:</strong> <input id="number_{{ $statement->id }}" type="text" class="form-control" placeholder="135467"><br>
                    <strong>Date:</strong> <input id="date_{{ $statement->id }}" type="date" class="form-control" placeholder="Date"><br>
                    <strong>Color:</strong> <input id="color_{{ $statement->id }}" type="text" class="form-control" placeholder="color1, color2(külaline)"><br>
                    <button onclick="submitTicket({ $ticket:id })" class="btn btn-primary">Отправить</button>
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
<script>
    function submitTicket(statementId) {
        var formData = {
            fullname: $('#fullname_' + statementId).val(),
            regNumber: $('#regNumber_' + statementId).val(),
            title: $('#title_' + statementId).val(),
            number: $('#number_' + statementId).val(),
            date: $('#date_' + statementId).val(),
            color: $('#color_' + statementId).val()
        };

        $.ajax({
            type: 'POST',
            url: '/submit1',
            data: formData,
            dataType: 'json',
            success: function(response) {
                console.log('Данные успешно отправлены на сервер');
                $('#card_' + statementId).remove();
            },
            error: function(error) {
                console.error('Ошибка при отправке данных на сервер:', error);
            }
        });
    }
</script>
</body>
</html>
