@extends('layouts.app')
@section('content')
<title>TarkTee</title>

<div class="card mb-2" style="height: 100vh; display: flex; flex-direction: column;">
    <iframe src="https://tarktee.ee/#/en/link/NiM3PL8eqlUX" style="flex-grow: 1;" frameborder="0"></iframe>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-3">
                <a href="https://tarktee.ee/#/et">
                    <img src="http://127.0.0.1:8000/images/TarkTee.png" class="img-fluid" alt="TarkTee">
                </a>
            </div>
            <div class="col-sm-3">
                <a href="https://www.transpordiamet.ee/">
                    <img src="http://127.0.0.1:8000/images/Transpordiamet.png" class="img-fluid" alt="Transpordiamet">
                </a>
            </div>
            <div class="col-sm-3">
                <a href="https://www.riigiteataja.ee/index.html">
                    <img src="http://127.0.0.1:8000/images/RiigiTeataja.png" class="img-fluid" alt="RiigiTeataja">
                </a>
            </div>
            <div class="col-sm-3">
                <a href="https://www.eesti.ee/et">
                    <img src="http://127.0.0.1:8000/images/EestiEE.png" class="img-fluid" alt="Eesti.ee">
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
