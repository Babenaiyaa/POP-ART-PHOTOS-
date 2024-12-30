@extends('layouts.app')

@section('content')
<div class="container">

    <div class="banner">
        <img src="{{ asset('images/themes/' . $currentTheme->cover_image) }}" alt="Theme Banner" class="img-fluid">
        <h3> Theme of the week</h3>
        <h1>{{ $currentTheme->name }}</h1>
        <p>{{ $currentTheme->description }}</p>

    </div>

    <div class="upload-section">
        <button onclick="document.getElementById('uploadForm').style.display='block'">Upload Your Picture</button>
        <div id="uploadForm" style="display:none;">
            <form action="{{ route('photos.upload') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="theme_id" value="{{ $currentTheme->id }}">
                <input type="text" name="name" placeholder="Photo Name" required>
                <input type="file" name="image" required>
                <button type="submit">Upload</button>
            </form>
        </div>
    </div>

    
    <div class="top-photos">
        <h2>Top 25 Photos of the week</h2>
        <div class="photo-grid">
            @foreach ($topPhotos as $photo)
                <div class="photo-card">
                    <img src="{{ asset('storage/' . $photo->image_path) }}" alt="{{ $photo->name }}" class="photo">
                    <div class="photo-details">
                        <p class="photo-name">{{ $photo->name }}</p>
                        <p class="photo-user">Uploaded by: {{ $photo->user->name }}</p>
                        <div class="photo-actions">
                            <span class="photo-likes">Likes: {{ $photo->likes_count }}</span>
                            <form action="{{ route('photos.like', ['photo' => $photo->id]) }}" method="POST">
                                @csrf
                                <button type="submit" class="like-button">Like</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
            @if (session('success'))
                        <div class="alert alert-success" id="alert-box">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger" id="alert-box">
                            {{ session('error') }}
                        </div>
                    @endif
        </div>
    </div>

</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const alertBox = document.getElementById('alert-box');
        if (alertBox) {
            setTimeout(() => {
                alertBox.style.display = 'none';
            }, 3000); // Alert disappears after 3 seconds
        }
    });
</script>

@endsection

@section('styles')
<style>
    .alert {
        padding: 15px;
        margin: 15px 0;
        border-radius: 5px;
        text-align: center;
        font-weight: bold;
    }

    .alert-success {
        background-color: #4CAF50; /* Green */
        color: white;
    }

    .alert-danger {
        background-color: #F44336; /* Red */
        color: white;
    }

    .upload-section {
        margin-top: 30px;
        text-align: center;
    }

    .upload-section button {
        background-color: #FF4081;
        color: white;
        border: none;
        padding: 15px 40px;
        font-size: 18px;
        font-weight: bold;
        border-radius: 50px;
        cursor: pointer;
        text-transform: uppercase;
        letter-spacing: 2px;
        position: relative;
        overflow: hidden;
        transition: all 0.3s ease;
    }

    .upload-section button::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 300%;
        height: 300%;
        background-color: rgba(255, 255, 255, 0.2);
        transition: all 0.3s ease;
        border-radius: 50%;
        transform: translate(-50%, -50%);
        opacity: 0;
    }

    .upload-section button:hover {
        background-color: #F50057;
        transform: scale(1.1);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    .upload-section button:hover::before {
        width: 0;
        height: 0;
        opacity: 1;
    }

    .upload-section button:active {
        transform: scale(1);
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    }

    .upload-section button:focus {
        outline: none;
    }

    #uploadForm {
        display: none;
        margin-top: 20px;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 10px;
        background-color: #f9f9f9;
    }

    #uploadForm input[type="text"], 
    #uploadForm input[type="file"] {
        margin-bottom: 10px;
        padding: 10px;
        width: 100%;
        border: 1px solid #ddd;
        border-radius: 10px;
    }

    #uploadForm button {
        background-color: #FF4081;
        color: white;
        padding: 12px 25px;
        border: none;
        border-radius: 50px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s ease, transform 0.3s ease;
    }

    #uploadForm button:hover {
        background-color: #660033;
        transform: scale(1.05);
    }

    #uploadForm button:active {
        transform: scale(1);
    }
</style>
@endsection
