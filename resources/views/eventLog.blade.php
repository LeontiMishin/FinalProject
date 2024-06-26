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

@foreach($cars as $car)
    <div class="container-fluid">
        <div class="row bg-purple text-white mb-3 align-items-center">
            <div class="col-md-8 text-center">
                <h2>{{ $car->name }}</h2>
            </div>
            <div class="col-md-4 d-flex justify-content-end">
                <img class="car-image" src="{{ $car->photo }}" alt="Car Image">
            </div>
            <button class="btn btn-purple arrow-button" type="button" data-bs-toggle="collapse" data-bs-target="#carStats{{ $loop->index }}" aria-expanded="false" aria-controls="carStats{{ $loop->index }}">
                <i class="fas fa-arrow-down"></i>
            </button>
        </div>
        <div class="collapse bg-grey p-3" id="carStats{{ $loop->index }}">
            <div class="row">
                <div class="col-md-4">
                    @if($car->vinInfo)
                        @foreach($car->vinInfo as $key => $value)
                            <p>{{ $key }}: {{ $value }}</p>
                        @endforeach
                    @else
                        <p>Invalid VIN</p>
                    @endif
                </div>
                <div class="col-md-8">
                    <canvas id="carUsageChart{{ $loop->index }}" width="800" height="400"></canvas>
                    <script>
                        document.addEventListener('DOMContentLoaded', function () {
                            var ctx = document.getElementById('carUsageChart{{ $loop->index }}').getContext('2d');
                            var carUsageChart = new Chart(ctx, {
                                type: 'line',
                                data: {
                                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                                    datasets: [{
                                        label: 'Number of Entries',
                                        data: [12, 19, 3, 5, 2, 3, 9],
                                        backgroundColor: [
                                            'rgba(255, 99, 132, 0.2)',
                                        ],
                                        borderColor: [
                                            'rgba(255, 99, 132, 1)',
                                        ],
                                        borderWidth: 1
                                    }]
                                },
                                options: {
                                    responsive: true,
                                    maintainAspectRatio: false,
                                    scales: {
                                        y: {
                                            beginAtZero: true
                                        }
                                    }
                                }
                            });
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
@endforeach



<div class="container-fluid my-4">
    <div class="text-center">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCarModal">
            Lisa uus auto
        </button>
        <div class="btn-group">
            <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                Auto eemaldada
            </button>
            <ul class="dropdown-menu">
                @foreach($cars as $car)
                    <li>
                        <form action="{{ route('cars.delete', ['id' => $car->id]) }}" method="post">
                            @csrf
                            @method('POST')
                            <button type="submit" class="dropdown-item">{{ $car->name }}</button>
                        </form>
                    </li>
                @endforeach
            </ul>

        </div>
    </div>
</div>

<div class="modal fade" id="addCarModal" tabindex="-1" aria-labelledby="addCarModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addCarModalLabel">Uus auto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('cars.add') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="carName" class="form-label">Auto nimi</label>
                        <input type="text" class="form-control" id="carName" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="carVin" class="form-label">VIN</label>
                        <input type="text" class="form-control" id="carVin" name="vin" required>
                    </div>
                    <div class="mb-3">
                        <label for="carPhoto" class="form-label">Foto (URL)</label>
                        <input type="text" class="form-control" id="carPhoto" name="photo">
                    </div>
                    <button type="submit" class="btn btn-primary">Lisa auto</button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
