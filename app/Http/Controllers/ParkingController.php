<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ParkingSpot;

class ParkingController extends Controller
{
    public function index()
    {
        $spots = ParkingSpot::all();
        return view('parking.index', compact('spots'));
    }

    public function update(Request $request, ParkingSpot $spot)
    {
        $spot->update($request->all());
        return redirect()->route('parking.index');
    }

    public function stats()
    {
    $total = ParkingSpot::count();
    $free = ParkingSpot::where('status', 'free')->count();
    $occupied = $total - $free;
    return compact('total', 'free', 'occupied');
    }

}
