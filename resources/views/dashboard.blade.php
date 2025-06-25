<!doctype html>
<html lang="en">

<head>
    <title>Foodpanda Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="card p-4">
            <h3>Welcome to Food panda app, {{ auth()->user()->name }}</h3>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <div class="text-center">
                    <button class="btn btn-danger mt-3">Logout</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
