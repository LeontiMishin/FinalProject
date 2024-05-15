<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;

class AdminPanelController extends Controller
{
    public function index()
    {
        return view('adminPanel/adminPanel');
    }

}
