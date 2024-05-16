<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tickets;
use App\Models\Statement;
use App\Models\Profile;

class AdminPanelParkimislubaController extends Controller
{
    public function index()
    {
        $tickets = Tickets::all();
        $statements = Statement::all();
        $profile = Profile::find(1);

        return view('adminPanel/parkimisluba', compact('tickets', 'statements', 'profile'));
    }
    public function store(Request $request)
    {
        $ticket = new Tickets;
        $ticket->fullname = $request->fullname;
        $ticket->regNumber = $request->regNumber;
        $ticket->title = $request->title;
        $ticket->number = $request->number;
        $ticket->date = $request->date;
        $ticket->color = $request->color;
        $ticket->save();

        Statement::destroy($request->statement_id);

        return response()->json(['success' => true]);
    }
}
