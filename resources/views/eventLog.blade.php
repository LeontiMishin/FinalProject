@extends('layouts.app')
@section('content')
<title>Auto</title>

<style>
    .bg-purple {
        background-color: #959DC6;
        border-radius: 13px;
    }
    .btn-purple{
        background-color: #8189B0;
    }

    .car-image {
        width: 100%;
        max-width: 280px;
        margin-left: auto;
    }

    .collapse {
        border-radius: 20px;
    }

    .arrow-button {
        display: block;
        margin: 0 auto;
    }

    .container {
        max-width: 100%;
        padding: 0;
    }
    .d-flex {
    justify-content: end;
    padding: 0;
    margin: 0;
}
</style>

<div class="container-fluid">
        <div class="row bg-purple text-white mb-3 align-items-center">
            <div class="col-md-8 text-center">
                <h2>Wolksvagen Passat b7</h2>
            </div>
            <div class="col-md-4 d-flex justify-content-end">
                <img class="car-image" src="http://127.0.0.1:8000/images/wolksvagen.png" alt="Car Image">
            </div>
            <button class="btn btn-purple arrow-button" type="button" data-bs-toggle="collapse" data-bs-target="#carStats1" aria-expanded="false" aria-controls="carStats1">
                <i class="fas fa-arrow-down"></i>
            </button>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="collapse bg-grey p-3" id="carStats1">
                    <h4>Статистика машины</h4>
                </div>
            </div>
        </div>

        <div class="row bg-purple text-white mb-3 align-items-center">
            <div class="col-md-8 text-center">
                <h2>Opel Astra</h2>
            </div>
            <div class="col-md-4 d-flex justify-content-end">
                <img class="car-image" src="http://127.0.0.1:8000/images/opel.png" alt="Car Image">
            </div>
            <button class="btn btn-purple arrow-button" type="button" data-bs-toggle="collapse" data-bs-target="#carStats2" aria-expanded="false" aria-controls="carStats2">
                <i class="fas fa-arrow-down"></i>
            </button>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="collapse bg-grey p-3" id="carStats2">
                    <h4>Статистика машины</h4>
                </div>
            </div>
        </div>
</div>

@endsection
