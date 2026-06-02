<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

<div class="card card-login">
    <div class="card-body p-4">

        <h2 class="text-center mb-4">Login</h2>

        <form method="POST" action="/login">
        @if ($errors->any())
    <div style="color:red">
        {{ $errors->first() }}
    </div>
    @endif
            <div class="mb-3">
                <label class="form-label">
                    Username
                </label>
                <input type="text"
                       name="username"
                       class="form-control"
                       placeholder="Masukkan username atau email"
                       required>
            </div>

            <div class="mb-3">
                <label class="form-label">
                    Password
                </label>
                <input type="password"
                       name="password"
                       class="form-control"
                       placeholder="Masukkan password"
                       required>
            </div>

            <button class="btn btn-primary w-100">
                Login
            </button>
        </form>
    </div>
</div>

</body>
</html>