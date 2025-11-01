<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - WorkPiece</title>

  <!-- Link ke file CSS utama -->
  <link rel="stylesheet" href="style_login.css">

  <!-- Import font Poppins dari Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>

<body>
  <!-- Container utama halaman login -->
  <div class="login-container">
    <h2>Login</h2>

    <!-- Form login -->
    <form id="loginForm">

      <!-- Input NIM -->
      <div class="form-group">
        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim" placeholder="Masukkan NIM">
        <div class="error-message" id="nimError">NIM tidak boleh kosong</div>
      </div>

      <!-- Input Kata Sandi -->
      <div class="form-group">
        <label for="password">Kata sandi:</label>
        <input type="password" id="password" name="password" placeholder="Masukkan kata sandi">
        <div class="error-message" id="passwordError">Kata sandi harus minimal 6 karakter</div>
      </div>

      <!-- Tombol Login -->
      <button type="submit" class="submit-btn">Login</button>

      <!-- Link ke halaman registrasi -->
      <p class="register-link">Belum punya akun? <a href="register_page.php">Daftar</a></p>

      <!-- Tombol kembali ke halaman sebelumnya -->
      <div class="button-group">
        <button type="button" class="btn back" onclick="window.location.href='register_page.php'">Kembali</button>
      </div>
    </form>
  </div>

  <!-- Link tersembunyi menuju halaman utama (jika login berhasil) -->
  <a href="home_page.php"></a>

  <!-- File JavaScript untuk validasi form login -->
  <script src="script_login.js"></script>
</body>
</html>