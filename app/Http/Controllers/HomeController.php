<?php

namespace App\Http\Controllers;

use App\Models\Theme;
use App\Models\Photo;

class HomeController extends Controller
{
    public function index()
    {
        // Get the current theme
        $currentTheme = Theme::latest('updated_at')->first();

        // Get top 25 photos by likes
        $topPhotos = Photo::where('theme_id', $currentTheme->id)
            ->orderByDesc('likes_count')
            ->take(25)
            ->get();

        return view('home', compact('currentTheme', 'topPhotos'));
    }
}
