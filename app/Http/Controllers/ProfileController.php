<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        $profile = Profile::find(1);

        return view('profile', ['profile' => $profile]);
    }
}
