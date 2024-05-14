<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\News;
use App\Models\Places;
use App\Models\Profile;
use App\Models\Photo;


class WelcomeController extends Controller
{
    public function index()
    {
        $news = News::orderBy('created_at', 'desc')->take(4)->get();
        $places = Places::find(1);
        $profile = Profile::find(1);

        return view('welcome', compact('news', 'places','profile'));
    }

    public function show($id)
    {
        $news = News::find($id);

        return response()->json($news);
    }
}
