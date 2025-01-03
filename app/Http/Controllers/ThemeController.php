<?php
namespace App\Http\Controllers;

use App\Models\Theme;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function index()
    {
        $themes = Theme::all();
        return view('themes.index', compact('themes'));
    }

    public function show($id)
    {
        $theme = Theme::findOrFail($id);
        return view('themes.show', compact('theme'));
    }
}


