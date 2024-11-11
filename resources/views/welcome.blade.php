<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
</head>
<body>
    <h1>Welcome to the Laravel App!</h1>
    <p>This is the main page.</p>

    <!-- Link to page -->
    <a href="{{ url('/hello') }}">Hello Page</a>
    <a href="{{ url('/style') }}">Style Page</a>
    <a href="{{ url('/responsive1') }}">Responsive Page</a>
    <a href="{{ url('/form') }}">Form Page</a>
    <a href="{{ url('/ourTestimoni') }}">ourTestimoni Page</a>
    <a href="{{ url('/linktree') }}">Linktree Page</a>
</body>
</html>
