<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Login</title>
    <style>
    body {
      background: url('http://127.0.0.1:8000/images/car.jpg') center center/cover no-repeat fixed;
    }

    .card {
      background-color: rgba(255, 255, 255, 0.8);
    }
    </style>

</head>
<body>
    <div class="container">
    <div class="row min-vh-100 justify-content-center align-items-center">
        <div class="col-md-6">
        <div class="card">
            <div class="card-body">
            <h5 class="card-title text-center">Login</h5>
            <form>
                <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                <div class="mb-3">
                    <a class="" aria-current="page" href="/main">Main</a>
                </div>
            </form>
            </div>
        </div>
        <p>&copy; SPTV20 Leonti Mishin 2024 </p>
        </div>
    </div>
    </div>
</body>

<footer class="container text-center">
    <p>&copy; SPTV20 Leonti Mishin 2024 </p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</html>
