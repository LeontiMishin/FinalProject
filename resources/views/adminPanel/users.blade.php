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
    <h3>Kasutajad</h3>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Nimi</th>
                    <th scope="col">Email</th>
                    <th scope="col">Loomise kuupäev</th>
                    <th scope="col">Värskendamise kuupäev</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->created_at}}</td>
                    <td>{{$user->updated_at}}</td>
                    <td>
                        <button type="button" class="btn btn-danger">Kustutada</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
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
