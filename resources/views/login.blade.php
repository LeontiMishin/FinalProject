<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Registration</title>
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
                        <h5 class="card-title text-center">Log In</h5>
                        <ul>
                            @foreach ($errors->all() as $message )
                                <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                        <form action="/login" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required autofocus>
                            </div>
                            @error('email')
                                <p>{{ $message }}</p>
                            @enderror
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="flex justify-between form-check mb-6">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember">
                                <label class="form-check-label" for="remember">
                                    Remember me
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary">Log In</button>
                            <div class="mb-3">
                                <a class="" aria-current="page" href="/register">Register</a>
                            </div>
                        </form>
                    </div>
                </div>
            <p>© SPTV20 Leonti Mishin 2024 </p>
            </div>
        </div>
    </div>
</body>

<footer class="container text-center">
    <p>© SPTV20 Leonti Mishin 2024 </p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</html>
