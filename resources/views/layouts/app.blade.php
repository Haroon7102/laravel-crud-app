<!DOCTYPE html>
<html>

<head>
    <title>CRUD App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4">
        <a class="navbar-brand" href="{{ route('posts.index') }}">CRUD App</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="{{ route('posts.create') }}" class="btn btn-success">+ Add Post</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container py-4">
        @yield('content')
    </div>
</body>

</html>