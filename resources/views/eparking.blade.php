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
    display: flex;
    flex-direction: row;
    align-items: stretch;
}
</style>

<div class="container-fluid">
    <div class="row justify-content-center">

        @foreach($tickets as $new)
        <div class="col-sm-4">
            <div class="card {{$new->color}}">
                <div class="card-body text-center">
                    <h3 class="card-title">{{$new->title}}</h3>
                    <p class="card-text" style="margin-bottom: 70px;">Kangelaste 34/NR. {{$new->number}}</p>
                    <h2 class="card-title">{{$new->carPlate}}</h2>
                    <h4 class="card-title" style="margin-bottom: 70px;">{{$new->fullName}}</h4>
                    <p class="card-text">Kehtivus: {{$new->date}}</p>
                </div>
            </div>
        </div>
        @endforeach

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
