<!doctype html>
<html lang="ee">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>

  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/adminPanel/news">Новости</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Парковочные талоны</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Машины-User</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Список пользователей</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

  <body>
  <div class="content">
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                @foreach($news as $new)
                    <h6 data-bs-toggle="modal" data-bs-target="#newsModal" class="">{{$new->name}}</h6>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#newsModal" class="">{{$new->article}}</a><br>
                    <h6 data-bs-toggle="modal" data-bs-target="#newsModal" class="">{{$new->created_at}}</h6>
                @endforeach
    </main>
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
