@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Weekly Themes</h1>
    <div class="themes">
        @foreach($themes as $theme)
            <div class="theme">
                <img src="{{ asset('images/themes/' . $theme->cover_image) }}" alt="{{ $theme->name }}">
                <h2>{{ $theme->name }}</h2>
                <p>{{ $theme->description }}</p>
                <a href="{{ route('theme.show', $theme->id) }}">View Photos</a>
            </div>
        @endforeach
    </div>
</div>
@endsection

@section('styles')
<style>
    .container { font-family: Arial, sans-serif; padding: 20px; }
    .themes { display: flex; flex-wrap: wrap; gap: 20px; }
    .theme { border: 1px solid #ddd; padding: 20px; text-align: center; width: 200px; }
    .theme img { max-width: 100%; }
    h1 { text-align: center; margin-bottom: 40px; }
</style>
@endsection
