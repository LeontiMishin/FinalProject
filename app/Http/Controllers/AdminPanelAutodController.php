<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\News;
use App\Models\Places;

class AdminPanelAutodController extends Controller
{
    public function index()
    {
        $news = News::all();

        return view('adminPanel/autod', compact('news'));
    }
}
