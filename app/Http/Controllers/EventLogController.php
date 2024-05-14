<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cars;
use Sunrise\Vin\Vin;
use App\Models\Profile;

class EventLogController extends Controller
{
    public function index()
    {
        $profile = Profile::find(1);
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

        return view('eventLog', compact('cars', 'profile'));
    }

    public function addCar(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'vin' => 'required|string|max:255|unique:cars,vin', // Проверяем уникальность VIN
            'photo' => 'nullable|string|max:255'
        ]);

        $car = new Cars();
        $car->name = $request->name;
        $car->vin = $request->vin;
        $car->photo = $request->photo;
        $car->save();

        return redirect()->route('eventLog.index')->with('success', 'Машина добавлена успешно.');
    }

    public function delete($id)
{
    $car = Cars::findOrFail($id);
    $car->delete();
    return redirect()->route('eventLog.index')->with('success', 'Машина удалена успешно');
}


}
