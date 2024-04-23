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
        overflow: hidden;
    }
    .news-link {
        font-size: 1em;
        border: 1px solid #000;
        padding: 10px;
        margin-bottom: 10px;
        display: inline-block;
        width: 100%;
        text-align: left;
        border-radius: 7px;
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
                        <td>{{ $places-> free }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Hõivatud:</th>
                        <td colspan="2">{{ $places-> occupied }}</td>
                    </tr>
                </tbody>
            </table>
            <div class="progress">
                @php
                    $total = 12;
                    $free = $places->free;
                    $occupied = $places->occupied;

                    $freePercentage = ($free / $total) * 100;
                    $occupiedPercentage = ($occupied / $total) * 100;
                @endphp
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: {{ $freePercentage }}%" aria-valuenow="{{ $freePercentage }}" aria-valuemin="0" aria-valuemax="100">{{ round($freePercentage) }}%</div>
                <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: {{ $occupiedPercentage }}%" aria-valuenow="{{ $occupiedPercentage }}" aria-valuemin="0" aria-valuemax="100">{{ round($occupiedPercentage) }}%</div>
            </div>
            <div class="card mt-3" style="max-width: 50rem; width: 100%;" >
                <div class="card-body">
                    <h5 class="card-title text-center">Uudised</h5>
                    <p class="card-text text-left">
                        @foreach($news as $new)
                            <a href="#" data-bs-toggle="modal" data-bs-target="#newsModal" class="news-link" data-id="{{$new->id}}">{{$new->name}}</a><br>
                        @endforeach
                    </p>
                </div>
            </div>
        </div>
        <div class="image-placeholder d-flex flex-column align-items-center justify-content-center" style="flex-grow: 1; height: 76vh; background-color: #eee; position: relative;">
            <div class="row">
                <div class="col-12 d-flex justify-content-center flex-wrap">
                    <img class="car-image" src="http://127.0.0.1:8000/images/carFrontRed.jpg" alt="Car 1" style="width: 9%; height: 100%; object-fit: contain;">
                    <img class="car-image" src="http://127.0.0.1:8000/images/carFront.jpg" alt="Car 2" style="width: 9%; height: 100%; object-fit: contain;">
                    <img class="car-image" src="http://127.0.0.1:8000/images/carFrontRed.jpg" alt="Car 3" style="width: 9%; height: 100%; object-fit: contain;">
                    <img class="car-image" src="http://127.0.0.1:8000/images/carFront.jpg" alt="Car 4" style="width: 9%; height: 100%; object-fit: contain;">
                    <img class="car-image" src="http://127.0.0.1:8000/images/carFrontRed.jpg" alt="Car 5" style="width: 9%; height: 100%; object-fit: contain;">
                    <img class="car-image" src="http://127.0.0.1:8000/images/carFront.jpg" alt="Car 6" style="width: 9%; height: 100%; object-fit: contain;">
                    <img class="car-image" src="http://127.0.0.1:8000/images/carFront.jpg" alt="Car 7" style="width: 9%; height: 100%; object-fit: contain;">
                </div>
                <div class="col-12 d-flex justify-content-center">
                    <img src="http://127.0.0.1:8000/images/road.jpg" alt="Road" style="width: 65%; height: auto; object-fit: cover;">
                </div>
                <div class="col-12 d-flex justify-content-center flex-wrap">
                    <img class="car-image" src="http://127.0.0.1:8000/images/carBack.jpg" alt="Car 8" style="width: 9%; height: 100%; object-fit: contain;">
                    <img class="car-image" src="http://127.0.0.1:8000/images/carBack.jpg" alt="Car 9" style="width: 9%; height: 100%; object-fit: contain;">
                    <img class="car-image" src="http://127.0.0.1:8000/images/carBackRed.jpg" alt="Car 10" style="width: 9%; height: 100%; object-fit: contain;">
                    <img class="" src="http://127.0.0.1:8000/images/roadLeft.jpg" alt="RoadLeft" style="width: 9%; height: 100%; object-fit: contain;">
                    <img class="" src="http://127.0.0.1:8000/images/roadRight.jpg" alt="RoadRight" style="width: 9%; height: 100%; object-fit: contain;">
                    <img class="car-image" src="http://127.0.0.1:8000/images/carBackRed.jpg" alt="Car 13" style="width: 9%; height: 100%; object-fit: contain;">
                    <img class="car-image" src="http://127.0.0.1:8000/images/carBack.jpg" alt="Car 14" style="width: 9%; height: 100%; object-fit: contain;">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="newsModal" tabindex="-1" aria-labelledby="newsModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newsModalLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
$(document).ready(function(){
    $('.news-link').click(function(e){
        e.preventDefault();
        var id = $(this).data('id');
        $.ajax({
            url: '/news/'+id,
            method: 'GET',
            success: function(data){
                $('#newsModalLabel').text(data.name);
                $('.modal-body').text(data.article);
                $('#newsModal').modal('show');
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
            }
        });
    });
});
</script>

@endsection
