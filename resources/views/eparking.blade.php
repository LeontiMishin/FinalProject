@extends('layouts.app')
@section('content')
<title>E-Parkimine</title>

<style>

    .card-img {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
    }
    .img {
        margin-top: 200px;
    }
    .card {
        margin-top: 60px;
        margin-left: 40px;
    }
    .color1 {
        background-color: #6DB9FF;
    }
    .color2 {
        background-color: #AFFFCF;
    }
    .card-text, .card-title {
        margin-bottom: 10px;
        padding: 8px;
    }
    body {
        overflow-x: hidden;
    }
    .row {
        overflow-x: hidden;
    }

</style>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-sm-4">
            <div class="card color1">
            <div class="card-body text-center">
                <h3 class="card-title">Parkimisluba</h3>
                <p class="card-text" style="margin-bottom: 70px;">Kangelaste 34/NR.473673</p>
                <h2 class="card-title">078 BFP</h2>
                <h4 class="card-title" style="margin-bottom: 70px;">Leonti Mishin</h4>
                <p class="card-text">Kehtivus: 12.10.2025</p>
            </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card color2">
            <div class="card-body text-center">
            <h3 class="card-title">Parkimisluba - külaline</h3>
                <p class="card-text" style="margin-bottom: 70px;">Kangelaste 34/NR.473674</p>
                <h2 class="card-title">290 TKD</h2>
                <h4 class="card-title" style="margin-bottom: 70px;">Andrei Mishin</h4>
                <p class="card-text">Kehtivus: 02.11.2025</p>
            </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="img">
                <div class="card-img">
                    <a href="/addParkimisluba">
                        <img src="http://127.0.0.1:8000/images/add.png" class="mx-auto d-block" alt="logo" width="100" height="100">
                    </a>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>

@endsection
