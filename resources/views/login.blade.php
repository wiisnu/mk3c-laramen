<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
    <div class="showcase">
        <div class="video-container">
            <video src="/images/Video for login.mp4" autoplay muted loop id="myVideo"></video>
        </div>
        <div class="content">
            <!-- Form as a popup in the center -->
            <div class="login-popup">
                <h2>Login</h2>
                <!-- Form for Laravel Authentication -->
                <form action="{{ route('login') }}" method="POST" id="loginForm">
                    @csrf <!-- Token Laravel untuk keamanan -->
                    <input type="text" name="username" placeholder="Username" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <button type="submit" id="loginButton">Login</button>
                </form>
                <p>Or sign in with</p>
                <div class="social-buttons">
                    <button class="google">Google</button>
                    <button class="apple">Apple</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
