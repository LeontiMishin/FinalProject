<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tickets;
use App\Models\Profile;

class EparkingController extends Controller
{
    public function index()
    {
        $profile = Profile::find(1);
        $tickets = Tickets::all();

        return view('eparking', compact('tickets', 'profile'));
    }
}
