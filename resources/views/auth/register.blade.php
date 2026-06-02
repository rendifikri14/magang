<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background:#f4f6f9;
            min-height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            padding:20px;
        }

        .card-register{
            width:100%;
            max-width:500px;
            border:none;
            border-radius:15px;
            box-shadow:0 0 20px rgba(0,0,0,.1);
        }
    </style>
</head>
<body>

<div class="card card-register">
    <div class="card-body p-4">

        <h2 class="text-center mb-4">
            Daftar Akun
        </h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mb-3">
                <label>Username</label>
                <input type="text"
                       name="username"
                       class="form-control"
                       required>
            </div>

            <div class="mb-3">
                <label>Email</label>
                <input type="email"
                       name="email"
                       class="form-control"
                       required>
                <small class="text-muted">
                    Email digunakan untuk reset password.
                </small>
            </div>

            <div class="mb-3">
                <label>No Telepon</label>
                <input type="text"
                       name="phone"
                       class="form-control"
                       required>
            </div>

            <div class="mb-3">
                <label>Password</label>
                <input type="password"
                       name="password"
                       class="form-control"
                       required>
            </div>

            <div class="mb-3">
                <label>Konfirmasi Password</label>
                <input type="password"
                       name="password_confirmation"
                       class="form-control"
                       required>
            </div>

            <button class="btn btn-success w-100">
                Daftar
            </button>
        </form>

        <hr>

        <div class="text-center">
            Sudah punya akun?
            <a href="{{ route('login') }}">
                Login
            </a>
        </div>

    </div>
</div>

</body>
</html>