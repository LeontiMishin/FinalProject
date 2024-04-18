@extends('layouts.app')
@section('content')
<title>Avaleht</title>

<style>
    .car-image:hover {
        transform: scale(1.2);
        transition: transform 0.3s ease;
    }
    .car-image {
        border-radius: 15px;
    }
    .image-block {
        display: flex;
        justify-content: flex-end;
    }
    .card {
        width: 100%;
    }
    @media (min-width: 769px) {
        .card {
            width: 135rem;
        }
    }
    .image-placeholder {
        height: auto;
    }
</style>

<div class="container-fluid">
    <div class="d-flex flex-column flex-md-row">
    <div class="card mb-3 mb-md-0" style="max-width: 135rem;">
        <table class="table">
        <tbody>
            <tr class="text-center">
            <th scope="row">Kokku: 12</th>
            <td></td>
            </tr>
            <tr>
            <th scope="row">Vabad:</th>
            <td>5</td>
            </tr>
            <tr>
            <th scope="row">Hõivatud:</th>
            <td colspan="2">7</td>
            </tr>
        </tbody>
        </table>
        <div class="progress">
        <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 35%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">64%</div>
        <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 65%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">36%</div>
        </div>
        <div class="card mt-3" style="max-width: 50rem; width: 100%;" >
            <div class="card-body text-center">
            <h5 class="card-title">Uudised</h5>
            <p class="card-text">
                <a href="#">Uudis 1</a><br>
                <a href="#">Uudis 2</a><br>
                <a href="#">Uudis 3</a>
            </p>
            </div>
        </div>
    </div>
    <div class="image-placeholder d-flex flex-column align-items-center justify-content-center" style="flex-grow: 1; height: 76vh; background-color: #eee; position: relative;">
        <div class="row">
        <div class="col-12 d-flex justify-content-center flex-wrap">
            <img class="car-image" src="http://127.0.0.1:8000/images/carFront.jpg" alt="Car 1" style="width: 9%; height: 100%; object-fit: contain;">
            <img class="car-image" src="http://127.0.0.1:8000/images/carFrontRed.jpg" alt="Car 2" style="width: 9%; height: 100%; object-fit: contain;">
            <img class="car-image" src="http://127.0.0.1:8000/images/carFront.jpg" alt="Car 3" style="width: 9%; height: 100%; object-fit: contain;">
            <img class="car-image" src="http://127.0.0.1:8000/images/carFront.jpg" alt="Car 4" style="width: 9%; height: 100%; object-fit: contain;">
            <img class="car-image" src="http://127.0.0.1:8000/images/carFrontRed.jpg" alt="Car 5" style="width: 9%; height: 100%; object-fit: contain;">
            <img class="car-image" src="http://127.0.0.1:8000/images/carFrontRed.jpg" alt="Car 6" style="width: 9%; height: 100%; object-fit: contain;">
            <img class="car-image" src="http://127.0.0.1:8000/images/carFront.jpg" alt="Car 7" style="width: 9%; height: 100%; object-fit: contain;">
        </div>
        <div class="col-12 d-flex justify-content-center">
            <img src="http://127.0.0.1:8000/images/road.jpg" alt="Road" style="width: 65%; height: auto; object-fit: cover;">
        </div>
        <div class="col-12 d-flex justify-content-center flex-wrap">
            <img class="car-image" src="http://127.0.0.1:8000/images/carBack.jpg" alt="Car 8" style="width: 9%; height: 100%; object-fit: contain;">
            <img class="car-image" src="http://127.0.0.1:8000/images/carBack.jpg" alt="Car 9" style="width: 9%; height: 100%; object-fit: contain;">
            <img class="car-image" src="http://127.0.0.1:8000/images/carBackRed.jpg" alt="Car 10" style="width: 9%; height: 100%; object-fit: contain;">
            <img class="car-image" src="http://127.0.0.1:8000/images/carBack.jpg" alt="Car 11" style="width: 9%; height: 100%; object-fit: contain;">
            <img class="car-image" src="http://127.0.0.1:8000/images/carBackRed.jpg" alt="Car 12" style="width: 9%; height: 100%; object-fit: contain;">
            <img class="car-image" src="http://127.0.0.1:8000/images/carBack.jpg" alt="Car 13" style="width: 9%; height: 100%; object-fit: contain;">
            <img class="car-image" src="http://127.0.0.1:8000/images/carBack.jpg" alt="Car 14" style="width: 9%; height: 100%; object-fit: contain;">
        </div>
        </div>
    </div>
    </div>
</div>

@endsection
