@extends('layouts.app')
@section('content')
<title>TarkTee</title>

<div class="card mb-2" style="height: 75vh; display: flex; flex-direction: column;">
    <iframe src="https://tarktee.ee/#/en/link/NiM3PL8eqlUX" style="flex-grow: 50;" frameborder="0"></iframe>
    <div class="card-body" style="padding-top: 10px;">
        <div class="row">
            <div class="col-sm-3">
                <a href="https://tarktee.ee/#/et">
                    <img src="http://127.0.0.1:8000/images/TarkTee.png" class="img-fluid" alt="TarkTee" style="width: 94%; height: auto;">
                </a>
            </div>
            <div class="col-sm-3">
                <a href="https://www.transpordiamet.ee/">
                    <img src="http://127.0.0.1:8000/images/Transpordiamet.png" class="img-fluid" alt="Transpordiamet" style="width: 75%; height: auto;">
                </a>
            </div>
            <div class="col-sm-3">
                <a href="https://www.riigiteataja.ee/index.html">
                    <img src="http://127.0.0.1:8000/images/RiigiTeataja.png" class="img-fluid" alt="RiigiTeataja" style="width: 80%; height: auto;">
                </a>
            </div>
            <div class="col-sm-3">
                <a href="https://www.eesti.ee/et">
                    <img src="http://127.0.0.1:8000/images/EestiEE.png" class="img-fluid" alt="Eesti.ee" style="width: 50%; height: auto;">
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
