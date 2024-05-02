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
            @if($car->vinInfo)
                @foreach($car->vinInfo as $key => $value)
                    <p>{{ $key }}: {{ $value }}</p>
                @endforeach
            @else
                <p>Invalid VIN</p>
            @endif
        </div>
    </div>
@endforeach

@endsection
