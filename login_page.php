<?php
// --- LOGIKA PHP (PROSES LOGIN) ---
// Memulai sesi untuk menyimpan informasi login
session_start();

// Menyimpan pesan error
 $error_message = '';

// Cek apakah form telah disubmit dengan metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // --- KONEKSI DATABASE ---
    // Ganti dengan detail koneksi database Anda
    $db_host = 'localhost';
    $db_user = 'root'; // username MySQL Anda
    $db_pass = '';     // password MySQL Anda
    $db_name = 'nama_database_anda'; // nama database Anda

    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

    // Cek koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Ambil data dari form
    $user_type = $_POST['user_type'];
    $identifier = $_POST['identifier']; // Bisa NIM atau Username
    $password = $_POST['password'];

    // Siapkan variabel untuk hasil
    $is_valid = false;
    $user_data = null;

    if ($user_type == 'mahasiswa') {
        // Query untuk mahasiswa (gunakan NIM)
        $sql = "SELECT nim, nama_mhs, password FROM login_mhs WHERE nim = ?";
    } else {
        // Query untuk dosen (gunakan username)
        $sql = "SELECT username, nama_dsn, password FROM login_dsn WHERE username = ?";
    }

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $identifier);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user_data = $result->fetch_assoc();

        // VERIFIKASI PASSWORD
        // Untuk keamanan, gunakan password_verify() jika password di-hash
        // Contoh: if (password_verify($password, $user_data['password'])) { ... }
        if ($password === $user_data['password']) {
            $is_valid = true;
        }
    }

    $stmt->close();
    $conn->close();

    if ($is_valid) {
        // Jika login berhasil, set sesi
        $_SESSION['loggedin'] = true;
        $_SESSION['user_type'] = $user_type;
        $_SESSION['user_name'] = ($user_type == 'mahasiswa') ? $user_data['nama_mhs'] : $user_data['nama_dsn'];
        $_SESSION['user_identifier'] = $identifier; // NIM atau Username

        // Arahkan ke halaman dashboard yang sesuai
        if ($user_type == 'mahasiswa') {
            header("location: home_mahasiswa.php");
        } else {
            header("location: home_dosen.php");
        }
        exit;
    } else {
        // Jika login gagal
        $error_message = "NIM/Username atau Kata Sandi salah!";
    }
}
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
