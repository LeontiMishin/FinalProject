<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\News;
use App\Models\Places;

class WelcomeController extends Controller
{
    public function index()
    {
        $news = News::all();
        $places = Places::find(1);

        return view('welcome', compact('news', 'places'));
    }

    public function show($id)
    {
        $news = News::find($id);

        return response()->json($news);
    }
}
