<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Places;

class AdminPanelUsersController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('adminPanel/users', compact('users'));
    }
}
