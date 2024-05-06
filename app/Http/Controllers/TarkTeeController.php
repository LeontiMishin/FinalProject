<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Profile;

class TarkTeeController extends Controller
{
    public function index()
    {
        $profile = Profile::find(1);

        return view('tarkTee', compact('profile'));
    }
}
