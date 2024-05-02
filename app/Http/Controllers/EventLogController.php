<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cars;
use Sunrise\Vin\Vin;

class EventLogController extends Controller
{
    public function index()
    {
        $cars = Cars::all();

        foreach ($cars as $car) {
            try {
                $vin = new Vin($car->vin);
                $car->vinInfo = [
                    'WMI' => $vin->getWmi(),
                    'VDS' => $vin->getVds(),
                    'VIS' => $vin->getVis(),
                    'Region' => $vin->getRegion(),
                    'Country' => $vin->getCountry(),
                    'Manufacturer' => $vin->getManufacturer(),
                    'Model Year' => implode(', ', $vin->getModelYear())
                ];
            } catch (\InvalidArgumentException $e) {
                $car->vinInfo = null;
            }
        }

        return view('eventLog', compact('cars'));
    }
}
