<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventLogController extends Controller
{
    public function index()
    {
        return view('eventLog');
    }
}
