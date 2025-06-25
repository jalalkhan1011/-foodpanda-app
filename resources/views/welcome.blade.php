<!doctype html>
<html lang="en">

<head>
    <title>Foodpanda Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5 card p-4">
                <h4 class="text-center mb-4">Foodpanda App Login</h4>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                     <div class="text-center">
                        <button class="btn btn-primary">Login</button>
                    </div> 
                </form>
            </div>
        </div>
    </div>
</body>

</html>
