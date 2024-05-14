<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Statement;
use Illuminate\Support\Facades\Log;
use App\Models\Profile;
use App\Models\Tickets;

class AddParkimislubaController extends Controller
{
    public function index()
    {
        $profile = Profile::find(1);
        $tickets = Tickets::all();
        return view('addParkimisluba', compact('tickets','profile'));
    }

    public function store(Request $request)
    {
        Log::info('Received data:', $request->all());

        $validated = $request->validate([
            'fullname' => 'required|string|max:255',
            'regnumber' => 'required|string|max:255',
            'signature' => 'required|string'
        ]);

        Log::info('Validated data:', $validated);

        try {
            $parking = new Statement();
            $parking->fullName = $request->input('fullname');
            $parking->regNumber = $request->input('regnumber');
            $parking->signature = $request->input('signature');
            $parking->save();

            Log::info('Received data:', $request->all());
            Log::info('Data saved:', $parking->toArray());


            Log::info('Record saved successfully');
            return redirect()->back()->with('success', 'Парковочный талон успешно отправлен!');
        } catch (\Exception $e) {
            Log::error('Error saving record: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Ошибка при сохранении: ' . $e->getMessage());
        }
    }
    public function destroy($id)
    {
        try {
            $ticket = Tickets::findOrFail($id);
            $ticket->delete();
            return response()->json(['success' => true, 'message' => 'Number kustutatud']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Viga numbra kustutamisel: ' . $e->getMessage()], 500);
        }
    }

}
