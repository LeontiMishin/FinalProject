<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\News;
use App\Models\Places;

class AdminPanelNewsController extends Controller
{
    public function index()
    {
        $news = News::all();

        return view('adminPanel/news', compact('news'));
    }
}
