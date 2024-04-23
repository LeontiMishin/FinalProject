<!doctype html>
<html lang="ee">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        .logo {
        margin-left: 50px;
        border: 2px solid rgba(0, 0, 0, 0.1);
        }
        .profile {
            margin-right: 50px;
        }
        html, body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }
        .content {
            flex: 1 0 auto;
            min-height: calc(100vh - 173px);
            overflow: auto;
        }
        .footer {
            flex-shrink: 0;
            background-color: #E3E7EB;
            width: 100%;
            text-align: center;
            padding: 8px 0;
        }
        @media (max-width: 768px) {
            .logo{
                margin-left: 20px;
                width: 70px;
                height: 70px;
            }
            .profile {
                margin-right: 20px;
                width: 75px;
                height: 70px;
            }
            .navbar-nav .nav-link {
                font-size: 16px;
            }
        }
    </style>
    <nav class="navbar navbar-expand-lg navbar-dark justify-content-center" style="background-color: #34558b;">
        <div style="display: flex; justify-content: space-between; align-items: center; width: 100%;">
            <a href="/main" style="margin-right: 15px;">
                <img src="http://127.0.0.1:8000/images/smartParking.png" class="rounded float-left logo" alt="logo" width="100" height="100" style="border: 3px solid black;">
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link h2 text-white" aria-current="page" href="/main">Avaleht</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link h2 text-white" href="/e-parking">E-parkimine</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link h2 text-white" href="/tarkTee">Tark Tee</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link h2 text-white" href="/eventLog">Auto</a>
                </li>
            </ul>
            <a class="profile" href="/profile">
                <img src="http://127.0.0.1:8000/images/profile.png" class="rounded float-left logo2" alt="logo" width="105" height="100">
            </a>
        </div>
    </nav>
  </head>

  <body>
  <div class="content">
  @yield('content')
  </div>
  </body>
  <footer class="footer">
    <p>© SPTV20 Leonti Mishin </p>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <script>
    window.onload = function() {
        var headerHeight = document.querySelector('nav').offsetHeight;
        var footerHeight = document.querySelector('footer').offsetHeight;
        var content = document.querySelector('.content');
        content.style.minHeight = 'calc(100vh - ' + (headerHeight + footerHeight) + 'px)';
    };
  </script>
</html>
