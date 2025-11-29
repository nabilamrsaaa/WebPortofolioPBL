<?php
// Jika nanti ingin backend login (cek DB), bisa ditaruh di sini
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - WorkPiece</title>

    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: #7f93b7;
            font-family: 'Poppins', sans-serif;
        }
        .login-card {
            width: 420px;
            background: #ffffff;
            padding: 35px;
            border-radius: 15px;
            margin: 90px auto;
            box-shadow: 0 0 18px rgba(0,0,0,0.2);
        }
        .btn-login {
            background-color: #1b1f54;
            border: none;
            border-radius: 10px;
            padding: 10px;
        }
        .btn-login:hover {
            background-color: #2d357a;
        }
    </style>
</head>

<body>

<!-- CONTENT -->
<div class="login-card">
    <h3 class="text-center mb-4 fw-bold">Login</h3>

    <form action="prosesLogin.php" method="POST">

        <label class="fw-semibold">NIM</label>
        <input type="text" class="form-control mb-3" name="nim" placeholder="Masukkan NIM" required>

        <label class="fw-semibold">Kata Sandi</label>
        <input type="password" class="form-control mb-3" name="password" placeholder="Masukkan kata sandi" required>

        <button type="submit" class="btn btn-login w-100 text-white">Login</button>

        <p class="text-center mt-3">
            Belum punya akun?
            <a href="RegisterPage.php" class="fw-semibold">Daftar</a>
        </p>

        <button type="button" class="btn btn-outline-secondary w-100 mt-1"
            onclick="window.location.href='HomePage.php'">Kembali
        </button>

    </form>
</div>

<!-- Bootstrap JS CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
