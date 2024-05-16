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
    public function destroy($id)
{
    $user = User::find($id);

    if ($user) {
        $user->delete();
        return response()->json(['success' => true]);
    } else {
        return response()->json(['success' => false, 'message' => 'Kasutajat ei leitud.']);
    }
}
}
