<!doctype html>
<html lang="ee">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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

        .news-block {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            max-width: 90%;
            margin-left: auto;
            margin-right: auto;
        }

        .btn-delete {
            white-space: nowrap;
            padding: 5px 10px;
        }

        .form-container {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
            background-color: #f8f9fa;
        }

        .news-header {
            margin-top: 20px;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
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

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="news-header">Uudiste lisamine</div>
                <div class="form-container">
                    <form action="/adminPanel/news/add" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="newsTitle" class="form-label">Pealkiri</label>
                            <input type="text" class="form-control" id="newsTitle" name="newsTitle">
                        </div>
                        <div class="mb-3">
                            <label for="newsArticle" class="form-label">Artikkel</label>
                            <textarea class="form-control" id="newsArticle" name="newsArticle" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mb-3">Lisa</button>
                    </form>
                </div>
                @foreach($news as $new)
                <div class="news-block">
                    <div>
                        <h4>{{$new->name}}</h4>
                        <p>{{$new->article}}</p>
                        <h6>{{$new->created_at}}</h6>
                    </div>
                    <form action="/adminPanel/news/{{$new->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-delete"><i class="fas"></i>Kustutada</button>
                    </form>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container-fluid">
            <p>© SPTV20 Leonti Mishin </p>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
