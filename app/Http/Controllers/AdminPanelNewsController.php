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

    public function destroy($id)
    {
        News::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Новость удалена успешно');
    }
    public function store(Request $request)
    {
        // Валидация данных
        $validated = $request->validate([
            'newsTitle' => 'required|max:255',
            'newsArticle' => 'required',
        ]);

        // Создание новости
        $news = new News;
        $news->name = $request->newsTitle;
        $news->article = $request->newsArticle;
        $news->save();

        // Перенаправление обратно с сообщением об успехе
        return redirect('/adminPanel/news')->with('success', 'Новость добавлена успешно!');
    }
}
