<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EparkingController extends Controller
{
    public function index()
    {
        return view('eparking');
    }
}
