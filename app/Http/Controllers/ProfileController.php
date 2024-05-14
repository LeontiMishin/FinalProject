<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Profile;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = Profile::find(1); // предполагаем, что у вас уже есть профиль с id = 1
        return view('profile', ['profile' => $profile]);
    }

    public function update(Request $request)
    {
        $profile = Profile::find(1); // получаем профиль пользователя

        // Обновляем данные
        $profile->full_name = $request->input('fullname');
        $profile->email = $request->input('email');
        $profile->phone = $request->input('phone');
        $profile->address = $request->input('address');
        $profile->twitter = $request->input('twitter');
        $profile->instagram = $request->input('instagram');
        $profile->facebook = $request->input('facebook');

        // Обработка загрузки изображения
        if ($request->hasFile('profileImage') && $request->file('profileImage')->isValid()) {
            $path = $request->file('profileImage')->store('public/profile_images');
            $profile->photo = Storage::url($path);
        }

        $profile->save(); // Сохраняем изменения

        return redirect()->back()->with('success', 'Профиль успешно обновлен');
    }
}
