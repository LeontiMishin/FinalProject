@extends('layouts.app')
@section('content')
<title>Profile</title>

<style>
    .full-height {
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .content {
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .social-links img {
        transition: all 0.3s ease-in-out;
        margin-top: 15px;
        margin-bottom: 15px;
    }

    .social-links img:hover {
        transform: scale(1.1);
    }

    .form-group label {
        font-weight: bold;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }

    .button{
        margin-top: 15px;
    }

    .container {
    overflow: hidden;
    }
</style>

<div class="container d-flex flex-column justify-content-center py-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="profile-image mb-3">
                <img src="{{ $profile->photo }}" class="rounded-circle" id="profile" style="width: 210px; height: 210px; object-fit: cover;">
                <div class="social-links d-flex justify-content-around mb-2" style="width: 210px;">
                    <a href="{{ $profile->twitter }}" target="_blank"><img src="http://127.0.0.1:8000/images/twitter.png" alt="Twitter" width="32" height="32"></a>
                    <a href="{{ $profile->instagram }}" target="_blank"><img src="http://127.0.0.1:8000/images/instagram.png" alt="Instagram" width="32" height="32"></a>
                    <a href="{{ $profile->facebook }}" target="_blank"><img src="http://127.0.0.1:8000/images/facebook.png" alt="Facebook" width="32" height="32"></a>
                </div>
                <div class="user-details" style="border: 1px solid #ccc; padding: 10px;">
                    <p>Full Name: {{ $profile->full_name }}</p>
                    <p>Email: {{ $profile->email }}</p>
                    <p>Phone: {{ $profile->phone }}</p>
                    <p>Address: {{ $profile->address }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
        <form action="{{ route('profile.update') }}" method="post" enctype="multipart/form-data" class="form-part">
                @csrf
                <div class="form-group">
                    <label for="fullname">Full Name</label>
                    <input type="text" class="form-control" id="fullname" name="full_name" value="{{ $profile->full_name }}">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $profile->email }}">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="tel" class="form-control" id="phone" name="phone" value="{{ $profile->phone }}">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" value="{{ $profile->address }}">
                </div>
                <div class="form-group">
                    <label for="address">Twitter</label>
                    <input type="text" class="form-control" id="address" name="twitter" value="{{ $profile->twitter }}">
                </div>
                <div class="form-group">
                    <label for="address">Instagram</label>
                    <input type="text" class="form-control" id="address" name="instagram" value="{{ $profile->instagram }}">
                </div>
                <div class="form-group">
                    <label for="address">Facebook</label>
                    <input type="text" class="form-control" id="address" name="facebook" value="{{ $profile->facebook }}">
                </div>
                <button type="submit" class="btn btn-primary" style="width: 210px;">Save</button>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            </form>
        </div>
    </div>
</div>

@endsection
