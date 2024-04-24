<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Statement;

class AddParkimislubaController extends Controller
{
    public function index()
    {
        return view('addParkimisluba');
    }

    public function store(Request $request)
    {
        $statement = new Statement;
        $statement->fullName = $request->fullname;
        $statement->regNumber = $request->regnumber;
        $statement->save();

        return back()->with('success', 'Заявление успешно отправлено!');
    }
}
