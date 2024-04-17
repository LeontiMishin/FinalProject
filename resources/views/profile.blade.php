@extends('layouts.app')
@section('content')
<title>Profile</title>

<div class="container d-flex flex-column justify-content-center py-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="profile-image mb-3" style="width: 210px; height: 210px;">
                <img src="http://127.0.0.1:8000/images/smartParking.png" class="rounded-circle" alt="Profile Image" style="width: 100%; height: 100%; object-fit: cover;">

            <div class="social-links d-flex justify-content-around mb-2" style="margin-top: 20px; margin-bottom: 20px;">
                <a href="https://twitter.com/username" target="_blank"><img src="http://127.0.0.1:8000/images/twitter.png" alt="Twitter" width="32" height="32"></a>
                <a href="https://instagram.com/username" target="_blank"><img src="http://127.0.0.1:8000/images/instagram.png" alt="Instagram" width="32" height="32"></a>
                <a href="https://facebook.com/username" target="_blank"><img src="http://127.0.0.1:8000/images/facebook.png" alt="Facebook" width="32" height="32"></a>
            </div>
            <div class="user-details">
                <p>Full Name: Leonti Mishin</p>
                <p>Email: leonti.gold@gmail.com</p>
                <p>Phone: 58746356</p>
                <p>Address: Kangelaste 56-25</p>
            </div>
            </div>
        </div>

        <div class="col-md-4">
            <form action="/profile" method="post">
                @csrf
                <div class="form-group">
                    <label for="fullname">Full Name</label>
                    <input type="text" class="form-control" id="fullname" name="fullname" value="Leonti Mishin">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="leonti.gold@gmail.com">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="tel" class="form-control" id="phone" name="phone" value="58746356">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" value="Kangelaste 56-25">
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>

@endsection
