<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do_iT - To-Do List Manager</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f7f6;
            color: #333;
        }

        header {
            background-color: #4caf50;
            color: white;
            text-align: center;
            padding: 20px 0;
            position: relative;
        }

        header h1 {
            margin: 0;
            font-size: 3em;
            letter-spacing: 2px;
        }

        header p {
            font-size: 1.2em;
            margin-top: 10px;
        }

        .cta-button {
            display: inline-block;
            background-color: #ff7063;
            color: white;
            padding: 10px 20px;
            font-size: 1.2em;
            text-decoration: none;
            border-radius: 30px;
            margin-top: 20px;
            transition: background-color 0.3s;
        }

        .cta-button:hover {
            background-color: #ff5722;
        }

        .auth-buttons {
            position: absolute;
            top: 20px;
            right: 20px;
        }

        .auth-buttons a {
            margin-left: 10px;
            padding: 8px 16px;
            text-decoration: none;
            background-color: #ff7043;
            color: white;
            border-radius: 25px;
            transition: background-color 0.3s ease;
        }

        .auth-buttons a:hover {
            background-color: #ff5722;
        }

        .container {
            padding: 40px 20px;
            text-align: center;
        }

        .feature {
            display: inline-block;
            width: 250px;
            margin: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            transition: transform 0.3s ease;
        }

        .feature:hover {
            transform: scale(1.05);
        }

        .feature h3 {
            color: #4caf50;
            font-size: 1.5em;
            margin-bottom: 15px;
        }

        .feature p {
            color: #777;
            font-size: 1.1em;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 15px 0;
            position: relative;
            bottom: 0;
            width: 100%;
        }

        footer a {
            color: #ff7043;
            text-decoration: none;
            font-weight: bold;
        }

        footer a:hover {
            color: #ff5722;
        }

    </style>
</head>
<body>

<header>
    <h1>Do_iT - Your Ultimate To-Do List Manager</h1>
    <p>Get things done, one task at a time</p>

    <!-- Authentication Buttons -->
    <div class="auth-buttons">
        @if (Route::has('login'))
            @auth
                <a href="{{ url('/dashboard') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                    Dashboard
                </a>
            @else
                <a href="{{ route('login') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                    Log in
                </a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                        Register
                    </a>
                @endif
            @endauth
        @endif
    </div>
</header>

<div class="container">
    <h2>Why Choose Do_iT?</h2>
    <div class="feature">
        <h3>Organize Your Tasks</h3>
        <p>Keep your tasks organized with categories, due dates, and priority levels.</p>
    </div>
    <div class="feature">
        <h3>Stay Focused</h3>
        <p>Get notifications and reminders to help you stay on track throughout the day.</p>
    </div>
    <div class="feature">
        <h3>Easy Syncing</h3>
        <p>Sync your tasks across all your devices, so you're always in control.</p>
    </div>

    <!-- <a href="#" class="cta-button">Get Started Now</a> -->
</div>

<!-- <footer>
    <p>&copy; 2025 Do_iT. All rights reserved.</p>
    <p>Made with ❤️ for efficient task management.</p>
    <p>Visit <a href="https://www.doitapp.com">www.doitapp.com</a> for more details.</p>
</footer> -->

</body>
</html>