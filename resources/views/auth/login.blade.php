<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Pop Art Photos</title>
    <link href="{{ asset('build/assets/app-CPt2muXE.css') }}" rel="stylesheet">
</head>
<body>
    <div class="login-box" style="background: rgba(255, 255, 255, 0.8); padding: 20px; border-radius: 8px; text-align: center; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
        <h1>Login</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
    <script src="{{ asset('build/assets/app-Xaw6OIO1.js') }}" defer></script>
</body>
</html>
