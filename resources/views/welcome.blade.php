<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pop Art Photos</title>
    <link href="{{asset('build/assets/app.css') }}" rel="stylesheet">
    <style>
        body {
            background: url('/images/background.jpg') no-repeat center center fixed;
            background-size: cover;
            height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: Arial, sans-serif;
        }
        .sitename {
            flex: 2; 
            text-align: left;
            margin-right: 50px;
        }
        .login-box {
            flex: 1;
            max-width: 300px;
            background: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .bigbox {
            display: flex;
            flex-direction: row; /* Arrange items side by side */
            justify-content: space-around; /* Equal space around each item */
            align-items: center; /* Vertically align items */
            width: 100%; /* Ensure the container spans the full width of the page */
            padding: 0 10%; /* Add padding to create space on the sides of the container */
            text-align: center;
        }
        .sitename h1{ 
            font-size: 70px;
            font-weight: 400;
            font-family: 'Roboto', sans-serif;
            color:  #660033;
            text-transform: uppercase;
            text-shadow: 1px 1px 0px  #957dad,
                        2px 2px 0px #ee4b2b,
                        3px 3px 0px #7F1734,
                        4px 4px 0px #ff7f50,
                        5px 5px 0px #ffffff,
                        1px 10px 5px rgba(16, 16, 16, 0.5),
                        1px 15px 10px rgba(16, 16, 16, 0.4),
                        1px 20px 30px rgba(16, 16, 16, 0.3),
                        1px 25px 50px rgba(16, 16, 16, 0.2);
        }
        .sitename p{
            font-style: italic;
        }
        .login-box h3 {
            font-size: 30px;
            margin-bottom: 20px;
        }
        .login-box button {
            padding: 10px 20px;
            margin: 10px;
            border: none;
            border-radius: 4px;
            background: #660033 ;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        .login-box button:hover {
            background: #7F1734;
        }
    </style>
</head>
<body>
    <div class="bigbox">
    <div class="sitename">
        <h1>POP ART PHOTOS</h1>
        <p>Photography revelution</p>
    </div>
    <div class="login-box">
        <h3>WELCOME</h3>
        <a href="{{ route('register') }}"><button>Register</button></a>
        <a href="{{ route('login') }}"><button>Login</button></a>  
    </div>
    </div>
    <script src="{{ asset('build/assets/app.js') }}"></script>
</body>
</html>
