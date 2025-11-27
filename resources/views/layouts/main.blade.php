<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Mijn Laravel Site')</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        header {
            background: #1f2937;
            color: #fff;
            padding: 20px;
        }
        header h1 { margin: 0; }
        nav a {
            color: #e5e7eb;
            margin-right: 15px;
            text-decoration: none;
            font-size: 14px;
        }
        nav a:hover { text-decoration: underline; }
        main {
            max-width: 800px;
            margin: 40px auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        footer {
            text-align: center;
            color: #777;
            padding: 20px 0;
            font-size: 14px;
        }
    </style>
</head>
<body>
<header>
    <h1>Mijn Laravel Site</h1>
    <nav>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('layout.page') }}">Layout</a>
        <a href="{{ route('contact') }}">Contact</a>
    </nav>
</header>

<main>
    @yield('content')
</main>

<footer>
    &copy; {{ date('Y') }} Mijn Laravel Project
</footer>
</body>
</html>
