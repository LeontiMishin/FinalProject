<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tickets;
use App\Models\Places;

class AdminPanelParkimislubaController extends Controller
{
    public function index()
    {
        $tickets = Tickets::all();

        return view('adminPanel/parkimisluba', compact('tickets'));
    }
}
