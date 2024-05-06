<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\News;
use App\Models\Cars;

class AdminPanelAutodController extends Controller
{
    public function index()
    {
        $news = News::all();
        $cars = Cars::all();

        return view('adminPanel/autod', compact('news', 'cars'));
    }
}
