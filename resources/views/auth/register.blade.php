<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Pop Art Photos</title>
    <link href="{{ asset('build/assets/app-CPt2muXE.css') }}" rel="stylesheet">
</head>
<body>
    <div class="register-box" style="background: rgba(255, 255, 255, 0.8); padding: 20px; border-radius: 8px; text-align: center; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
        <h1>Register</h1>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div>
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Name" required>
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Email" required>
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="8 digits" required>
            </div>
            <div>
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" required>
            </div>
            <button type="submit">Register</button>
        </form>
    </div>
    <script src="{{ asset('build/assets/app-Xaw6OIO1.js') }}" defer></script>
</body>
</html>
