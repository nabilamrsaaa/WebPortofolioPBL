<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Akun - PoliKarya</title>
  <link rel="stylesheet" href="style_register.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>

<body>
  <div class="form-container">
    <h2>Daftar Akun</h2>
    <form id="registerForm">
      <div class="form-group">
        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim" placeholder="Masukkan NIM">
        <div class="error-message" id="nimError">NIM tidak boleh kosong</div>
      </div>
      <div class="form-group">
        <label for="password">Email:</label>
        <input type="email" id="email" name="email" placeholder="Masukkan email">
        <div class="error-message" id="emailError">Email tidak boleh kosong</div>
      </div>
      <div class="form-group">
        <label for="password">Kata Sandi:</label>
        <input type="password" id="password" name="password" placeholder="Masukkan kata sandi">
        <div class="error-message" id="passwordError">Kata sandi minimal 6 karakter</div>
      </div>

      <button type="submit" class="submit-btn">Daftar</button>
      <p class="register-link">Sudah punya akun? <a href="login_page.php">Login di sini</a></p>
    </form>
  </div>
  <script src="script_register.js"></script>
</body>
</html>