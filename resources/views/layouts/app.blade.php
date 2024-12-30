<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Pop Art Photos')</title> <!-- Dynamic Page Title -->

    <link rel="stylesheet" href="{{ asset('css/app-CPt2muXE.css') }}"> 
    @yield('styles') <!-- Page-specific styles -->

    <style>
      body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        header {
            background-color: #660033;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
        header h1 {
            margin: 0;
            font-size: 2.5rem;
        }
        header p {
            margin: 5px 0;
            font-size: 1rem;
        }  
        nav {
            background-color: #7F1734;
            padding: 10px 0;
        }
        .navbar {
            display: flex;
            justify-content: center;
            list-style: none;
            margin: 0;
            padding: 0;
        }
        .navbar li {
            margin: 0 15px;
        }
        .navbar a {
            text-decoration: none;
            color: white;
            font-size: 1rem;
            padding: 5px 10px;
        }
        .navbar a:hover {
            background-color: #660033;
            border-radius: 4px;
        }
        .logout-button {
            background: none;
            border: none;
            color: white;
            cursor: pointer;
            font-size: 1rem;
            padding: 5px 10px;
        }
        .logout-button:hover {
            background-color: #660033;
            border-radius: 4px;
        }

        /* Main Content Section */
        main.content {
            flex: 1;
            padding: 20px;
            background-color: #f5f5f5;
        }
        /* Banner Section */
        .banner {
            position: relative;
            text-align: center;
            margin-bottom: 20px;
        }
        .banner img {
            width: 100%; /* Make the image take the full width of the container */
            height: auto; /* Maintain the aspect ratio */
            object-fit: cover; /* Ensure the image covers the container without distortion */
            border-radius: 8px; /* Optional: Add rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Optional: Add a shadow for aesthetics */
        }
        .banner-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
        }

        
        .top-photos {
            margin: 40px 0;
        }
        .photo-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }
        .photo-card {
            background: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .photo {
            width: 100%;
            height: auto;
        }
        .photo-details {
            padding: 10px;
            text-align: center;
        }
        .photo-name {
            font-weight: bold;
        }
        .photo-actions {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }
        .photo-likes {
            font-size: 0.9rem;
        }
        .like-button {
            padding: 5px 10px;
            background-color: #660033;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .like-button:hover {
            background-color: #7F1734;
        }

        footer {
            background-color: #660033;
            color: white;
            text-align: center;
            padding: 10px 0;
        }
        footer a {
            color: #ffcccb;
            text-decoration: none;
        }
        footer a:hover {
            text-decoration: underline;
        }

    </style>
</head>
<body>
    <!-- Header Section -->
    <header>
        <div class="header-container">
            <h1>Pop Art Photos</h1>
            <p>Unleash your creativity with themed photo contests!</p>
        </div>
    </header>

    <!-- Navigation Bar -->
    <nav>
        <ul class="navbar">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('themes.index') }}">Themes</a></li>
            <li><a href="{{ route('theme.show', $currentTheme->id ?? 1) }}">Photos</a></li>
            <li>
                <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit" class="logout-button">Logout</button>
                </form>
            </li>
        </ul>
    </nav>

    <!-- Main Content Section -->
    <main class="content">
        @yield('content') <!-- Dynamic Content -->
    </main>

    <!-- Footer Section -->
    <footer>
        <div class="footer-container">
            <p>&copy; {{ date('Y') }} Pop Art Photos. All rights reserved.</p>
            <p>Follow us on:
                <a href="#">Instagram</a> |
                <a href="#">Twitter</a> |
                <a href="#">Facebook</a>
            </p>
        </div>
    </footer>

    <!-- Include JS -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts') <!-- Page-specific scripts -->
</body>
</html>
